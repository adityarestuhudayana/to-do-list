@extends('template.main')

@section('container')
    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Mencatat sesuatu yang harus dilakukan
                </h1>
                <p class="lead">Nikmati kemudahan akses dan fungsionalitas canggih yang memudahkan pengaturan tugas-tugas
                    harian Anda.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Let's go</button>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                <img class="rounded-lg-3" src="img/to-do-list.jpg" alt="" width="450">
            </div>
        </div>
    </div>
    {{-- Footer --}}
    @include('template.footer')
@endsection

