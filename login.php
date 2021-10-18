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
    //  }

    function submitPassword() {
      var pwd = document.getElementById("password").value;

      $.ajax({
        url: "password.php",
        type: "POST",
        data: { pwd },
        success: function (result) {
          if (result == 'true') {
            window.location.replace("/");
          }
          else {
            document.getElementById("resultmsg").innerHTML = result;
            document.getElementById("password").value = "";

          }


        },
      });
    }
  </script>


  <link rel="icon" type="image/x-icon" href="img/heart.png" />
  <title>Szilvi&Gergő</title>

</head>


<body style="height: 100vh; overflow: hidden;">


  <!-- Landing -->

  <div class="container-fluid landing">

    <div class="container">
      <div class="landing_text">

        <h2 class="page-section-heading text-center text-white" style="font-size: 80px; z-index: 2;">
          Kérlek add meg a meghívón található jelszót:
        </h2>

        <div class="form-group" style="width: 300px; margin: 25px auto 0px auto">
          <div class="btn-group">
            <input class="form-control" id="password" type="text" placeholder="Jelszó" required="required"
              data-validation-required-message="Kélek írd be a jelszót." style="z-index: 2;" />

            <button class="btn btn-dark" onclick="submitPassword()" style="z-index: 2;">
              Küldés
            </button>

          </div>
          <p class="help-block" id="resultmsg" style="font-size:25px; margin: 20px; color:white; font-size:30px"></p>
        </div>

      </div>

    </div>

    </div>

  </div>

<script>
      document.getElementById('password').addEventListener('keypress', function (event) {
      if (event.keyCode == 13) {
        event.preventDefault();
        submitPassword()
      }
    });

  </script>

  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <!-- Contact form JS-->
  <script src="mail/jqBootstrapValidation.js"></script>
  <script src="mail/contact_me.js"></script>

</body>

</html>