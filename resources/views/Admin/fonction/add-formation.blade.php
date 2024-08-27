@include('Admin.include.dashboard')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ajouter</h1>
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


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Nouvelle Formation</h4>
                    </div>
                    <div class="card-body">
                        <form action="add-formation" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Titre de la formation</label>
                                <input type="text" name="title" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Description</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="user_id" class="form-label">Formateur</label>
                                <select name="user_id" id="" class="form-control">
                                    <option value="" disabled selected>Sélectionnez un Formateur</option>
                                    @foreach ($formations as $formation)
                                        <option value="{{ $formation->id }}">{{ $formation->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="name" class="form-label">Date de debut de la formation</label>
                                <input type="date" name="start_date" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Date de fin de la formation</label>
                                <input type="date" name="end_date" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image de la formation</label>
                                <input type="file" name="image" class="form-control" id="image"
                                    accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
