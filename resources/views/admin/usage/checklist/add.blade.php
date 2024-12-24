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
                <h4 class="page-title">Ajouter Checklist</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="/type-int"> CheckList</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Ajouter une checkList
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
        <div class="row">
            <!-- Column -->

            <!-- Column -->

            <!-- Column -->

            <!-- Column -->

            <!-- Column -->

            <!-- Column -->

            <!-- Column -->
        </div>

        <!-- ============================================================== -->
        <!-- Debut Tableau -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
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
                <!-- ============================================================== -->
                <!-- Tableau 1 -->
                <!-- ============================================================== -->
                <div class="card">
                    <form class="form-horizontal" action="{{route('check.store')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Info Checklist</h4>
                            {{-- Name --}}
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nom</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" id="fname"
                                        placeholder="Nom du domaine">
                                </div>
                            </div>
                            {{-- Intervention --}}
                            <div class="form-group row">
                                <label for="intervention_id"
                                    class="col-sm-3 text-end control-label col-form-label">Intervention</label>
                                <div class="col-sm-9">
                                    <select name="intervention_id" class="form-control" id="">
                                        <option value="" disabled selected>Choisissez une intervention</option>
                                        @foreach ($items as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="intervention_id"
                                    class="col-sm-3 text-end control-label col-form-label">Checklist</label>
                                <div class="col-sm-9">
                                    @livewire('checklist')
                                </div>
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
    </div>
    <!-- ============================================================== -->
    <!-- Fin Tableau -->
    <!-- ============================================================== -->
    @include('admin.include.footer')
