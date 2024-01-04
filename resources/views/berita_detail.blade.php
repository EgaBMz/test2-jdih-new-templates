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
          @foreach($berita as $berita)
            <h2>{{ $berita->judul }}</h2>
            <img src="{{ route('file.berita', encrypt($berita->file)) }}" class="card-img-top" alt="...">
            </br>
            </br>
            <p>{!! $berita->deskripsi !!}</p>
            </br>
            <p>{{ $berita->name }} | {{ $berita->created_at }}</p>
          @endforeach
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  @include('admin.templates_landing.partials.footer')

  @include('admin.templates_landing.partials.script')

</body>

</html>