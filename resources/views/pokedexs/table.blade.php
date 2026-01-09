<div class="card shadow border-0 mb-5">
    <div class="card-header bg-dark text-white">
        <h4 class="mb-0">📘 Pokedex List</h4>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Species</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>HP</th>
                    <th>Attack</th>
                    <th>Defense</th>
                    <th>Image</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($pokedex as $item)

                @php
                    $typeColor = match(strtolower($item->type)) {
                        'fire' => 'danger',
                        'water' => 'primary',
                        'grass' => 'success',
                        'electric' => 'warning',
                        default => 'secondary',
                    };
                @endphp

                <tr>
                    <td>{{ $item->id }}</td>

                    <td>
                        <a href="{{ url('/pokedexs/' . $item->id) }}"
                           class="fw-bold text-decoration-none">
                            {{ $item->name }}
                        </a>
                    </td>

                    <td>
                        <span class="badge bg-{{ $typeColor }}">
                            {{ $item->type }}
                        </span>
                    </td>

                    <td>{{ $item->species }}</td>
                    <td>{{ $item->height }}</td>
                    <td>{{ $item->weight }}</td>
                    <td>{{ $item->hp }}</td>
                    <td>{{ $item->attack }}</td>
                    <td>{{ $item->defense }}</td>

                    <td>
                        <img src="{{ $item->image_url }}"
                             class="rounded shadow-sm"
                             style="width:80px; height:80px; object-fit:contain;">
                    </td>

                    <td class="text-center">
                        <a href="{{ url('/pokedexs/' . $item->id . '/edit') }}"
                           class="btn btn-warning btn-sm" title="Edit">
                            แก้ไข
                        </a>

                        <form action="{{ url('/pokedexs/' . $item->id) }}"
                              method="POST"
                              class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('ยืนยันการลบ Pokémon นี้?')"
                                    title="Delete">
                                ลบ
                            </button>
                        </form>
                    </td>
                </tr>

                @endforeach

                @if ($pokedex->isEmpty())
                <tr>
                    <td colspan="11" class="text-center text-muted py-4">
                        No Pokémon found.
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>