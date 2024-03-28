@extends('template.mainUser')

@section('main')
<main>
    <header class="page-header page-header-white bg-white pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">

                </div>
            </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <!-- Wizard card example with navigation-->
        <div class="card">
            <div class="card-body">
                <div class="tab-pane py-5 py-xl-10 fade show active">
                    <div class="row justify-content-center">
                        <div class="col-xxl-6 col-xl-8">
                            <h5 class="card-title mb-4">Informasi Akun</h5>
                            <div class="row small text-muted">
                                <div class="col-sm-3 text-truncate"><em>Nama Lengkap:</em></div>
                                <div class="col">username</div>
                            </div>
                            <div class="row small text-muted">
                                <div class="col-sm-3 text-truncate"><em>Kelas Paket:</em></div>
                                <div class="col">Valerie Luna</div>
                            </div>
                            <div class="row small text-muted">
                                <div class="col-sm-3 text-truncate"><em>Paket :</em></div>
                                <div class="col">Start Bootstrap</div>
                            </div>
                            <hr class="my-4" />

                            <button class="btn btn-primary" type="button" href="/form">Next</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection