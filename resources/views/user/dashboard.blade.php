@extends('template.mainUser')

@section('main')
<main>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            Muhammad Erlangga Putra Witanto
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-4">

        <div class="row">

            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4 mt-3">
                    <div class="card-header">Data Detail</div>
                    <div class="card-body">
                        <form>
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Nama Lengkap</label>
                                <input class="form-control" id="inputUsername" type="text"
                                    placeholder="Enter your username" value="username" />
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="">Asal Kelas</label>
                                <input class="form-control" id="" type="text"
                                    placeholder="Enter your " value="" />
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="">Kampus Tujuan</label>
                                <input class="form-control" id="" type="text"
                                    placeholder="Enter your " value="" />
                            </div>



                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" id="inputEmailAddress" type="email"
                                    placeholder="Enter your email address" value="name@example.com" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="page-header page-header-light bg-light pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="users"></i></div>
                            XI IPA 1
                        </h1>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="card card-header-actions">
            <div class="card-header">
                <a class="btn btn-sm btn-primary-soft text-primary">Lihat Kelas Lainnya</a>

            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Asal Kelas</th>
                            <th>Pilihan Kelas</th>
                            <th>Kampus Tujuan</th>
                            <th>Fakultas Tujuan</th>
                            <th>Alasan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Asal Kelas</th>
                            <th>Pilihan Kelas</th>
                            <th>Kampus Tujuan</th>
                            <th>Fakultas Tujuan</th>
                            <th>Alasan</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Farhan Ibra Andhika</td>
                            <td>X-3</td>
                            <td>SAINTEK B</td>
                            <td>Universitas Indonesia</td>
                            <td>Ilmu Komputer</td>
                            <td>Deket Rumah Soalnya xixixixi</td>

                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
</main>
@endsection