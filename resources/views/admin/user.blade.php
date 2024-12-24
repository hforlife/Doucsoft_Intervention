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
                        <h4 class="page-title">Gestion Utilisateur</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Gestion Utilisateur
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
                                <h5 class="card-title mb-0">Listes Admins</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nom & Prénom</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $ide = 1;
                                    @endphp

                                    @foreach ($admin as $admins)
                                        <tbody class="customtable">
                                            <tr>
                                                <td>{{ $ide }}</td>
                                                <td>{{ $admins->name }}</td>
                                                <td>{{ $admins->email }}</td>
                                                <td>
                                                    <a href="{{ url('/editadmin/' . $admins->id) }}" type="button"
                                                        class="btn btn-primary">
                                                        <i class="mdi mdi-pencil"></i>
                                                    </a>
                                                    <a href="{{ url('/deladmin/' . $admins->id) }}" type="button"
                                                        class="btn btn-danger">
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
                        {{ $admin->links() }}

                        <a href="/addadmin" class="btn btn-primary">
                            Nouvel Admin
                        </a><br><br>


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
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $ide = 1;
                                    @endphp

                                    @foreach ($sup as $sups)
                                        <tbody class="customtable">
                                            <tr>
                                                <td>{{ $ide }}</td>
                                                <td>{{ $sups->name }}</td>
                                                <td>{{ $sups->email }}</td>
                                                <td>{{ $sups->address }}</td>
                                                <td>{{ $sups->number }}</td>
                                                <td>
                                                    <a href="{{ url('/editsup/' . $sups->id) }}" type="button"
                                                        class="btn btn-primary">
                                                        <i class="mdi mdi-pencil"></i>
                                                    </a>
                                                    <a href="{{ url('/delsup/' . $sups->id) }}" type="button"
                                                        class="btn btn-danger">
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
                        {{ $sup->links() }}
                        <a href="/addsup" class="btn btn-primary">
                            Nouveau Superviseur
                        </a><br><br>

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
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $ide = 1;
                                    @endphp

                                    @foreach ($agent as $agents)
                                        <tbody class="customtable">
                                            <tr>
                                                <td>{{ $ide }}</td>
                                                <td>{{ $agents->name }}</td>
                                                <td>{{ $agents->email }}</td>
                                                <td>{{ $agents->address }}</td>
                                                <td>{{ $agents->number }}</td>
                                                <td>
                                                    <a href="{{ url('/editagent/' . $agents->id) }}"
                                                        type="button" class="btn btn-primary">
                                                        <i class="mdi mdi-pencil"></i>
                                                    </a>
                                                    <a href="{{ url('/delagent/' . $agents->id) }}"
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
                        {{ $agent->links() }}
                    </div>
                </div>
                <a href="/addagent" class="btn btn-primary">
                    Nouvel Agent
                </a><br><br>
                <!-- ============================================================== -->
                <!-- Fin Tableau -->
                <!-- ============================================================== -->
                @include('admin.include.footer')