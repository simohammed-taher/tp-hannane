<head>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <legend>Page create</legend>
        <hr>
        <a href="/eleve" class="btn btn-secondary">Go to index</a>
        @if (session('msg'))
            <ul>
                <li class="alert alert-success">{{ session('msg') }}</li>
            </ul>
        @endif
        <form action="{{ url('eleve') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input required type="text" class="form-control" name="nom" id="nom"
                    placeholder="Entrez le nom">
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input required type="text" class="form-control" name="prenom" id="prenom"
                    placeholder="Entrez le prenom">
            </div>
            <div class="mb-3">
                <label for="fil" class="form-label">Filiere</label>
                <input required type="text" class="form-control" name="fil" id="fil"
                    placeholder="Entrez le filiere">
            </div>
            <div class="mb-3">
                <label for="moyenne" class="form-label">Moyenne</label>
                <input required type="text" class="form-control" name="moyenne" id="moyenne"
                    placeholder="Entrez la moyenne">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
        <hr>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    </
