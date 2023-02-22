<!-- ======= Contact Section ======= -->
<section id="contact" class="section-bg">

<div class="container" data-aos="fade-up">

  <div class="section-header">
    <h2>Nous contacter</h2>
    <p>Envoyez-nous un message !</p>
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
