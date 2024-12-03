<!DOCTYPE html>
<html dir="ltr" lang="fr-FR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DoucSoft Intervention || Ajouter Intervention</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png" />
    <!-- Custom CSS -->
    <link href="/assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <link href="/assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="/assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/assets/dist/css/style.min.css" rel="stylesheet" />
    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
    <style>
        /* Tableau */


        .table th,
        .table td {
            padding: 8px;
            text-align: center;
        }

        .table th {
            background-color: #f7f6f6;
            color: #333;
            font-weight: bold;
            border-radius: 10px;
        }

        .circle {
            display: inline-block;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            margin-right: 5px;
            cursor: pointer;
        }

        .red {
            background-color: red;
        }

        .orange {
            background-color: orange;
        }

        .green {
            background-color: green;
        }

        .risk-check label {
            display: flex;
            align-items: center;
        }
    </style>
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
                    <a class="navbar-brand" href="{{ route('dashboard') }}">
                        <!-- Logo icon -->
                        <img src="/assets/images/doucsoft-white.png" alt="homepage" class="light-logo" width="220" />
                        {{-- <b class="logo-icon ps-2">
                            <!--You can put here icon as well / <i class="wi wi-sunset"></i> /-->
                            <!-- Dark Logo icon -->
                            <img src="/assets/images/logo-icon.png" alt="homepage" class="light-logo" width="25" />
                        </b>

                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text ms-2">
                            <!-- dark Logo text -->
                            <img src="/assets/images/logo-text.png" alt="homepage" class="light-logo" />
                        </span> --}}
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well / <i class="wi wi-sunset"></i> /-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="/assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
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
                                <a class="dropdown-item" href="/logout"><i class="fa fa-power-off me-1 ms-1"></i>
                                    Déconnexion</a>
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('dashboard') }}" aria-expanded="false"><i
                                    class="mdi mdi-view-dashboard"></i><span class="hide-menu">Tableau de
                                    Bord</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('inter.index') }}" aria-expanded="false"><i
                                    class="mdi mdi-alert"></i><span class="hide-menu">Interventions</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('type_int.index') }}" aria-expanded="false"><i
                                    class="mdi mdi-chart-bubble"></i><span class="hide-menu">Types
                                    D'interventions</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('users') }}"
                                aria-expanded="false"><i class="mdi mdi-account-multiple-outline"></i><span
                                    class="hide-menu">Utilisateur</span></a>
                        </li>
                        {{-- Rapports Supprimé --}}

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
                        <h4 class="page-title">Ajouter Intervetion</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <a href="/type-int"> Interventions</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Ajouter une Interventions
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
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
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">FICHE D'INFORMATION - ANALYSE &amp; AUDIT</h4>
                        <h6 class="card-subtitle"></h6>
                        <form id="example-form" action="/add-inter" method="post" class="mt-5"
                            novalidate="novalidate">
                            @csrf
                            <div role="application" class="wizard clearfix" id="steps-uid-0">
                                <div class="steps clearfix">
                                    <ul role="tablist">
                                        <li role="tab" class="first current" aria-disabled="false"
                                            aria-selected="true"><a id="steps-uid-0-t-0" href="#steps-uid-0-h-0"
                                                aria-controls="steps-uid-0-p-0"><span
                                                    class="current-info audible">current step: </span><span
                                                    class="number">1.</span> Fiche d'Information</a></li>
                                        <li role="tab" class="done" aria-disabled="false"
                                            aria-selected="false"><a id="steps-uid-0-t-1" href="#steps-uid-0-h-1"
                                                aria-controls="steps-uid-0-p-3"><span class="number">2.</span>
                                                CheckList</a></li>
                                        <li role="tab" class="disabled last" aria-disabled="true"><a
                                                id="steps-uid-0-t-2" href="#steps-uid-0-h-2"
                                                aria-controls="steps-uid-0-p-3"><span class="number">3.</span>
                                                Profil</a></li>
                                    </ul>
                                </div>
                                <div class="content clearfix">

                                    {{-- Part 1 --}}
                                    <h3 id="steps-uid-0-h-0" tabindex="-1" class="title current">Fiche d'Information
                                    </h3>
                                    <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0"
                                        class="body current" aria-hidden="false" style="left: 0px;">
                                        <table class="table" id="infoTable">
                                            <tbody>
                                                <tr>
                                                    <th>#</th>
                                                    <th scope="col">Services et/ou Infrastructures</th>
                                                    <th scope="col">Risque</th>
                                                    <th scope="col">Observations</th>
                                                    <th scope="col">Check</th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <input id="serviceDescription"
                                                            name="data[1][serviceDescription]" type="text"
                                                            class="form-control" placeholder="Description du Service"
                                                            required>
                                                    </td>
                                                    <td>
                                                        <div class="risk-check">
                                                            <label for="riskLevel1">
                                                                <input type="radio" name="data[1][riskLevel1]"
                                                                    value="high">
                                                                <div class="circle red" title="Élevé"></div>
                                                            </label>
                                                            <label for="riskLevel1">
                                                                <input type="radio" name="data[1][riskLevel1]"
                                                                    value="medium">
                                                                <div class="circle orange" title="Moyen"></div>
                                                            </label>
                                                            <label for="riskLevel1">
                                                                <input type="radio" name="data[1][riskLevel1]"
                                                                    value="low">
                                                                <div class="circle green" title="Faible"></div>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <textarea name="data[1][observation]" id="observation" class="form-control" placeholder="Observation"
                                                            cols="30" required></textarea>
                                                    </td>
                                                    <td>
                                                        <label class="customcheckbox mb-3" for="completed">
                                                            <input type="checkbox" name="data[1][completed]">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <center>
                                            <button class="btn btn-primary" id="addInfoRow" onclick="addInfoRow()"
                                                title="Ajouter une ligne"><i class="fa fa-plus"
                                                    aria-hidden="true"></i></button>
                                        </center>
                                    </section>


                                    {{-- Part 4 --}}
                                    <h3 id="steps-uid-0-h-1" tabindex="-1" class="title">Profil</h3>
                                    <section id="steps-uid-0-p-1" role="tabpanel" aria-labelledby="steps-uid-0-h-1"
                                        class="body" aria-hidden="true" style="display: none;">
                                        <table class="table" id="checklistTable">
                                            <tr>
                                                <th>Tâches</th>
                                                <th>Check</th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="data[1][tache]"
                                                        placeholder="Ajouter une tâche..."
                                                        class="required form-control"></td>
                                                <td><input type="checkbox" name="data[1][check]" class="required">
                                                </td>
                                            </tr>
                                        </table>
                                        <center>
                                            <button class="btn btn-primary" id="addChecklistRow"
                                                onclick="addChecklistRow()" title="Ajouter une ligne"><i
                                                    class="fa fa-plus" aria-hidden="true"></i></button>
                                        </center>
                                    </section>

                                    {{-- Part 5 --}}
                                    <h3 id="steps-uid-0-h-2" tabindex="-1" class="title current">profile</h3>
                                    <section id="steps-uid-0-p-2" role="tabpanel" aria-labelledby="steps-uid-0-h-2"
                                        class="body current" aria-hidden="false" style="left: 0px;">
                                        <label for="name">Nom de l'Intervention *</label>
                                        <input id="name" name="name" type="text"
                                            class="required form-control valid" aria-invalid="false" required>
                                        <label for="intervention_type">Type d'Intervention *</label>
                                        <Select id="intervention_type" name="intervention_type"
                                            class="form-control valid" aria-invalid="false" required>
                                            <option value="" disabled selected>Choisissez un type d'intervention
                                            </option>
                                            @foreach ($list1 as $lists1)
                                                <option value="{{ $lists1->id }}">
                                                    {{ $lists1->name }}
                                                </option>
                                            @endforeach
                                        </Select>
                                        <label for="factory">Entreprise *</label>
                                        <input id="factory" name="factory" type="text"
                                            class="required form-control valid" aria-invalid="false" required>
                                        <label for="time">Date de l'Intervention</label>
                                        <input id="time" name="time" type="Date"
                                            class="form-control valid" aria-invalid="false" required>
                                        <label for="agent">Agent</label>
                                        <Select id="agent" name="agent" class="form-control valid"
                                            aria-invalid="false" required>
                                            <option value="" disabled selected>Choisissez un Agent pour cette
                                                Intervention
                                            </option>
                                            @foreach ($list as $lists)
                                                <option value="{{ $lists->id }}">
                                                    {{ $lists->name }}
                                                </option>
                                            @endforeach
                                        </Select>
                                        <p>(*) Obligatoire</p>


                                    </section>
                                </div>
                                <div class="actions clearfix">
                                    <ul role="menu" aria-label="Pagination">
                                        <li class="disabled" aria-disabled="true"><a href="#previous"
                                                role="menuitem">Précedent</a></li>
                                        <li aria-hidden="false" aria-disabled="false"><a href="#next"
                                                role="menuitem">Suivant</a></li>
                                        <li aria-hidden="true" style="display: none;" hidden><a href="#finish"
                                                role="menuitem">Enregistrer</a></li>
                                        <input type="submit" value="Envoyer"
                                            style="background: #17f; padding: 8px 10px; border:none; border-radius: 5px; color: #fff;" />
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
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
    <script src="assets/js/form.js"></script>
</body>

</html>
