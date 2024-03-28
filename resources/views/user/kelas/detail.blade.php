@extends('template.mainUser')

@section('main')
    <main>
        <header class="page-header page-header-light bg-light pb-10">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="users"></i></div>
                                {{ $title }}
                            </h1>
                            <div class="page-header-subtitle">{{ $paket }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-n10">
            <div class="card card-header-actions">
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
