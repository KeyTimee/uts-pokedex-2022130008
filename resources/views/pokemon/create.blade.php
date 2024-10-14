@extends('layouts.app')

@section('content')
    <div class="container">
        <main>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('pokemon.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name')}}">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="species">Species</label>
                        <input class="form-control @error('species') is-invalid @enderror" type="text" name="species" id="species" value="{{ old('species')}}">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="primary_type">Primary Type</label>
                        <select class="form-select @error('primary_type') is-invalid @enderror"
                        aria-label="Default select example" name="primary_type" id="primary_type" value="{{ old('primary_type')}}">
                            <option selected>Primary Type</option>
                            <option value="Grass">Grass</option>
                            <option value="Fire">Fire</option>
                            <option value="Water">Water </option>
                            <option value="Bug">Bug </option>
                            <option value="Normal">Normal </option>
                            <option value="Poison">Poison </option>
                            <option value="Electric">Electric </option>
                            <option value="Ground">Ground </option>
                            <option value="Fairy">Fairy </option>
                            <option value="Fighting">Fighting </option>
                            <option value="Psychic">Psychic </option>
                            <option value="Rock">Rock </option>
                            <option value="Ghost">Ghost  </option>
                            <option value="Ice">Ice </option>
                            <option value="Dragon">Dragon </option>
                            <option value="Dark">Dark </option>
                            <option value="Steel">Steel </option>
                            <option value="Flying">Flying </option>
                          </select>
                        </div>
                    <div class="col-6">
                        <label class="form-label" for="weight">Weight</label>
                        <input class="form-control @error('weight') is-invalid @enderror" type="number" name="weight" id="weight" value="{{ old('weight')}}">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="height">Height</label>
                        <input class="form-control @error('height') is-invalid @enderror" type="number" name="height" id="height" value="{{ old('height')}}">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="hp">Hp</label>
                        <input class="form-control @error('hp') is-invalid @enderror" type="number" name="hp" id="hp" value="{{ old('hp')}}">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="attack">Attack</label>
                        <input class="form-control @error('attack') is-invalid @enderror" type="number" name="attack" id="attack" value="{{ old('attack')}}">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="defense">Defense</label>
                        <input class="form-control @error('defense') is-invalid @enderror" type="number" name="defense" id="defense" value="{{ old('defense')}}">
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="is_legendary" value="0">
                        <input class="form-check-input @error('is_legendary') is-invalid @enderror" type="checkbox" name="is_legendary" value="1" id="is_legendary" {{ old('is_legendary') ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_legendary">
                            Legendary
                        </label>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="photo">Photo</label>
                        <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="photo" value="{{ old('photo')}}">
                    </div>

                    <button class="btn btn-primary mt-3" type="submit">Add</button>

                </div>
            </form>
        </main>
    </div>
@endsection
