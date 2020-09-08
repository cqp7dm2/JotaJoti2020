<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Jota-Joti 2020</title>

    <style>
      .accordion {
        background-color: #fed136;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
        width: 70%;
      }

      .active, .accordion:hover {
        background-color: #fa8231;
      }

      .panel {
        padding: 0 18px;
        display: none;
        background-color: white;
        overflow: hidden;
        width: 70%;
      }
    </style>

    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body>
    <div class="row justify-content-center col-12 py-5">
      <h2>Frequently Asked Questions (FAQ)</h2>
    </div>
    <div class="row justify-content-center col-12">
      <button class="accordion" style="box-shadow: 0 5px 10px 0; border-top-left-radius: 10px; border-top-right-radius: 10px;"><h5 class="mb-0">How to?</h5></button>
      <div class="panel text-lg-left" style="box-shadow: 0 5px 10px 0;">
        <h6 class="my-4">Lorem ipsum dolor sit amet,</h6>
      </div>
      <button class="accordion" style="box-shadow: 0 9px 10px;"><h5 class="mb-0">Why .....?</h5></button>
      <div class="panel text-lg-left" style="box-shadow: 0 5px 10px 0;">
        <h6 class="my-4">Lorem ipsum dolor sit amet,</h6>
      </div>
      <button class="accordion" style="box-shadow: 0 9px 10px;"><h5 class="mb-0">Why .....?</h5></button>
      <div class="panel text-lg-left" style="box-shadow: 0 5px 10px 0;">
        <h6 class="my-4">Lorem ipsum dolor sit amet,</h6>
      </div>
      <button class="accordion" style="box-shadow: 0 9px 10px;"><h5 class="mb-0">Why .....?</h5></button>
      <div class="panel text-lg-left" style="box-shadow: 0 5px 10px 0;">
        <h6 class="my-4">Lorem ipsum dolor sit amet,</h6>
      </div>
      <button class="accordion" style="box-shadow: 0 5px 10px 0; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;"><h5 class="mb-0">Can I...?</h5></button>
      <div class="panel text-lg-left" style="box-shadow: 0 5px 10px 0;">
        <h6 class="my-4">Lorem ipsum dolor sit amet,</h6>
      </div>
    </div>





<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
  </body>
</html>
