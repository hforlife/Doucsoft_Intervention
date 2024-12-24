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
                        <h4 class="page-title">Type d'interventions</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Types d'interventions
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
                            <div class="card-body">
                                <h5 class="card-title mb-0">Types d'interventions</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $ide = 1;
                                    @endphp

                                    @foreach ($list as $lists)
                                        <tbody class="customtable">
                                            <tr>
                                                <td>{{ $ide }}</td>
                                                <td>{{ $lists->name }}</td>
                                                <td>{{ $lists->description }}</td>
                                                <td>
                                                    <a href="{{ url('/edit-type-int/' . $lists->id) }}"
                                                        type="button" class="btn btn-primary">
                                                        <i class="mdi mdi-pencil"></i>
                                                    </a>
                                                    <a href="{{ url('/del-type-int/' . $lists->id) }}"
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
                        {{ $list->links() }}
                        <a href="/add-type-int" type="button" class="btn btn-primary">
                            Ajouter
                        </a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Fin Tableau -->
                <!-- ============================================================== -->
                @include('admin.include.footer')