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



                    <a class="nav-item nav-link " href="/form/ipa/register/110">
                        <div class="wizard-step-icon">A</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name">SAINTEK A</div>
                            <div class="wizard-step-text-details">Fisika, Kimia, Bio, Mipa, TIK</div>
                        </div>
                    </a>
                    <!-- Wizard navigation item 2-->
                    <a class="nav-item nav-link " href="/form/ipa/register/120">
                        <div class="wizard-step-icon">B</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name"> SAINTEK B</div>
                            <div class="wizard-step-text-details">Kimia, Bio, Mipa, Sos, TIK</div>
                        </div>
                    </a>
                    <a class="nav-item nav-link " href="/form/ipa/register/130">
                        <div class="wizard-step-icon">C</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name">SAINTEK C</div>
                            <div class="wizard-step-text-details">Kimia, TIK, Bio, Mipa, Eko</div>
                        </div>
                    </a>
                    <a class="nav-item nav-link " href="/form/ipa/register/140">
                        <div class="wizard-step-icon">D</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name">SAINTEK D</div>
                            <div class="wizard-step-text-details">Bhs Jpg, Kimia, Bio, Sos, TIK</div>
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