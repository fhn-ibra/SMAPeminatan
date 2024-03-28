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
                                <h3 class="text-primary">FORMULIR PEMINATAN</h3>
                                <h5 class="card-title mb-4">Isi Formulir Dengan Baik! Dan Lengkap!</h5>
                                <form>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="Nama">Nama Lengkap</label>
                                        <input class="form-control" id="Nama" type="text"
                                            placeholder="Masukkan Nam Lengkap!" value="" />
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
                                    <div class="row gx-3">
                                        <div class="mb-3 col-md-6">
                                            <label class="small mb-1" for="kamput_tujuan">Kampus Tujuan</label>
                                            <select class="form-control selectric" name="kampus_tujuan"
                                                id="kampus_tujuan" required="">
                                                <option value="" selected="">Kampus Tujuan</option>
                                                <option value="Ppp">Politeknik Prestasi Prima</option>
                                                <option value="UI">Universitas Indonesia</option>
                                                <option value="Unpad">Universitas Padjajaran</option>
                                                <option value="ITB">Institut Teknologi Bandung </option>
                                                <option value="UGM">Universitas Gadjah Mada</option>
                                                <option value="IPB">Institut Pertanian Bogor</option>
                                                <option value="UNDIP">Universitas Diponegoro</option>
                                                <option value="UB">Universitas Briwijaya</option>
                                                <option value="BINUS">Universitas Bina Nusantara</option>


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
                                                <option value="BM">Bisnis & Manajemen</option>
                                                <option value="Aku">Akutansi</option>
                                                <option value="Si">Sistem Informasi</option>
                                                <option value="If">Informatika </option>
                                                <option value="Hu">Hukum</option>
                                                <option value="Eko">Ekonomi</option>



                                            </select>
                                            <div class="invalid-feedback">
                                                Mohon Fakultas Tujuan Diisi
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="Alasan">Alasan</label>
                                        <input class="form-control" id="Alasan" type="Alasan" placeholder="Alasan"
                                            value="" />

                                    </div>

                                    <hr class="my-4" />

                                    <button class="btn btn-primary" type="button" href="/form">Next</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Wizard tab pane item 2-->
            </div>
        </div>
    </div>
    </div>
</main>
@endsection