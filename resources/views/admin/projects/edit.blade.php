@extends('layouts.main')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>{{ $model }}</h2>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">{{ $page_title }}</a></li>
                    <li class="breadcrumb-item active">Home</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">
            @include('flash-message')
        </div>
        <!-- left column -->
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header bg-info">
                    <h3 class="card-title">{{ $page_title }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('projects.update',$project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="required">Title:</label>
                                    <input type="text" value="{{old('title',$project->title)}}" name="title" class="form-control filter-input" placeholder="Enter Project Title"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Description:</label>
                                    <textarea type="text" name="description" class="form-control filter-input"
                                        placeholder="Enter Project description">{{old('description',$project->description)}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="">Live Link</label>
                                    <input type="url" value="{{old('live_link',$project->live_link)}}" name="live_link" class="form-control filter-input" placeholder="Enter Live Link">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Repository Link:</label>
                                    <input type="url" value="{{old('repo_link',$project->repo_link)}}" name="repo_link" class="form-control filter-input" placeholder="Enter Repo Link">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="required">Start Date</label>
                                    <input type="date" value="{{old('started_at',$project->started_at)}}" name="started_at" class="form-control filter-input" placeholder="Enter Skill Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>End Date:</label>
                                    <input type="date" value="{{old('end_at',$project->end_at)}}" name="end_at" class="form-control filter-input">
                                </div>
                            </div>
                        </div>
                     </div>
                    <div class="card-footer justify-content-center d-flex">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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