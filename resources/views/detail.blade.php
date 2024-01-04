<table class="table table-borderless">
  <tbody>
    @foreach($data as $data)
    <tr>
      <td width="25%">Tipe Dokumen</td>
      <td width="1%">:</td>
      <td width="74%" align="justify">{{ $data->jenis_peraturan }}</td>
    </tr>
    <tr>
      <td width="25%">Judul Peraturan</td>
      <td width="1%">:</td>
      <td width="74%" align="justify">{{ $data->judul_peraturan }}</td>
    </tr>
    <tr>
      <td width="25%">T.E.U. Badan / Pengarang</td>
      <td width="1%">:</td>
      <td width="74%" align="justify">{{ $data->teu_badan_pengarang }}</td>
    </tr>
    <tr>
      <td width="25%">Nomor Peraturan</td>
      <td width="1%">:</td>
      <td width="74%" align="justify">{{ $data->no_peraturan }}</td>
    </tr>
    <tr>
      <td width="25%">Kabupaten / Kota</td>
      <td width="1%">:</td>
      <td width="74%" align="justify">{{ $data->kab_kota }}</td>
    </tr>
    <tr>
      <td width="25%">SKPD Pemrakarsa</td>
      <td width="1%">:</td>
      <td width="74%" align="justify">{{ $data->skpd_pemrakarsa }}</td>
    </tr>
    <tr>
      <td width="25%">Status Peraturan</td>
      <td width="1%">:</td>
      <td width="74%" align="justify">{{ $data->status_peraturan }}</td>
    </tr>
    <tr>
      <td width="25%">Cetakan Edisi</td>
      <td width="1%">:</td>
      <td width="74%" align="justify">{{ $data->cetakan_edisi }}</td>
    </tr>
    <tr>
      <td width="25%">Tempat Terbit</td>
      <td width="1%">:</td>
      <td width="74%" align="justify">{{ $data->tempat_terbit }}</td>
    </tr>
    <tr>
      <td width="25%">Penerbit</td>
      <td width="1%">:</td>
      <td width="74%" align="justify">{{ $data->penerbit }}</td>
    </tr>
    <tr>
      <td width="25%">Tanggal Penetapan</td>
      <td width="1%">:</td>
      <td width="74%" align="justify">{{ $data->waktu_penetapan }}</td>
    </tr>
    <tr>
      <td width="25%">Deskripsi Fisik</td>
      <td width="1%">:</td>
      <td width="74%" align="justify">{{ $data->deskripsi_fisik }}</td>
    </tr>
    <tr>
      <td width="25%">Bahasa</td>
      <td width="1%">:</td>
      <td width="74%" align="justify">{{ $data->bahasa }}</td>
    </tr>
    <tr>
      <td width="25%">Keterangan Peraturan</td>
      <td width="1%">:</td>
      <td width="74%" align="justify">{{ $data->keterangan_peraturan }}</td>
    </tr>
    @endforeach
  </tbody>
</table>