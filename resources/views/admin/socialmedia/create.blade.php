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
                <form action="{{ route('socials.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}" readonly
                                        class="form-control filter-input" required>
                                    <label>First Name:</label>
                                    <input type="text" name="" value="{{ $user->first_name }}"
                                        class="form-control filter-input" readonly placeholder="First Name">
                                    @error('first_name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Last Name:</label>
                                    <input type="text" name="" value="{{ $user->last_name }}"
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
                                    <input type="text" name="" value="{{ $user->username }}"
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
                                    <input type="text" name="" value="{{ $user->email }}"
                                        class="form-control filter-input" placeholder="Enter email" readonly required>
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-between">
                            <h4>Social Media Info</h4> <button class="btn btn-sm btn-success" id="addBtn"><i
                                    class="fa fa-plus"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="required"> Name:</label>
                                    <select name="name[]" class="form-control filter-input" required>
                                        <option value="">Select</option>
                                        <option value="linkedin">Linkedin</option>
                                        <option value="youtube">Youtube</option>
                                        <option value="facebook">Facebook</option>
                                        <option value="x">X (Formarly Twitter)</option>
                                        <option value="instagram">Instagram</option>
                                        <option value="pinterest">Pinterest</option>
                                        <option value="github">Github</option>
                                        <option value="personal">Personal Site</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Profile Link:</label>
                                    <input type="url" name="link[]" class="form-control filter-input"
                                        placeholder="Enter Link" required>
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
             $('#addBtn').on('click', function(){
             $('.card-body').append(`
             <div class="row" id="row-${i}">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                       <select name="name[]" class="form-control filter-input" required>
                        <option value="">Select</option>
                        <option value="linkedin">Linkedin</option>
                        <option value="youtube">Youtube</option>
                        <option value="facebook">Facebook</option>
                        <option value="x">X (Formarly Twitter)</option>
                        <option value="instagram">Instagram</option>
                        <option value="pinterest">Pinterest</option>
                        <option value="github">Github</option>
                        <option value="personal">Personal Site</option>
                        <option value="others">Others</option>
                    </select>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-11">
                    <div class="form-group">
                       <input type="url" name="link[]" class="form-control filter-input" placeholder="Enter Link" required>
                    </div> </div>
                <div class="col-lg-1 col-md-1 col-sm-1">
                    <div class="form-group">
                        <button class="btn btn-danger removeBtn" data-row-id="${i}"><i
                                class="fa fa-minus"></i></button></div>
                </div>
            </div>
             `)
             i++;
             })
            $('.card-body').on('click', '.removeBtn', function(){
            let rowId = $(this).data('row-id');
            $('#row-' + rowId).remove();
            });
        });
</script>
@endsection