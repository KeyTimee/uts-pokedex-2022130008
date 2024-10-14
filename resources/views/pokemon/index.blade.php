@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: #FCA311; color: white; border-radius: 10px;">
        <br>
        <a href="{{ route('pokemon.create') }}" class="badge bg-dark" style="font-size: 1.5em; padding: 10px 20px;">Add New
            Data</a>
        <br>
        <br>
        <main>
            <table class="table table-dark table-striped">
                <thead>
                    <th>#ID</th>
                    <th>Image</th>
                    <th>Pokemon Name</th>
                    <th>Species</th>
                    <th>Primary Type</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>Hp</th>
                    <th>Attack</th>
                    <th>Defense</th>
                    <th>Legendary</th>
                    <th>Action</th>
                </thead>

                <tbody>
                    @foreach ($pokemons as $pokemon)
                        <tr>
                            <td>{{ '#' . str_pad($pokemon->id, 4, '0', STR_PAD_LEFT) }}</td>
                            <td>
                                <img src="{{ Storage::url($pokemon->photo) }}" class="img-thumbnail w-50">
                            </td>
                            <td>
                                <a href="{{ route('pokemon.show', $pokemon) }}">
                                    {{ $pokemon->name }}
                                </a>
                            </td>
                            <td>{{ $pokemon->species }}</td>
                            <td>{{ $pokemon->primary_type }}</td>
                            <td>{{ $pokemon->weight }}</td>
                            <td>{{ $pokemon->height }}</td>
                            <td>{{ $pokemon->hp }}</td>
                            <td>{{ $pokemon->attack }}</td>
                            <td>{{ $pokemon->defense }}</td>
                            <td>{{ $pokemon->is_legendary ? 'true' : 'false' }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-warning" href="{{ route('pokemon.edit', $pokemon) }}">Edit</a>
                                    <form action="{{ route('pokemon.destroy', $pokemon) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
        {{ $pokemons->links() }}
    </div>
@endsection
