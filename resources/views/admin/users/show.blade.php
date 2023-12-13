@extends('layouts.main')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">        
                <h1>{{ $model }}</h1>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="{{ asset($user->profic) }}"
                                    onerror="this.src='../../dist/img/avatar5.png'" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ $user->full_name }}</h3>

                            <p class="text-muted text-center">Software Engineer</p>
                            <div class="row justify-content-between">
                                <ul class="list-group list-group-unbordered mb-5 col-5">
                                    <li class="list-group-item">
                                        <b>First Name</b> <a class="float-right">{{ $user->first_name }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Last Name</b> <a class="float-right">{{ $user->last_name }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email</b> <a class="float-right">{{ $user->email }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Username</b> <a class="float-right">{{ $user->username }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Blood Group</b> <a class="float-right">{{ $user->blood_group }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Phone</b> <a class="float-right">{{ $user->phone }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Date Of Birth</b> <a class="float-right">{{ $user->dob }}</a>
                                    </li>
                                </ul>

                                <ul class="list-group list-group-unbordered mb-5 col-5">
                                    <li class="list-group-item">
                                        <b>Area</b> <a class="float-right">{{ $user->area }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>City</b> <a class="float-right">{{ $user->city }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Country</b> <a class="float-right">{{ $user->country }}</a>
                                    </li>

                                    <li class="list-group-item">
                                        <b>Recidence</b> <a class="float-right">{{ $user->residence }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Bio</b>
                                        <p class="text-left">{{ $user->bio }}</p>
                                    </li>
                                </ul>
                            </div>

                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-block"><b>Edit</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                           <div class="row justify-content-between d-flex">
                                <h3 class="card-title">Skills</h3>
                                <a href="{{ route('skills.edit', $user->id) }}" class="btn btn-sm btn-danger"><b><i
                                            class="fa fa-edit"></i></b></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @forelse ($user->skills as $skill)
                                <strong><i class="fas fa-pencil-alt mr-1"></i> {{ $skill->name }}</strong>
                                <p class="text-muted float-right">
                                    {{ $skill->level }}
                                </p>
                                <hr>
                            @empty
                            @endforelse
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Education Box -->
                    <div class="card card-success">
                        <div class="card-header">
                            <div class="row justify-content-between d-flex">
                            <h3 class="card-title">Educations</h3>
                            <a href="{{ route('educations.edit', $user->id) }}" class="btn btn-sm btn-danger"><b><i class="fa fa-edit"></i></b></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @forelse ($user->educations as $education)
                            <strong><i class="fas fa-book mr-1"></i> {{ $education->degree }}</strong>
                            <p class="text-muted float-right">
                                {{ $education->start_date }} -
                                {{ $education->end_date }}
                            </p>
                            <p class="text-muted">
                                {{ $education->field_of_study }} <br>   
                                {{ $education->institution }}
                            </p>
                            <hr>
                            @empty
                            @endforelse
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
            
                </div>
            </div>
            {{-- social media --}}
            <div class="row">
                <div class="col-md-12">
                    <!-- Education Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="row justify-content-between d-flex">
                                <h3 class="card-title">Social Media</h3>
                                <a href="{{ route('socials.edit', $user->id) }}" class="btn btn-sm btn-danger"><b><i
                                            class="fa fa-edit"></i></b></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @forelse ($user->socialMedia as $media)
                            <strong><i class="fas fa-book" style="font-size:18px"> </i>  {{ ucfirst($media->name) }}</strong>
                            <a class="float-right" href ="{{ $media->link }}" target="_blank">{{ $media->link }}</a>
                            <hr>
                            @empty
                            @endforelse
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
            
                </div>
            </div>
            <!-- /.content -->
            <!-- Content Wrapper. Contains page content -->
        </div>
    </section>

@stop
@section('js')
    <script>
        $(document).ready(function() {
            $('.select2').select2();

        });
    </script>
@endsection
