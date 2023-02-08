<!doctype html>
<html lang="fr">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel='stylesheet' href='{{ asset('css/woocommerce-layout.css') }}' type='text/css' media='all'/>
      <link rel='stylesheet' href='{{ asset('css/woocommerce-smallscreen.css') }}' type='text/css' media='only screen and (max-width: 768px)'/>
      <link rel='stylesheet' href='{{ asset('css/woocommerce.css') }}' type='text/css' media='all'/>
      <link rel='stylesheet' href='{{ asset('css/font-awesome.min.css') }}' type='text/css' media='all'/>
      <link rel='stylesheet' href='{{ asset('css/style.css') }}' type='text/css' media='all'/>
      <link rel='stylesheet' href='{{ asset('css/styleAdmin.css') }}' type='text/css' media='all'/>
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel='stylesheet' href='{{ asset('css/easy-responsive-shortcodes.css') }}' type='text/css' media='all'/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <title>@yield('titre')</title>
    </head>
    <body>
    @if (session('message'))  
    <div class="alert alert-info">  
        <strong>  
        {{ session('message') }}  
        </strong>  
    </div>  
    @endif
    @if ($errors->any())  
    <div class="alert alert-danger">  
        <strong>  
            Oups. Nous n’avons pas pu enregistrer votre demande pour la raison suivante :  
        </strong>  
        <ul class="list-unstyled">  
        @foreach ($errors->all() as $error)  
            <li>{{ $error }}</li>  
        @endforeach  
        </ul>  
    </div>  
    @endif  
    <header id="masthead" class="site-header">
      @if(session()->exists('courriel'))
        <a style="margin-left:90%" class="nav-link" href="{{ url('deconnecter') }}"> Déconnexion </a>
      @endif
      @if(!session()->exists('courriel'))
      <a style="margin-left:90%" class="nav-link" href="{{ url('connecter') }}"> Connexion </a>
      @endif
      <div class="site-branding">
        <h1 class="site-title"><a href="/admin/client/lister" rel="home">YvanDesVoyages</a></h1>
        <h2 class="site-description">Administration du site</h2>
      </div>
      <nav id="site-navigation" class="main-navigation">
        <button class="menu-toggle">Menu</button>
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
      <div class="menu-menu-1-container">
        <ul id="menu-menu-1" class="menu">
          <li><a href="/admin/articles">Articles</a></li>
          <li><a href="/admin/activites">Activités</a></li>
          <li><a href="/admin/calendrier">Calendrier</a></li>
          <li><a href="/admin/partenaires">Partenaires</a></li>
          <li><a href="/admin/photos">Gallerie</a></li>
        </ul>
      </div>
      </nav>
      </header>

      <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/articles">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/activites">Activités</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/calendrier">Calendrier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/partenaires">Partenaires</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/photos">Gallerie</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    @yield('contenu')
	<footer>
	
	</footer>
</div>
<!-- #page -->
    </body>
</html>