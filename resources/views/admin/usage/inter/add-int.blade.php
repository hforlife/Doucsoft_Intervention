@include('admin.include.header')
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

        {{-- Gestion de erreurs --}}
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
        {{-- Fin Gestion des erreurs --}}

        <div class="row">
            <div class="card">
                <div class="card-body wizard-content">
                    <h4 class="card-title">Selectionnez un Type d'Intervention</h4>
                    <div class="row g-3"> <!-- Grille avec espacement -->
                        @foreach ($domains as $item)
                            <div class="col-md-3 col-sm-6"> <!-- Colonne adaptable -->
                                <a class="btn btn-primary w-100 d-flex justify-content-between align-items-center" href="/dom/{{$item->id}}/domain">
                                    {{ $item->name }}
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
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
    @include('admin.include.footer')
