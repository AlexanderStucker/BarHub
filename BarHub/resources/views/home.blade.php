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

      <section class="section-text-picture">
        <div class="container grid">
          <div class="">
            <img
              src="{{ asset('media/stockphoto1.jpg') }}"
              class="img-box"
              alt="guys sitting at a bar"
            />
          </div>

          <div class="text-box">
            <h2 class="heading-text-box">Lorem ipusm</h2>
            <p class="small-text small-text-box">lorem ipsum</p>
          </div>
        </div>

        <div class="container grid">
          <div class="text-box">
            <h2 class="heading-text-box">lorem ipsum</h2>
            <p class="small-text small-text-box">lorem ipsum</p>
          </div>
          <div class="">
            <img
              src="{{ asset('media/stockphoto1.jpg') }}"
              class="img-box"
              alt="guys sitting at a bar"
            />
          </div>
        </div>
      </section>
    </main>
    <x-footer></x-footer>
  </body>
</html>

