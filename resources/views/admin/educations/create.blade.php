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
                <form action="{{ route('educations.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}" readonly
                                        class="form-control filter-input" required>
                                    <label>First Name:</label>
                                    <input type="text" name="first_name" value="{{ $user->first_name }}"
                                        class="form-control filter-input" readonly placeholder="First Name">
                                    @error('first_name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Last Name:</label>
                                    <input type="text" name="last_name" value="{{ $user->last_name }}"
                                        class="form-control filter-input" readonly placeholder="Last Name">
                                    @error('last_name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Username:</label>
                                    <input type="text" name="username" value="{{ $user->username }}"
                                        class="form-control filter-input" readonly placeholder="Enter User Name"
                                        required>
                                    @error('username')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="text" name="email" value="{{ $user->email }}"
                                        class="form-control filter-input" placeholder="Enter email" readonly required>
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <h4>Education Info</h4> <button class="btn btn-sm btn-success" id="AddBtn"><i
                                    class="fa fa-plus"></i></button>
                        </div>
                        <div class="row border border-primary">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="required">Degree:</label>
                                    <input type="text" name="degree[]" class="form-control filter-input"
                                        placeholder="Enter Degree" required>
                                    @error('degree')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Field of Study:</label>
                                    <input type="text" name="field_of_study[]" value="{{ old('field_of_study') }}"
                                        class="form-control filter-input" placeholder="Enter Field Of Study">
                                    @error('field_of_study')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="required">Institution:</label>
                                    <input type="text" name="institution[]" value="{{ old('institution') }}"
                                        class="form-control filter-input" placeholder="Enter Institution" required>
                                    @error('institution')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="required">Start Date:</label>
                                    <input type="date" name="start_date[]" value="{{ old('start_date') }}"
                                        class="form-control filter-input" placeholder="Enter Start Date" required>
                                    @error('start_date')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>End Date:</label>
                                    <input type="date" name="end_date[]" value="{{ old('end_date') }}"
                                        class="form-control filter-input" placeholder="Enter End Date">
                                    @error('end_date')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
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
    let i = 2;
    $(document).ready(function() {
            $('.select2').select2();
            $('#AddBtn').on('click', function() {
                $('.card-body').append(` <br>
            <div class="row border border-primary" id="row-${i}">
                <div class="col-lg-6 col-md-6 col-sm-12">
         <div class="form-group">
        <label class="required">Degree:</label>
        <input type="text" name="degree[]"  class="form-control filter-input"
            placeholder="Enter Degree" required>
        @error('degree')
        <p class="text-danger">{{ $message }}</p>
        @enderror
         </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-11">
         <div class="form-group">
        <label>Field of Study:</label>
        <input type="text" name="field_of_study[]"  class="form-control filter-input"
            placeholder="Enter Field Of Study">
        @error('field_of_study')
        <p class="text-danger">{{ $message }}</p>
        @enderror
         </div>
                </div>
                 <div class="col-lg-1 col-md-1 col-sm-1">
                    <br>
                    <div class="form-group float-right">
                        <button class="btn btn-sm btn-danger removeBtn" data-row-id="${i}"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
         <div class="form-group">
        <label class="required">Institution:</label>
        <input type="text" name="institution[]"  class="form-control filter-input"
            placeholder="Enter Institution" required>
        @error('institution')
        <p class="text-danger">{{ $message }}</p>
        @enderror
         </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
         <div class="form-group">
        <label class="required">Start Date:</label>
        <input type="date" name="start_date[]" class="form-control filter-input"
            placeholder="Enter Start Date" required>
        @error('start_date')
        <p class="text-danger">{{ $message }}</p>
        @enderror
         </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
         <div class="form-group">
        <label>End Date:</label>
        <input type="date" name="end_date[]"  class="form-control filter-input"
            placeholder="Enter End Date">
        @error('end_date')
        <p class="text-danger">{{ $message }}</p>
        @enderror
         </div>
                </div>
            </div>
            `)
                i++;
            })
            $('.card-body').on('click', '.removeBtn', function() {
                let rowId = $(this).data('row-id');
                $('#row-' + rowId).remove();
            });

        });
</script>
@endsection