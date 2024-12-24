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
                <h4 class="page-title">Intervention</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Intervention
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
                        <h5 class="card-title mb-0">Listes Rapports</h5>
                    </div>
                    <div class="table-responsive">
                        @if ($inters && $inters->count() > 0)
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Domaine Intervention</th>
                                        <th scope="col">Entreprise</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Agent</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="customtable">
                                    @php
                                        $ide = 1;
                                    @endphp

                                    @foreach ($inters as $inter)
                                        <tr>
                                            <td>{{ $ide }}</td>
                                            <td>{{ $inter->name }}</td>
                                            <td>{{ $inter->domaines->name }}</td>
                                            <td>{{ $inter->factory->name }}</td>
                                            <td>{{ $inter->time }}</td>
                                            <td>{{ $inter->agent->name }}</td>
                                            <td>
                                                {{-- <a href="{{ url('/editinter/' . $inter->id) }}" type="button"
                                                    class="btn btn-primary">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a> --}}
                                                <a href="{{ url('/PDF/' . $inter->id . '/' . $inter->domaines_id)}}" type="button" class="btn btn-warning">
                                                    <i class="mdi mdi-file-document"></i>
                                                </a>
                                                <a href="{{ url('/delinter/' . $inter->id) }}" type="button"
                                                    class="btn btn-danger">
                                                    <i class="mdi mdi-delete"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @php
                                            $ide++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p class="text-center">Aucune intervention trouvée.</p>
                        @endif

                    </div>
                </div>
                {{ $inters->links() }}
                <a class="btn btn-primary" href="/addinter">Ajouter Intervention</a>

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Fin Tableau -->
        <!-- ============================================================== -->
        @include('admin.include.footer')
