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
          <h1 class="heading-primary">über uns</h1>

          <p class="main-text">
            Herzlich willkommen in der außergewöhnlichsten und lebendigsten Bar
            der Stadt - dem BarHub! Seit unserer Gründung haben wir es uns zur
            Aufgabe gemacht, ein einzigartiges Barerlebnis zu bieten, das all
            Ihre Sinne anspricht und Sie in eine Welt voller Genuss und Freude
            entführt.
          </p>

          <p class="small-text">
            Eckdaten: diverse Wasseranschlüsse sanitäre Anlagen
            Starkstromanschluss Laderampe / Warenlift vorinstallierter Beamer
            gratis Parkmöglichkeiten im umliegenden Quartier Halle bereits
            möbliert neue Lüftung grosse Fensterfront in den Aufenthaltsräumen
            keine Fenster in der Halle (optimal für Projektionen)
          </p>
        </div>
      </section>

    <div class="container">
      <div class="image-box">
        <img src="{{ asset('media/stockphoto1.jpg') }}" alt="Employee Image">
      </div>
      <div class="text">
        <h2 class="heading-text-box">lorem Ipsum</h2>
        <p class="small-text"> lorem ipsum <br></p>
      </div>
    </div>


    <div class="container">
      <div class="text">
        <h2 class="heading-text-box">lorem Ipsum</h2>
        <p class="small-text"> lorem ipsum <br></p>
      </div>
      <div class="image-box">
        <img src="{{ asset('media/stockphoto1.jpg') }}" alt="Employee Image">
      </div>
    </div>
    </main>
    <x-footer></x-footer>
  </body>
</html>

