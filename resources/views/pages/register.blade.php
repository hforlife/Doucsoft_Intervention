<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <style>
        .logo {
    font-size: 3.5rem;
    font-weight: 800;
    color: var(--light-color);
    padding: 5px;
    text-align: center;
}
.logo a{
    color: var(--light-color);
}
.logo span {
    color: var(--orange);
}

    </style>
</head>
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
    <form action="register" method="post" enctype="multipart/form-data">
        @csrf
        <div class="logo"><a href="index"><span>Douc</span>soft_<span>Learning</span></a></div>
        <h3>Inscription</h3>
        <input type="text" name="name" class="box" placeholder="Entrez votre nom..." required>
        <input type="email" name="email" class="box" placeholder="Entrez votre email..." required>
        <input type="password" name="password" class="box" placeholder="Entrez votre mot de passe..." required>
        <p>Vous avez déja un compte? <a href="login" style="color:#6c5ce7;">Connectez-vous</a></p>
        <input type="submit" value="Inscription" class="btn" name="submit">
    </form>
</section>
</body>
</html>