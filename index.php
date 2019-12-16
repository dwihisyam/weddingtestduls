<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/fonts-googleapis.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="slick-1.8.1/slick/slick.css" rel="stylesheet">
<link href="slick-1.8.1/slick/slick-theme.css" rel="stylesheet">

<script src="js/jquery.min.js"></script>

<body>
  <audio id="music" src="musik.mp3" loop autoplay muted></audio>
  <!-- Navbar (sticky bottom) -->
  <div class="w3-hide-small" style="margin-bottom:32px">&nbsp;</div>
  <div class="w3-top w3-hide-small">
    <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
      <a href="#home" style="width:20%" class="w3-bar-item w3-button">Home</a>
      <a href="#us" style="width:20%" class="w3-bar-item w3-button">About</a>
      <a href="#party" style="width:20%" class="w3-bar-item w3-button">Ceremony</a>
      <a href="#gallery" style="width:20%" class="w3-bar-item w3-button">Gallery</a>
      <a href="#location" style="width:20%" class="w3-bar-item w3-button w3-hover-black">Location</a>
    </div>
  </div>
  <div style="bottom:20px;right:20px;z-index:2;position:fixed;">
    <button style="background:none; border-style:none;"><i id="btn-music" class="fas fa-volume-mute fa-3x"></i></button>
  </div>

  <!-- Header / Home-->
  <header class="w3-display-container w3-wide bgimg w3-grayscale-min" id="home">
    <div class="w3-display-middle w3-center">
      <h2>The Wedding Of</h2>
      <h1 class="w3-jumbo">Foger & Tyas</h1>
    </div>
  </header>

  <!-- About / Jane And John -->
  <div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min w3-center" id="us">
    <div class="w3-content">
      <h1 class="w3-text-grey mb-5"><b>About</b></h1>
      <div class="row">
        <div class="col-md-4 bgimg3 p-4" style="height:450px">
          <div>
            <div class="row">
              <div class="col-md-7">
                <img class="img-fluid" src="img/story-1.jpg" alt="">
              </div>
              <div class="col-md-5" style="text-align:left">
                <h5>Tyas</h5>
                24 years old
                Teacher
              </div>
            </div>
            <p style="text-align:justify">inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace.</p>
          </div>
        </div>
        <div class="col-md-4 my-auto">
          <div class="my-3">
            <h3>Cordially Invited</h3>
            <p>On the 13th of may, 2018 Travor james & Julia Robberts Santa Monica Rocky Beach, USA.</p>
          </div>
        </div>
        <div class="col-md-4 bgimg3 p-4" style="height:450px">
          <div>
            <div class="row">
              <div class="col-md-5" style="text-align:end">
                <h5>Foger</h5>
                24 years old
                Marketing
              </div>
              <div class="col-md-7">
                <img class="img-fluid" src="img/story-2.jpg" alt="">
              </div>
            </div>
            <p style="text-align:justify">inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Party -->
  <div class="w3-container w3-padding-64 w3-center" id="party">
    <div class="w3-content">
      <h1 class="w3-text-grey mb-5"><b>Ceremony</b></h1>
      <div class="text-center bgimg2 mb-5">
        <h5 style="font-weight:bold;font-size:36px;font-family:serif;">Until we getting married</h5>
        <div class="row">
          <div class="row mx-auto">
            <div class="mx-4">
              <h1 style="font-size:50px;font-family:serif;font-style:italic;" id="hari"></h1>
              <div style="font-weight:bold">Days</div>
            </div>
            <div class="mx-4">
              <h1 style="font-size:50px;font-family:serif;font-style:italic;" id="jam"></h1>
              <div style="font-weight:bold">Hours</div>
            </div>
            <div class="mx-4">
              <h1 style="font-size:50px;font-family:serif;font-style:italic;" id="menit"></h1>
              <div style="font-weight:bold">Minutes</div>
            </div>
            <div class="mx-4">
              <h1 style="font-size:50px;font-family:serif;font-style:italic;" id="detik"></h1>
              <div style="font-weight:bold">Seconds</div>
            </div>
          </div>
        </div>
        <p style="font-weight: bold;font-size: 36px;font-family: serif;">are remaining</p>
      </div>
      <div>
        <h2 style="font-weight:bold;font-size:36px;font-family:serif;">Arrengement in progress</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-4 card p-4" style="box-shadow: 1px 1px 5px rgba(0,0,0,0.2);">
            <div class="">
              <img class="img-fluid" src="img/progress-1.png" alt="">
              <div>
                <h4>Wedding Ceremony</h4>
                <p style="text-align:justify">&emsp;inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace.</p>
                <div>
                  Date: Friday, 20 May 2018
                  Time: 19.00
                  Address: Rocky Beach, Los angeles, USA
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-4 card p-4" style="box-shadow: 1px 1px 5px rgba(0,0,0,0.2);">
            <div>
              <h4>Lunch Preparations</h4>
              <p style="text-align:justify">&emsp;inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace.</p>
              <div>
                Date: Friday, 20 May 2018
                Time: 19.00
                Address: Rocky Beach, Los angeles, USA
              </div>
            </div>
            <img class="img-fluid" src="img/progress-2.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Gallery -->
  <div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min w3-center" id="gallery">
    <div class="w3-content">
      <h1 class="w3-text-grey mb-5"><b>Gallery</b></h1>
      <div class="multiple-items my-5" style="height:400px">
        <div>
          <img class="mx-auto" src="img/image-01.jpg" alt="">
        </div>
        <div>
          <img class="mx-auto" src="img/image-02.jpg" alt="">
        </div>
        <div>
          <img class="mx-auto" src="img/image-03.jpg" alt="">
        </div>
        <div>
          <img class="mx-auto" src="img/image-04.jpg" alt="">
        </div>
        <div>
          <img class="mx-auto" src="img/image-05.jpg" alt="">
        </div>
        <div>
          <img class="mx-auto" src="img/image-06.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- Location -->
  <div class="w3-container w3-padding-64 w3-center" id="location">
    <div class="w3-content">
      <h1 class="w3-text-grey mb-5"><b>Location</b></h1>
      <div class="map-responsive mx-auto bgimg4 p-5" style="width:80%;height:450px;vertical-align:middle">
        <div style="margin-top:100px;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6664669606857!2d106.82496411434013!3d-6.1753870622318665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonumen+Nasional!5e0!3m2!1sid!2sid!4v1565601302332!5m2!1sid!2sid" width="100%" height="200px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-16">
    <p>Powered by 2019</p>
  </footer>

  <script src="slick-1.8.1/slick/slick.min.js"></script>
  <script src="js/kit-fontawesome.js"></script>

  <script>
    (function() {
      var countDownDate = new Date("Dec 20, 2019 00:00:00").getTime();
      var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.getElementById("hari").innerHTML = days;
        document.getElementById("jam").innerHTML = hours;
        document.getElementById("menit").innerHTML = minutes;
        document.getElementById("detik").innerHTML = seconds;
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("hari").innerHTML = "00";
          document.getElementById("jam").innerHTML = "00";
          document.getElementById("menit").innerHTML = "00";
          document.getElementById("detik").innerHTML = "00";
        }
      }, 1000);

      if (window.innerWidth < 1024 && window.innerWidth >= 768) {
        $('.multiple-items').slick({
          dots: true,
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
        });
      } else if (window.innerWidth < 768) {
        $('.multiple-items').slick({
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
        });
      } else {
        $('.multiple-items').slick({
          dots: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
        });
      }

      $('#btn-music').click(function() {
        var music = document.getElementById("music");
        if (music.muted == true) {
          music.muted = false;
          $(this).removeClass('fa-volume-mute').addClass('fa-volume-up');
        } else {
          music.muted = true;
          $(this).removeClass('fa-volume-up').addClass('fa-volume-mute');
        }
      });
    }())
  </script>

</body>

</html>