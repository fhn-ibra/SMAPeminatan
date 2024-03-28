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



                    <a class="nav-item nav-link {{ $A <= 0 ? 'disabled' : '' }}" href="/form/ipa/register/110">
                        <div class="wizard-step-icon">A</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name">SAINTEK A</div>
                            <div class="wizard-step-text-details">Fisika, Kimia, Bio, MIPA, TIK</div>
                            <div class="wizard-step-text-name mt-2"><div class="badge {{ $A <= 0 ? 'bg-danger' : 'bg-primary' }} text-white rounded-pill">{{ $A }} Kursi Tersedia</div></div>
                        </div>
                    </a>
                    <!-- Wizard navigation item 2-->
                    <a class="nav-item nav-link {{ $B <= 0 ? 'disabled' : '' }}" href="/form/ipa/register/120">
                        <div class="wizard-step-icon">B</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name"> SAINTEK B</div>
                            <div class="wizard-step-text-details">Kimia, Bio, MIPA, Sos, TIK</div>
                            <div class="wizard-step-text-name mt-2"><div class="badge {{ $B <= 0 ? 'bg-danger' : 'bg-primary' }} text-white rounded-pill">{{ $B }} Kursi Tersedia</div></div>
                        </div>
                    </a>
                    <a class="nav-item nav-link {{ $C <= 0 ? 'disabled' : '' }}" href="/form/ipa/register/130">
                        <div class="wizard-step-icon">C</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name">SAINTEK C</div>
                            <div class="wizard-step-text-details">Kimia, TIK, Bio, MIPA, Eko</div>
                            <div class="wizard-step-text-name mt-2"><div class="badge {{ $C <= 0 ? 'bg-danger' : 'bg-primary' }} text-white rounded-pill">{{ $C }} Kursi Tersedia</div></div>
                        </div>
                    </a>
                    <a class="nav-item nav-link {{ $C <= 0 ? 'disabled' : '' }}" href="/form/ipa/register/140">
                        <div class="wizard-step-icon">D</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name">SAINTEK D</div>
                            <div class="wizard-step-text-details">Bhs Jpg, Kimia, Bio, Sos, TIK</div>
                            <div class="wizard-step-text-name mt-2"><div class="badge {{ $D <= 0 ? 'bg-danger' : 'bg-primary' }} text-white rounded-pill">{{ $D }} Kursi Tersedia</div></div>
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