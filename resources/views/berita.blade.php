<!DOCTYPE html>
<html lang="en">

@include('admin.templates_landing.partials.head')

<body>

  @include('admin.templates_landing.partials.navbar')

  <main id="main">

    <section class="inner-page">
    </section>

    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita</h2>
        </div>

        @php 
          $height_youtube = '565'; 
          $youtube_link = \App\Pengaturan::where('id', 8)->value('value'); 
        @endphp

        <div class="row">
          <div class="col-lg-12 col-md-12 icon-box" data-aos="zoom-in" data-aos-delay="300">
                
                                
                <!-- <h3 class="h4 from-top">{{ $youtube_title ?? 'TES' }}</h3> -->
            </div>
        </div>

        <iframe class="position-relative rounded-3 zindex-5" height="{{ $height_youtube }}" width="100%" src="{{ $youtube_link }}?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></br></br>

        <div class="row">
          @foreach($berita as $berita)
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="card h-100">
              <img src="{{ route('file.berita', encrypt($berita->file)) }}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="{{ route('berita.detail', $berita->id) }}" style="color:black"><h5 class="card-title">{{ $berita->judul }}</h5></a>
                <!-- <p class="card-text">{!! Illuminate\Support\Str::limit($berita->deskripsi, 350) !!}</p> -->
                </br>
                <a href="{{ route('berita.detail', $berita->id) }}" type="submit" class="btn btn-info"><span style="color:white">Selengkapnya...<span/></a>
              </div>
              <div class="card-footer">
                <small class="text-muted">Dibuat : {{ $berita->created_at }}</small>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </section>

  </main><!-- End #main -->

  @include('admin.templates_landing.partials.footer')

  @include('admin.templates_landing.partials.script')

</body>

</html>