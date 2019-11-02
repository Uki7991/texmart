@extends('admin.layouts.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-6">
            <div class=" my-5">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="col-6">
            <div class=" my-5">
                <canvas id="myChart2"></canvas>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgba(255,249,51,0)',
                    borderColor: 'rgb(21,187,13)',
                    data: [0, 10, 5, 2, 20, 30, 45]
                }]
            },

            // Configuration options go here
            options: {}
        });
        var ctx2 = document.getElementById('myChart2').getContext('2d');
        var chart2 = new Chart(ctx2, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgba(255,249,51,0)',
                    borderColor: 'rgb(48,37,187)',
                    data: [20, 10, 14, 2, 20, 30, 45]
                }]
            },

            // Configuration options go here
            options: {}
        });
    </script>
@endpush
