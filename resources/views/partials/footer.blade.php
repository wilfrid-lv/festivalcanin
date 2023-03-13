<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
              <p><strong>
                      Festival Canin de Dégelis
                  </strong>
                  <br>
              {{$information->description}}</p>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Liens</h4>
            <ul>
                <li><a class="nav-link scrollto" href="#hero">Accueil</a></li>
                <li><a class="nav-link scrollto" href="#about">À propos</a></li>
                <li><a class="nav-link scrollto" href="#speakers">Nos exposants</a></li>
                <li><a class="nav-link scrollto" href="#schedule">Horaire</a></li>
                <li><a class="nav-link scrollto" href="#gallery">Galerie</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contactez-nous</h4>
            <p>
              <strong>Adresse:</strong> {{$information->adresse}}
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy;Copyright {{date('Y')}}<br><strong> Festival Canin de Dégelis</strong>. Tout droits réservés
      </div>

    </div>
  </footer><!-- End  Footer -->
