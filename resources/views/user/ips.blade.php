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



                    <a class="nav-item nav-link " href="/form/ips/register">
                        <div class="wizard-step-icon">E</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name">SOSHUM E</div>
                            <div class="wizard-step-text-details">Geo, Sosio, Eko, Bhs Jpg, Tik</div>
                        </div>
                    </a>
                    <!-- Wizard navigation item 2-->
                    <a class="nav-item nav-link " href="/form/ips/register">
                        <div class="wizard-step-icon">F</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name"> SOSHUM F</div>
                            <div class="wizard-step-text-details">Geo, Sosio, Eko, Bio, Tik</div>
                        </div>
                    </a>
                    <a class="nav-item nav-link " href="/form/ips/register">
                        <div class="wizard-step-icon">G</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name">SOSHUM G</div>
                            <div class="wizard-step-text-details">Geo, Sosio, Eko, Kimia, Tik</div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection