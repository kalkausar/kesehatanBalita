@extends('admin.home')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Cluster Cluster</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashAdmin')}}">Beranda</a></li>
                        <li class="breadcrumb-item active">Data Cluster</li>
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
                            <h3 class="card-title">Kelola Data Cluster</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" Data Cluster-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" Data Cluster-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn bg-gradient-primary mb-4" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-circle"> Tambah Cluster Kabupaten/Kota</i></button> <br>
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kabupaten/Kota</th>
                                        <th>Tahun</th>
                                        <th>Pengelompokan</th>
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
                                        @if($d->cluster==1)
                                        <td>C1</td>
                                        @elseif($d->cluster==2)
                                        <td>C2</td>
                                        @elseif($d->cluster==3)
                                        <td>C3</td>
                                        @endif
                                      <td>
                                          <div class="btn-group-Vertical">
                                              <form class="" action="{{url('/deleteCluster/')}}/{{$d->id}}" method="post">
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

<!-- Modal Cluster -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{url('/postCluster')}}" enctype="multipart/form-data" method="post">
                {{csrf_field()}}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cluster</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Kabupaten</label>
                        <select class="form-control" name="kabupaten_id">
                            @foreach($kabupaten as $k)
                            <option value="{{$k->id}}">{{$k->kabupaten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <select class="form-control" name="tahun_id">
                            @foreach($tahun as $t)
                            <option value="{{$t->id}}">{{$t->tahun}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cluster</label>
                        <select class="form-control" name="cluster">
                            <option value="1">C1</option>
                            <option value="2">C2</option>
                            <option value="3">C3</option>
                        </select>
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
