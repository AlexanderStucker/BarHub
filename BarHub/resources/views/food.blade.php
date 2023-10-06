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
          <h1 class="heading-primary">Speisekarte</h1>

          <p class="main-text">
Coole essen nice
          </p>
        </div>
      </section>

      <section class="section-text-picture">
        <div class="item-container">
@foreach($food as $meal)
          <div class="item-card">
<div class="image-container">
            <img
            src="{{ $meal->imageurl }}"
              class="img-box"
              alt="guys sitting at a bar"
            />
</div>
          <div class="text-box">
            <h2 class="heading-text-box">{{ $meal->name }}</h2>
            <p class="small-text small-text-box">CHF {{ $meal->price }}</p>
          </div>
          </div>
@endforeach
        </div>
      </section>
    </main>
    <x-footer></x-footer>
  </body>
</html>

