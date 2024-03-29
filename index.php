<?php

    session_start();

// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: index.php");
//     exit;
// }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      type="image/x-icon"
      href="resource/logo.png"
    />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
    <title>SAT21NGER</title>
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <section class="hero__section">
      <header>
        <nav class="navbar">
          <img src="resource/logo.png" alt="Logo" width="50" height="50">
          <div class="navbar__menu_container">
            <a href="#" class="link">Home</a>
            <a href="#about" class="link">About</a>
            <a href="#collection" class="link">Collection</a>
            <a href="#footer" class="link">Contact</a>
            <a href="read.php" class="link">Data</a>
            <a href="team/team.html" class="link" target="_blank">Teams</a>
            <a href="login.php" class="link" target="_blank">Login</a>
            <a href="register.php" class="link" target="_blank">Sign Up</a>
            <a href="#" class="user__icon">
              <i class="fa-solid fa-user"></i>
            </a>
          </div>
        </nav>
      </header>
      <div class="hero__section_container">
        <img
          class="hero__section_logo"
          src="resource/sat2.png"
          alt="Sat21nger Logo"
        />
        <h1 class="hero__section_title">
          Sturdy Aware of The 2estful and 1Ncredible GEneRation
        </h1>
      </div>
    </section>

    <section class="container we__offer">
      <div class="card">
        <img src="resource/kamsis.jpg" alt="" />
        <h2>Kampoeng Sisfo</h2>
        <p>Where we are forged and formed</p>
      </div>
      <div class="card">
        <img src="resource/launching.jpg" alt="" />
        <h2>Launching</h2>
        <p>The beginning of a journey</p>
      </div>
      <div class="card">
        <img src="resource/milad1.jpeg" alt="" />
        <h2>1st Anniversary</h2>
        <p>A journey that is not easy to pass</p>
      </div>
    </section>

    <section id="about">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>SAT21NGER</h3>
          <p>
            Sturdy Aware of The 2estful and 1Ncredible GEneRation 
          </p>
        </header>

        <div class="row about-container">
          <div class="paragraf">
            <p>
              SAT21NGER is one of the classes in the information systems department, Faculty of Science & Technology, 
              Alauddin State Islamic University, Makassar, which was officially Launching on September 29 2022 
              in Koba (Kopi Batas Gowa). Many valuable experiences and journeys in the process of our journey. 
              Continue to be together in any situation and condition. continue to process SAT21NGER.
            </p>
          </div>

          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <div>
              <h3 style="text-align: center;">3 pillars guarded by SAT21NGER</h3>
              
                <h3 style="display: flex; gap: 10px;"><i data-feather="target"></i>Solidarity</h3>
                <p style="margin-bottom: 15px;">a sense of togetherness, a sense of important unity and also a sense of sympathy.</p>
                <h3 style="display: flex; gap: 10px;"><i data-feather="target"></i>Loyalty</h3>
                <p style="margin-bottom: 15px;">the level of loyalty and obedience of members, whether to the force or their leaders.</p>
                <h3 style="display: flex; gap: 10px;"><i data-feather="target"></i>Seniority</h3>
                <p>juniors are helped by the presence of seniors, juniors are helped in the process.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About -->

    <section style="padding: 65px 0 0 0;" class="container collections" id="collection">
      <h1>Collections</h1>
      <div class="sub__heading_container">
        <span>
          a series of photos that have meaning in the story of our journey
        </span>
        <span>All collections on instagram @sat21nger</span>
      </div>
      <div class="collections_card_container">
        <div class="card card1">
          <div class="overlay"></div>
        </div>

        <div class="card card2">
          <div class="overlay"></div>
        </div>

        <div class="card card3">
          <div class="overlay"></div>
        </div>

        <div class="card card4">
          <div class="overlay"></div>
        </div>
      </div>
    </section>

    <section class="container kreasi">
      <div class="semiContainer">
        <div class="left">
          <img src="resource/kreasi.png" alt="banner" />
        </div>
        <div class="right">
          <img src="resource/2021(1).png" alt="">
        </div>
      </div>
    </section>

    <div class="dok">
      <section class="container we__offer">
        <div class="card">
          <img src="resource/1.jpg" alt="" />
          <p>launching kreasi logo</p>
        </div>
        <div class="card">
          <img src="resource/2.JPG" alt="" />
          <p>justin statue</p>
        </div>
        <div class="card">
          <img src="resource/3.jpg" alt="" />
          <p>kampoenk sisfo 2022</p>
        </div>
        <div class="card">
          <img src="resource/4.jpg" alt="" />
          <p>dissolution of the kreasi</p>
        </div>
        <div class="card">
          <img src="resource/5.jpg" alt="" />
          <p>general meeting 2021</p>
        </div>
        <div class="card">
          <img src="resource/6.jpg" alt="" />
          <p>playing futsal</p>
        </div>
        <div class="card">
          <img src="resource/7.jpeg" alt="" />
          <p>boysss</p>
        </div>
        <div class="card">
          <img src="resource/8.jpeg" alt="" />
          <p>girlsss</p>
        </div>
        <div class="card">
          <img src="resource/9.jpeg" alt="" />
          <p>freshman</p>
        </div>
        <div class="card">
          <img src="resource/10.jpeg" alt="" />
          <p>breaking the fast</p>
        </div>
        <div class="card">
          <img src="resource/11.jpeg" alt="" />
          <p>add strength</p>
        </div>
        <div class="card">
          <img src="resource/12.jpeg" alt="" />
          <p>eating together</p>
        </div>
      </section>
    </div>


    <footer class="footer" id="footer">
      <div class="footer_section1">
        <img src="resource/sat3.png" alt="sat21nger logo" />
      </div>
      
      <div class="navigation_container">
        <div class="content">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.3649082093016!2d119.49637757430192!3d-5.205211952465967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee3af7c88b9df%3A0xfb25811c623366e5!2skampus%202%20UIN%20SAMATA!5e0!3m2!1sid!2sid!4v1689754695830!5m2!1sid!2sid" 
          width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

        <div class="link__container">
          <h5>ABOUT SAT21NGER</h5>
          <a class="footer__link" href="https://www.instagram.com/mursalft/" target="blank">Leader</a>
          <a class="footer__link" href="https://www.instagram.com/vey.azr/" target="blank">Chieftain</a>
          <a class="footer__link" href="https://www.instagram.com/yaya.t19/" target="blank">Head of Kreasi</a>
          <br />
          <h5>KREASI</h5>
          <a class="footer__link" href="https://www.youtube.com/watch?v=fwiCSi1J5bE&t=69s&ab_channel=HMJSistemInformasiUINAM" target="blank">Kreasi appearance</a>
          <a class="footer__link" href="https://youtu.be/gEEonuuK9qE?si=-uqtbafTz8_kwNd0" target="blank">Creator</a>
        </div>

        <div class="link__container">
          <h5>LINK</h5>
          <a href="https://www.instagram.com/sat21nger/" target="_blank" class="footer__link"> <i data-feather="instagram"></i> Instagram</a>
          <a href="https://www.youtube.com/watch?v=fwiCSi1J5bE&t=71s&ab_channel=HMJSistemInformasiUINAM" target="_blank" class="footer__link"> <i data-feather="youtube"></i> YouTube</a>
        </div>

      <div class="contact_me">
        <h3 style="font-size: 15px; font-weight: 400;">Contact Me</h3>
        <p style="font-size: 15px; font-weight: 400;"> We value every input from our members. Feel free to share suggestions or criticism about SAT21NGER.</p>
      </div>

      <form>
        <label for="nama">Name</label>
        <input type="text" id="nama" name="nama">
        <br>
    
        <label for="email">Suggestions</label>
        <input type="text" id="text" name="text">
        <br>
    
        <input type="submit" value="Kirim">
      </form>

      </div>
      <p class="disclamer">
        Firman Reski Ramadhan - Dikcy Sukkrysno - Yusril Mahendra
      </p>
    </footer>

    <script>
      feather.replace();
    </script>
    
  </body>
</html>
