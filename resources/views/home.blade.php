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
          <div class="main-container">

            <div class="wrapper">
              <div class="home-img">
                <img src="{{ asset('media/home-bar.jpg') }}" alt="Employee Image">
                <div class="content-title">
                  <h1>BarHub</h1>
                  <p>Herzlich willkommen in der außergewöhnlichsten und lebendigsten Bar der Stadt - dem BarHub!</p>
                </div>
              </div>
            </div>
        </div>

      </div>
      <h2>Was wir bieten...</h2>
      <div class="body-card">
      <div class="container">
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <h3>Räumlichkeit</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Unsere Bar hat eine einzigartige Räumlichkeit, die sich wie ein Geheimnis hinter der Tür verbirgt und deine Sinne in eine andere Welt entführt.</p>
                        
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <h3>Events</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Bei uns in der Bar finden regelmäßig aufregende Events statt, die die Nächte unvergesslich machen. Von Live-Musik und Themenpartys bis hin zu kreativen Cocktail-Wettbewerben - wir haben immer etwas Besonderes für unsere Gäste geplant. Sei Teil unserer Event-Szene und erlebe unvergessliche Abende voller Spaß und Unterhaltung!</p>
                     
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <h3>DJ</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Unser talentierter DJ ist der Herzschlag unserer Bar. Mit einem breiten Repertoire von Musikgenres und einem Gespür für die Stimmung der Menge sorgt er dafür, dass die Tanzfläche immer in Bewegung ist.</p>
                   </div>
            </div>
        </div>
        
    </div>
    </div>

    <div class="body-test">
        
</div>
      </section>
    </main>
    <x-footer></x-footer> 
  </body>
</html>

