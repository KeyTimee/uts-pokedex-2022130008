@extends('layouts.app')

@section('content')
<div class='container'>
    <main>
        <h1>{{ $pokemon->name }}</h1>

        <div class="row">
            <div class="col-md-4">
                <img src="{{ Storage::url($pokemon->photo) }}" class="img-thumbnail w-100" alt="{{ $pokemon->name }}">
            </div>
            <div class="col-md-8">
                <table class="table table-dark table-striped">
                    <tbody>
                        <tr>
                            <td><strong>Species:</strong></td>
                            <td>{{ $pokemon->species }}</td>
                        </tr>
                        <tr>
                            <td><strong>Primary Type:</strong></td>
                            <td>{{ $pokemon->primary_type }}</td>
                        </tr>
                        <tr>
                            <td><strong>Weight:</strong></td>
                            <td>{{ $pokemon->weight }}</td>
                        </tr>
                        <tr>
                            <td><strong>Height:</strong></td>
                            <td>{{ $pokemon->height }}</td>
                        </tr>
                        <tr>
                            <td><strong>Hp:</strong></td>
                            <td>{{ $pokemon->hp }}</td>
                        </tr>
                        <tr>
                            <td><strong>Attack:</strong></td>
                            <td>{{ $pokemon->attack }}</td>
                        </tr>
                        <tr>
                            <td><strong>Defense:</strong></td>
                            <td>{{ $pokemon->defense }}</td>
                        </tr>
                        <tr>
                            <td><strong>Legendary:</strong></td>
                            <td>{{ $pokemon->is_legendary ? 'true' : 'false' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

@endsection
