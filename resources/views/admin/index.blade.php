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
                <h4 class="page-title">Tableau de Bord</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            {{-- <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li> --}}
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
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-view-dashboard"></i>
                        </h1>
                        <h6 class="text-white">Admins</h6>
                        <h6 class="text-white">{{ $admin }}</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-factory"></i>
                        </h1>
                        <h6 class="text-white">Entreprises</h6>
                        <h6 class="text-white">{{ $factory }}</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-collage"></i>
                        </h1>
                        <h6 class="text-white">Interventions</h6>
                        <h6 class="text-white">{{ $int }}</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-border-outside"></i>
                        </h1>
                        <h6 class="text-white">Types d'Interventions</h6>
                        <h6 class="text-white">{{ $type_int }}</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- Debut Tableau -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <!-- ============================================================== -->
                <!-- Tableau 1 -->
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Listes Admins</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom & Prénom</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            @php
                                $ide = 1;
                            @endphp

                            @foreach ($list1 as $lists1)
                                <tbody class="customtable">
                                    <tr>
                                        <td>{{ $ide }}</td>
                                        <td>{{ $lists1->name }}</td>
                                        <td>{{ $lists1->email }}</td>
                                    </tr>
                                </tbody>
                                @php
                                    $ide++;
                                @endphp
                            @endforeach
                        </table>
                    </div>
                </div>
                {{ $list1->links() }}


                <!-- ============================================================== -->
                <!-- Tableau 2 -->
                <!-- ============================================================== -->


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Listes Superviseur</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom & Prénom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">Numéro</th>
                                </tr>
                            </thead>
                            @php
                                $ide = 1;
                            @endphp

                            @foreach ($list2 as $lists2)
                                <tbody class="customtable">
                                    <tr>
                                        <td>{{ $ide }}</td>
                                        <td>{{ $lists2->name }}</td>
                                        <td>{{ $lists2->email }}</td>
                                        <td>{{ $lists2->address }}</td>
                                        <td>{{ $lists2->number }}</td>
                                    </tr>
                                </tbody>
                                @php
                                    $ide++;
                                @endphp
                            @endforeach
                        </table>
                    </div>
                </div>
                {{ $list2->links() }}

                <!-- ============================================================== -->
                <!-- Tableau 3 -->
                <!-- ============================================================== -->


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Listes Agents</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom & Prénom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">Numéro</th>
                                </tr>
                            </thead>
                            @php
                                $ide = 1;
                            @endphp

                            @foreach ($list3 as $lists3)
                                <tbody class="customtable">
                                    <tr>
                                        <td>{{ $ide }}</td>
                                        <td>{{ $lists3->name }}</td>
                                        <td>{{ $lists3->email }}</td>
                                        <td>{{ $lists3->address }}</td>
                                        <td>{{ $lists3->number }}</td>
                                    </tr>
                                </tbody>
                                @php
                                    $ide++;
                                @endphp
                            @endforeach
                        </table>
                    </div>
                </div>
                {{ $list3->links() }}
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Fin Tableau -->
        <!-- ============================================================== -->

        @include('admin.include.footer')
