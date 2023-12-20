@extends('layouts.main')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $page_title }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">{{ $model }}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            @include('flash-message')
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                
            @endif
            <div class="card">
                <div class="card-header bg-primary">
                    <h3>{{ $page_title }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Key</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="{{ route('settings.update',1) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            @forelse ($settings as $setting)
                            <tr>
                                <td>{{ $setting->key }}</td>
                                @if ($setting->key == 'logo'||$setting->key == 'favicon')
                                <td>
                                    <img src="{{ asset('images/'.$setting->value) }}" alt="" width="80px" height="80px">
                                     &nbsp;&nbsp;
                                     <input type="file" name="{{ $setting->key }}" id="{{ $setting->key }}">
                                </td>
                                @else
                                <td> 
                                    <input type="text" name="{{ $setting->key }}" class="form-control" value="{{ $setting->value }}">
                                </td>
                                @endif

                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">No users found</td>
                            </tr>
                            @endforelse
                            <tr>
                                <td colspan="3">
                                    <button type="submit" class="btn btn-primary">Update Settings</button>
                                </td>
                            </tr>
                            </form>
                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

</section>
@stop
@section('js')
<script type="text/javascript">
    $("#del_btn").on("click",function(){
            var id=$(this).data("submit");
            $("#form_"+id).submit();
        });
        $('#myModal').on('show.bs.modal', function(e) {
            var id = e.relatedTarget.dataset.id;
            $("#del_btn").attr("data-submit",id);
        });

    $('#example1').DataTable({
        "paging": false,
        "ordering": false,
         "info": false,
    });
    const favicon = document.getElementById('favicon')
    const logo = document.getElementById('logo')
    
    logo.addEventListener('change', (event) => {
    const target = event.target
    if (target.files && target.files[0]) {
    
    const maxAllowedSize = 1 * 1024 * 1024;
    if (target.files[0].size > maxAllowedSize) {
    alert('Files must be less than 1 MB');
    target.value = ''
    }
    }
    })
    favicon.addEventListener('change', (event) => {
    const target = event.target
    if (target.files && target.files[0]) {
    
    const maxAllowedSize = 1 * 1024 * 1024;
    if (target.files[0].size > maxAllowedSize) {
    alert('Files must be less than 1 MB');
    target.value = ''
    }
    }
    })
</script>
@stop