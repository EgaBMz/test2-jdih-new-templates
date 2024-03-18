<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status_peraturan;
use App\Jenis_dokumen;
use App\Propemperda;
use App\Dokumen;
use App\Berita;
use App\surveygender;
use App\Bankumaskin;
use App\Portofolio;
use Crypt;
use Response;
use Illuminate\Support\Facades\DB;
use DateTime;
use DateInterval;


class LandingController extends Controller
{
    public function index()
    {
        $lalu = new DateTime();
        $depan = new DateTime();
        $lalu->sub(new DateInterval('PT60M'));
        $depan->add(new DateInterval('PT1M'));

        $formattedDateTime_lalu = $lalu->format('Y-m-d H:i:s');
        $formattedDateTime_depan = $depan->format('Y-m-d H:i:s');

        $jenis_dokumen = Jenis_dokumen::orderBy('id', 'ASC')->get();
        $status_peraturan = Status_peraturan::orderBy('status_peraturan', 'ASC')->get();

        $data = Dokumen::data()->get();
        $perda = Dokumen::dataAll()->where('tipe_dokumen_id', 1)->get();
        $perwal = Dokumen::dataAll()->where('tipe_dokumen_id', 2)->get();
        $kepwal = Dokumen::dataAll()->where('tipe_dokumen_id', 3)->get();
        $inwal = Dokumen::dataAll()->where('tipe_dokumen_id', 4)->get();

        $terbaru = Dokumen::dataAll()->whereNotNull('dokumens.created_at')->orderBy('created_at', 'DESC')->take(5)->get();

        $tahun_sekarang = date('Y');
        $bulan_sekarang = date('m');
        $hari_sekarang = date('d');
        $hari_ini = date('Y-m-d');
        $minggu_lalu = date('Y-m-d', strtotime('-6 days', strtotime($hari_ini)));
        $besuk = date('Y-m-d', strtotime('1 days', strtotime($hari_ini)));
        
        $hariini = surveygender::whereDate('created_at', $hari_ini)->get();
        $mingguini = surveygender::whereBetween('created_at', [$minggu_lalu, $besuk])->get();
        $bulanini = surveygender::whereYear('created_at', $tahun_sekarang)->whereMonth('created_at', $bulan_sekarang)->get();
        $total = surveygender::get();

        $hariini_laki_laki = surveygender::whereDate('created_at', $hari_ini)->where('jenis_kelamin', 'pria')->get();
        $mingguini_laki_laki = surveygender::whereBetween('created_at', [$minggu_lalu, $besuk])->where('jenis_kelamin', 'pria')->get();
        $total_laki_laki = surveygender::where('jenis_kelamin', 'pria')->get();

        $hariini_perempuan = surveygender::whereDate('created_at', $hari_ini)->where('jenis_kelamin', 'perempuan')->get();
        $mingguini_perempuan = surveygender::whereBetween('created_at', [$minggu_lalu, $besuk])->where('jenis_kelamin', 'perempuan')->get();
        $total_perempuan = surveygender::where('jenis_kelamin', 'perempuan')->get();

        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }

        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
            
        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }

        // dd($ip.' - '.$formattedDateTime_lalu.' - '.$formattedDateTime_depan);
        $isipexist = surveygender::where('ip', '=', $ip)->whereBetween('created_at', [$formattedDateTime_lalu, $formattedDateTime_depan])->get();

        $status = '';
        
        if (count($isipexist) > 0) {
            $status = 'ada';
        }else {
            $status = 'tidak ada';
        }

        return view('home', [
            'ip' => $ip,
            'data' => $data,
            'status' => $status,
            'jenis_dokumen' => $jenis_dokumen,
            'status_peraturan' => $status_peraturan,
            'perda' => $perda,
            'perwal' => $perwal,
            'kepwal' => $kepwal,
            'inwal' => $inwal,
            'terbaru' => $terbaru,
            'hariini' => $hariini,
            'mingguini' => $mingguini,
            'bulanini' => $bulanini,
            'total' => $total,

            'hariini_laki_laki' => $hariini_laki_laki,
            'mingguini_laki_laki' => $mingguini_laki_laki,
            'total_laki_laki' => $total_laki_laki,
            'hariini_perempuan' => $hariini_perempuan,
            'mingguini_perempuan' => $mingguini_perempuan,
            'total_perempuan' => $total_perempuan,
        ]);
    }

    public function kategori(Request $request)
    {
        $kategori = Jenis_dokumen::where('id', decrypt($request->kategori))->value('jenis_peraturan');
        $data = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                       ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                       ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                    //    ->where('dokumens.status_publik', '=', 't')
                    //    ->where('dokumens.verifikasi', '=', 1)
                       ->where('dokumens.tipe_dokumen_id', '=', decrypt($request->kategori))
                       ->orderBy('waktu_penetapan','DESC')
                       ->get();

        return view('kategori', [
            'data' => $data,
            'kategori' => $kategori,
        ]);
    }

    public function pencarian(Request $request)
    {
        $jenis_dokumen = Jenis_dokumen::orderBy('id', 'ASC')->get();
        $status_peraturan = Status_peraturan::orderBy('status_peraturan', 'ASC')->get();

        $cari = "";

        if($request->tipe_dokumen_id != '-' && $request->status_peraturan_id != '-'){
            $data = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                            ->join('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                            ->join('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                            ->where('status_peraturan_id', '=', $request->status_peraturan_id)
                            ->where('tipe_dokumen_id', '=', $request->tipe_dokumen_id)
                            ->where('status_publik', '=', 't')
                            ->where('dokumens.verifikasi', '=', 1)
                            ->where(function($q) use ($request) {
                                $q->orWhere('judul_peraturan', 'ilike', '%'. $request->judul_peraturan.'%' );
                                // ->orWhereYear('waktu_penetapan', '=', $request->tahun );
                            })
                            ->orderBy('waktu_penetapan','ASC')
                            ->get();
            $logic = '1';
        }else
        if($request->tipe_dokumen_id != '-' && $request->status_peraturan_id == '-'){
            $data = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                            ->join('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                            ->join('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                            ->where('tipe_dokumen_id', '=', $request->tipe_dokumen_id)
                            ->where('status_publik', '=', 't')
                            ->where('dokumens.verifikasi', '=', 1)
                            ->where(function($q) use ($request)  {
                                $q->where('judul_peraturan', 'ilike', '%'. $request->judul_peraturan.'%' );
                                // ->orWhereYear('waktu_penetapan', '=', $request->tahun );
                            })
                            ->orderBy('waktu_penetapan','ASC')
                            ->get();
            $logic = '2';
        }else
        if($request->tipe_dokumen_id == '-' && $request->status_peraturan_id != '-'){
            $data = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                            ->join('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                            ->join('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                            ->where('status_peraturan_id', '=', $request->status_peraturan_id)
                            ->where('status_publik', '=', 't')
                            ->where('dokumens.verifikasi', '=', 1)
                            ->where(function($q) use ($request)  {
                                $q->where('judul_peraturan', 'ilike', '%'. $request->judul_peraturan.'%' );
                                // ->orWhereYear('waktu_penetapan', '=', $request->tahun );
                            })
                            ->orderBy('waktu_penetapan','ASC')
                            ->get();
            $logic = '3';
        }else
        if($request->tipe_dokumen_id == '-' && $request->status_peraturan_id == '-'){
            $data = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                            ->join('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                            ->join('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                            ->where('status_publik', '=', 't')
                            ->where('dokumens.verifikasi', '=', 1)
                            ->where(function($q) use ($request)  {
                                $q->where('judul_peraturan', 'ilike', '%'. $request->judul_peraturan.'%' );
                                // ->orWhereYear('waktu_penetapan', '=', $request->tahun );
                            })
                            ->orderBy('waktu_penetapan','ASC')
                            ->get();
            $logic = '4';
        }

        return view('pencarian', [
            'data' => $data,
            'jenis_dokumen' => $jenis_dokumen,
            'status_peraturan' => $status_peraturan,
            'logic' => $logic,
        ]);
    }

    public function profil()
    {
        return view('profil');
    }

    public function statistik()
    {
        $data = DB::select("SELECT
                                d.tipe_dokumen_id AS id, 
                                j.jenis_peraturan, 
                                COUNT ( d.ID ) AS jumlah 
                            FROM
                                dokumens d 
                                INNER JOIN jenis_dokumens j ON j.id = d.tipe_dokumen_id 
                            GROUP BY
                                j.jenis_peraturan, 
                                d.tipe_dokumen_id 
                            ORDER BY
                                d.tipe_dokumen_id ASC");

        $tahuns = DB::select("SELECT EXTRACT
                                ( YEAR FROM waktu_penetapan ) AS tahun 
                            FROM
                                dokumens 
                            WHERE
                                waktu_penetapan IS NOT null 
                            GROUP BY
                                EXTRACT ( YEAR FROM waktu_penetapan ) 
                            ORDER BY
                                EXTRACT ( YEAR FROM waktu_penetapan ) ASC");

        $perda = '';
        $perwal = '';
        $kepwal = '';
        $inwal = '';

        foreach ($tahuns as $tahun) {
            $perda_tahun_ini = 0;
            $perwal_tahun_ini = 0;
            $kepwal_tahun_ini = 0;
            $inwal_tahun_ini = 0;

            $perda_count = Dokumen::whereYear('waktu_penetapan', '=', $tahun->tahun)->where('tipe_dokumen_id', '=', 1)->get();
            $perda_tahun_ini = count($perda_count);
            $perda = $perda.$perda_tahun_ini.', ';

            $perwal_count = Dokumen::whereYear('waktu_penetapan', '=', $tahun->tahun)->where('tipe_dokumen_id', '=', 2)->get();
            $perwal_tahun_ini = count($perwal_count);
            $perwal = $perwal.$perwal_tahun_ini.', ';

            $kepwal_count = Dokumen::whereYear('waktu_penetapan', '=', $tahun->tahun)->where('tipe_dokumen_id', '=', 3)->get();
            $kepwal_tahun_ini = count($kepwal_count);
            $kepwal = $kepwal.$kepwal_tahun_ini.', ';

            $inwal_count = Dokumen::whereYear('waktu_penetapan', '=', $tahun->tahun)->where('tipe_dokumen_id', '=', 4)->get();
            $inwal_tahun_ini = count($inwal_count);
            $inwal = $inwal.$inwal_tahun_ini.', ';
        }

        return view('statistik', [
            'data' => $data,
            'tahuns' => $tahuns,
            'perda' => $perda,
            'perwal' => $perwal,
            'kepwal' => $kepwal,
            'inwal' => $inwal,
        ]);
    }

    public function detail(Request $request)
    {
        $data = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan', 'kab_kotas.kab_kota', 'skpd_pemrakarsas.skpd_pemrakarsa', 'bahasas.bahasa')
                       ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                       ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                       ->leftjoin('kab_kotas','kab_kotas.id','=','dokumens.kab_kota_id')
                       ->leftjoin('skpd_pemrakarsas','skpd_pemrakarsas.id','=','dokumens.skpd_pemrakarsa_id')
                       ->leftjoin('bahasas','bahasas.id','=','dokumens.bahasa_id')
                       ->where('dokumens.status_publik', '=', 't')
                    //    ->where('dokumens.verifikasi', '=', 1)
                       ->where('dokumens.id', '=', $request->id)
                       ->orderBy('waktu_penetapan','ASC')
                       ->get();

        return view('detail', [
            'data' => $data,
        ]);
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function layanan()
    {
        return view('layanan');
    }
    
    public function berita()
    {
        $data = Berita::where('beritas.publik', '=', 1)->orderBy('created_at', 'DESC')->get();

        return view('berita', [
            'berita' => $data
        ]);
    }

    public function portofolio()
    {
        $data = Portofolio::where('portofolios.publik', '=', 1)->orderBy('created_at', 'DESC')->get();

        return view('portofolio', [
            'portofolio' => $data
        ]);
    }

    public function produk_hukum()
    {
        $data = Dokumen::produk_hukum()->get();

        return view('produk_hukum', [
            'data' => $data
        ]);
    }

    public function berita_detail(Request $request)
    {
        $data = Berita::select('beritas.*', 'users.name', 'users.email')
                        ->join('users','users.id','=','beritas.created_by')
                        ->where('beritas.id', '=', $request->berita)
                        ->orderBy('created_at','DESC')
                        ->get();

        return view('berita_detail', [
            'berita' => $data
        ]);
    }

    public function portofolio_detail(Request $request)
    {
        $data = Portofolio::select('portofolios.*', 'users.name', 'users.email')
                        ->join('users','users.id','=','portofolios.created_by')
                        ->where('portofolios.id', '=', $request->portofolio)
                        ->orderBy('created_at','DESC')
                        ->get();

        return view('portofolio_detail', [
            'portofolio' => $data
        ]);
    }

    public function dokumen(Request $request)
    {
        try {
            header("Content-type: application/pdf");

            $filename = Crypt::decrypt($request->dokumen);

            $response = Response::make(readfile($filename), 200);
            $response->header('Content-Type', 'application/pdf');
            
            return $response;
        } catch (\Exception $e) {
            echo 'File tidak ditemukan!';
        }
    }

    public function image(Request $request)
    {
        try {
            $image=file_get_contents(decrypt($request->image));
            $encrypted=base64_encode($image);
            echo '<img src="data:image/jpeg;base64,'.$encrypted.'" />';
        } catch (\Exception $e) {
            echo 'File tidak ditemukan!';
        }
    }

    public function propemperda()
    {
        $data = Propemperda::orderBy('tahun', 'DESC')->orderBy('id', 'DESC')->get();

        return view('propemperda', [
            'data' => $data,
        ]);
    }

    public function bankumaskin()
    {
        $data = Bankumaskin::orderBy('tahun_pemberian_bantuan_hukum', 'DESC')->orderBy('id', 'DESC')->get();

        return view('bankumaskin', [
            'data' => $data,
        ]);
    }

    public function simpan_surveygender(Request $request){
        surveygender::create([
            'jenis_kelamin' => $request->jenis_kelamin,
            // 'ip'=>$clientIP = $request->ip(),
            // 'ip'=> $user_ip_address=$request->ip(),  
            'ip' => $request->ip,
            // dd($clientIP),
            ]);
        // return redirect()->route('index');
        return Redirect('/')->with('message',"success");
    }
   
}
