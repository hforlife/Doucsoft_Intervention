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
                <h4 class="card-title">Selectionnez un Domaine d'Intervention</h4>
                <h6 class="card-subtitle"></h6>
                <div class="row g-3">
                    @if (!empty($domain) && $domain->domaines->isNotEmpty())
                        @foreach ($domain->domaines as $item)
                        <div class="col-md-3 col-sm-6">
                            <a class="btn btn-primary w-100 d-flex justify-content-between align-items-center" href="/fiche/{{ $item->id }}">
                                {{ $item->name }}
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                            {{-- @livewire('formulaire-intervention') --}}
                        </div>
                        @endforeach
                    @else
                        <p>Aucun domaine trouvé pour ce type d'intervention.</p>
                    @endif
                </div>

                {{-- Formulaire Details --}}


            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
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
