@extends('template')
@section('content')
<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Grafik Persebaran</h1>
                <a href="{{url('/')}}">Home</a> <span>|</span> <a href="{{url('/grafik')}}">Grafik Persebaran</a>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

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
                <label>Tahun 2015</label>
                <canvas id="myChart" width="40vh" height="40vh"></canvas>
            </div>
            <div class="col text-center">
                <label>Tahun 2016</label>
                <canvas id="myChart1" width="40vh" height="40vh"></canvas>
            </div>
            <div class="col text-center">
                <label>Tahun 2017</label>
                <canvas id="myChart2" width="40vh" height="40vh"></canvas>
            </div>
        </div>
        <br> <br>
        <div class="row">
            <div class="col text-center">
                <label>Daftar Kabupaten/Kota 2015</label>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">C1</th>
                            <th scope="col">C2</th>
                            <th scope="col">C3</th>
                        </tr>
                    </thead>
                    <tbody id="table2015">

                    </tbody>
                </table>
            </div>
            <div class="col text-center">
                <label>Daftar Kabupaten/Kota 2016</label>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">C1</th>
                            <th scope="col">C2</th>
                            <th scope="col">C3</th>
                        </tr>
                    </thead>
                    <tbody id="table2016">

                    </tbody>
                </table>
            </div>
            <div class="col text-center">
                <label>Daftar Kabupaten/Kota 2017</label>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">C1</th>
                            <th scope="col">C2</th>
                            <th scope="col">C3</th>
                        </tr>
                    </thead>
                    <tbody id="table2017">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- News Area Starts -->
<script>
    $(document).ready(function() {
        $.ajax({
            type: 'GET',
            url: 'dataGrafik',
            success: function(data, status) {
                console.log(data);

                var cluster = {
                    C1: [],
                    C2: [],
                    C3: [],
                };

                var cluster2 = {
                    C1: [],
                    C2: [],
                    C3: [],
                };

                var cluster3 = {
                    C1: [],
                    C2: [],
                    C3: [],
                };
                var len = data.length;
                for (var i = 0; i < len; i++) {
                    // variabel 2015
                    if (data[i].cluster == "1" && data[i].tahun_id == "1") {
                        cluster.C1.push(data[i].kabupaten);
                    } else if (data[i].cluster == "2" && data[i].tahun_id == "1") {
                        cluster.C2.push(data[i].kabupaten);
                    } else if (data[i].cluster == "3" && data[i].tahun_id == "1") {
                        cluster.C3.push(data[i].kabupaten);
                        // variabel 2016
                    } else if (data[i].cluster == "1" && data[i].tahun_id == "2") {
                        cluster2.C1.push(data[i].kabupaten);
                    } else if (data[i].cluster == "2" && data[i].tahun_id == "2") {
                        cluster2.C2.push(data[i].kabupaten);
                    } else if (data[i].cluster == "3" && data[i].tahun_id == "2") {
                        cluster2.C3.push(data[i].kabupaten);
                        //variabel 2017
                    } else if (data[i].cluster == "1" && data[i].tahun_id == "3") {
                        cluster3.C1.push(data[i].kabupaten);
                    } else if (data[i].cluster == "2" && data[i].tahun_id == "3") {
                        cluster3.C2.push(data[i].kabupaten);
                    } else if (data[i].cluster == "3" && data[i].tahun_id == "3") {
                        cluster3.C3.push(data[i].kabupaten);
                    }
                }
                console.log(cluster);
                // tabel 2015
                var html = "<tr>";
                html += "<td>";
                for (var i = 0; i < cluster.C1.length; i++) {
                    html += cluster.C1[i] + "<br><br>";
                }
                html += "</td>";
                html += "<td>";
                for (var i = 0; i < cluster.C2.length; i++) {
                    html += cluster.C2[i] + "<br><br>";
                }
                html += "</td>";
                html += "<td>";
                for (var i = 0; i < cluster.C3.length; i++) {
                    html += cluster.C3[i] + "<br><br>";
                }
                html += "</td>";
                html += "</tr>";

                $("#table2015").html(html);

                // tabel2016
                var html = "<tr>";
                html += "<td>";
                for (var i = 0; i < cluster2.C1.length; i++) {
                    html += cluster2.C1[i] + "<br><br>";
                }
                html += "</td>";
                html += "<td>";
                for (var i = 0; i < cluster2.C2.length; i++) {
                    html += cluster2.C2[i] + "<br><br>";
                }
                html += "</td>";
                html += "<td>";
                for (var i = 0; i < cluster2.C3.length; i++) {
                    html += cluster2.C3[i] + "<br><br>";
                }
                html += "</td>";
                html += "</tr>";

                $("#table2016").html(html);

                // tabel2017
                var html = "<tr>";
                html += "<td>";
                for (var i = 0; i < cluster3.C1.length; i++) {
                    html += cluster3.C1[i] + "<br><br>";
                }
                html += "</td>";
                html += "<td>";
                for (var i = 0; i < cluster3.C2.length; i++) {
                    html += cluster3.C2[i] + "<br><br>";
                }
                html += "</td>";
                html += "<td>";
                for (var i = 0; i < cluster3.C3.length; i++) {
                    html += cluster3.C3[i] + "<br><br>";
                }
                html += "</td>";
                html += "</tr>";

                $("#table2017").html(html);

                // Chart2015
                var ctx = document.getElementById('myChart');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: [cluster.C1.length, cluster.C2.length, cluster.C3.length],
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(54, 162, 235)',
                                'rgb(255, 205, 86)'
                            ]
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

                // chart2016
                var ctx = document.getElementById('myChart1');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: [cluster2.C1.length, cluster2.C2.length, cluster2.C3.length],
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(54, 162, 235)',
                                'rgb(255, 205, 86)'
                            ]
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

                // chart2017
                var ctx = document.getElementById('myChart2');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: [cluster3.C1.length, cluster3.C2.length, cluster3.C3.length],
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(54, 162, 235)',
                                'rgb(255, 205, 86)'
                            ]
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

            },
            error: function(request, status, error) {
                console.log(request.responseJSON);
                $.each(request.responseJSON.errors, function(index, value) {
                    alert(value);
                });
            }
        });
    });
</script>
@endsection
