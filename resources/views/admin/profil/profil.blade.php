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
                        <h4 class="page-title">Profil</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                      Profil
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

                </div>

                 <!-- ============================================================== -->
                <!-- Debut Tableau -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <!-- Tableau Profil Utilisateur -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-0">Profil Utilisateur</h5>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Attribut</th>
                                            <th scope="col">Détails</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nom Utilisateur</td>
                                            <td>{{ $admin->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email Utilisateur</td>
                                            <td>{{ $admin->email }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a type="button" class="btn btn-cyan btn-sm text-white" href="/editadmin/{{ $admin->id }}">
                                 <i class="fa fa-edit" aria-hidden="true"></i> Modifier profil
                              </a>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- Fin Tableau -->
       <!-- ============================================================== -->
       @include('admin.include.footer')