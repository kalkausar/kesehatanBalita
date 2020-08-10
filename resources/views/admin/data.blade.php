@extends('admin.home')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashAdmin')}}">Beranda</a></li>
                        <li class="breadcrumb-item active">Data</li>
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
                            <h3 class="card-title">Kelola Data</h3>

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
                            <a href="{{url('/addData')}}" class="btn bg-gradient-primary mb-4"><i class="fas fa-plus-circle"> Tambah Data</i></a>
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kabupaten/Kota</th>
                                        <th>Tahun</th>
                                        <th>Iterasi</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
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
                                      <td>{{$d->iterasi}}</td>
                                      <td>{{$d->c1}}</td>
                                      <td>{{$d->c2}}</td>
                                      <td>{{$d->c3}}</td>
                                      <td>
                                          <div class="btn-group-Vertical">
                                              <a href="{{url('/editData/')}}/{{$d->id}}" class="btn btn-primary">
                                                  <i class="fas fa-pen-square"></i>
                                              </a>
                                              <form class="" action="{{url('/deleteData/')}}/{{$d->id}}" method="post">
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
