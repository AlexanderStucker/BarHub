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
          <h1 class="heading-primary">Events</h1>
          
          <p class="main-text">
            Entdecken Sie Unsere Veranstaltungen</p>
        </div>
<div class="card-events-container">
      <article class="card_events">
        <img
          class="card__background"
          src="https://images.unsplash.com/photo-1485872299829-c673f5194813?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1720&q=80"
          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
          width="1920"
          height="2193"
        />
        <div class="card__content | flow">
          <div class="card__content--container | flow">
            <h2 class="card__title">Ladies' Night</h2>
            <p class="card__description">
      Wir führen spezielle Abende ein, die sich ganz auf Fraue konzentrieren. Genießen Sie einzigartige Getränkespecials und erstklassige Unterhaltung in gemütlicher Atmosphäre.
            </p>
          </div>
        </div>
      </article>
      <article class="card_events">
        <img
          class="card__background"
          src="https://images.unsplash.com/photo-1574879948818-1cfda7aa5b1a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1742&q=80"
          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
          width="1920"
          height="2193"
        />
        <div class="card__content | flow">
          <div class="card__content--container | flow">
            <h2 class="card__title">Cocktail-Workshops</h2>
            <p class="card__description">
      Wir bieten unterhaltsame und lehrreiche Cocktail-Workshops an, bei denen Gäste lernen, klassische und eigene Cocktails zu mixen.
            </p>
          </div>
        </div>
      </article>
      <article class="card_events">
        <img
          class="card__background"
          src="https://images.unsplash.com/photo-1575037614876-c38a4d44f5b8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80"
          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
          width="1920"
          height="2193"
        />
        <div class="card__content | flow">
          <div class="card__content--container | flow">
            <h2 class="card__title">Bierverkostungen</h2>
            <p class="card__description">
      In unserer Bar "BarHub" bieten wir Bierverkostungen an, bei denen Sie eine breite Auswahl an Craft-Bieren entdecken und genießen können.
            </p>
          </div>
        </div>
      </article>
            <article class="card_events">
        <img
          class="card__background"
          src="{{ asset('media/comedy-events.jpg') }}"
          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
          width="1920"
          height="2193"
        />
        <div class="card__content | flow">
          <div class="card__content--container | flow">
            <h2 class="card__title">Live Comedy</h2>
            <p class="card__description">
      Wir führen Comedy-Abende durch, bei denen wir lokale Stand-up-Comedians buchen, um Sie mit Lachen und Unterhaltung zu begeistern.
            </p>
          </div>
        </div>
      </article>
       <article class="card_events">
        <img
          class="card__background"
          src="{{ asset('media/gin.jpg') }}"
          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
          width="1920"
          height="2193"
        />
        <div class="card__content | flow">
          <div class="card__content--container | flow">
            <h2 class="card__title">Gin & Tonic-Abende</h2>
            <p class="card__description">
      Verwöhnen Sie Ihren Gaumen, indem Sie aus einer vielfältigen Palette an Gin-Sorten und Tonic-Wässern wählen und Ihre ganz persönlichen Gin & Tonics kreieren können.
            </p>
          </div>
        </div>
      </article>
      <article class="card_events">
        <img
          class="card__background"
          src="{{ asset('media/music.jpg') }}"
          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
          width="1920"
          height="2193"
        />
        <div class="card__content | flow">
          <div class="card__content--container | flow">
            <h2 class="card__title">Lokale Bands</h2>
            <p class="card__description">
      Ermöglichen Sie lokalen Bands, ihr musikalisches Talent in unserer Bar "BarHub" zu präsentieren und die lokale Musikszene zu unterstützen.
            </p>
          </div>
        </div>
      </article>
</div>

      </section>
    </main>
    <x-footer></x-footer>
  </body>
</html>

