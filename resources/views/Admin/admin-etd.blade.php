@include('Admin.include.dashboard')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestion des Etudiants</h1>
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

    {{-- Body --}}
    <div class="container mt-5">
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

        {{-- Tableau 1 --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Details des Utilisateurs</h4>
                        <a href="add-formateur" class="btn btn-primary float-end">Nouvel Utilisateur</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead style="text-align: center;">
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Type d'utilisateur</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                @php
                                    $ide = 1;
                                @endphp
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $ide }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->userType }}</td>
                                        {{-- <td>
                                            <a href="update-formateur/{{ $user->id }}"
                                                class="btn btn-success btn-sm">Editer</a>
                                            <a href="delete-formateur/{{ $user->id }}"
                                                class="btn btn-danger btn-sm">Supprimer</a>
                                        </td> --}}
                                    </tr>
                                    @php
                                        $ide += 1;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>

                        {{ $users->links() }}

                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>


        {{-- Tableau 2 --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Details des Adherants</h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead style="text-align: center;">
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Formations</th>
                                    <th>Date</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                @php
                                    $ide = 1;
                                @endphp
                                {{-- @foreach ($users as $user) --}}
                                    {{-- <tr>
                                        <td>{{ $ide }}</td>
                                        <td>{{ $users->user_id }}</td>
                                        <td>{{ $users->form_id }}</td>
                                        <td>{{ $users->inscription }}</td>
                                        <td>{{ $users->status }}</td> --}}
                                        {{-- <td>
                                            <a href="update-formateur/{{ $user->id }}"
                                                class="btn btn-success btn-sm">Editer</a>
                                            <a href="delete-formateur/{{ $user->id }}"
                                                class="btn btn-danger btn-sm">Supprimer</a>
                                        </td> --}}
                                    </tr>
                                    @php
                                        $ide += 1;
                                    @endphp
                                {{-- @endforeach --}}
                            </tbody>
                        </table>

                        {{ $users->links() }}

                    </div>
                </div>
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
