<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>


<legend>page create</legend>
<hr>
<a href="/">go to index</a>
@if (session('msg'))
    <ul>
        <li class="alert alert-success ">{{ session('msg') }}</li>
    </ul>
@endif
<form method="post" action="/create">
    @csrf
    <input type="text"class="form-control" name="nom" id="" placeholder="entre le nom"><br>
    <input type="text"class="form-control" name="prenom" id=""placeholder="entre le prenom"><br>
    <input type="text"class="form-control" name="fil" id="" placeholder="entre le fil"><br>
    <input type="text"class="form-control" name="moyenne" id="" placeholder="entre le moyenne"><br>
    <button class="btn btn-primary">Save</button>
</form>


<h1 class="mb-4">Page liste Eleve</h1>
<table class="table table-striped">
    <thead class="bg-primary text-white">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>fil</th>
            <th>Moyene</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($eleves as $eleve)
            <tr>
                <td>{{ $eleve->id }}</td>
                <td>{{ $eleve->nom }}</td>
                <td>{{ $eleve->prenom }}</td>
                <td>{{ $eleve->fil }}</td>
                <td>{{ $eleve->moyenne }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
