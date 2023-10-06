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
          <h1 class="heading-primary">Unser Team</h1>
        </div>
      </section>
    <!-- PERSON 1 -->
    <div class="container">
      <div class ="image-box">
        <img src="{{ asset('media/max.jpg') }}" alt="Employee Image" class="image">
      </div>
      <div class= "text">
        <h2 class="heading-text-box">Max Musterman</h2>
        <p class="small-text"> Geschäftsleitung <br></p>
      </div>
    </div>


        <!-- PERSON 2 -->
    <div class="container">
      <div class ="image-box">
        <img  src="{{ asset('media/alice.jpg') }}" alt="Employee Image" class="image">
      </div>
      <div class= "text">
        <h2 class="heading-text-box">Alice Müller</h2>
        <p class="small-text"> Chef de Service <br></p>
      </div>
    </div>


            <!-- PERSON 3 -->
    <div class="container">
      <div class ="image-box">
        <img src="{{ asset('media/sven.jpg') }}" alt="Employee Image" class="image">
      </div>
      <div class= "text">
        <h2 class="heading-text-box">Sven Bergson</h2>
        <p class="small-text"> Küchenchef <br></p>
      </div>
    </div>

    </main>
    <x-footer></x-footer>
  </body>
</html>

