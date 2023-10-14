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
Eine kulinarische Reise erwartet Sie
          </p>
        </div>
      </section>

      <section class="section-text-picture">


        <div class="ag-format-container">

  <div class="ag-courses_box">
  @foreach($food as $meal)
<div class="ag-courses_item">
  <img
    src="{{ $meal->imageurl }}"
    class="img-box"
    alt="guys sitting at a bar"
  />
  <a href="#" class="ag-courses-item_link">
    <div class="ag-courses-item_bg">
    </div>
    <div class="ag-courses-item_title">
      {{ $meal->name }}
    </div>
    <p class="ag-courses-item_price">CHF {{ $meal->price }}</p>
  </a>
</div>
  @endforeach
</div>

  </div>
</div>
      </section>
    </main>
    <x-footer></x-footer>
  </body>
</html>

