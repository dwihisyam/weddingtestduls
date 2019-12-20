<!DOCTYPE html>
<html>
<title>Wedding Invitation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/logo.png">
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
  <div style="top:20px;right:20px;z-index:2;position:fixed;">
    <button style="background:none; border-style:none;"><i id="btn-music" class="fas fa-volume-mute fa-3x"></i></button>
  </div>

  <!-- Header / Home-->
  <header class="w3-display-container w3-wide bgimg" id="home">
    <div style="position:absolute;background-color: rgba(0,0,0,0.5);width: 100%;height: 100%;">
    </div>
    <div class="w3-display-middle w3-center text-white">
      <h4>The Wedding Of</h4>
      <h1>Foger & Tyas</h1>
    </div>
  </header>

  <!-- About / Jane And John -->
  <div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min w3-center page" id="us">
    <div class="w3-content">
      <h1 class="mb-5"><b>About</b></h1>
      <div class="row">
        <div class="col-md-3 p-4 male">
          <img class="mb-3" src="img/icon-male.png" alt="">
          <h5>Foger Adi Abdullah</h5>
          <p class="mb-1">17.05.1993</p>
          <p>We did meet through a mutual friend at the end of our first year in college at Georgia. We got along really well and clicked instantly.</p>
        </div>
        <div class="col-md-3">
          <img class="img-fluid mb-3" src="img/story-2.jpg" alt="">
        </div>
        <div class="love">
          <img src="img/love.png" alt="">
        </div>
        <div class="col-md-3">
          <img class="img-fluid mb-3" src="img/story-1.jpg" alt="">
        </div>
        <div class="col-md-3 p-4 female">
          <img class="mb-3" src="img/icon-female.png" alt="">
          <h5>Tyas Wijantantri</h5>
          <p class="mb-1">17.05.1993</p>
          <p>We met through a mutual friend at the end of our freshman year in college at Georgia. I noticed her eyes, and how outgoing she was.</p>
        </div>
      </div>
      <div class="mx-auto">
        <div class="my-3">
          <h3>On the 29th of December, 2019</h3>
          <p>Bukit Golf Riverside</p>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Party -->
  <div class="w3-container w3-pale-red w3-padding-64 w3-center page" id="party">
    <div class="w3-content">
      <h1 class="mb-5"><b>Ceremony</b></h1>
      <div class="text-center bgimgtime mx-auto mb-5 p-3" style="box-shadow: 0px 0px 5px rgba(0,0,0,0.2);width:90%;">
        <h3 style="font-weight:bold;">Until we getting married</h3>
        <div class="row my-4">
          <div class="row mx-auto countdown">
            <div class="mx-5">
              <h1 style="font-size:50px;font-family:serif;font-style:italic;" id="hari"></h1>
              <div style="font-weight:bold">Days</div>
            </div>
            <div class="mx-5">
              <h1 style="font-size:50px;font-family:serif;font-style:italic;" id="jam"></h1>
              <div style="font-weight:bold">Hours</div>
            </div>
            <div class="mx-5">
              <h1 style="font-size:50px;font-family:serif;font-style:italic;" id="menit"></h1>
              <div style="font-weight:bold">Minutes</div>
            </div>
            <div class="mx-5">
              <h1 style="font-size:50px;font-family:serif;font-style:italic;" id="detik"></h1>
              <div style="font-weight:bold">Seconds</div>
            </div>
          </div>
        </div>
        <h4 style="font-weight:bold;">are remaining</h4>
      </div>
      <div>
        <h3 class="mb-3" style="font-weight:bold;">Arrengement in progress</h3>
        <p>Our wedding day event order as follows with different cultures and religions will incorporate other elements or swap things around.</p>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-4 card p-4 mb-3 rundown">
            <img class="img-fluid mb-3" src="img/progress-1.png" alt="">
            <div>
              <h4>Marriage</h4>
              <p>&emsp;The processional begins with the grandparents, flows through the parents, groom, officiant, wedding party, flower girl, and ring bearer, and ends with the bride making her entrance.</p>
              <div class="mt-4">
                Sunday, 29 December 2019, 08.00<br>
                Bukit Golf Riverside
              </div>
            </div>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-4 card p-4 mb-3 rundown">
            <h4>Wedding Ceremony</h4>
            <p>&emsp;At the wedding party the officiant introduces the married couple for the first time. Then, the bride and groom lead the recessional back up the aisle as guests shower you with the rice!</p>
            <div class="mt-4">
              Sunday, 29 December 2019, 11.00<br>
              Bukit Golf Riverside
            </div>
            <img class="img-fluid mt-3" src="img/progress-2.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Quotes -->
  <header class="w3-display-container w3-wide bgimg2" id="quotes">
    <div style="position:absolute;background-color: rgba(0,0,0,0.5);width: 100%;height: 100%; top:0%;">
    </div>
    <div class="w3-center text-white w3-padding-64">
      <div class="w3-content">
        <div class="multiple-items2 mx-auto" style="width:80%">
          <div>
            <h1 class="mb-5"><b>Doa</b></h1>
            <h2 class="mb-3" style="text-align:end">وَمِنْ آيَاتِهِ أَنْ خَلَقَ لَكُم مِّنْ أَنفُسِكُمْ أَزْوَاجاً لِّتَسْكُنُوا إِلَيْهَا وَجَعَلَ بَيْنَكُم مَّوَدَّةً وَرَحْمَةً إِنَّ فِي ذَلِكَ لَآيَاتٍ لِّقَوْمٍ يَتَفَكَّرُونَ</b></h2>
            <p>“Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir”</p>
            (QS. Ar-Ruum 30 : 21)
          </div>
          <div>
            <h1 class="mb-5"><b>Quotes</b></h1>
            <h1 style="font-family:tes,sans-serif">Happy is the man who finds a true friend, and far happpier is he who finds that true friend in his wife</h1>
            -Franz Schubert-
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Gallery -->
  <div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min w3-center page" id="gallery">
    <div class="w3-content">
      <h1 class="mb-5"><b>Gallery</b></h1>
      <div class="multiple-items my-5" style="height:400px">
        <div>
          <img class="mx-auto" src="img/Image-01.jpg" alt="">
        </div>
        <div>
          <img class="mx-auto" src="img/Image-02.jpg" alt="">
        </div>
        <div>
          <img class="mx-auto" src="img/Image-03.jpg" alt="">
        </div>
        <div>
          <img class="mx-auto" src="img/Image-04.jpg" alt="">
        </div>
        <div>
          <img class="mx-auto" src="img/Image-05.jpg" alt="">
        </div>
        <div>
          <img class="mx-auto" src="img/Image-06.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- Location -->
  <div class="w3-container w3-pale-red w3-padding-64 w3-center page" id="location">
    <div class="w3-content">
      <h1 class="mb-5"><b>Location</b></h1>
      <div class="map-responsive mx-auto mt-5" style="width:100%;height:100%;box-shadow: 0px 0px 5px rgba(0,0,0,0.3);">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7862268316658!2d106.90303191662264!3d-6.421507312277507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb2fc8c6d171%3A0x47a39e54424d6eda!2sBukit%20Golf%20Riverside!5e0!3m2!1sid!2sid!4v1576813034180!5m2!1sid!2sid" width="100%" height="400px" frameborder="0" style="border:0;box-shadow: 0px 0px 5px rgba(0,0,0,0.5);" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-padding-16 text-white" style="background-color:rgba(0,0,0,0.8)">
    <p>2019 &copy; Dwi Ahmad Hisyam</p>
  </footer>

  <div class="w3-hide-small" style="margin-top:32px">&nbsp;</div>
  <div class="w3-bottom w3-hide-small">
    <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
      <a href="#home" style="width:16.6%" class="w3-bar-item w3-button">Home</a>
      <a href="#us" style="width:16.6%" class="w3-bar-item w3-button">About</a>
      <a href="#party" style="width:16.6%" class="w3-bar-item w3-button">Ceremony</a>
      <a href="#quotes" style="width:16.6%" class="w3-bar-item w3-button">Quotes</a>
      <a href="#gallery" style="width:16.6%" class="w3-bar-item w3-button">Gallery</a>
      <a href="#location" style="width:16.6%" class="w3-bar-item w3-button">Location</a>
    </div>
  </div>

  <script src="slick-1.8.1/slick/slick.min.js"></script>
  <script src="js/kit-fontawesome.js"></script>

  <script>
    (function() {
      var countDownDate = new Date("Dec 30, 2019 00:00:00").getTime();
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

      $('.multiple-items2').slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
      });

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