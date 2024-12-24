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
                <h4 class="page-title">CheckList</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                CheckList
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
                        <h5 class="card-title mb-0">Historique CheckList</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Intervention</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            @php
                                $ide = 1;
                            @endphp
                            @foreach ($collection as $item)
                            <tbody class="customtable">
                                <tr>
                                    <td>{{ $ide }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->intervention->name }}</td>
                                    <td>
                                        <a href="{{ url('/CPDF/' . $item->id) }}"
                                            type="button" class="btn btn-warning">
                                            <i class="mdi mdi-file-document"></i>
                                        </a>
                                        <a href="{{ url('/delcheklist/' . $item->id) }}"
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

                        </table>
                    </div>
                </div>

                <a class="btn btn-primary" href="{{ route('check.create') }}">Ajouter une Checklist</a>

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Fin Tableau -->
        <!-- ============================================================== -->
@include('admin.include.footer')
