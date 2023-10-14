<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >

    <title>BarHub</title>
  </head>
  <body>
    <x-navbar></x-navbar>
    <main>
      <section class="section-main-page">
        <div class="main-page">
          <h1 class="heading-primary">Getränke</h1>

          <p class="main-text">
            Unser Getränke sortiment ist sehr vielfältig.</p>
        </div>
      </section>
      <section class="section-text-picture">
        <div class="container-nk">
          @foreach($drinks as $drink)
  <div class="card">
    <div class="imgBx">
      <img src="{{ $drink->imageurl }}">
    </div>
    <div class="contentBx">
      
      <a href="#">CHF {{ $drink->price }}</a>
      <h2>{{ $drink->name }}</h2>
    </div>
  </div>
  @endforeach
</div>
</section>
      </section>
    </main>
    <x-footer></x-footer>
  </body>
</html>

