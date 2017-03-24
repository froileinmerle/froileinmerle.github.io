<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/favicon-128x128.png" type="image/x-icon">
  <meta name="description" content="Es ist Frühling. Zeit für saubere Fenster. Jetzt kostenlos Offerten von Firmen aus Ihrer Region erhalten.">
  <title>Professionelle Fensterreinigung</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/form-reset.css">

  <link rel="stylesheet" href="assets/theme/css/form-d.css">


  <link rel="stylesheet" href="assets/mobirise3-blocks-plugin/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <?php
  $recipient = "marie@movu.ch, captain@movu.ch";


$name = $_POST['name'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$adresse = $_POST['adresse'];
$plz = $_POST['plz'];
$stadt = $_POST['stadt'];
$datum = $_POST ['datum'];

$selected_val = $_POST['zimmer']; 

$selected_val = $_POST['1-door-window'];
$window1 = $selected_val; 

$selected_val = $_POST['2-door-window'];
$window2 = $selected_val; 

$selected_val = $_POST['3-door-window']; 
$window3 = $selected_val; 

$selected_val = $_POST['window-door'];
$windowDoor = $selected_val;

$selected_val = $_POST['window-wall'];
$windowWall = $selected_val; 

$formcontent=" Name: $name \n Telefonnr.: $telefon \n\n Strasse: $adresse \n PLZ: $plz  $stadt \n Datum: $datum \n Anzahl Zimmer: $zimmer \n 1-türiges Fenster: $window1 \n 2-türiges Fenster: $window2 \n 3-türiges Fenster: $window3 \n Fenstertür: $windowDoor \n Fensterwand: $windowWall";

$subject = "Anfrage Fensterreinigung";
$mailheader = "From: $email \r\n";
if($name == "" or $email == "" or $adresse == "" or $plz == "" or $stadt == "" or $datum == "" ) {
echo '<div id="extMenu1-z" custom-code="true"><section class="extMenu1">
        <nav class="navbar navbar-dropdown">
            <div class="container-fluid">

                <div class="mbr-table">
                    <div class="mbr-table-cell">

                        <div class="navbar-brand">
                            <a href="https://www.movu.ch" class="navbar-logo"><img src="assets/images/movu-logo-white-071f5234fbb8efb3c2c2c2af7c3622bc.svg" alt="Mobirise"></a>

                        </div>
                    </div>




                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link mbr-editable-menu-item" href="https://www.movu.ch/"></a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>
                </div>
            </div>
        </nav></section><section class="engine"><a rel="external" href="https://mobirise.com">Mobirise</a></section></div><div class="container" id="thx"><p>Ein oder mehrere Pflichtfelder (*) sind nicht ausgefüllt.<br /> Bitte versuchen Sie es erneut.</p> <p><a href="/">Zurück</a></p></div>';
}
else {
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo '<div id="extMenu1-z" custom-code="true"><section class="extMenu1">
        <nav class="navbar navbar-dropdown">
            <div class="container-fluid">

                <div class="mbr-table">
                    <div class="mbr-table-cell">

                        <div class="navbar-brand">
                            <a href="https://www.movu.ch" class="navbar-logo"><img src="assets/images/movu-logo-white-071f5234fbb8efb3c2c2c2af7c3622bc.svg" alt="Mobirise"></a>

                        </div>
                    </div>




                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link mbr-editable-menu-item" href="https://www.movu.ch/"></a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>
                </div>
            </div>
        </nav></section><section class="engine"><a rel="external" href="https://mobirise.com">Mobirise</a></section></div><div class="container" id="thx"><p>Vielen Dank für Ihre Anfrage. Wir werden uns in Kürze bei Ihnen melden.</p> <p><a href="/">Zurück</a></p></div>';
}
?>
</body>
</html>