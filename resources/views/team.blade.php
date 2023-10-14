<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

  <title>BarHub</title>
</head>

<body>
  <x-navbar></x-navbar>
  <main>
    <section class="section-main-page">
      <div class="main-page">
        <h1 class="heading-primary">Unser Team</h1>
      </div>
      <div class="container-team">
        <div class="card-team card0">
          <div class="border">
            <h5>Patricia Müller</h5>
          </div>
        </div>

        <div class="card-team card1">
          <div class="border">
            <h5>Tobias Flury</h5>
          </div>
        </div>

        <div class="card-team card2">
          <div class="border">
            <h5>Roland Schelling</h5>
          </div>
        </div>
      </div>
    </section>
  </main>
  <x-footer></x-footer>
</body>

</html>