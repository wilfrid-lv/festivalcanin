<!-- ======= Contact Section ======= -->
<section id="contact" class="section-bg">

<div class="container" data-aos="fade-up">

  <div class="section-header">
    <h2>Nous contacter</h2>
    <p>Envoyez-nous un message !</p>
  </div>

  <div class="row contact-info">

    <div class="col-md-4">
      <div class="contact-address">
        <i class="bi bi-geo-alt"></i>
        <h3>Addresse</h3>
        <address>
            515, de la Briquette, Dégelis, QC, Canada 
        </address>
      </div>
    </div>

    <div class="col-md-4">
      <div class="contact-phone">
        <i class="bi bi-phone"></i>
        <h3>Numéro de téléphone</h3>
        <p><a href="tel:+155895548855">+1 (418) 750-2816 </a></p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="contact-email">
        <i class="bi bi-envelope"></i>
        <h3>Email</h3>
        <p><a href="mailto:saloncanindegelis@gmail.com">saloncanindegelis@gmail.com</a></p>
      </div>
    </div>

  </div>

  <div class="form">
    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
      <div class="row">
        <div class="form-group col-md-6">
          <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
        </div>
        <div class="form-group col-md-6 mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" required>
        </div>
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Votre message" required></textarea>
      </div>
      <div class="my-3">
        <div class="loading">Chargement</div>
        <div class="error-message"></div>
        <div class="sent-message">Votre message à été envoyé. Merci beaucoup !</div>
      </div>
      <div class="text-center"><button type="submit">Envoyer</button></div>
    </form>
  </div>

</div>
</section><!-- End Contact Section -->