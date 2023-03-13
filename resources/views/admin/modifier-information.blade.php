<!doctype html>
<html lang="en">

    <head>
        @if(PHP_OS == "LINUX")
        <meta charset="utf-8" />
        <title>Modifier les informations</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Themesdesign" name="author" />
        <link rel="shortcut icon" href="{{ asset('../template/assets/assets/images/favicon.ico') }}">
        <link href="{{ asset('../template/assets/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset('../template/assets/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('../template/assets/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        @else
        <meta charset="utf-8" />
        <title>Modifier les informations</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="../template/assets/assets/images/logo-sm.png" alt="logo-sm" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="../template/assets/assets/images/logo-dark.png" alt="logo-dark" height="20">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="../template/assets/assets/images/logo-sm.png" alt="logo-sm-light" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="../template/assets/assets/images/logo-light.png" alt="logo-light" height="20">
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
                                <img class="rounded-circle header-profile-user" src="../template/assets/assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1">Julia</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
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




            <div class="vertical-menu">

                <div data-simplebar class="h-100">


                    <div id="sidebar-menu">
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Informations</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="modifierinfo">Modifier</a></li>
                                    <li><a href="horaire.html">Horaire</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-user-fill "></i>
                                    <span>Utilisateurs</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="Utilisateurs/liste-utilisateur.html">Lister</a></li>
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
                                    <li><a href="Equipe/liste-equipe.html">Lister</a></li>
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
                                    <li><a href="Activites/liste-activite.html">Lister</a></li>
                                    <li><a href="Activites/ajouter-activite.html">Ajouter</a></li>
                                    <li><a href="Activites/modifier-activite.html">Modifier</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-file-paper-2-fill"></i>
                                    <span>Articles</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="Articles/liste-article.html">Lister</a></li>
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
                </div>
            </div>

            <div class="main-content">
                <div class="page-content"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <form class="container" method="post" action="/admin/modifierInfo">
                                        <div class="card-body">
                                            <h4 class="card-title">Modifier les informations de l'événement</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row mb-3">
                                                        <label for="dateDebut" class="col-sm-4 col-form-label">Date de début</label>
                                                        <div class="col-sm-5">
                                                            <input class="form-control" type="date" id="dateDebut">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row mb-3">
                                                        <label for="dateFin" class="col-sm-2 col-form-label">Date de fin</label>
                                                        <div class="col-sm-5">
                                                            <input class="form-control" type="date" id="dateFin" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="adresse" class="col-sm-2 col-form-label">Adresse</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Adresse" id="adresse" value="">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="adresse" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <form method="post">
                                                        <textarea required class="form-control" rows="5" placeholder="Description"></textarea>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="courriel" class="col-sm-2 col-form-label">Courriel</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="email" placeholder="Courriel" id="courriel" value="">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="lieu" class="col-sm-2 col-form-label">Lieu</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Lieu de l'événement" id="lieu" value="">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="adresse" class="col-sm-2 col-form-label">Description Localisation</label>
                                                <div class="col-sm-10">
                                                    <form method="post">
                                                        <textarea required class="form-control" rows="5" placeholder="Description Localisation"></textarea>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="lienVideo" class="col-sm-2 col-form-label">Lien vidéo</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Le lien vers une vidéo de l'événement" id="lienVideo" value="">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="adresse" class="col-sm-2 col-form-label">Ajouter une image</label>
                                                <div class="col-sm-10">
                                                    <form action="#" class="dropzone">
                                                        <div class="fallback">
                                                            <input name="file" type="file" multiple="multiple">
                                                        </div>
                                                        <div class="dz-message needsclick">
                                                            <div class="mb-3">
                                                                <i class="display-4 text-muted ri-upload-cloud-2-line"></i>
                                                            </div>

                                                            <h4>Drop files here or click to upload.</h4>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                    Enregistrer
                                                </button>
                                                <button type="reset" class="btn btn-secondary waves-effect">
                                                    Annuler
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
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
                            <img src="../template/assets/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                        </div>

                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                            <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                        </div>

                        <div class="mb-2">
                            <img src="../template/assets/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="../assets/assets/css/bootstrap-dark.min.css" data-appStyle="../assets/assets/css/app-dark.min.css">
                            <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                        </div>

                        <div class="mb-2">
                            <img src="../template/assets/assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                        </div>
                        <div class="form-check form-switch mb-5">
                            <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="../assets/assets/css/app-rtl.min.css">
                            <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                        </div>


                    </div>

                </div> <!-- end slimscroll-menu-->
            </div>
            <!-- /Right-bar -->

            <div class="rightbar-overlay"></div>

            <!-- JAVASCRIPT -->
            <script src="public/template/assets/libs/jquery/jquery.min.js"></script>
            <script src="public/template/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="public/template/assets/libs/metismenu/metisMenu.min.js"></script>
            <script src="public/template/assets/libs/simplebar/simplebar.min.js"></script>
            <script src="public/template/assets/libs/node-waves/waves.min.js"></script>

            <!-- <script src="articles.blade.php"></script> -->

            <script src="public/template/assetslibs/dropzone/min/dropzone.min.js"></script>

            <!-- init js -->
            <script src="public/template/assets/js/pages/form-editor.init.js"></script>
            <script src="public/template/assets/js/pages/form-element.init.js"></script>


            <script src="public/template/assets/js/app.js"></script>
        </div>
    </body>
</html>
