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
                <h2 class="title">Profil</h2>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="storage/formations/Capture d'écran 2024-04-10 221310.png"
                                        class="rounded-circle img-thumbnail" alt="Profile Picture">
                                    <h4 class="card-title mt-3">John Doe</h4>
                                    <p class="card-text">Email: john.doe@example.com</p>
                                    <a href="edit" class="btn btn-primary mt-3">Modifier le profil</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Informations personnelles</h4>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Nom:</strong> John Doe</li>
                                        <li class="list-group-item"><strong>Email:</strong> john.doe@example.com</li>
                                        <li class="list-group-item"><strong>Date de naissance:</strong> 01/01/1990</li>
                                        <li class="list-group-item"><strong>Adresse:</strong> 123 Rue Exemple, Paris,
                                            France
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       
</body>

@include('home.include.footer')
