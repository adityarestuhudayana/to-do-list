@extends('template.main')

@section('container')
    <h1 class="mt-3">Tasks</h1>

    @if (session('addNoteSuccess'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            {{ session('addNoteSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('deleteNoteSuccess'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            {{ session('deleteNoteSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <button type="button" class="btn btn-outline-primary my-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
            class="bi bi-file-earmark-plus-fill me-1"></i>Baru</button>

    <table class="table">
        <thead>
            <tr>
                <th class="col-md-2">Status</th>
                <th class="">Catatan</th>
                <th class="col-md-2">Qty</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                checked>
                        </div>
                    </td>
                    <td>{{ $task->catatan }}</td>
                    <td>{{ $task->jumlah }}</td>
                    <td>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <form action="/tasks/{{ $task->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="dropdown-item" type="submit">
                                        <i class="bi bi-trash-fill me-1"></i>Delete
                                    </button>
                                </form>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-pen-fill me-1"></i>Edit</a></li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>





    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Catatan baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/tasks" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputCatatan1"
                                class="form-label @error('catatan') is-invalid @enderror">Catatan</label>
                            <input type="text" class="form-control" id="exampleInputCatatan1" name="catatan"
                                placeholder="Catatan hari ini" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputCatatan1" class="form-label">Jumlah</label>
                            <input type="number" class="form-control" id="exampleInputCatatan1" name="jumlah"
                                placeholder="Jumlah ( Opsional )" autocomplete="off" value="0">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
