@extends('admin.home')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>News</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">News</li>
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
                            <h3 class="card-title">Manages News</h3>

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
                            <form action="/editNews/{{$news->id}}/edit" enctype="multipart/form-data" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Title News</label>
                                    <input type="text" class="form-control" name="title" value="{{$news->title}}">
                                </div>
                                <div class="form-group">
                                    <label>Image News</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                                <i class="fa fa-picture-o"></i> Choose
                                            </a>
                                        </span>
                                        <input id="thumbnail" class="form-control" type="text" name="filepath" value="{{$news->path}}">
                                    </div>
                                    <img id="holder" style="margin-top:15px;max-height:100px;">
                                    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
                                    <script>
                                        $('#lfm').filemanager('image');
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label>News</label>
                                    <textarea id="my-editor" name="news" class="form-control">{{$news->content}}</textarea>
                                    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                                    <script>
                                        var options = {
                                            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                                            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                                            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                                        };
                                    </script>
                                    <script>
                                        CKEDITOR.replace('my-editor', options);
                                    </script>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" name="status" id="customSwitch1" value="{{$news->status}}"  {{  ($news->status == 1 ? ' checked' : '') }}>
                                        <label class="custom-control-label" for="customSwitch1">Inaktive/Aktive</label>
                                    </div>
                                </div>
                                <input type="hidden" name="_method" value="put">
                                <button type="submit" class="btn bg-gradient-info">SIMPAN</button>
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

<script>
    $('#customSwitch1').click(function() {
        if ($("#customSwitch1").is(":checked") == true) {
            $('#customSwitch1').val('1');
        } else {
            $('#customSwitch1').val('0');
        }
    });
</script>
@endsection
