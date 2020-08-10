@extends('dataKota')
@section('kota')
<!-- News Area Starts -->
<section class="news-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-top text-center">
                    <h2>Data Kabupaten atau Kota</h2>
                    <p>Pilih Kabupaten atau Kota beserta Tahun yang ingin di tampilkan</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label>Kabupaten/Kota</label>
            </div>
            <div class="col">
                Tahun
            </div>
            <div class="col">

            </div>
        </div>
        <form action="{{url('/cariKabupaten')}}" method="get">
            <div class="row">
                <div class="col">
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                        <div class="form-select" id="default-select">
                            <select name="kabupaten">
                                @foreach($kabupaten as $k)
                                <option value="{{$k->id}}">{{$k->kabupaten}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                        <div class="form-select" id="default-select">
                            <select name="tahun">
                                @foreach($tahun as $t)
                                <option value="{{$t->id}}">{{$t->tahun}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <button class="genric-btn info">Kirim</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- News Area Starts -->
@endsection
