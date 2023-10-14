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
        <h1 class="heading-primary">Impressum</h1>

        <h6 class="main-text">
          Betreiber:
          </h2>
          <p class="small-text">
            BarHub GmbH <br>
            Musterastrasse 123 <br>
            1234 Biel
          </p>

          <h6 class="main-text">
            Kontakt:
          </h6>
          <p class="small-text">
            E-mail: <a href="mailto:info@barhub.com"> info@barhub.com</a> <br>
            Telefon: <a href="tel:+4911234567"> +49 123 45 67</a> <br>
          </p>

          <h6 class="main-text">
            Geschäftsführer:
          </h6>
          <p class="small-text">
            May Mustermann
          </p>

          <h6 class="main-text">
            Handelsregisternummer:
          </h6>
          <p class="small-text">
            Registernummer: HRB 12345
          </p>


          <h6 class="main-text">
            Verantwortlich für den Inhalt:
          </h6>
          <p class="small-text">
            Max Mustermann <br>
            Musterstraße 123 <br>
            12345 Musterstadt
          </p>

          <h6 class="main-text">
            Haftungsausschluss:
          </h6>
          <p class="small-text">
            Die BarHub GmbH übernimmt keine Haftung für die Inhalte externer Links. Für den Inhalt verlinkter Seiten sind ausschließlich deren Betreiber verantwortlich.
          </p>
      </div>
    </section>
  </main>
  <x-footer></x-footer>
</body>

</html>