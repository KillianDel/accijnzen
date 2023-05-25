@extends('layouts.admin')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
  </div>
</main>
  {{-- <canvas id="visitorsChart" width="400" height="200"></canvas>
  <canvas id="pageViewsChart" width="400" height="200"></canvas>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var dates = {!! $dates !!};
    var visitors = {!! $visitors !!};
    var pageViews = {!! $pageViews !!};

    var visitorsCtx = document.getElementById('visitorsChart').getContext('2d');
    var pageViewsCtx = document.getElementById('pageViewsChart').getContext('2d');

    var visitorsChart = new Chart(visitorsCtx, {
        type: 'line',
        data: {
            labels: dates,
            datasets: [{
                label: 'Visitors',
                data: visitors,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        }
    });

    var pageViewsChart = new Chart(pageViewsCtx, {
        type: 'bar',
        data: {
            labels: dates,
            datasets: [{
                label: 'Page Views',
                data: pageViews,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    precision: 0
                }
            }
        }
    });
</script> --}}
@endsection