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
                    <li class="breadcrumb-item active">{{ $page_title }}</li>
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
                    <a href="{{route('users.create')}}" class="btn btn-success"> <i class="fa fa-plus"> Add User</i></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Profic</th>
                                <th>Name</th>
                                <th>User</th>
                                {{-- <th>Email</th> --}}
                                <th>Phone</th>
                                {{-- <th>DOB</th> --}}
                                <th>Area</th>
                                <th>City</th>
                                <th>Country</th>
                                {{-- <th>Residence</th>
                                <th>Bio</th>
                                <th>Blood Group</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 0;
                            @endphp
                            @forelse ($users as $user)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>
                                    <img src="{{url($user->profic)}}" class="img-fluid" height="80" width="80" loading="lazy" alt="">
                                </td>
                                <td>{{ $user->full_name }}</td>
                                <td>{{ $user->username }}</td>
                                {{-- <td>{{ $user->email }}</td> --}}
                                <td>{{ $user->phone }}</td>
                                {{-- <td>{{ $user->dob }}</td> --}}
                                <td>{{ $user->area }}</td>
                                <td>{{ $user->city }}</td>
                                <td>{{ $user->country }}</td>
                                {{-- <td>{{ $user->residence }}</td>
                                <td>{{ $user->bio }}</td>
                                <td>{{ $user->blood_group }}</td> --}}

                                <!-- Add more <td> cells as needed for additional fields -->

                                <td class="d-flex">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>
                                    </a>
                                    &nbsp;
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                    &nbsp;
                                    <a href="{{ route('educations.create',['user_id' => $user->id]) }}" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Education Info Add">Edu </a>
                                    &nbsp;
                                    <a href="" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Experience Info Add">Exp </a>
                                     &nbsp;
                                </td>
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
</script>
@stop