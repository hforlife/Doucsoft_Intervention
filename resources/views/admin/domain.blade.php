<!DOCTYPE html>
<html dir="ltr" lang="fr-FR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DoucSoft Intervention || Domaines d'Interventions</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png" />
    <!-- Custom CSS -->
    <link href="/assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="/assets/dist/css/style.min.css" rel="stylesheet" />
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{ route('dashboard')  }}">
                        <!-- Logo icon -->
                        <img src="/assets/images/doucsoft-white.png" alt="homepage" class="light-logo" width="220" />

                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="mdi mdi-magnify fs-4"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter" />
                                <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <ul class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    animated
                    bounceInDown
                  "
                                aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span
                                                        class="
                                btn btn-success btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i
                                                            class="mdi mdi-calendar text-white fs-4"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Event today</h5>
                                                        <span class="mail-desc">Just a reminder that event</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span
                                                        class="
                                btn btn-info btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i
                                                            class="mdi mdi-settings fs-4"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Settings</h5>
                                                        <span class="mail-desc">You can customize this template</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span
                                                        class="
                                btn btn-primary btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i
                                                            class="mdi mdi-account fs-4"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Pavan kumar</h5>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span
                                                        class="
                                btn btn-danger btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i
                                                            class="mdi mdi-link fs-4"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="/assets/images/users/1.jpg" alt="user" class="rounded-circle"
                                    width="31" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/profil"><i
                                        class="mdi mdi-account me-1 ms-1"></i> Mon Profil</a>
                                <!-- Lost -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="mdi mdi-settings me-1 ms-1"></i>
                                    Parametre du compte</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout"><i
                                        class="fa fa-power-off me-1 ms-1"></i> Déconnexion</a>
                                <div class="dropdown-divider"></div>
                                <div class="ps-4 p-10">
                                    <a href="/profil"
                                        class="btn btn-sm btn-success btn-rounded text-white">Voir Profil</a>
                                </div>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                       <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard') }}"
                                aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Tableau de Bord</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('inter.index') }}"
                                aria-expanded="false"><i class="mdi mdi-alert"></i><span
                                    class="hide-menu">Interventions</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('type_int.index') }}"
                                aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
                                    class="hide-menu">Types D'interventions</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dom.index') }}"
                                aria-expanded="false"><i class="mdi mdi-domain"></i><span
                                    class="hide-menu">Domaines D'interventions</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('factory.index') }}"
                                aria-expanded="false"><i class="mdi mdi-factory"></i><span
                                    class="hide-menu">Entreprise</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('users') }}"
                                aria-expanded="false"><i class="mdi mdi-account-multiple-outline"></i><span
                                    class="hide-menu">Utilisateur</span></a>
                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Domaines d'Intervention</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                      Domaines d'Intervention
                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->


                 <!-- ============================================================== -->
                <!-- Debut Tableau -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        {{-- Gestion Erreurs --}}
                         @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="alert alert-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                        {{-- Fin Gestion Erreurs --}}
                <!-- ============================================================== -->
                <!-- Tableau 1 -->
                <!-- ============================================================== -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Listes Domaines</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Type d'Intervention</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $ide = 1;
                                    @endphp

                                    @foreach ($entrys as $entry)
                                        <tbody class="customtable">
                                            <tr>
                                                <td>{{ $ide }}</td>
                                                <td>{{ $entry->name }}</td>
                                                <td>{{ $entry->description }}</td>
                                                <td>{{ $entry->intervention_type->name }}</td>
                                               <td>
                                                <a href="{{ url('/editdomain/' . $entry->id) }}"
                                                    type="button" class="btn btn-primary">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <a href="{{ url('/deldomain/' . $entry->id) }}"
                                                    type="button" class="btn btn-danger">
                                                    <i class="mdi mdi-delete"></i>
                                                </a>
                                            </td>
                                            </tr>
                                        </tbody>
                                    @php
                                        $ide++;
                                    @endphp
                                    @endforeach
                                    {{ $entrys->links() }}


                                </table>
                            </div>
                        </div>
                        <a class="btn btn-primary" href="/adddomain"><i class="fa fa-plus" aria-hidden="true"></i></a>

                    </div>
                </div>
       <!-- ============================================================== -->
       <!-- Fin Tableau -->
       <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer text-center">
                    Tous droit réservé par DoucSoft-Technlogie. Designé et Developpé par
                    <a href="https://www.Doucsoft.com">Doucsoft</a>.
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="/assets/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
        <script src="/assets/dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="/assets/dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="/assets/dist/js/custom.min.js"></script>
        <!--This page JavaScript -->
        <!-- <script src="/assets/dist/js/pages/dashboards/dashboard1.js"></script> -->
        <!-- Charts js Files -->
        <script src="/assets/libs/flot/excanvas.js"></script>
        <script src="/assets/libs/flot/jquery.flot.js"></script>
        <script src="/assets/libs/flot/jquery.flot.pie.js"></script>
        <script src="/assets/libs/flot/jquery.flot.time.js"></script>
        <script src="/assets/libs/flot/jquery.flot.stack.js"></script>
        <script src="/assets/libs/flot/jquery.flot.crosshair.js"></script>
        <script src="/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="/assets/dist/js/pages/chart/chart-page-init.js"></script>
</body>

</html>