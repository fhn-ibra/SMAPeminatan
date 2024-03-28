@extends('template.mainUser')

@section('main')
<main>
    <div class="container-xl px-4">
        <div class="row justify-content-center">
            <!-- Create Organization-->
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11 mt-4">
                <div class="card text-center h-100">
                    <div class="card-body px-5 pt-5 d-flex flex-column">
                        <div>
                            <div class="h3 text-primary">IPA</div>
                            <p class="text-muted mb-4">Ilmu Pengetahuan Alam</p>
                        </div>
                        <div class="icons-org-create align-items-center mx-auto mt-auto">
                            <i class="icon-users fas fa-flask"></i>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent px-5 py-4">
                        <div class="small text-center"><a class="btn btn-block btn-primary" href="/form/ipa">Pilih</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Join Organization-->
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11 mt-4">
                <div class="card text-center h-100">
                    <div class="card-body px-5 pt-5 d-flex flex-column align-items-between">
                        <div>
                            <div class="h3 text-secondary">IPS</div>
                            <p class="text-muted mb-4">Ilmu Pengetahuan Sosial</p>
                        </div>
                        <div class="icons-org-join align-items-center mx-auto">
                            <i class="icon-user  fa-solid fa-earth-asia"></i>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent px-5 py-4">
                        <div class="small text-center"><a class="btn btn-block btn-secondary" href="/form/ips">Pilih</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection