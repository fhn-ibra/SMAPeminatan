@extends('template.mainUser')

@section('main')
{{-- @dd($data) --}}
<main>
    <header class="page-header page-header-light bg-light mb-0">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="users"></i></div>
                            Data Siswa
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4">

        <div class="row">

            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4 mt-3">
                    <div class="card-header">Detail Data</div>
                    <div class="card-body">
                        <form>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control" id="inputEmailAddress" type="email"
                                    placeholder="Enter your email address" value="{{ $data->user->email }}" readonly />
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="">Nama Lengkap</label>
                                <input class="form-control" id="" type="text"
                                    placeholder="Enter your " value="{{ $data->nama }}" readonly />
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="">Asal Kelas</label>
                                <input class="form-control" id="" type="text"
                                    placeholder="Enter your " value="{{ $data->asal_kelas }}" readonly/>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="">Pilihan Kelas</label>
                                <input class="form-control" id="" type="text"
                                    placeholder="Enter your " value="{{ $data->paket->nama_paket }}"  readonly/>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="">Kampus Tujuan</label>
                                <input class="form-control" id="" type="text"
                                    placeholder="Enter your " value="{{ $data->kampus_tujuan }}" readonly/>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="">Fakultas Tujuan</label>
                                <input class="form-control" id="" type="text"
                                    placeholder="Enter your " value="{{ $data->fakultas_tujuan }}" readonly/>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="">Alasan</label>
                                <input class="form-control" id="" type="text"
                                    placeholder="Enter your " value="{{ $data->alasan }}" />
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
                            <div class="page-header-icon"><i class="fa-solid fa-chalkboard-user" width='80%'></i></div>
                            {{ $data->paket->nama_kelas }}
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
                    <?php $no = 1; ?>
                    <tbody>
                        @foreach ($kelas as $kelas)    
                        <td>{{ $no++ }}</td>
                        <td>{{ $kelas->nama }}</td>
                        <td>{{ $kelas->asal_kelas }}</td>
                        <td>{{ $kelas->paket->nama_paket }}</td>
                        <td>{{ $kelas->kampus_tujuan }}</td>
                        <td>{{ $kelas->fakultas_tujuan }}</td>
                        <td>{{ $kelas->alasan }}</td>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
</main>
@endsection