<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body>
      <?php include "header.php"; ?>

      <section class="page-section" id="contact">
          <div class="container">
              <div class="text-center">
                <br>
                <br>
                  <h2 class="section-heading text-uppercase">Contact Us</h2>
                  <h3 class="section-subheading text-muted">Have any questions? We'd love to hear from you.</h3>
              </div>
              <form id="contactForm" name="sentMessage" novalidate="novalidate">
                  <div class="row align-items-stretch mb-5">
                      <div class="col-md-6">
                          <div class="form-group">
                              <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                              <p class="help-block text-danger"></p>
                          </div>
                          <div class="form-group">
                              <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                              <p class="help-block text-danger"></p>
                          </div>
                          <div class="form-group mb-md-0">
                              <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group form-group-textarea mb-md-0">
                              <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                  </div>
                  <div class="text-center">
                      <div id="success"></div>
                      <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                  </div>
              </form>
          </div>
      </section>

      <section class="contacts bg-primary" id="contacts">
        <div class="container">
          <h2>We
            <i class="fas fa-heart"></i>
            new friends!</h2>
          <ul class="list-inline list-social">
            <li class="list-inline-item social-instagram">
              <a href="https://www.instagram.com/georgetown_south_scout/?hl=en" target="_blank" style="transition-duration: 0.6s;">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item social-facebook">
              <a href="https://www.messenger.com/t/232000980145607" target="_blank" style="transition-duration: 0.6s;">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item social-youtube">
              <a href="https://www.youtube.com/channel/UC3P9q6Zakt-olweYIC7OeMw?view_as=subscriber" target="_blank" style="transition-duration: 0.6s;">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <?php include "footer.php"; ?>

  </body>
</html>
