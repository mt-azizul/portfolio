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
            <div class="card">
                <div class="card-header bg-primary d-flex justify-content-end">
                    <a href="{{route('settings.edit',1)}}" class="btn btn-danger"> <i class="fa fa-edit"> Update Settings</i></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Key</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($settings as $setting)
                            <tr>
                                <td>{{ $setting->key }}</td>
                                @if ($setting->key == 'logo'||$setting->key == 'favicon')
                                <td><img src="{{ asset('images/'.$setting->value) }}" alt="" width="80px" height="80px"></td>
                                @else
                                <td>{{ $setting->value }}</td>
                                @endif
                               
                            </tr>
                            @empty
                            <tr>
                                <td colspan="16">No users found</td>
                            </tr>
                            @endforelse

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
</script>
@stop