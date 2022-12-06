<div class="container-fluid bg-services text-center p-5 text-light-blue">
        <h1>Contact Us</h1>
    </div>



    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <div class="container">
    
            <div class="section-title">
              <p>Our team is ready to implement your ideas.
                Contact us now to discuss your roadmap!</p>
            </div>
    
            <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.01476812689398!2d10.167011561836555!3d5.962153896081931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105f16088ef74b0d%3A0x1af7cdce9354f007!2sVILEN%20PHARMACY!5e0!3m2!1sen!2scm!4v1661965326468!5m2!1sen!2scm" frameborder="0" allowfullscreen></iframe>
            </div>
    
            <div class="row mt-5">
    
              <div class="col-lg-4">
                <div class="info">
                  <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>Vilen Pharmacy | Ghana street, Bamenda | NW | Cameroon</p>
                  </div>
    
                  <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>admin@skye8.tech</p>
                  </div>
    
                  <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>(+237) 672 269 760</p>
                  </div>
    
                </div>
    
              </div>
    
              <div class="col-lg-8 mt-5 mt-lg-0">
    
                <form action="../src/backend/useraction.php" method="POST">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  
                  <button type="submit" name="contact-submit" class="btn btn-primary mt-3">Send Message</button>
                </form>

                <div class="my-3">
                      <?php
                        if(isset($_SESSION['message'])){
                          ?>
                          <div class="alert alert-success" role="alert">
                            <?php echo $_SESSION['message']; ?>
                            <?php unset($_SESSION['message']); ?>

                          </div>
                          <?php
                        }
                        if(isset($_SESSION['error'])){
                          ?>
                          <div class="alert alert-danger" role="alert">
                            <?php echo $_SESSION['error']; ?>
                            <?php unset($_SESSION['error']); ?>
                          </div>
                          <?php
                        }
                      ?>

                  </div>
    
              </div>
    
            </div>
    
          </div>
        </section><!-- End Contact Section -->
        