<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<form method="POST" action="{{ url('eleve/' . $Eleve->id) }}">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" id="nom" value="{{ $Eleve->nom }}"
            placeholder="Entrez le nom">
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Prenom</label>
        <input type="text" class="form-control" name="prenom" id="prenom" value="{{ $Eleve->prenom }}"
            placeholder="Entrez le prenom">
    </div>
    <div class="mb-3">
        <label for="fil" class="form-label">Filiere</label>
        <input type="text" class="form-control" name="fil" id="fil" value="{{ $Eleve->fil }}"
            placeholder="Entrez le filiere">
    </div>
    <div class="mb-3">
        <label for="moyenne" class="form-label">Moyenne</label>
        <input type="text" class="form-control" name="moyenne" id="moyenne" value="{{ $Eleve->moyenne }}"
            placeholder="Entrez la moyenne">
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
    <button type="button" class="btn btn-danger text-white"
        onclick="window.location.href='{{ url('eleve') }}'">Annuler</button>
</form>
