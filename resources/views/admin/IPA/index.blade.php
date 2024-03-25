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
                            {{ $title }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-xl px-4 mt-5">
        <div class="row mt-5">
            
         @foreach ($data as $item)
         <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-start-lg border-start-primary">
                 <div class="card-body">
                     <div class="d-flex align-items-center">
                         <div class="flex-grow-1">
                             <div class="h6 fw-bold text-primary mb-2">{{ $item->nama_kelas }}</div>
                             <div class="small fw-bold">{{ $item->nama_paket }}</div>
                             <a class="text-black stretched-link" href="/ipa/{{ $item->id }}"></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection