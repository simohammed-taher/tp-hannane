@extends('layout')

@section('title', 'Page student')

@section('content')
    <h1 class="mb-4">Page liste student</h1>
    <table class="table table-striped">
        <thead class="bg-primary text-white">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Adress</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->nom }}</td>
                    <td>{{ $student->adress }}</td>
                    <td>{{ $student->mobile }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
