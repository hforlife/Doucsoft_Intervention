@include('Admin.include.dashboard')

<style>
      .card-text {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 3;
        line-height: 1.5em;
        max-height: 4.5em;
    }

    .read-more-content {
        display: none;
    }
</style>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestion des Formations</h1>
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




        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Details des Formations</h4>
                        <a href="{{ url('add-formation') }}" class="btn btn-primary float-end">Nouvelle Formation</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">

                            <div class="album py-5 bg-body-tertiary">
                                <div class="container">
                                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                        @foreach ($formation as $formations)
                                            <div class="col">
                                                <div class="card shadow-sm">
                                                    @if ($formations->image)
                                                    <img src="{{ asset('storage/' . $formations->image) }}" alt="Image de la formation" class="img">
                                                    @endif
                                                    <div class="card-body">
                                                        <p class="title" style="text-align: center;">
                                                            {{ $formations->title }}</p>
                                                        <p class="card-text">{{ $formations->description }}</p>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="btn-group">
                                                                <a href="{{ url('update-formation/' . $formations->id) }}"
                                                                    class="btn btn-sm btn-outline-secondary">Modifier</a>
                                                                <a href="{{ url('delete-formation/' . $formations->id) }}"
                                                                    class="btn btn-sm btn-outline-secondary">Supprimer</a>
                                                            </div>
                                                            <small
                                                                class="text-body-secondary">{{ $formations->start_date }}</small>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </table>
                        {{ $formation->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
    integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous">
</script>
<script src="{{ asset('dashboard.js') }}"></script>
</body>

</html>
