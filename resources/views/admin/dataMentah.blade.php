@extends('admin.home')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

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
        @include('sweet::alert')
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Kelola Data Mentah</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="{{url('/addDataMentah')}}" class="btn bg-gradient-primary mb-4"><i class="fas fa-plus-circle"> Tambah Data Mentah</i></a>
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kabupaten/Kota</th>
                                        <th>Tahun</th>
                                        <th>Jumlah Balita</th>
                                        <th>Jumlah Pesebaran Penderita</th>
                                        <th>Penderita di Temukan & Ditangani</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @php($i=0)
                                  @foreach ($data as $d)
                                  @php($i++)
                                  <tr>
                                      <td>{{$i}}</td>
                                      <td>{{$d->kabupaten}}</td>
                                      <td>{{$d->tahun}}</td>
                                      <td>{{$d->jum_balita}}</td>
                                      <td>{{$d->jum_perkiraan}}</td>
                                      <td>{{$d->jum_ditemukan}}</td>
                                      <td>
                                          <div class="btn-group-Vertical">
                                              <a href="{{url('/editDataMentah/')}}/{{$d->id}}" class="btn btn-primary">
                                                  <i class="fas fa-pen-square"></i>
                                              </a>
                                              <form class="" action="{{url('/deleteDataMentah/')}}/{{$d->id}}" method="post">
                                                  {{csrf_field()}}
                                                  <button type="submit" class="btn btn-danger">
                                                      <i class="fas fa-trash-alt"></i>
                                                  </button>
                                              </form>
                                          </div>
                                      </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
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

<!-- page script -->
<script>
    $(function() {
        $("#example").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>

@endsection
