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
                    <a class="btn btn-sm btn-primary-soft text-primary" href="/pendaftar/export"><b><i
                                class="fa-solid fa-file-export me-1"></i> Export Data</b></a>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Asal Kelas</th>
                                <th>Pilihan Paket</th>
                                <th>Jurusan Kelas</th>
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
                                <th>Pilihan Paket</th>
                                <th>Jurusan Kelas</th>
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
                                    <td><a
                                            href="/{{ strtolower($item->paket->jurusan->nama_jurusan) }}">{{ $item->paket->jurusan->nama_jurusan }}</a>
                                    </td>
                                    <td><a
                                            href="/{{ strtolower($item->paket->jurusan->nama_jurusan) }}/{{ $item->paket_id }}">{{ $item->paket->nama_kelas }}</a>
                                    </td>
                                    <td>{{ $item->kampus_tujuan }}</td>
                                    <td>{{ $item->fakultas_tujuan }}</td>
                                    <td>{{ $item->alasan }}</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" type="button"
                                            data-bs-toggle="modal" id="detail" data-bs-target="#detailModal"
                                            data-email="{{ $item->user->email }}" data-create="{{ $item->created_at }}"><i
                                                data-feather="list"></i></button>
                                                @if(Auth::user()->level == 'Admin')
                                        <button type="button" class="btn btn-datatable btn-icon btn-transparent-dark"
                                            data-bs-toggle="modal" data-bs-target="#deleteModal" id="delete"
                                            data-id='{{ $item->id }}'><i class="fa-solid fa-trash"></i></button>
                                            @endif
                                    </td>
                                </tr>
                            @endforeach

                            @if(Auth::user()->level == 'Admin')
                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Konfirmasi</h5>
                                            <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('pendaftar.delete') }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" id="id">
                                                <p>Apakah yakin ingin menghapus data?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-sm btn-secondary" type="button"
                                                data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-sm btn-primary" type="submit">Ya</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                @endif


                        </tbody>
                        <div class="modal fade" id="detailModal" tabindex="-1" role="dialog"
                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Detail</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group mb-2">
                                            <label for="exampleInputPassword1">Email</label>
                                            <input type="text" class="form-control form-control-sm mt-2" id="email"
                                                readonly>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="exampleInputPassword1">Data Dibuat</label>
                                            <input type="text" class="form-control form-control-sm mt-2" id="create"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-sm btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
    </main>
    </table>
    </div>

    </div>
@endsection

@push('js')
    <script>
        $(document).on('click', '#delete', function(e) {
            var id = $(this).attr("data-id");
            $('#id').val(id);
        });
    </script>
    <script>
        $(document).on('click', '#detail', function(e) {
            var email = $(this).attr("data-email");
            var create = $(this).attr("data-create");
            $('#email').val(email);
            $('#create').val(create);
        });
    </script>

    @if (session('modal'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '{{ session('message') }}'
            })
        </script>
    @endif
@endpush
