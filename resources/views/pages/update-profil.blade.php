@include('home.include.header')
<link rel="stylesheet" href="asset/css/menu.css">
<style>
    .contain {
        padding-bottom: 100px;
    }
</style>

<body>

    <section class="form-container">
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
        <section class="contain">
            <div class="about">
                <h2 class="title">Modifier vos Informations</h2>
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4>Modifier le profil</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="#">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group mb-3">
                                            <label for="name">Nom complet</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                value="#" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                value="#" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="dob">Date de naissance</label>
                                            <input type="date" name="dob" class="form-control" id="dob"
                                                value="#">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="address">Adresse</label>
                                            <textarea name="address" class="form-control" id="address">#</textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100">Enregistrer les
                                            modifications</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</body>

@include('home.include.footer')
