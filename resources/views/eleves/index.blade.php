<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

<div class="container">
    <h1>page index</h1>
    <hr>
    <a href="/eleve/create"class="btn btn-secondary">go to create</a>
    <h1 class="mb-4">Page liste Eleve</h1>
    <table class="table table-striped">
        <thead class="bg-primary text-white">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Filiere</th>
                <th>Moyenne</th>
                <th>Actions</th>
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
                    <td>
                        <a href="{{ url('/eleve/' . $eleve->id) . '/edit' }}" title="Edit Student">
                            <button class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier
                            </button>
                        </a>
                        <form method="POST" action="{{ url('/eleve' . '/' . $eleve->id) }}" accept-charset="UTF-8"
                            style="display:inline">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                                onclick="confirmDelete()">

                                <i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer
                            </button>
                            <script type="text/javascript">
                                function confirmDelete() {
                                    Swal.fire({
                                        title: 'Are you sure?',
                                        text: "You won't be able to revert this!",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Yes, delete it!'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            Swal.fire(
                                                'Deleted!',
                                                'Your file has been deleted.',
                                                'success'
                                            )
                                        }
                                    })
                                }
                            </script>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
