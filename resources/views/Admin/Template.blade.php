<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/icon1.png') }}">
    <!-- Plugins -->
    <link href="{{ asset('Admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
    <link href="{{ asset('Admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('Admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('Admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- Loader -->
    <link href="{{ asset('Admin/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('Admin/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('Admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('Admin/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/assets/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/header-colors.css') }}" />
    <title>fe</title>
</head>
<body>
    <!--wrapper-->
    <div class="wrapper">
        @if(auth()->check() && auth()->user()->statut === 'Verified')
            <!--start header -->
            <header>
                <div class="topbar d-flex align-items-center">
                    <nav class="navbar navbar-expand">
                        <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
                        <!-- Recherche -->
                        <div class="search-bar flex-grow-1">
                            <div class="position-relative search-bar-box">
                                <input type="text" class="form-control search-control" placeholder="Type to search..."> 
                                <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                                <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                            </div>
                        </div>
                        <div class="top-menu ms-auto">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item mobile-search-icon">
                                    <a class="nav-link" href="#">   <i class='bx bx-search'></i></a>
                                </li>
                                <!-- Application -->
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
                                        <i class='bx bx-category'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div class="row row-cols-3 g-3 p-3"></div>
                                    </div>
                                </li>
                                <!-- Notification -->
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bx bx-bell'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:;">
                                            <div class="msg-header">
                                                <p class="msg-header-title">Notifications</p>
                                                <p class="msg-header-clear ms-auto">Marks all as read</p>
                                            </div>
                                        </a>
                                        <div class="header-notifications-list"></div>
                                        <a href="javascript:;">
                                            <div class="text-center msg-footer">View All Notifications</div>
                                        </a>
                                    </div>
                                </li>
                                <!-- Message -->
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bx bx-comment'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:;">
                                            <div class="msg-header">
                                                <p class="msg-header-title">Messages</p>
                                                <p class="msg-header-clear ms-auto">Marks all as read</p>
                                            </div>
                                        </a>
                                        <div class="header-message-list"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="user-box dropdown">
                            <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{URL::asset('uploads')}}/{{Auth::user()->img}}" class="user-img" alt="user avatar">
                                <div class="user-info ps-3">
                                    <p class="user-name mb-0">{{auth()->user()->name}}</p>
                                    <p class="designattion mb-0">{{auth()->user()->role}}</p>
                                </div>
                            </a>
                            <!-- Profil -->
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a></li>
                                <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a></li>
                                <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a></li>
                                <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a></li>
                                <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a></li>
                                <li><div class="dropdown-divider mb-0"></div></li>
                                <li><a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            <!--end header -->
            <!--sidebar wrapper -->
            <div class="sidebar-wrapper" data-simplebar="true">
                <div class="sidebar-header">
                    <div>
                        <img src="{{ asset('assets/images/LOGO horr.png')}}" class="logo-icon" alt="logo icon">
                    </div>
                    <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i></div>
                </div>
                <!--navigation-->
                <ul class="metismenu" id="menu">
                    <li><a href="/home"><div class="parent-icon"><i class='bx bx-home-circle'></i></div><div class="menu-title">Dashboard</div></a></li>
                    <li class="menu-label">Gestion I-shop</li>
                    <li><a href="/users"><div class="parent-icon"><i class='bx bx-user-circle'></i></div><div class="menu-title">Gestion des Utilisateurs</div></a></li>
                    <li><a href="/Categorie"><div class="parent-icon"><i class='bx bx-category'></i></div><div class="menu-title">Gestion des Catégories</div></a></li>
                    <li><a href="/SCategorie"><div class="parent-icon"><i class='bx bxs-category-alt'></i></div><div class="menu-title">Gestion des Sous Catégories</div></a></li>
                    <li><a href="/Produit/admin"><div class="parent-icon"><i class='bx bx-shopping-bag'></i></div><div class="menu-title">Gestion des Produits</div></a></li>
                    <li>
                        <a href="javascript:;" class="has-arrow"><div class="parent-icon"><i class='bx bxs-cart'></i></div><div class="menu-title">Gestion des Commandes</div></a>
                        <ul>
                            <li><a href="/commande/all"><i class="bx bx-right-arrow-alt"></i>Tous les Commandes</a></li>
                            <li><a href="/commande/Commandes en attente"><i class="bx bx-right-arrow-alt"></i>Commandes en attente</a></li>
                            <li><a href="/commande/Commandes confirmées"><i class="bx bx-right-arrow-alt"></i>Commandes confirmées</a></li>
                            <li><a href="/commande/Commandes livrées"><i class="bx bx-right-arrow-alt"></i>Commandes livrées</a></li>
                            <li><a href="/commande/Commandes retour"><i class="bx bx-right-arrow-alt"></i>Commandes retour</a></li>
                        </ul>
                    </li>
                    <li><a href="https://www.facebook.com/profile.php?id=61566835768353" target="_blank"><div class="parent-icon"><i class="bx bx-support"></i></div><div class="menu-title">Support</div></a></li>
                </ul>
                <!--end navigation-->
            </div>
            <!--end sidebar wrapper -->
            @yield('Contenu')
            <!--start overlay-->
            <div class="overlay toggle-icon"></div>
            <!--end overlay-->
            <!--Start Back To Top Button--> 
            <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
            <!--End Back To Top Button-->
            <footer class="page-footer">
                <p class="mb-0">Copyright MEGA PIXEL - I-Shop © 2025. All right reserved.</p>
            </footer>
        @else
            <!-- Message d'erreur si l'utilisateur n'est pas vérifié -->
            <div class="container mt-5">
                <div class="alert alert-danger text-center" role="alert">
                    <h4 class="alert-heading">Accès refusé</h4>
                    <p>Votre compte n'est pas vérifié. Merci de contacter l'administrateur du site web pour plus d'informations.</p>
                    <hr>
                    <p class="mb-0">Vous pouvez essayer de vous déconnecter et vous reconnecter après vérification.</p>
                    <a href="{{ route('logout') }}" class="btn btn-primary mt-3" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnecter</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        @endif
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"><i class='bx bx-cog bx-spin'></i></div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr/>
            <h6 class="mb-0">Theme Styles</h6>
            <hr/>
            <div class="d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                    <label class="form-check-label" for="lightmode">Light</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                    <label class="form-check-label" for="darkmode">Dark</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                    <label class="form-check-label" for="semidark">Semi Dark</label>
                </div>
            </div>
            <hr/>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
                <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
            </div>
        </div>
    </div>
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('Admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins -->
    <script src="{{ asset('Admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <!-- App JS -->
    <script src="{{ asset('Admin/assets/js/app.js') }}"></script>
    <script src="{{ asset('Admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('Admin/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
    <script src="{{ asset('Admin/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/js/index.js') }}"></script>
    <script src="{{ asset('Admin/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('Admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })();
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });
            table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#examplet').DataTable({
                paging: true,
                ordering: false,
                info: true
            });
        });
    </script>
    @yield('scripts')
</body>
</html>