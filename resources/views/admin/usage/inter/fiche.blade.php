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
                <form wire:submit='store' class="row gy-2 gx-3 align-items-center" action="/add-inter" method="post">
                    @csrf
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Fiche d'Intervention</h4>
                        <h6 class="card-subtitle">{{ $domaine->name }}</h6>


                        {{-- ID du domaine d'Intervention --}}
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <input type="text" name="domaines_id" id="" class="form-control"
                                    value="{{ $domaine->id }}" hidden>
                            </div>
                        </div>

                        {{-- Nom de l'Intervention --}}
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 text-end control-label col-form-label">Nom de
                                l'Intervention</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" id="" class="form-control"
                                    placeholder="Entrez le Nom de l'Intervention...">
                            </div>
                        </div>

                        {{-- Entreprise --}}
                        <div class="form-group row">
                            <label for="factory_id"
                                class="col-sm-2 text-end control-label col-form-label">Entreprise</label>
                            <div class="col-sm-9">
                                <select name="factory_id" class="form-control">
                                    <option value="" selected disabled>Choisissez une Entreprise...
                                    </option>
                                    @foreach ($entreprise as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('factory_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Agent --}}
                        <div class="form-group row">
                            <label for="agent_id" class="col-sm-2 text-end control-label col-form-label">Agent</label>
                            <div class="col-sm-9">
                                <select name="agent_id" id="" class="form-control">
                                    <option value="" selected disabled>Choisissez un Agent...
                                    </option>
                                    @foreach ($agent as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('agent_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Date --}}
                        <div class="form-group row">
                            <label for="time" class="col-sm-2 text-end control-label col-form-label">Date</label>
                            <div class="col-sm-9">
                                <input type="datetime-local" name="time" id="" class="form-control">
                            </div>
                        </div>
                        {{-- Fiche d'Intervention --}}
                        <div class="form-group row">
                            <label for="name"
                                class="col-sm-2 text-end control-label col-form-label">Intervention</label>
                            <div class="col-sm-9">
                                @livewire('formulaire-intervention')
                            </div>
                        </div>

                    </div>

                    <div class="border-top">
                        <div class="card-body">
                            <input type="submit" value="Ajouter" class="btn btn-primary">
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
    @include('admin.include.footer')
