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
                <form action="{{ route('socials.update',$socialMedia->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <h4>Social Media Info</h4> <button class="btn btn-sm btn-success" id="addBtn"><i class="fa fa-plus"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="required"> Name:</label>
                                    <select name="name" class="form-control filter-input" required>
                                        <option value="">Select</option>
                                        <option value="linkedin" @selected($socialMedia->name =='linkedin')>Linkedin</option>
                                        <option value="youtube" @selected($socialMedia->name =='youtube')>Youtube</option>
                                        <option value="facebook" @selected($socialMedia->name =='facebook')>Facebook</option>
                                        <option value="x" @selected($socialMedia->name =='x')>X (Formarly Twitter)</option>
                                        <option value="instagram" @selected($socialMedia->name =='instagram')>Instagram</option>
                                        <option value="pinterest" @selected($socialMedia->name =='pinterest')>Pinterest</option>
                                        <option value="github" @selected($socialMedia->name =='github')>Github</option>
                                        <option value="personal" @selected($socialMedia->name =='personal')>Personal Site</option>
                                        <option value="others" @selected($socialMedia->name =='others')>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Profile Link:</label>
                                <input type="url" name="link" value="{{old('link',$socialMedia->link)}}" class="form-control filter-input" placeholder="Enter Link" required>
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