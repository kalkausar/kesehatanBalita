@extends('dataKota')
@section('kota')
<!-- News Area Starts -->
<section class="news-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-top text-center">
                    <h2>Grafik Persebaran</h2>
                    <p>Menampilkan Grafik Persebaran Yang di rangkum per-tahun</p>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <label>Tahun 2017</label>
            <canvas id="myChart" width="40vh" height="40vh"></canvas>
          </div>
          <div class="col text-center">
            <label>Tahun 2016</label>
            <canvas id="myChart1" width="40vh" height="40vh"></canvas>
          </div>
          <div class="col text-center">
            <label>Tahun 2015</label>
            <canvas id="myChart2" width="40vh" height="40vh"></canvas>
          </div>
        </div>
    </div>
</section>
<!-- News Area Starts -->
<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      datasets: [{
      data: [10, 20, 30],
      backgroundColor:[
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)']
  }],
  // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        'C1',
        'C2',
        'C3'
    ]
},
    options: {

    }
});

var ctx = document.getElementById('myChart1');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      datasets: [{
      data: [10, 20, 30],
      backgroundColor:[
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)']
  }],
  // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        'C1',
        'C2',
        'C3'
    ]
},
    options: {

    }
});

var ctx = document.getElementById('myChart2');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      datasets: [{
      data: [10, 20, 30],
      backgroundColor:[
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)']
  }],
  // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        'C1',
        'C2',
        'C3'
    ]
},
    options: {

    }
});

</script>

@endsection
