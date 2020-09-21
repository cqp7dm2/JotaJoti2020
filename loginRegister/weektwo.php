<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jota-Joti 2020 | Week Two</title>
    <link rel="icon" href="../assets/img/2020.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177875132-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177875132-1');
</script>

<?php
SESSION_start();
// FOR USERS TO VALIDATION ON THE LOGIN
//AVOID USER COME INTO PAGE WITHOUT LOGIN
  if(empty($_SESSION['u_id'])) {
  header("Location:login.php");
  }
 ?>

  </head>
  <body id= "page-top">
        <div id="wrapper">
            <?php
            include ('usersidebar.php');
             ?>
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    <?php
                    include ('usernav.php');
                     ?>

                     <!-- 1st Competition -->
                                          <main id="main">
                                          <section id="features" class="features">
                                            <div class="container">
                                              <h3>Challenge 3 | Morse Code & Phonetic Alphabet</h3>
                                              <p class="futura">

                                              <div class="row">
                                                <div class="col-lg-3">
                                                  <ul class="nav nav-tabs flex-column">
                                                    <li class="nav-item">
                                                      <a class="nav-link active show" data-toggle="tab" href="#tab-1">MORSE CODE DESCRIPTION</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link " data-toggle="tab" href="#tab-2">MORSE CODE QUESTIONS</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" data-toggle="tab" href="#tab-3">P DESCRIPTION</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" data-toggle="tab" href="#tab-4">P QUESTIONS</a>
                                                    </li>
                                                  </ul>
                                                    <a class="mt-4 btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="https://docs.google.com/forms/d/e/1FAIpQLSdOwfhYvoNAKluTM7r6NJrSLRRRW76WhDQ_-HQaZbx7zeGaOQ/viewform" target="_blank">Submit Answer Now</a>
                                                </div>
                                                <div class="col-lg-9 mt-4 mt-lg-0">
                                                  <div class="tab-content">
                                                    <div class="tab-pane active show" id="tab-1">
                                                      <div class="row">
                                                        <div class="col-lg-10 details order-2 order-lg-1">
                                                          <h3>MORSE CODE DESCRIPTION</h3>
                                                          <p>
                                                            Morse code is a method of sending text messages by keying in a series of electronic pulses, usually represented as a short pulse (called a "dot") and a long pulse (a "dash"). In the time of its invention, it was the fastest long distance form of communication. The International Morse Code encodes the 26 English letters A to Z, some non-English letters, the Arabic numerals and a small set of punctuation and procedural signals (prosigns). Morse code is usually transmitted by on-off keying of an information-carrying medium such as electric current, radio waves, visible light, or sound waves. Nowadays, Morse Code is most prevalent in Aviation and Aeronautical fields since radio navigational aids such as VOR's and NDB's are still identified in Morse Code. Moreover, the US Navy and Coast Guard still use signal lamps to communicate via Morse Code. Morse Code has also been used as an alternative form of communication for people with disabilities or who have their abilities to communicate imparied by stroke, heart attack, or paralysis. There have been several cases where individuals have been able to use their eyelids to communicate in Morse Code by using a series of long and quick blinks to represent dots and dashes.
                                                          </p>
                                                        </div>
                                                      </div>
                                                    </div>


                                                    <div class="tab-pane" id="tab-2">
                                                      <div class="row">
                                                        <div class="col-lg-10 details order-2 order-lg-1">
                                                          <h3>MORSE CODE QUESTIONS</h3>
                                                          <p>Click On the Play Button to Listen to the Morse Code :</p>

                                                          <p>Morse Code One</p>
                                                            <audio controls>
                                                             <source src="../mc/one.wav" type="audio/wav">
                                                             Your browser does not support the audio element.
                                                            </audio>
                                                            <br>

                                                            <p>Morse Code Two</p>
                                                            <audio controls>
                                                             <source src="../mc/two.wav" type="audio/wav">
                                                             Your browser does not support the audio element.
                                                            </audio>
                                                            <br>

                                                            <p>Morse Code Three</p>
                                                            <audio controls>
                                                             <source src="../mc/three.wav" type="audio/wav">
                                                             Your browser does not support the audio element.
                                                            </audio>
                                                            <br>

                                                            <p>Morse Code Four</p>
                                                            <audio controls>
                                                             <source src="../mc/four.wav" type="audio/wav">
                                                             Your browser does not support the audio element.
                                                            </audio>
                                                            <br>

                                                            <p>Morse Code Five</p>
                                                            <audio controls>
                                                             <source src="../mc/five.wav" type="audio/wav">
                                                             Your browser does not support the audio element.
                                                            </audio>
                                                            <br>

                                                            <p>Morse Code Six</p>
                                                            <audio controls>
                                                             <source src="../mc/six.wav" type="audio/wav">
                                                             Your browser does not support the audio element.
                                                            </audio>
                                                            <br>

                                                            <p>Morse Code Seven</p>
                                                            <audio controls>
                                                             <source src="../mc/seven.wav" type="audio/wav">
                                                             Your browser does not support the audio element.
                                                            </audio>
                                                            <br>

                                                            <p>Morse Code Eight</p>
                                                            <audio controls>
                                                             <source src="../mc/eight.wav" type="audio/wav">                                                             <source src="horse.mp3" type="audio/mpeg">
                                                             Your browser does not support the audio element.
                                                            </audio>
                                                            <br>

                                                            <p>Morse Code Nine</p>
                                                            <audio controls>
                                                             <source src="../mc/nine.wav" type="audio/wav">
                                                             Your browser does not support the audio element.
                                                            </audio>
                                                            <br>

                                                            <p>Morse Code Ten</p>
                                                            <audio controls>
                                                             <source src="../mc/ten.wav" type="audio/wav">
                                                             Your browser does not support the audio element.
                                                            </audio>
                                                            <br>

                                                            </div>

                                                      </div>
                                                    </div>
                                                  </div>
                                                    <div class="tab-pane active show" id="tab-3">
                                                      <div class="row">
                                                        <div class="col-lg-10 details order-2 order-lg-1">
                                                          <h3>P DESCRIPTION</h3>
                                                          <p>
                                                            Morse code is a method of sending text messages by keying in a series of electronic pulses, usually represented as a short pulse (called a "dot") and a long pulse (a "dash"). In the time of its invention, it was the fastest long distance form of communication. The International Morse Code encodes the 26 English letters A to Z, some non-English letters, the Arabic numerals and a small set of punctuation and procedural signals (prosigns). Morse code is usually transmitted by on-off keying of an information-carrying medium such as electric current, radio waves, visible light, or sound waves. Nowadays, Morse Code is most prevalent in Aviation and Aeronautical fields since radio navigational aids such as VOR's and NDB's are still identified in Morse Code. Moreover, the US Navy and Coast Guard still use signal lamps to communicate via Morse Code. Morse Code has also been used as an alternative form of communication for people with disabilities or who have their abilities to communicate imparied by stroke, heart attack, or paralysis. There have been several cases where individuals have been able to use their eyelids to communicate in Morse Code by using a series of long and quick blinks to represent dots and dashes.
                                                          </p>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <div class="tab-pane active show" id="tab-4">
                                                      <div class="row">
                                                        <div class="col-lg-10 details order-2 order-lg-1">
                                                          <h3>P QUESTIONS</h3>

                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </section><!-- End Features Section -->
                                          <hr>


                     <!-- 2nd Competition  -->
                                           <section id="features" class="features">
                                             <div class="container">
                                               <h3>Challenge 4 | Exchange JID</h3>
                                               <p class="futura">Lets start the Quiz Challenge !!

                                               <div class="row">
                                                 <div class="col-lg-3">
                                                   <ul class="nav nav-tabs flex-column">
                                                     <li class="nav-item">
                                                       <a class="nav-link active show" data-toggle="tab" href="#cab-1">DESCRIPTION</a>
                                                     </li>
                                                     <li class="nav-item">
                                                       <a class="nav-link" data-toggle="tab" href="#cab-2">RULES AND RUGULATIONS</a>
                                                     </li>
                                                   </ul>
                                                     <a class="mt-4 btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="https://docs.google.com/forms/d/1N40mSlcqHWfdd_wB2Cn3gyDkQ0pXEr1__3EWur9RD70/edit" target="_blank">Submit JID Now</a>
                                                 </div>
                                                 <div class="col-lg-9 mt-4 mt-lg-0">
                                                   <div class="tab-content">
                                                     <div class="tab-pane active show" id="cab-1">
                                                       <div class="row">
                                                         <div class="col-lg-10 details order-2 order-lg-1">
                                                           <h3>DESCRIPTION</h3>
                                                           <p>
                                                           Its time for some ‘exercises’ for your brain! As scouts, we should have the spirit for exploration, thus, let’s explore our understanding towards scouting by participating in this Jota-Joti Quiz!
                                                            </p>
                                                         </div>
                                                       </div>
                                                     </div>
                                                     <div class="tab-pane" id="cab-2">
                                                       <div class="row">
                                                         <div class="col-lg-10 details order-2 order-lg-1">
                                                           <h3>RULES AND REGULATIONS</h3>
                                                            
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                 </div>
                                               </div>

                                             </div>
                                           </section><!-- End Features Section -->

                                           <script src="../assets/vendor/jquery/jquery.min.js"></script>
                                           <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                                           <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
                                           <script src="../assets/vendor/php-email-form/validate.js"></script>
                                           <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
                                           <script src="../assets/vendor/venobox/venobox.min.js"></script>
                                           <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
                                           <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>

                                           <script src="../assets/js/main.js"></script>



</div>
</div>


  </body>
</html>
