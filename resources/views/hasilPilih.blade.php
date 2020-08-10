@extends('dataKota')
@section('kota')
<!-- News Area Starts -->
<section class="news-area section-padding">
    <div class="container">
      @if(count($data_olah)>0||count($data_mentah)>0)
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-top text-center">
                    <h2>Data {{$data_mentah[0]->kabupaten}}</h2>
                    <h3>Nama Kota Tahun {{$data_mentah[0]->tahun}}</h3>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <h4>Kabupaten / Kota</h4>
            <h4>Jumlah Balita</h4>
            <h4>Jumlah Perkiraan Penderita</h4>
            <h4>Penderita di Temukan dan di tangani</h4>
          </div>
          <div class="col-sm-1" style="margin-right:-5%; margin-left:-5%">
            <h4>:</h4>
            <h4>:</h4>
            <h4>:</h4>
            <h4>:</h4>
          </div>
          <div class="col">
            <h4>{{$data_mentah[0]->kabupaten}}</h4>
            <h4>{{$data_mentah[0]->jum_balita}}</h4>
            <h4>{{$data_mentah[0]->jum_perkiraan}}</h4>
            <h4>{{$data_mentah[0]->jum_ditemukan}}</h4>
          </div>
        </div> <br>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        @for ($i=0; $i<(count($data_olah)); $i++)
                        <th scope="col">Iterasi Ke-{{$data_olah[$i]->iterasi}}</th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">C1</th>
                        @for ($i=0; $i<(count($data_olah)); $i++)
                        <td>{{$data_olah[$i]->c1}}</td>
                        @endfor
                    </tr>
                    <tr>
                        <th scope="row">C2</th>
                        @for ($i=0; $i<(count($data_olah)); $i++)
                        <td>{{$data_olah[$i]->c2}}</td>
                        @endfor
                    </tr>
                    <tr>
                        <th scope="row">C3</th>
                        @for ($i=0; $i<(count($data_olah)); $i++)
                        <td>{{$data_olah[$i]->c3}}</td>
                        @endfor
                    </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-top text-center">
                    <h2>Data Tidak Ditemukan</h2>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
<!-- News Area Starts -->
@endsection
