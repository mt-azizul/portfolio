@extends('layouts.main')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">{{ $page_title }}</a></li>
                    <li class="breadcrumb-item active">Users</li>
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
                <form action="{{ route('experiences.update',$experience->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="required">Title:</label>
                                    <input type="text" name="title" value="{{old('title',$experience->title)}}" class="form-control filter-input" placeholder="Enter Role" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Description:</label>
                                    <textarea type="text" name="description" class="form-control filter-input"
                                        placeholder="Enter Project description">{{old('description',$experience->description)}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="required">Company Name:</label>
                                    <input type="text" name="company" value="{{old('company',$experience->company)}}" class="form-control filter-input" placeholder="Enter Company Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="">Location:</label>
                                    <input type="text" name="location" value="{{old('location',$experience->location)}}" class="form-control filter-input" placeholder="Enter Location">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="required">Start Date</label>
                                    <input type="date" name="started_at" value="{{old('started_at',$experience->started_at)}}" class="form-control filter-input" placeholder="Enter Skill Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>End Date:</label>
                                    <input type="date" name="end_at" value="{{old('end_at',$experience->end_at)}}" class="form-control filter-input">
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