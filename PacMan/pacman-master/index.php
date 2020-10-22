<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Challenge 6 | Pac-Man</title>
    <link rel="icon" href="../../assets/img/2020.png">

    <style type="text/css">
      @font-face {
	    font-family: 'BDCartoonShoutRegular';
        src: url('BD_Cartoon_Shout-webfont.ttf') format('truetype');
	    font-weight: normal;
	    font-style: normal;
      }
      #pacman {
        height:450px;
        width:342px;
        margin:20px auto;
      }
      #shim {
        font-family: BDCartoonShoutRegular;
        position:absolute;
        visibility:hidden
      }
      h1 { font-family: BDCartoonShoutRegular; text-align:center; }
      body { width:342px; margin:0px auto; font-family:sans-serif; }
      a { text-decoration:none; }
    </style>

</head>

<body>

  <div id="shim">shim for font face</div>

  <h1>Challenge 6 | Pac-Man</h1>


  <div id="pacman"></div>
  <script src="pacman.js"></script>
  <script src="modernizr-1.5.min.js"></script>

  <script>

    var el = document.getElementById("pacman");

    if (Modernizr.canvas && Modernizr.localstorage &&
        Modernizr.audio && (Modernizr.audio.ogg || Modernizr.audio.mp3)) {
      window.setTimeout(function () { PACMAN.init(el, "./"); }, 0);
    } else {
      el.innerHTML = "Sorry, needs a decent browser<br /><small>" +
        "(firefox 3.6+, Chrome 4+, Opera 10+ and Safari 4+)</small>";
    }
  </script>

<a class="mt-4 btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="../../loginRegister/weekthree.php" target="_blank">Back to Jota-Joti Penang 2020 User Menu</a>

</body>
</html>
