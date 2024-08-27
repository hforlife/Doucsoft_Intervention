@include('Admin.include.dashboard')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Modifier</h1>
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Modifier Utilisateur</h4>
                    </div>
                    <div class="card-body">
                        <form action="http://127.0.0.1:8000/update-traitement" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" hidden name="id" class="form-control"
                                    value="{{ $users->id }}">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom & Prénom</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    value="{{ $users->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    value="{{ $users->email }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    value="{{ $users->password }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="userType" class="form-label">Type d'utilisateur</label>
                                <select name="userType" class="form-control">
                                    <option value="Admin">Admin</option>
                                    <option value="Formateur">Formateur</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
