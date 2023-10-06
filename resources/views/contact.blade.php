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
          <h1 class="heading-primary">Kontaktiere uns</h1>

          <p class="main-text">
            Herzlich willkommen in der außergewöhnlichsten und lebendigsten Bar
            der Stadt - dem BarHub! Seit unserer Gründung haben wir es uns zur
            Aufgabe gemacht, ein einzigartiges Barerlebnis zu bieten, das all
            Ihre Sinne anspricht und Sie in eine Welt voller Genuss und Freude
            entführt.
          </p>
        </div>
      </section>

<div class="contact-reservations">
<form method="POST" action="{{ route('handle-form') }}">
        @csrf

        <input class="form-input" type="text" id="name" name="name" placeholder="Name" required><br><br>

        <input class="form-input" type="email" id="email" name="email" placeholder="Email" required><br><br>

        <textarea id="message" class="form-input" name="message" placeholder="Nachricht" rows="5" required></textarea><br><br>

        <select id="type" class="form-input" name="type" required>
            <option value="request">Anfrage</option>
            <option value="reservation">Reservation</option>
        </select><br><br>

        <div id="datetime-picker" style="display: none;">
            <input type="datetime-local" class="form-input" id="reservation_datetime" name="reservation_datetime" placeholder="Datum/Zeit">
        </div><br>

        <input type="submit" value="Absenden">
    </form>
<div>
          <p class="main-text">
Reservationen
          </p>
@foreach($reservations as $reservation)
          <div class="item-card">
          <div class="text-box">
            <h2 class="heading-text-box">{{ $reservation->reservation_datetime }}</h2>
          </div>
</div>
@endforeach
</div>
</div>

    <script>
        document.getElementById('type').addEventListener('change', function () {
			if(this.value === 'reservation')
				document.getElementById('reservation_datetime').setAttribute('required', true);
			else
				document.getElementById('reservation_datetime').removeAttribute('required');

            let picker = document.getElementById('datetime-picker');
			picker.style.display = this.value === 'reservation' ? 'block' : 'none';
        });
    </script>
    </main>
    <x-footer></x-footer>
  </body>
</html>

