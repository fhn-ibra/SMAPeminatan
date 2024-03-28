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
                                    <h3 class="text-secondary">FORMULIR PEMINATAN</h3>
                                    <h5 class="card-title mb-4">Isi Formulir Dengan Baik Dan Lengkap</h5>
                                    <form method="POST" action="{{ route('next') }}">
                                        @csrf
                                        <input type="hidden" value="{{ $id }}" name="id">
                                        <div class="mb-3">
                                            <label class="small mb-1" for="Nama">Nama Lengkap</label>
                                            <input class="form-control" id="Nama" type="text"
                                                placeholder="Masukkan Nama Lengkap" name="nama" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="Asal_kelas">Asal Kelas</label>
                                            <select class="form-control selectric" name="Asal_kelas" id="Asal_kelas"
                                                required="">
                                                <option value="" selected="">Asal Kelas</option>
                                                <option value="X-1">X-1</option>
                                                <option value="X-2">X-2</option>
                                                <option value="X-3">X-3</option>
                                                <option value="X-4">X-4</option>
                                                <option value="X-5">X-5</option>
                                                <option value="X-6">X-6</option>
                                                <option value="X-7">X-7</option>
                                                <option value="X-8">X-8</option>
                                                <option value="X-9">X-9</option>
                                                <option value="X-10">X-10</option>
                                                <option value="X-11">X-11</option>
                                                <option value="X-12">X-12</option>
                                                <option value="X-13">X-13</option>
                                                <option value="X-14">X-14</option>
                                                <option value="X-15">X-15</option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Mohon Kelas Diisi
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="Asal_kelas">Paket Kelas</label>
                                            <input class="form-control selectric" type="text" name="kelas" value="{{ $paket }}" readonly />
                                        </div>

                                        <div class="row gx-3">
                                            <div class="mb-3 col-md-6">
                                                <label class="small mb-1" for="kamput_tujuan">Kampus Tujuan</label>
                                                <select class="form-control selectric" name="kampus_tujuan"
                                                    id="kampus_tujuan" required="">
                                                    <option value="" selected="">Kampus Tujuan</option>
                                                    <option value="Politeknik Prestasi Prima">Politeknik Prestasi Prima</option>
                                                    <option value="Universitas Indonesia">Universitas Indonesia</option>
                                                    <option value="Universitas Padjajaran">Universitas Padjajaran</option>
                                                    <option value="Institut Teknologi Bandung">Institut Teknologi Bandung </option>
                                                    <option value="Universitas Gadjah Mada">Universitas Gadjah Mada</option>
                                                    <option value="Institut Pertanian Bogor">Institut Pertanian Bogor</option>
                                                    <option value="Universitas Diponegoro">Universitas Diponegoro</option>
                                                    <option value="Universitas Briwijaya">Universitas Briwijaya</option>
                                                    <option value="Universitas Bina Nusantara</option>
                                                        ">Universitas Bina Nusantara</option>


                                                </select>

                                                <div class="invalid-feedback">
                                                    Mohon Kelas Diisi
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="small mb-1" for="fakultas_tujuan">Fakultas Tujuan</label>
                                                <select class="form-control selectric" name="fakultas_tujuan"
                                                    id="fakultas_tujuab" required="">
                                                    <option value="" selected="">Fakultas Tujuan</option>
                                                    <option value="Bisnis & Manajemen">Bisnis & Manajemen</option>
                                                    <option value="Akuntansi">Akuntansi</option>
                                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                                    <option value="Informatika">Informatika </option>
                                                    <option value="Hukum">Hukum</option>
                                                    <option value="Ekonomi">Ekonomi</option>



                                                </select>
                                                <div class="invalid-feedback">
                                                    Mohon Fakultas Tujuan Diisi
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="Alasan">Alasan</label>
                                            <input class="form-control" id="Alasan" type="text" name="Alasan" placeholder="Alasan"/>

                                        </div>

                                        <hr class="my-4" />

                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-light" type="button" href="/form/ips">Previous</a>
                                            <button class="btn btn-secondary" type="submit">Next</button>
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
