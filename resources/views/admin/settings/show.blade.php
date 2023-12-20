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
        <div class="row justify-content-center">
            @if (session('success'))
            @include('flash-message')
            @endif
            @if (session('error'))
            @include('flash-message')
            @endif
        </div>
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

                        <p class="text-muted text-center">{{ $user->profession }}</p>
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

                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-danger float-right"><b><i
                                    class="fa fa-edit"></i></b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
        <!-- Skills  -->
        <div class="row">
            <div class="col-md-12">
                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="row justify-content-between d-flex">
                            <h3 class="card-title">Skills</h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @forelse ($user->skills as $skill)
                        <strong><i class="fas fa-pencil-alt mr-1"></i> {{ $skill->name }}</strong>
                        <div class="d-flex float-right">
                            <p class="text-muted">
                                {{ $skill->level }}
                            </p> &nbsp; &nbsp;
                            <a href="{{ route('skills.edit', $skill->id) }}"><b><i class="fa fa-edit"></i></b></a>
                            &nbsp;
                            <form action="{{ route('skills.destroy', $skill->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                        <hr>
                        @empty
                        @endforelse
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
        </div>
        <!-- Education  -->
        <div class="row">
            <div class="col-md-12">
                <!-- Education Box -->
                <div class="card card-success">
                    <div class="card-header">
                        <div class="row justify-content-between d-flex">
                            <h3 class="card-title">Educations</h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @forelse ($user->educations as $education)
                        <strong><i class="fas fa-book mr-1"></i> {{ $education->degree }}</strong>
                        <div class="d-flex float-right">
                            <p class="text-muted">
                                {{ $education->start_date }} -
                                {{ $education->end_date }}
                            </p> &nbsp; &nbsp;
                            <a href="{{ route('educations.edit', $education->id) }}"><b><i
                                        class="fa fa-edit"></i></b></a>
                            &nbsp;
                            <form action="{{ route('educations.destroy', $education->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
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
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @forelse ($user->socialMedia as $media)
                        <strong><i class="fas fa-link" style="font-size:18px"> </i> {{ ucfirst($media->name) }}</strong>
                        <div class="d-flex float-right">
                            <a href="{{ $media->link }}" target="_blank">{{ $media->link }}</a> &nbsp; &nbsp;
                            <a href="{{ route('socials.edit', $media->id) }}"><b><i class="fa fa-edit"></i></b></a>
                            &nbsp;
                            <form action="{{ route('socials.destroy', $media->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                        <hr>
                        @empty
                        @endforelse
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
        </div>
        {{-- Projects --}}
        <div class="row">
            <div class="col-md-12">
                <!-- Education Box -->
                <div class="card card-warning">
                    <div class="card-header">
                        <div class="row justify-content-between d-flex">
                            <h3 class="card-title">Projects</h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @forelse ($user->projects as $project)
                        <strong>
                            <i class="fas fa-project-diagram"></i> {{ ucfirst($project->title) }}
                        </strong>
                        <br>
                        <p class="text-muted float-left">
                            {{ $project->started_at }} -
                            {{ $project->end_at }}
                        </p>
                        <div class="float-right">
                            <a data-toggle="tooltip" data-placement="top" title="Project Live Link" 
                                href="{{ $project->live_link }}" target="_blank">{{ $project->live_link }}</a>
                            <br>
                            <a data-toggle="tooltip" data-placement="top" title="Project Repository Link" 
                                href="{{ $project->repo_link }}" target="_blank">{{ $project->repo_link
                                }}</a>
                                &nbsp; &nbsp;
                            <div class="d-flex float-right">
                            <a href="{{ route('projects.edit', $project->id) }}"><b><i class="fa fa-edit"></i></b></a>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0"><i class="fa fa-trash"></i></button>
                            </form>
                            </div>
                        </div>
                        <br>
                        <hr>
                        @empty
                        @endforelse
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
        </div>

        <!-- Certifications  -->
        <div class="row">
            <div class="col-md-12">
                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="row justify-content-between d-flex">
                            <h3 class="card-title">Certifications</h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @forelse($user->certifications as $certification)
                        <strong data-toggle="tooltip" data-placement="top" title="Certificate Name"><i
                                class="fas fa-book mr-1"></i> {{ $certification->name }}</strong>
                        <div class="d-flex float-right">
                            <p class="text-muted" title="Certificate Issue Date" data-toggle="tooltip" data-placement="top">
                                {{ $certification->issued_date }}
                            </p>
                            &nbsp; &nbsp;
                            <a href="{{ route('certifications.edit', $certification->id) }}"><b><i class="fa fa-edit"></i></b></a>
                            <form action="{{ route('certifications.destroy', $certification->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                        <hr>
                        @empty
                        @endforelse
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
        </div>



        <!-- Experiences  -->
        <div class="row">
            <div class="col-md-12">
                <!-- experience Box -->
                <div class="card card-success">
                    <div class="card-header">
                        <div class="row justify-content-between d-flex">
                            <h3 class="card-title">Experiences</h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @forelse ($user->experiences as $experience)
                        <strong title="Job Role" data-toggle="tooltip" data-placement="top"><i
                                class="fas fa-briefcase mr-1"></i> {{ $experience->title }}</strong>
                        <div class="d-flex float-right">
                            <p class="text-muted" title="Duration" data-toggle="tooltip" data-placement="top">
                                {{ $experience->started_at }} -
                                {{ $experience->end_at }}
                            </p> &nbsp; &nbsp;
                            <a href="{{ route('experiences.edit', $experience->id) }}"><b><i class="fa fa-edit"></i></b></a>
                            &nbsp;
                            <form action="{{ route('experiences.destroy', $experience->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                        <p class="text-muted" title="Company Name & Address" data-placement="top">
                            {{ $experience->company }} <br>
                            {{ $experience->location }}
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