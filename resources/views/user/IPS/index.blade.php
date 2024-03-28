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
            <div class="card-header border-bottom">
                <!-- Wizard navigation-->
                <div class="nav nav-pills nav-justified flex-column flex-xl-row nav-wizard">

                    <!-- Wizard navigation item 1-->


                        <a class="nav-item nav-link {{ $E <= 0 ? 'disabled' : '' }}" type="submit" href="/form/ips/register/210">
                        <div class="wizard-step-icon bg-secondary">E</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name text-secondary">SOSHUM E</div>
                            <div class="wizard-step-text-details">Geo, Sosio, Eko, Bhs Jpg, TIK</div>
                            <div class="wizard-step-text-name mt-2"><div class="badge {{ $E <= 0 ? 'bg-danger' : 'bg-secondary' }} text-white rounded-pill">{{ $E }} Kursi Tersedia</div></div>
                        </div>
                    </a>
                    <!-- Wizard navigation item 2-->
                    <a class="nav-item nav-link {{ $F <= 0 ? 'disabled' : '' }} " href="/form/ips/register/220">
                        <div class="wizard-step-icon bg-secondary">F</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name text-secondary"> SOSHUM F</div>
                            <div class="wizard-step-text-details">Geo, Sosio, Eko, Bio, TIK</div>
                            <div class="wizard-step-text-name mt-2"><div class="badge {{ $F <= 0 ? 'bg-danger' : 'bg-secondary' }} text-white rounded-pill">{{ $F }} Kursi Tersedia</div></div>
                        </div>
                    </a>
                    <a class="nav-item nav-link {{ $G <= 0 ? 'disabled' : '' }}" href="/form/ips/register/230">
                        <div class="wizard-step-icon bg-secondary">G</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name text-secondary">SOSHUM G</div>
                            <div class="wizard-step-text-details">Geo, Sosio, Eko, Kimia, TIK</div>
                            <div class="wizard-step-text-name mt-2"><div class="badge {{ $G <= 0 ? 'bg-danger' : 'bg-secondary' }} text-white rounded-pill">{{ $G }} Kursi Tersedia</div></div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection

@push('js')
@if(session('error'))
    <script>
        Swal.fire({
  icon: "error",
  title: "Oops..",
  text: "Sepertinya Kursi Kelas Sudah Penuh"
});
    </script>
    @endif
@endpush