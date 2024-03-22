@extends('template.main')

@section('main')
<main>
    <!-- Main page content-->

    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa-solid fa-chalkboard-user mr-1"></i></div>
                            Kelas IPS
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-xl px-4 mt-5">
        <div class="row mt-5">
            
            <?php for($i=1;$i<=7;$i++){?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-start-lg border-start-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="h6 fw-bold text-primary mb-2">XI IPS <?= $i ?></div>
                                <div class="small fw-bold">SOSHUM A<?= $i ?></div>
                                <a class="text-black stretched-link" href="ips/<?= $i ?>"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
           <?php } ?>
        </div>
    </div>
</main>
@endsection