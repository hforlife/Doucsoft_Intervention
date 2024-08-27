@include('Admin.include.dashboard')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tableau de bord</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button"
                class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
                <svg class="bi">
                    <use xlink:href="#calendar3" />
                </svg>
                This week
            </button>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Column -->


            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box  text-center" style="background: #000;">
                        <h1 class="font-light text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#file-earmark"></use>
                            </svg>
                        </h1>
                        <h6 class="text-white" style="font-size: 16px;">Formations</h6>
                        <p class="card-text text-white" style="font-size: 15px;">{{ $total1 }}</p>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#people" />
                            </svg>
                        </h1>
                        <h6 class="text-white" style="font-size: 16px;">Nombre d'Adhérents</h6>
                        <p class="card-text text-white" style="font-size: 15px;">{{ $total2 }}</p>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white">
                            <svg class="bi">
                                <use xlink:href="#people" />
                            </svg>
                        </h1>
                        <h6 class="text-white" style="font-size: 16px;">Nombre de Formateurs</h6>
                        <p class="card-text text-white" style="font-size: 15px;">{{ $total3 }}</p>
                    </div>
                </div>
            </div>
            <!-- Column -->

            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white">
                            <svg class="bi">
                                <use xlink:href="#people" />
                            </svg>
                        </h1>
                        <h6 class="text-white" style="font-size: 16px;">Nombre d'Admins</h6>
                        <p class="card-text text-white" style="font-size: 15px;">{{ $total4 }}</p>
                    </div>
                </div>
            </div>

            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-arrow-all"></i>
                            <svg class="bi">
                                <use xlink:href="#puzzle" />
                            </svg>
                        </h1>
                        <h6 class="text-white" style="font-size: 16px;">Certifications</h6>
                        <p class="card-text text-white" style="font-size: 15px;">{{ $total1 }}</p>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Listes des formateurs</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Type d'utilisateur</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Ici il doi y avoir la liste des formateurs -->
                                    @php
                                        $ide = 1;
                                    @endphp
                                    {{-- @foreach ($user1 as $users1) --}}
                                        {{-- <tr>
                                            <td>{{ $ide }}</td>
                                            <td>{{ $users1->name }}</td>
                                            <td>{{ $users1->email }}</td>
                                            <td>{{ $users1->userType }}</td>
                                        </tr> --}}
                                        @php
                                            $ide++;
                                        @endphp
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <center>
                                    <h4>Listes des administrateurs</h4>
                                </center>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Type d'utilisateur</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Ici il doi y avoir la liste des admins -->
                                        @php
                                            $ide = 1;
                                        @endphp
                                        {{-- @foreach ($user2 as $users2) --}}
                                            {{-- <tr>
                                                <td>{{ $ide }}</td>
                                                <td>{{ $users2->name }}</td>
                                                <td>{{ $users2->email }}</td>
                                                <td>{{ $users2->userType }}</td>
                                            </tr> --}}
                                            @php
                                                $ide++;
                                            @endphp
                                        {{-- @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

</main>


</div>
</div>
<script src="asset/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
    integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous">
</script>
<script src="dashboard.js"></script>
</body>

</html>
