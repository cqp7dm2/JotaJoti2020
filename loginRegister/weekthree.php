<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jota-Joti 2020 | Week Three</title>
    <link rel="icon" href="../assets/img/2020.png">
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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

    <script>
      AOS.init();
    </script>

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
                                              <h3 data-aos="fade-right" style="color: #fab800;">Challenge 5 | Virtual Expedition</h3>
                                              <p class="futura" data-aos="flip-down"> ##

                                              <div class="row">
                                                <div class="col-lg-3">
                                                  <ul class="nav nav-tabs flex-column">
                                                    <li class="nav-item">
                                                      <a class="nav-link active show" data-toggle="tab" href="#tab-1">MORSE CODE DESCRIPTION</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link " data-toggle="tab" href="#tab-2">MORSE CODE QUESTION</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" data-toggle="tab" href="#tab-3">THE NATO PHONETIC</a>
                                                    </li>
                                                  </ul>
                                                    <a class="mt-4 btn btn-primary btn-xl text-uppercase js-scroll-trigger" href= "https://docs.google.com/forms/d/e/1FAIpQLSdOwfhYvoNAKluTM7r6NJrSLRRRW76WhDQ_-HQaZbx7zeGaOQ/viewform" target="_blank">Submit Your Answer Now</a>
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

                                                    <div class="tab-pane" id="tab-3">
                                                      <div class="row">
                                                        <div class="col-lg-10 details order-2 order-lg-1">
                                                          <p>
                                                            <h3>The NATO Phonetic</h3>
                                                          The NATO phonetic alphabet is a widely-used, standardized phonetic alphabet, where each letter in the English alphabet is replaced with a specific, specially-chosen codeword
                                                          The NATO phonetic alphabet was formally established in 1956 through the joint effort of several groups, including, most notably, the North Atlantic Treaty Organization (NATO) and the International Civil Aviation Organization (ICAO). It was created with the goal of becoming the universal phonetic alphabet, in order to overcome the issues which occurred as a result of different countries and organizations using different alphabets.
                                                          The two main advantages to learning the NATO phonetic alphabet today compared to other alphabets are:
                                                          The NATO alphabet is the main phonetic alphabet used by many countries, organizations, and individuals around the world, meaning that a lot of people, and especially those who encounter it in a professional setting, are likely to be familiar with it. Accordingly, this is the phonetic alphabet that people are most likely to easily understand if you use it to talk to them, and it’s also the phonetic alphabet that people are most likely to use when talking to you.
                                                          The specific codewords in the NATO phonetic alphabet were chosen based on extensive testing, as they ensure mutual intelligibility between speakers from different linguistic backgrounds, by virtue of being easy to pronounce and recognize.
                                                          </p>
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
                                               <h3 data-aos="fade-right" style="color: #fab800;">Challenge 6 | Pac-Man</h3>
                                               <p class="futura" data-aos="flip-down">Lets Join Us and Exchange JID with Us.

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
                                                     <a class="mt-4 btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="https://docs.google.com/forms/d/e/1FAIpQLSccPnVVIB2H0B_QeiPG-uJagiDa2Ci0Ds-J-QPcBv9cxpyfNg/viewform" target="_blank">Submit JID Now</a>
                                                 </div>
                                                 <div class="col-lg-9 mt-4 mt-lg-0">
                                                   <div class="tab-content">
                                                     <div class="tab-pane active show" id="cab-1">
                                                       <div class="row">
                                                         <div class="col-lg-10 details order-2 order-lg-1">
                                                           <h3>DESCRIPTION</h3>
                                                           <p>
                                                             In this challenge, you are going to make new friends from all around the world! One of the events of JOTI (Jamboree On The Internet) is to communicate with people around the world through the Internet using any technological devices.
                                                             <br>
                                                             There are many ways to communicate, including text-based chat, voice chat, video chat, emails, blogs, and social media networks. The Jamboree IDentity Code (JID code) is a special code which is specifically used for the JOTI event.
                                                             Different countries will have different JID codes. Therefore, for this challenge, do not be shy and talk to as many people as possible around the world and collect 10 different JID codes by exchanging yours (if you have one) to them.
                                                             <br>
                                                             Hopefully, you can make new friends too!
                                                             <br>
                                                             This is a platform you might want to try out -
                                                             <a href="https://webchat.scoutlink.net/#/">ScoutLink Webchat</a>
                                                            </p>
                                                         </div>
                                                       </div>
                                                     </div>
                                                     <div class="tab-pane" id="cab-2">
                                                       <div class="row">
                                                         <div class="col-lg-10 details order-2 order-lg-1">
                                                           <h3>RULES AND REGULATIONS</h3>

                                                           <p>
                                                             1) Participants are required to collect 10 JID codes from other participants all around the world.
                                                             <br>
                                                              2)For submission, collected JID codes are required to fill into a google form prepared in the website.
                                                              <br>
                                                              3)Repeated JID codes in one’s collection are considered not valid.
                                                              <br>
                                                              4)**This challenge is open until the end of JOTA-JOTI. The last day JOTA-JOTI is 18 October 2020, this challenge due by 19 October 2020 **
                                                           </p>

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
</div>

  </body>
</html>
