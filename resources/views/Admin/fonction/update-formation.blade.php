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
                        <h4>Modifier Formation</h4>
                    </div>
                    <div class="card-body">
                        <form action="http://127.0.0.1:8000/update-traitement_formation" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <!-- ID caché -->
                            <input type="hidden" name="id" class="form-control" value="{{ $formation->id }}">

                            <div class="mb-3">
                                <label for="title" class="form-label">Titre de la formation</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ $formation->title }}" id="title" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" cols="30" rows="10" class="form-control">{{ $formation->description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="user_id" class="form-label">Formateur</label>
                                <select name="user_id" id="user_id" class="form-control">
                                    <option value="{{ $formation->id }}" disabled selected>

                                        @foreach ($users as $user)
                                            @if ($user->id == $formation->user_id)
                                                {{ $user->name }}
                                            @endif
                                        @endforeach

                                    </option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="start_date" class="form-label">Date de début de la formation</label>
                                <input type="date" name="start_date" value="{{ $formation->start_date }}"
                                    class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="end_date" class="form-label">Date de fin de la formation</label>
                                <input type="date" name="end_date" value="{{ $formation->end_date }}"
                                    class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image de la formation</label>
                                <input type="file" name="image" class="form-control" id="image"
                                    accept="image/*">
                                {{-- @if ($formation->image)
                                    <p>Image actuelle : <img src="{{ asset('storage/' . $formation->image) }}"
                                            alt="Image actuelle" width="100"></p>
                                @endif --}}
                            </div>

                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
