@extends('template.default')

@section('content')

<div class="container mt-4">

    {{-- Title --}}
    <div class="text-center mb-4">
        <h1 class="fw-bold">Pokédex System</h1>
        <p class="text-muted">Manage Pokémon information</p>
    </div>

    {{-- Add Pokémon --}}
<div class="row mb-5">
    <div class="col-12">

        <div class="card shadow-lg border-0">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Add Pokémon</h4>
            </div>

            <div class="card-body">
                <form action="{{ url('/pokedexs') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Name</label>
                        <input type="text" name="name" class="form-control"
                               placeholder="Enter Pokémon name" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Type</label>
                            <input type="text" name="type" class="form-control"
                                   placeholder="Fire, Water, Electric">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Species</label>
                            <input type="text" name="species" class="form-control"
                                   placeholder="Mouse Pokémon">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Height (cm)</label>
                            <input type="number" name="height" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Weight (kg)</label>
                            <input type="number" name="weight" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-semibold">HP</label>
                            <input type="number" name="hp" class="form-control">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-semibold">Attack</label>
                            <input type="number" name="attack" class="form-control">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-semibold">Defense</label>
                            <input type="number" name="defense" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Image URL</label>
                        <input type="url" name="image_url" class="form-control">
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success px-4">
                            Save Pokémon
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

    {{-- Include Table --}}
    @include('pokedexs.table')

</div>

{{-- Preview Script --}}
<script>
document.getElementById('image_url').addEventListener('input', function () {
    const preview = document.getElementById('preview');
    preview.src = this.value;
    preview.style.display = 'block';
});
</script>

@endsection