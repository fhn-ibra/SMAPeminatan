@extends('template.main')

@section('main')
<main>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-5">
        <!-- Custom page header alternative example-->
        <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
            <div class="me-4 mb-3 mb-sm-0">
                <h1 class="mb-0">Dashboard</h1>
                <div class="small">
                    <span class="fw-500 text-primary">Friday</span>
                    · March 22, 2024 · 12:16 PM
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-start-lg border-start-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-primary mb-1">Jumlah Pendaftar</div>
                                <div class="h5">xxx</div>
                            </div>
                            <div class="ms-2"><i class="fas fa-clipboard-list fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-start-lg border-start-secondary">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-primary mb-1">Jumlah IPA</div>
                                <div class="h5">xxx</div>
                            </div>
                            <div class="ms-2"><i class="fas fa-flask fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-start-lg border-start-secondary">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-primary mb-1">Jumlah IPS</div>
                                <div class="h5">xxx</div>
                            </div>
                            <div class="ms-2"><i class="fas fa-compass fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-header">Persentase Pendaftar</div>
                        <div class="card-body">
                            <div class="chart-pie mb-4"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                            <div class="list-group list-group-flush">
                                <div
                                    class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                    <div class="me-3">
                                        <i class="fas fa-circle fa-sm me-1 text-blue"></i>
                                        IPA
                                    </div>
                                    <div class="fw-500 text-dark">55%</div>
                                </div>
                                <div
                                    class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                    <div class="me-3">
                                        <i class="fas fa-circle fa-sm me-1 text-purple"></i>
                                        IPS
                                    </div>
                                    <div class="fw-500 text-dark">45%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mb-4">
                    <!-- Bar chart example-->
                    <div class="card h-100">
                        <div class="card-header">Pembagian Kelas</div>
                        <div class="card-body d-flex flex-column justify-content-center">
                            <div class="chart-bar"><canvas id="myBarChart" width="100%" height="30"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection

@push('js')
<script>
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
    type: "bar",
    data: {
        labels: ["IPA 1", "IPA 2", "IPA 3", "IPS 1", "IPS 2", "IPS 3"],
        datasets: [{
            label: "Kelas",
            backgroundColor: "rgba(0, 97, 242, 1)",
            hoverBackgroundColor: "rgba(0, 97, 242, 0.9)",
            borderColor: "#4e73df",
            data: [38, 40, 37, 36, 39, 40],
            maxBarThickness: 20
        }]
    },
    options: {
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: 10,
                right: 25,
                top: 25,
                bottom: 0
            }
        },
        scales: {
            xAxes: [{
                gridLines: {
                    display: false,
                    // drawBorder: false
                },
            }],
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: false
        },
    }
});
</script>

<script>
// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
    type: "doughnut",
    data: {
        labels: ["Direct", "Referral"],
        datasets: [{
            data: [55, 45],
            backgroundColor: [
                "rgba(0, 97, 242, 1)",
                "rgba(0, 172, 105, 1)",
                "rgba(88, 0, 232, 1)"
            ],
            hoverBackgroundColor: [
                "rgba(0, 97, 242, 0.9)",
                "rgba(0, 172, 105, 0.9)",
                "rgba(88, 0, 232, 0.9)"
            ],
            hoverBorderColor: "rgba(234, 236, 244, 1)"
        }]
    },
    options: {
        maintainAspectRatio: false,
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: "#dddfeb",
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10
        },
        legend: {
            display: false
        },
        cutoutPercentage: 80
    }
});
</script>
@endpush