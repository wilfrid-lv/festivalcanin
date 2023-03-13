<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Festival Canin de Dégelis</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/vendor/aos/aos.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/vendor/glightbox/css/glightbox.min.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('template/assets//css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('template/assets//vendor/bootstrap/css/bootstrap.min.css') }}">

</head>

<body>

  @include('partials.header')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">Festival <br><span>Canin</span> de Dégelis</h1>
      <a href="https://www.youtube.com/watch?v=yUQY0pD35Go" class="glightbox play-btn mb-4"></a>
      <a href="#about" class="about-btn scrollto">À propos du Festival</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
            <h2>À propos du Festival Canin</h2>
            <p>{{$information->resume}}</p>
          </div>
          <div class="col-lg-3">
            <h3>Où ?</h3>
            <p>{{$information->adresse}}</p>
          </div>
          <div class="col-lg-3">
            <h3>Quand</h3>
              <p>Du {{Carbon\Carbon::parse($information->dateDebut)->translatedFormat('l j')}}
                 au</br> {{Carbon\Carbon::parse($information->dateFin)->translatedFormat('l j F Y')}}</p>
            <!--<p>Le samedi et le dimanche<br>26-27 août</p>-->
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Speakers Section ======= -->

    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Nos exposants</h2>
                <p>Voici les exposants qui seront présent lors de notre festival</p>
            <h2>En cours de développement</h2>
          <!--<p>Voici les exposants qui seront présent lors de notre festival</p>-->
        </div>
      </div>



    </section><!-- End Speakers Section -->

    <!-- =======  Section Horaire ======= -->

    <section id="schedule" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Programmation de l'évènement</h2>
            <p>L'horaire affiché est identique pour les deux journées </p>
        </div>

        <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Day 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Day 2</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Day 3</a>
          </li> -->
        </ul>


        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

              @foreach($activites as $activite)
                  <div class="row schedule-item">
                      <div class="col-md-1"><time>{{\Carbon\Carbon::parse($activite->dateHeure)->format('H:i')}}</time></div>
                      <div class="col-md-1">
                          @if(!is_null($activite->type_activite->imagePath))
                              <div class="speaker">
                                  <img src="{{asset($activite->type_activite->imagePath)}}">
                              </div>
                          @else
                              <div class="speaker">
                                  <img src="" alt="">
                              </div>

                          @endif
                      </div>
                      <div class="col-md-9">
                          <h3>{{$activite->type_activite->nom}}</h3>
                          <h4><span>{{$activite->titre}}</span></h4>
                          <p>{{$activite->description}}
                              @if(!is_null($activite->lienInscription))
                                  <br>
                                  <a href="{{$activite->lienInscription}}" target="_blank" class="link">Inscription</a>
                              @endif
                          </p>
                      </div>
                  </div>

              @endforeach


        </div>

      </div>
      </div>

    </section><!-- End Schedule Section -->

    <!-- ======= Venue Section ======= -->
    <section id="venue">

      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Où se situe l'évènement?</h2>
          <!--<p>Event venue location info and gallery</p>-->
        </div>

        <div class="row g-0">
          <div class="col-lg-6 venue-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10771.52610780684!2d-68.6470274!3d47.5506345!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cbdc779117a5157%3A0xb0f9ea01b69a2839!2sD%C3%A9gelis%20Centre%20Communautaire!5e0!3m2!1sfr!2sca!4v1675887111978!5m2!1sfr!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8 position-relative">
                <h3>{{$information->lieu}}</h3>
                <p>{{$information->descriptionLocalisation}}
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="container-fluid venue-gallery-container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/1.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Venue Section -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Galerie</h2>
        </div>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
            @foreach($fichiers as $fichier)
                <div class="swiper-slide"><a href="{{asset("storage/".$fichier)}}" class="gallery-lightbox"><img src="{{asset("storage/".$fichier)}}" class="img-fluid" alt=""></a></div>
                @if($loop->iteration == 6)
                    @break
                @endif
            @endforeach

        </div>
        <div class="swiper-pagination"></div>
      </div>
        <a href="{{route('galerie')}}" class="link">Voir plus</a>

    </section><!-- End Gallery Section -->

    <!-- ======= Supporters Section ======= -->
    <section id="supporters" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Nos partenaires</h2>
        </div>
          @foreach($niveaux as $niveau)
              @if($niveau->partenaires->count() > 0)
              <h3>{{$niveau->nom}}</h3>
                  <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
                  @foreach($niveau->partenaires as $partenaire)
                      @if($niveau->nom == "Or")
                          <div class="col-lg-5 col-md-2 col-xs-8 h-50">
                      @else
                          <div class="col-lg-3 col-md-4 col-xs-6">
                      @endif
                          <a target="_blank" href="{{$partenaire->lien}}">
                              <div class="supporter-logo border">
                                  <img src="{{asset($partenaire->imagePath)}}" class="img-fluid" alt="{{$partenaire->nom}}">
                              </div>
                          </a>
                      </div>
                  @endforeach
                  </div>
              @endif

          @endforeach

        </div>
      </div>

    </section><!-- End Sponsors Section -->

    <!-- =======  F.A.Q Section ======= -->
    <section id="faq">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>F.A.Q. </h2>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-9">

            <ul class="faq-list">

                @foreach($questionsReponses as $questionReponse)
                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq{{$questionReponse->id}}">{{$questionReponse->question}} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq{{$questionReponse->id}}" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                {{$questionReponse->reponse}}
                            </p>
                        </div>
                    </li>
                @endforeach

            </ul>

          </div>
        </div>

      </div>

    </section><!-- End  F.A.Q Section -->

    @include('partials.contact')

  </main><!-- End #main -->

  @include('partials.footer')
  @include('partials.modal')


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  @include('partials.js')

</body>

</html>
