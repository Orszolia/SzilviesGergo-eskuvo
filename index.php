<?php
      session_start();
?>
<!doctype html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="styles/master.css" />

  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

  <!-- Custom Fonts -->


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:wght@300&display=swap"
    rel="stylesheet">

  <script>

 //   if (location.protocol !== 'https:') {
  //      location.replace(`https:${location.href.substring(location.protocol.length)}`);
 //   }

    $(document).ready(function () {
      var LoggedIn = false;

      $.ajax({
        url: "password.php",
        type: "GET",

        success: function (result) {
          if (result == "true") {
            LoggedIn = true;
            console.log(LoggedIn);

          }
        },
      });

      // Set the date we're counting down to
      var countDownDate = new Date("Sep 10, 2021 16:00:00").getTime();

      // Update the count down every 1 second
      var x = setInterval(function () {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("countdown").innerHTML = days + " nap " + hours + " ??ra "
          + minutes + " perc";

        // If the count down is finished, write some text
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("countdown").innerHTML = "EXPIRED";
        }
      }, 1000);
    });
  </script>

  <link rel="icon" type="image/x-icon" href="img/heart.png" />
  <title>Szilvi&Gerg??</title>

</head>


<?php
    if(isset($_SESSION["pwd"])) {

?>

<body style="width: 100%;">

  <!-- Navbar -->

  <header>

    <nav class="navbar index fixed-top navbar-expand-lg navbar-dark" style="background-color: #3B3D7E; max-width: 100%;">

      <div class="container-fluid ">


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

          <div class="navbar justify-content-center">
            <ul class="navbar-nav">
              <li class="nav-item">

                <a class="nav-link js-scroll-trigger" href="#helysz??n">Helysz??n ??s d??tum</a>
              </li>

              <li class="nav-item">

                <a class="nav-link js-scroll-trigger" href="#inform??ci??k">Inform??ci??k</a>
              </li>
              <li class="nav-item">

                <a class="nav-link js-scroll-trigger" href="#program">Program</a>
              </li>
              <li class="nav-item">

                <a class="nav-link js-scroll-trigger" href="#visszajelz??s">Visszajelz??s</a>
              </li>

            </ul>

          </div>

        </div>
      </div>
    </nav>
  </header>

  <!-- Navbar end-->

  <!-- Landing -->

  <div class="container-fluid landing">

    <div class="container">
      <div class="landing_text">

        <h4 class="display-1 text-white" style="z-index: 0;">Egyszer volt, hol
          nem volt...</h4>

      </div>
      <img src="img/castlebig.png" class="landing_img big" style="z-index: 1;" >

      <img src="img/castle_mobil.png" class="landing_img mobil" style="z-index: 1">


    </div>


  </div>

  <!-- Helysz??n oldal-->

  <section id="helysz??n" style=" overflow: hidden; position: relative;" class="tanacsadas">

    <img src="img/genie.png" class="genie" style="margin-top: -10px;">


    <div class="container">
      <div class="tanacsadas_content" style="padding-top: 20vh;">

        <div class="row">

          <div class="col-lg-8" style="z-index: 4;">

            <img src="img/jonaregen.png" class="jonaregen big" style="width: 750px; z-index: 1;">
            <img src="img/jonaregen_mobil.png" class="jonaregen mobil" style="z-index: 1;">


            <div class="container" style="margin-top: 70px;">

              <ul class="list-unstyled">
                <li>Sok szeretettel megh??vunk Titeket,</li>
                <li>szeptember 10.-??n tartand?? esk??v??nkre!</li>
              </ul>

              <ul class="list-unstyled">
                <li>2174 Verseg-Feny??haraszt</li>
                <li>Feny??haraszt Kast??lysz??ll??</li>
              </ul>

            </div>

          </div>
        </div>

        <div class="row">
          <div class="col ">

            <ul class="list-unstyled clock" style=" margin-top: 30px;">
              <li>M??r csak:</li>
              <li><span id="countdown"></span></li>
            </ul>
          </div>

        </div>



      </div>

    </div>


  </section>

  <!-- Inform??ci??k oldal-->

  <section id="inform??ci??k" style=" width: 100%; position: relative; padding-top: 120px; overflow: hidden;"
    class="portfolio informaciok">

    <div class="container blog_content">

      <div class="blog">

        <h2 class="display-2" style="text-align: center;">Inform??ci??k</h2>


      </div>

      <!-- Portfolio Grid Items-->
      <div class="row">
        <!-- Portfolio Item 1-->
        <div class="col-md-6 col-lg-4 mb-5">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center">
              <div class="portfolio-item-caption-content text-center">
                <h2 class=" display-4">
                  Aj??nd??k
                </h2>
              </div>
            </div>
            <img class="img-fluid" src="img/ajandek.png" alt="" />
          </div>
        </div>
        <!-- Portfolio Item 2-->
        <div class="col-md-6 col-lg-4 mb-5">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center">
              <div class="portfolio-item-caption-content text-center">
                <h2 class=" display-4">
                  Sz??ll??s
                </h2>
              </div>
            </div>
            <img class="img-fluid" src="img/szallas.png" alt="" />
          </div>
        </div>
        <!-- Portfolio Item 3-->
        <div class="col-md-6 col-lg-4 mb-5">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center">
              <div class="portfolio-item-caption-content text-center">
                <h2 class=" display-4">
                  Gal??ria
                </h2>
              </div>
            </div>
            <img class="img-fluid" src="img/galeria.png" alt="" />
          </div>
        </div>

      </div>

      <img src=" img/idezet.png" class="idezet" style="margin-bottom: 0px; float:right;">

    </div>

    </div>
  </section>


  <section id="program" style="width:100%; padding-top: 120px; overflow: hidden;" class="program">

    <img src="img/program.png" class="program big" style="width: 100%; padding: 0px 50px; z-index: 1;">
    <img src="img/proram_mobil.png" class="program mobil" style="z-index: 1;">

  </section>


  <section id="visszajelz??s" class="visszajelzes page-section bg-primary text-white" style="padding-top: 100px; overflow:hidden">

    <div class="container" style="position: relative;">
      <!-- Contact Section Heading-->
      <h2 class="page-section-heading text-center font-weight-light text-white" style="font-size: 100px;">
        Visszajelz??s
      </h2>

      <img src="img/stars.png" class="stars" style="width: 100%; position: absolute;">


      <!-- Contact Section Form-->
      <div class="row" style="padding-bottom: 100px;">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group">
                <label>Neved:</label>
                <input class="form-control" id="name" type="text" placeholder="Neved" required="required"
                  data-validation-required-message="Please enter your name." />
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group">
                <label>Veled egy??tt visszajelez:</label><br>
                <button type="button" class="btn btn-light rounded-circle" onclick="addField()"><i
                    class="fas fa-plus"></i></button>
                <button type="button" class="btn btn-light rounded-circle" onclick="deleteField()"><i
                    class="fas fa-minus"></i></button>

                <div id="newElementId" style="margin-top:15px;"></div>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group">
                <label>Email c??med:</label>
                <input class="form-control" id="email" type="email" placeholder="Email c??med" required="required"
                  data-validation-required-message="Please enter your email address." />
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group">
                <label>Telefonsz??mod:</label>
                <input class="form-control" id="phone" type="tel" placeholder="Telefonsz??mod" required="required"
                  data-validation-required-message="Please enter your phone number." />
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group ">
                <div class="form-check" style="margin-bottom:10px;">
                  <input name="coming" class="form-check-input" id="ott_leszek" type="radio"
                    style="transform: scale(1.2);" value="Ott leszek!" checked />
                  <label for="ott_leszek" class="form-check-label" style="font-size:18px;">Ott leszek!</label>
                </div>
                <div class="form-check">
                  <input name="coming" class="form-check-input" id="nem_leszek" type="radio"
                    style="transform: scale(1.2);" value="Sajnos nem tudok menni." />
                  <label for="nem_leszek" class="form-check-label" style="font-size:18px;">Sajnos nem tudok
                    menni.</label>
                </div>
              </div>
            </div>

            <button type="button" class="btn btn-light mb-2" id="room_button">Szoba foglal??s</button>

            <div id="szallas_foglalas" style="display:none;">

              <div class="control-group">

                <div class="form-group">
                  <label for="people_in_room">H??ny f??re?</label>
                  <select class="form-control" id="people_in_room">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>

                  </select>
                </div>

              </div>

              <div class="control-group">
                <div class="form-group ">

                  <div class="form-check" style="margin-bottom:10px;">
                    <input name="room" class="form-check-input" id="nem_kerek" type="radio"
                      style="transform: scale(1.2);" value="Nem k??rek sz??ll??st" checked />
                    <label for="nem_kerek" class="form-check-label" style="font-size:18px;">Nem k??rek sz??ll??st</label>
                  </div>

                  <div class="form-check" style="margin-bottom:10px;">
                    <input name="room" class="form-check-input" id="rozsa" type="radio" style="transform: scale(1.2);"
                      value="Feny??haraszt Kast??lysz??ll??" />
                    <label for="rozsa" class="form-check-label" style="font-size:18px;">Feny??haraszt Kast??lysz??ll?? - 12
                      000
                      Ft/f??</label>
                  </div>

                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group">
                <label>Egy??b k??r??sek:</label>
                <textarea class="form-control" id="message" rows="5" placeholder="??zenet"></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br />
            <div id="success"></div>
            <div class="form-group">
              <button class="btn btn-outline-light btn-xl" id="sendMessageButton" type="submit">
                K??ld??s
              </button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>

  <script>
    $('.js-scroll-trigger').click(function() {
      $('.navbar-collapse').collapse('hide');
    });
    var counter = 0;
    function addField() {
      if (counter < 6) {
        counter++;
        var input = document.createElement("input");
        input.id = 'plus_name_' + counter;
        input.type = 'text';
        input.class = 'form-control';
        input.style = 'width:100%; margin-top: 5px; padding: 8px; border-radius: 8px;'
        input.placeholder = 'K??s??r?? ' + counter;
        document.getElementById("newElementId").appendChild(input);
      }

    }
    function deleteField() {
      if (counter > 0) {
        id = 'plus_name_' + counter;
        var last_input = document.getElementById(id);
        document.getElementById("newElementId").removeChild(last_input);
        counter--;
      }
    }

    $("#room_button").click(function () {

      $("#szallas_foglalas").slideToggle();
    });

  </script>



  <!-- Blog Modals-->

  <!-- Blog Modal 1-->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog"
    aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">

        <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color: #141a1467">
          <span><i class="fa fa-times" aria-hidden="true" style="width: 20px;"></i></span>
        </button>

        <div class="modal-body">
          <div class="container" style="position: relative;">

            <div class="row justify-content-center">

              <img src="img/frame.png" class="frame big">


              <div class="col-lg-8 modal-padding">

                <!-- Blog Modal - Title-->
                <h2 class="portfolio-modal-title text-secondary mb-5 mt-0  text-center" id="portfolioModal1Label">
                  Aj??nd??k
                </h2>

                <!-- Blog Modal - Text-->
                <div class="row ">
                <p>
                  Minden kedves Bar??t ??s Rokon!
                  K??r??nk T??ged, ne vedd zokon!
                  Aj??nd??kon ne gondolkozz,
                  Magaddal csak j??kedvet hozz!
                  Amit kis csal??dunknak sz??nt??l,
                  Ink??bb add oda a menyasszonyt??ncn??l.
                </p>
                </div>
                <div class="row">

                  <div class="col justify-content-center">

                    <img src="img/abu.png" class="abu">

                  </div>

                  <div class="col">

                    <img src="img/jazminestigris.png" class="jazminestigris">

                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>
  <!-- Blog Modal 2-->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog"
    aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content" style="min-height: 650px">

        <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color: #141a1467">
          <span><i class="fa fa-times" aria-hidden="true" style="width: 20px;"></i></span>
        </button>

        <div class="modal-body">
          <div class="container">

            <div class="row justify-content-center">

              <img src="img/frame.png" class="frame big">

              <div class="col-lg-8 modal-padding">

                <!-- Blog Modal - Title-->
                <h2 class="portfolio-modal-title text-secondary mb-5 mt-0  text-center" id="portfolioModal1Label">
                  Sz??ll??s
                </h2>

                <!-- Blog Modal - Text-->

                <p>
                  - Sz??ll??s helyben a Kast??lysz??ll??ban, az ??ra 12 000 Ft/ f?? (reggeli az ??rban)
                </p>

                <p>
                  A sz??ll??st SZ??P k??rty??val is tudj??tok fizetni.
                  A sz??ll??st 15:00-t??l tudj??tok elfoglalni.
                </p>

                <p>
                  - Hely megk??zel??t??se az M3 aut??p??ly??r??l,
                  Kerekharaszti pihen??n??l kell lehajtani az aut??p??ly??r??l
                </p>

                <p>
                  A Pest megyei matric??t ne felejts??tek el!
                  (Kartal fel??l az ??t j??rhatatlan.)
                </p>

                <p>
                  - Parkol??s a helysz??nen biztos??tott.
                </p>

                <!-- Blog Modal - Button-->
                <!--
                       <div class="text-center">
                         <button class="btn btn-light btn-lg" data-dismiss="modal" style="background-color: #ffdb96;">
                         
                         Bez??r??s
                         </button>
                       </div>
                       -->

              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>

  <!-- Blog Modal 3-->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog"
    aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content" style="min-height: 650px">

        <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color: #141a1467">
          <span><i class="fa fa-times" aria-hidden="true" style="width: 20px;"></i></span>
        </button>

        <div class="modal-body">
          <div class="container">

            <div class="row justify-content-center">

              <img src="img/frame.png" class="frame big">


              <div class="col-lg-8 modal-padding">

                <!-- Blog Modal - Title-->
                <h2 class="portfolio-modal-title text-secondary mb-5 mt-0  text-center" id="portfolioModal1Label">
                  Gal??ria
                </h2>

                <!-- Blog Modal - Text-->

                <div class="row">


                  <div class="col" style="min-width: 200px">

                    <p>
                      Ide ker??lnek majd fel
                      az eljegyz??si k??pek,
                      k??s??bb pedig itt tal??lj??tok
                      majd az esk??v??r??l
                      k??sz??lt fot??kat is.
                    </p>

                  </div>


                  <div class="col">

                    <img src="img/jazminesaladdin.png" class="jazminesaladdin">

                  </div>

                </div>

                <!-- Blog Modal - Button-->
                <!--
                        <div class="text-center">
                          <button class="btn btn-light btn-lg" data-dismiss="modal" style="background-color: #ffdb96;">
                          
                          Bez??r??s
                          </button>
                        </div>
                        -->

              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>

  <?php
  }
  else {
  header("Location: login");
  }
  ?>
  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <!-- Contact form JS-->
  <script src="mail/jqBootstrapValidation.js"></script>
  <script src="mail/contact_me.js"></script>

</body>

</html>