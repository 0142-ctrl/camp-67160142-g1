@extends('template.default')

@section('content')

<div class="container mt-4">

    {{-- Title --}}
    <div class="text-center mb-4">
        <h1 class="fw-bold">Edit Pokédex</h1>
        <p class="text-muted">Update Pokémon information</p>
    </div>

    {{-- Edit Pokémon --}}
    <div class="row mb-5">
        <div class="col-12">

            <div class="card shadow-lg border-0">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">Edit Pokémon</h4>
                </div>

                <div class="card-body">
                    <form action="{{ url('/pokedexs/'.$pokedex_update->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Name</label>
                            <input type="text" name="name" class="form-control"
                                   value="{{ $pokedex_update->name }}" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Type</label>
                                <input type="text" name="type" class="form-control"
                                       value="{{ $pokedex_update->type }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Species</label>
                                <input type="text" name="species" class="form-control"
                                       value="{{ $pokedex_update->species }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Height (cm)</label>
                                <input type="number" name="height" class="form-control"
                                       value="{{ $pokedex_update->height }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Weight (kg)</label>
                                <input type="number" name="weight" class="form-control"
                                       value="{{ $pokedex_update->weight }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-semibold">HP</label>
                                <input type="number" name="hp" class="form-control"
                                       value="{{ $pokedex_update->hp }}">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-semibold">Attack</label>
                                <input type="number" name="attack" class="form-control"
                                       value="{{ $pokedex_update->attack }}">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-semibold">Defense</label>
                                <input type="number" name="defense" class="form-control"
                                       value="{{ $pokedex_update->defense }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Image URL</label>
                            <input type="url" id="image_url" name="image_url" class="form-control"
                                   value="{{ $pokedex_update->image_url }}">
                        </div>

                        {{-- Image Preview --}}
                        <div class="text-center mb-3">
                            <img id="preview"
                                 src="{{ $pokedex_update->image_url }}"
                                 class="rounded shadow"
                                 style="max-width:150px;">
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ url('/pokedexs') }}" class="btn btn-secondary px-4">
                                ⬅ Back
                            </a>

                            <button type="submit" class="btn btn-warning px-4">
                                Update Pokémon
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

    {{-- Table --}}
    @include('pokedexs.table')

</div>

{{-- Preview Script --}}
<script>
document.getElementById('image_url').addEventListener('input', function () {
    const preview = document.getElementById('preview');
    preview.src = this.value;
});
</script>

@endsection