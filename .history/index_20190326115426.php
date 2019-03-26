<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		// Check Required Fields
		if(!empty($email) && !empty($name) && !empty($message)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			} else {
				// Passed
				$toEmail = 'support@traversymedia.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}
			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Dom w stanie Developerskim</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css" />
  <!-- <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,900&amp;subset=latin-ext"
      rel="stylesheet"
    /> -->
</head>

<body>
  <h1>Nowy Dom W Stanie Deweloperskim! 429.000 brutto !!</h1>
  <h3 class="place"><i class="fa fa-map-marker" aria-hidden="true"></i> Grzędzice, pow.Stargardzki, województwo
    zachodniopomorskie.</h3>
  <div class="container">
    <div class="grid">

      <div class="grid-item grid-img">
        <div id="arrow-left" class="arrow"></div>
        <div class="slide slider1">
          <img src="img/1-Z96.jpg" alt="" />
        </div>
        <div class="slide slider2">
          <img src="img/img1.jpg" alt="" />
        </div>
        <div class="slide slider3">
          <img src="img/img2.jpg" alt="" />

        </div>
        <div class="slide slider4">
          <img src="img/img3.jpg" alt="" />
        </div>
        <div class="slide slider5">
          <img src="img/img4.jpg" alt="" />
        </div>
        <div class="slide slider6">
          <img src="img/img5.jpg" alt="" />

        </div>
        <div id="arrow-right" class="arrow"></div>
      </div>
      <div class="grid-item grid-overview">
        <h2>Przegląd</h2>
        <ul>
          <li>Powierzchnia działki:<strong>1 039m<sup>2</sup></strong> </li>
          <li>Liczba pokoi: <strong> 4</strong></li>
          <li>Materiał budynku: <strong>parterowy</strong></li>
          <li>Dach: <strong>skośny</strong></li>
          <li>Okna: <strong>plastikowe</strong></li>
          <li>Powierzchnia: <strong>102 m²</strong></li>
          <li>Rodzaj zabudowy: <strong>wolnostojący</strong></li>
          <li>Rok budowy: <strong>2018</strong></li>
          <li>Pokrycie dachu: <strong>dachówka</strong></li>
          <li>Położenie: <strong>pod miastem</strong></li>
          <li>Rynek: <strong>pierwotny</strong></li>
          <li> Liczba pięter:
            <strong>beton komórkowy</strong></li>
          <li> Poddasze:
            <strong>nieużytkowe</strong></li>
          <li> Stan wykończenia:
            <strong>do wykończenia</strong></li>
        </ul>
      </div>
      <div class="grid-item grid-destriction">
        <h2>Opis <i class="fa fa-home" aria-hidden="true"></i></h2>
        <p>
          Dom mieści się w spokojnej części Grzędzic przy ulicy Szmaragdowej.
          <br />
          Usytuowany jest na pięknej działce o pow. 1039m2 skąd roztacza się
          widok na pola,lasy i nowo powstające domy.
          <br />
          Budowa rozpoczęta w kwietniu 2018 roku.
          <br />
          Dom budowany dla siebie więc niema tu mowy o oszczędzaniu na
          materiale czy jakości wykonanych prac.
          <br />
          <br />
          Powierzchnia domu 102m2+ok 35m2 poddasza nie użytkowego gotowego do
          zaadoptowania jako strych itp.
          <span class="dots">...</span><span class="more">
            <br />
            <br />
            Ściany Solbet 600
            <br />
            Wiązary dachowe suszone certyfikowane drewno.
            <br />
            Dachówka ceramiczna ROBEN.
            <br />
            Okna 3 szybowe OKNOPLAST.
            <br />
            Ekologiczna oczyszczalnia ścieków.
            <br />
            Instalacja elektryczna.
            <br />
            Instalacja hydrauliczna(cały dom w ogrzewaniu podłogowym).
            <br />
            Tynki gipsowe.
            <br />
            Posadzki.
            <br />
            Drewniane drzwi wejściowe Doorsy.
            <br />
            Przyłącze elektryczne i wodne.
            <br />
            <br />
            Dom w trakcie budowy sprzedajemy bo zmieniły się plany.
            <br />
            Cena podana jest ceną brutto 429 tys zł.
            <br />
            W cenie 429 tys. nabywają Państwo dom w Stanie Deweloperskim, czyli
            to co jest widoczne na zdjęciach plus w tej cenie wykonanie elewacji
            zewnętrznej, tarasów i wejścia do domu z kostki brukowej.
            <br />
            Zdjęcia z różnych etapów prac.Aktualnie trwa ocieplenie i zabudowa
            poddasza.
        </p>
        <p>
          Planowane ukończenie prac i przekazanie kluczy nowemu właścicielowi
          II kwartał 2019 roku.
          <br />
          Zachęcam do kontaktu 503 526 823 .
          <br />
          Pozdrawiam Krzysztof.
          </span>
        </p>
        <button class="myBtn">Pokaż więcej</button>
      </div>
      <div class="grid-item grid-info">

        <h2>Informacje dodatkowe</h2>

        <ul>
          <li>Dom parterowy</li>
          <li>Węglowe</li>
          <li>Gazowe</li>
          <li>Woda</li>
          <li>Utwardzony</li>
          <li>Dzrwi / okna antywłamaniowe</li>
          <li>Elektryczne</li>
          <li>pompa ciepła</li>
          <li>Oczyszczalnia</li>
          <li>Las</li>
          <li>Siatka</li>
          <li>Kominkowe</li>
          <li>Prąd</li>
          <li>Polny</li>
          <li>Strych</li>
        </ul>



      </div>
      <div class="grid-item grid-map">
        <h2>Mapa</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4945.175335422164!2d14.965275267389845!3d53.36820567248872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4700bbbc40e126e3%3A0x9ca5dc2774215981!2s73-110+Grz%C4%99dzice!5e1!3m2!1spl!2spl!4v1551357754854"
          width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="grid-item grid-footer">
        <div class="wrapper animated bounceInLeft">
          <h3 class="company-info">kontakt <span>Krzysztof</span></h3>
          <ul>
            <li><i class="fa fa-road"></i> Grzędzice ul.Szmaragdowa</li>
            <li><i class="fa fa-phone"></i> (555) 555-5555</li>
            <li><i class="fa fa-envelope"></i> test@dom.test</li>
          </ul>
        </div>

        <div class="contact">
          <h3>Napisz do nas.</h3>
          <form>
            <p>
              <label>Imię</label>
              <input type="text" placeholder="Jan" name="name">
            </p>
            <p>
              <label>Twój adres email</label>
              <input type="text" placeholder="Jan@wp.pl" name="email">
            </p>
            <p>
              <label>Twój numer telefonu</label>
              <input type="number" placeholder="000 000 000" name="phone">
            </p>
            <p class="full">
              <label>Wiadomość</label>
              <textarea placeholder="Pytanie.." name="message" row="5"></textarea>
            </p>
            <p class="full">
              <button>Wyślij</button>
            </p>
          </form>
        </div>
      </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>