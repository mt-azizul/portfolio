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
                  <form action="{{ route('certifications.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="hidden" name="user_id" value="{{ $user->id }}" readonly class="form-control filter-input" required>
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
                                            class="form-control filter-input" readonly placeholder="Enter User Name" required>
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
                                <h4>{{ $model }} Info</h4> <button class="btn btn-sm btn-success" id="skillAddBtn"><i class="fa fa-plus"></i></button>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="required"> Name:</label>
                                        <input type="text" name="name[]"
                                            class="form-control filter-input" placeholder="Enter Ceritificate Name" required >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Issued Date:</label>
                                        <input type="date" name="issued_date[]"
                                            class="form-control filter-input" >
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
             $('#skillAddBtn').on('click', function(){
             $('.card-body').append(`
             <div class="row" id="skill-${i}">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <input type="text" name="name[]" class="form-control filter-input"
                            placeholder="Enter Ceritificate Name" required>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-11">
                    <div class="form-group">
                      <input type="date" name="issued_date[]" class="form-control filter-input">
                    </div> </div>
                <div class="col-lg-1 col-md-1 col-sm-1">
                    <div class="form-group">
                        <button class="btn btn-danger skillRemoveBtn" data-row-id="${i}"><i
                                class="fa fa-minus"></i></button></div>
                </div>
            </div>
             `)
             i++;
             })
            $('.card-body').on('click', '.skillRemoveBtn', function(){
            let rowId = $(this).data('row-id');
            $('#skill-' + rowId).remove();
            });
        });
    </script>
@endsection
