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
              <li><i class="bi bi-chevron-right"></i> <a href="/acceuil">Accueil</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/aPropos">À propos</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/exposants">Nos exposants</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/horaire">Horaire</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/contact">Contact</a></li>
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

    <div class="container">
      <div class="copyright">
        &copy;Copyright {{date('Y')}}<br><strong> Festival Canin de Dégelis</strong>. Tout droits réservés
      </div>

    </div>
  </footer><!-- End  Footer -->
