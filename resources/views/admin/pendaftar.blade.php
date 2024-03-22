@extends('template.main')

@section('main')
<main>
    <header class="page-header page-header-light bg-light pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="users"></i></div>
                            Pendaftar
                        </h1>
                        {{-- <div class="page-header-subtitle">Berisi Data Pendaftar dari Seluruh Siswa SMA</div> --}}
                    </div>
                </div>
                <nav class="mt-4 rounded" aria-label="breadcrumb">
                    <ol class="breadcrumb px-3 py-2 rounded mb-0">
                        <li class="breadcrumb-item"><a href="dashboard-1.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Pendaftar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="card card-header-actions">
            <div class="card-header">
                <a class="btn btn-sm btn-primary-soft text-primary" href="#!"><b><i class="fa-solid fa-file-export me-1"></i> Export Data</b></a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Asal Kelas</th>
                            <th>Pilihan Kelas</th>
                            <th>Jurusan Kelas</th>
                            <th>Kampus Tujuan</th>
                            <th>Fakultas Tujuan</th>
                            <th>Alasan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Asal Kelas</th>
                            <th>Pilihan Kelas</th>
                            <th>Jurusan Kelas</th>
                            <th>Kampus Tujuan</th>
                            <th>Fakultas Tujuan</th>
                            <th>Alasan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                 <tbody>
                    <tr>
                        <td>1</td>
                        <td>Farhan Ibra Andhika</td>
                        <td>X-3</td>
                        <td>SAINTEK B</td>
                        <td>IPA</td>
                        <td>Universitas Indonesia</td>
                        <td>Ilmu Komputer</td>
                        <td>Deket Rumah Soalnya xixixixi</td>
                        <td>
                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="" style="display: inline"><i data-feather="list"></i></a>
                            <a class="btn btn-datatable btn-icon btn-transparent-dark" href="" style="display: inline"><i data-feather="trash-2"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Muhammad Erlangga Putra Witanto</td>
                        <td>X-7</td>
                        <td>SOSHUM E</td>
                        <td>IPS</td>
                        <td>Universitas Gajah Mada</td>
                        <td>Hukum</td>
                        <td>Mau ngehukum orang sama warnanya karung goni</td>
                        <td>
                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="" style="display: inline"><i data-feather="list"></i></a>
                            <a class="btn btn-datatable btn-icon btn-transparent-dark" href="" style="display: inline"><i data-feather="trash-2"></i></a>
                        </td>
                    </tr>
                 </tbody>
                </main>
                </table>
            </div>
        </div>
@endsection