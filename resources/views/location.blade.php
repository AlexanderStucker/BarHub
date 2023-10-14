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
      <h1 class="heading-primary">Öffnungszeiten und Ort</h1>
      <div class="container-map">
         <p class="">
          BarHub <br>
          Musterstrasse 123 <br>
          1234 Biel
        </p>
        <div>
          <p class="">
            Montag-Donnerstag 10:00 - 21:00 <br>
            Freitag-Samstag 13:00 - 02:00 <br>
            Sonntag Geschlossen
        </p>
        </div>
</div>
       <div>
        <iframe src="https://www.google.com/maps/d/embed?mid=1sC-Khbkin8ovlAgYqr7bnYAsHTxskIk&ehbc=2E312F&noprof=1" width="640" height="480"></iframe>
      </div>
    </section>
  </main>
    <x-footer></x-footer>
  </body>
</html>
