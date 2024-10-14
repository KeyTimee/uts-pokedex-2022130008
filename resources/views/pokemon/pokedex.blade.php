@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Pokédex</h1>

    <div class="row">
        @foreach ($pokemons as $pokemon)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $pokemon->photo ? Storage::url($pokemon->photo) : 'https://placehold.co/200' }}" class="card-img-top" alt="{{ $pokemon->name }}">
                    <div class="card-body">
                        <p class="card-text">ID: #{{ str_pad($pokemon->id, 4, '0', STR_PAD_LEFT) }}</p>
                        <h5 class="card-title">{{ $pokemon->name }}</h5>
                        <span class="badge rounded-pill bg-primary">{{ $pokemon->primary_type }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="pagination justify-content-center">
        {{ $pokemons->links() }}
    </div>
</div>
@endsection
