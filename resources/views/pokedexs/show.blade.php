@extends('template.default')

@section('content')

<div class="container mt-4">

    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white text-center">
            <h2 class="mb-0">{{ $pokedex->name }}</h2>
        </div>

        <div class="card-body">
            <div class="row align-items-center">

                <!-- Pokémon Image -->
                <div class="col-md-5 text-center mb-3">
                    <img src="{{ $pokedex->image_url }}"
                         class="img-fluid rounded shadow"
                         style="max-height:400px;"
                         alt="{{ $pokedex->name }}">
                </div>

                <!-- Pokémon Details -->
                <div class="col-md-7">
                    <h5 class="mb-3">ข้อมูลทั่วไป</h5>

                    <p>
                        <span class="badge bg-success me-2">Type</span>
                        {{ $pokedex->type }}
                    </p>

                    <p>
                        <span class="badge bg-info text-dark me-2">Species</span>
                        {{ $pokedex->species }}
                    </p>

                    <p>
                        <strong>Height:</strong> {{ $pokedex->height }} m
                        &nbsp;|&nbsp;
                        <strong>Weight:</strong> {{ $pokedex->weight }} kg
                    </p>

                    <hr>

                    <h5 class="mb-3">ค่าสถานะ (Stats)</h5>

                    <table class="table table-bordered text-center">
                        <thead class="table-light">
                            <tr>
                                <th>HP</th>
                                <th>Attack</th>
                                <th>Defense</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $pokedex->hp }}</td>
                                <td>{{ $pokedex->attack }}</td>
                                <td>{{ $pokedex->defense }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="{{ url('/pokedexs') }}"
                       class="btn btn-danger mt-3">
                        ← ย้อนกลับ
                    </a>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection