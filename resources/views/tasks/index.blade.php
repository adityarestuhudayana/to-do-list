@extends('template.main')

@section('container')
    <h1 class="my-5">Tasks</h1>

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
            <tr>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Bawang</td>
                <td>0</td>
                <td>
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash-fill me-1"></i>Delete</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-pen-fill me-1"></i>Edit</a></li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
