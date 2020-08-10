@extends('admin.home')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
@include('sweet::alert')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Mentah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashAdmin')}}">Beranda</a></li>
                        <li class="breadcrumb-item active">Data Mentah</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Kelola Data Mentah</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" Data Mentah-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" Data Mentah-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{url('/updateDataMentah')}}/{{$data->id}}" enctype="multipart/form-Data Mentah" method="post">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <button type="button" class="btn bg-gradient-primary mb-4" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-circle"> Tambah Kabupaten/Kota</i></button> <br>
                                            <label>Kabupaten/Kota</label>
                                            <select class="form-control" name="kabupaten_id">
                                              @foreach($kabupaten as $k)
                                                <option value="{{$k->id}}" {{ $data->kabupaten_id == $k->id ? 'selected' : '' }}>{{$k->kabupaten}}</option>
                                              @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <button type="button" class="btn bg-gradient-primary mb-4" data-toggle="modal" data-target="#exampleModal1"><i class="fas fa-plus-circle"> Tambah Tahun</i></button> <br>
                                            <label>Tahun</label>
                                            <select class="form-control" name="tahun_id">
                                              @foreach($tahun as $t)
                                                <option value="{{$t->id}}" {{ $data->tahun_id == $t->id ? 'selected' : '' }}>{{$t->tahun}}</option>
                                              @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Jumlah Balita</label>
                                            <input type=number class="form-control" name="jum_balita" value="{{$data->jum_balita}}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Jumlah Perkiraan Penderita</label>
                                            <input type=number class="form-control" name="jum_perkiraan" value="{{$data->jum_perkiraan}}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Penderita ditemukan dan ditangani</label>
                                            <input type=number class="form-control" name="jum_ditemukan" value="{{$data->jum_ditemukan}}">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn bg-gradient-info">SIMPAN</button>
                                <a href="{{url('/dataMentah')}}" class="btn bg-gradient-danger">KEMBALI</a>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal Kabupaten -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{url('/postKabupaten')}}" enctype="multipart/form-data" method="post">
                {{csrf_field()}}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kabupaten</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Kabupaten</label>
                        <input type="text" class="form-control" name="kabupaten">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-info">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal tahun -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{url('/postTahun')}}" enctype="multipart/form-data" method="post">
                {{csrf_field()}}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Tahun</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>tahun</label>
                        <input type="number" class="form-control" name="tahun">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-info">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
