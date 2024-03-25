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
                          {{$title}}
                        </h1>
                        <div class="page-header-subtitle">{{ $paket }}</div>
                    </div>
                </div>
                <nav class="mt-4 rounded" aria-label="breadcrumb">
                    <ol class="breadcrumb px-3 py-2 rounded mb-0">
                        <li class="breadcrumb-item"><a href="ipa">Kelas</a></li>
                        <li class="breadcrumb-item"><a href="ipa">IPA</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
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
                            <th>Kampus Tujuan</th>
                            <th>Fakultas Tujuan</th>
                            <th>Alasan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                 <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data as $item)        
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->asal_kelas }}</td>
                        <td>{{ $item->paket->nama_paket }}</td>
                        <td>{{ $item->kampus_tujuan }}</td>
                        <td>{{ $item->fakultas_tujuan }}</td>
                        <td>{{ $item->alasan }}</td>
                        <td>
                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="" style="display: inline"><i data-feather="list"></i></a>
                            <a class="btn btn-datatable btn-icon btn-transparent-dark" href="" style="display: inline"><i data-feather="trash-2"></i></a>
                        </td>
                    </tr>
                    @endforeach
                 </tbody>
                </main>
                </table>
            </div>
        </div>
@endsection