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
                <div class="tab-content" id="cardTabContent">
                    <!-- Wizard tab pane item 1-->
                    <div class="tab-pane py-5 py-xl-10 fade show active" id="wizard1" role="tabpanel"
                        aria-labelledby="wizard1-tab">
                        <div class="row justify-content-center">
                            <div class="col-xxl-6 col-xl-8">
                                <h3 class="text-primary">KONFIRMASI DATA</h3>
                                <h5>Submit Jika Data Sudah Benar</h5>

                                <form method="POST" action="{{ route('submit') }}">
                                    @csrf
                                    <input type="hidden" value="{{ $id }}" name="id">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="Nama">Nama Lengkap</label>
                                        <input class="form-control" id="Nama" type="text" name="nama" value="{{ $nama }}" readonly />
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="Asal_kelas">Asal Kelas</label>
                                        <input class="form-control selectric" type="text" name="asal" value="{{ $asal }}" readonly />
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="Asal_kelas">Paket Kelas</label>
                                        <input class="form-control selectric" type="text" name="kelas" value="{{ $paket }}" readonly />
                                    </div>
                                    <div class="row gx-3">
                                        <div class="mb-3 col-md-6">
                                            <label class="small mb-1" for="kamput_tujuan">Kampus Tujuan</label>
                                            <input class="form-control selectric" type="text" name="kampus" value="{{ $kampus }}" readonly />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="small mb-1" for="fakultas_tujuan">Fakultas Tujuan</label>
                                            <input class="form-control selectric" type="text" name="fakultas" value="{{ $fakultas }}" readonly />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="Alasan">Alasan</label>
                                        <input class="form-control" readonly id="Alasan" type="text" name="alasan"
                                            value="{{ $alasan }}" />

                                    </div>

                                    <hr class="my-4" />

                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-light" type="button" href="/form/ipa">Back</a>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Wizard tab pane item 2-->
            </div>
        </div>
    </div>
</main>
@endsection