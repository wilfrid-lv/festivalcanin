<!doctype html>
<html lang="en">

    <head>
        @if(PHP_OS == "LINUX")
        <meta charset="utf-8" />
        <title>Lister Partenaires</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <link rel="shortcut icon" href="{{ asset('template/assets/assets/images/favicon.ico') }}">
        <link href="{{ asset('template/assets/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css') }}" />
        <link href="{{ asset('template/assets/assets/css/icons.min.css" rel="stylesheet" type="text/css') }}" />
        <link href="{{ asset('template/assets/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        @else    
        <meta charset="utf-8" />
        <title>Lister Partenaires</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <link rel="shortcut icon" href="../template/assets/assets/images/favicon.ico">
        <link href="../template/assets/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="../template/assets/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../template/assets/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        @endif
    </head>

    
    <body data-topbar="dark">
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="logo-sm" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="logo-dark" height="20">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="logo-sm-light" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="logo-light" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1">Julia</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My Wallet</a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end mt-1">11</span><i class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="ri-settings-2-line"></i>
                            </button>
                        </div>
            
                    </div>
                </div>
            </header>




            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">


                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Informations</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="Informations/modifier-information.html">Modifier</a></li>
                                    <li><a href="horaire.html">Horaire</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-user-fill "></i>
                                    <span>Utilisateurs</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="Utilisateurs/liste-utilisateur.html">Lister</a></li> <!-- ajouter un bouton supp dans cette page -->
                                    <li><a href="Utilisateurs/ajouter-utilisateur.html">Ajouter</a></li>
                                    <li><a href="Utilisateurs/modifier-utilisateur.html">Modifier</a></li>
                                    <li><a href="Utilisateurs/profil-utilisateur.html">Profil</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-team-fill "></i>
                                    <span>Equipe</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="Equipe/liste-equipe.html">Lister</a></li> <!-- ajouter un bouton supp dans cette page -->
                                    <li><a href="Equipe/ajouter-equipe.html">Ajouter</a></li>
                                    <li><a href="Equipe/modifier-equipe.html">Modifier</a></li>
                                    <li><a href="Equipe/profil-equipe.html">Profil</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class=" ri-cloud-fill "></i>
                                    <span>Activités</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="Activites/liste-activite.html">Lister</a></li> <!-- ajouter un bouton supp dans cette page -->
                                    <li><a href="Activites/ajouter-activite.html">Ajouter</a></li>
                                    <li><a href="Activites/modifier-activite.html">Modifier</a></li>
                                </ul>
                            </li>
                             <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Articles</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="Articles/liste-article.html">Lister</a></li> <!-- ajouter un bouton supp dans cette page -->
                                    <li><a href="Articles/ajouter-article.html">Ajouter</a></li>
                                    <li><a href="Articles/modifier-article.html">Modifier</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Partenaires</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="liste-partenaires.html">Lister</a></li> <!-- ajouter un bouton supp dans cette page -->
                                    <li><a href="ajouter-partenaire.html">Ajouter</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <div class="main-content">
                <div class="page-content"></div>
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Utilisateurs</h4>
        
                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>E-mail</th>
                                                        <th>Description</th>
                                                        <th>Adresse</th>
                                                        <th>Ville</th>
                                                        <th>Role</th>
                                                        <th>Image</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($lesUtilisateurs as $unUtilisateur)
                                                        <tr>
                                                            <td data-field="nom" style="width: 80px">{{$unUtilisateur->nom}}</td>
                                                            <td data-field="email">{{$unUtilisateur->email}}</td>
                                                            <td data-field="description">{{$unUtilisateur->description}}</td>
                                                            <td data-field="adresse">{{$unUtilisateur->adresse}}</td>
                                                            <td data-field="ville">{{$unUtilisateur->ville}}</td>
                                                            <td data-field="role">{{$unUtilisateur->role->nom}}</td>
                                                            <td data-field="image">{{$unUtilisateur->imagePath}}</td>
                                                            <td style="width: 100px">
                                                                <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>

                     </div>
                </div>
            </div>
            <!-- Right Sidebar -->
            <div class="right-bar">
                <div data-simplebar class="h-100">
                    <div class="rightbar-title d-flex align-items-center px-3 py-4">
                
                        <h5 class="m-0 me-2">Settings</h5>

                        <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                            <i class="mdi mdi-close noti-icon"></i>
                        </a>
                    </div>

                    <!-- Settings -->
                    <hr class="mt-0" />
                    <h6 class="text-center mb-0">Choose Layouts</h6>

                    <div class="p-4">
                        <div class="mb-2">
                            <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                        </div>

                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                            <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                        </div>
        
                        <div class="mb-2">
                            <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                            <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                        </div>
        
                        <div class="mb-2">
                            <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                        </div>
                        <div class="form-check form-switch mb-5">
                            <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                            <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                        </div>

                
                    </div>

                </div> <!-- end slimscroll-menu-->
            </div>
            <!-- /Right-bar -->

            <div class="rightbar-overlay"></div>

            <!-- JAVASCRIPT -->
            <script src="assets/libs/jquery/jquery.min.js"></script>
            <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/libs/metismenu/metisMenu.min.js"></script>
            <script src="assets/libs/simplebar/simplebar.min.js"></script>
            <script src="assets/libs/node-waves/waves.min.js"></script>

            <!--tinymce js-->
            <script src="assets/libs/tinymce/tinymce.min.js"></script>

            <!-- init js -->
            <script src="assets/js/pages/form-editor.init.js"></script>

            <script src="assets/js/app.js"></script>
        </div>
    </body>
</html>