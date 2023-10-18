@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Add Students</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('student/add/page') }}">Student</a></li>
                                <li class="breadcrumb-item active">Add Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <div class="row">
                <div class="col-sm-12">
                    <div class="card comman-shadow">
                        <div class="card-body">
                            <form action="{{ route('student/add/save') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title student-info">Student Information
                                            <span>
                                                <a href="javascript:;"><i class="feather-more-vertical"></i></a>
                                            </span>
                                        </h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>First Name <span class="login-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                name="first_name" placeholder="Enter First Name"
                                                value="{{ old('first_name') }}">
                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Last Name <span class="login-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                name="last_name" placeholder="Enter Last Name"
                                                value="{{ old('last_name') }}">
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Gender <span class="login-danger">*</span></label>
                                            <select class="form-control select  @error('gender') is-invalid @enderror"
                                                name="gender">
                                                <option selected disabled>Select Gender</option>
                                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male
                                                </option>
                                                <option value="Female"
                                                    {{ old('gender') == 'Female' ? 'selected' : 'Female' }}>Female</option>

                                            </select>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms calendar-icon">
                                            <label>Date Of Birth <span class="login-danger">*</span></label>
                                            <input
                                                class="form-control datetimepicker @error('date_of_birth') is-invalid @enderror"
                                                name="date_of_birth" type="text" placeholder="DD-MM-YYYY"
                                                value="{{ old('date_of_birth') }}">
                                            @error('date_of_birth')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Roll </label>
                                            <input class="form-control @error('roll') is-invalid @enderror" type="text"
                                                name="roll" placeholder="Enter Roll Number" value="{{ old('roll') }}">
                                            @error('roll')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>E-Mail <span class="login-danger">*</span></label>
                                            <input class="form-control @error('email') is-invalid @enderror" type="text"
                                                name="email" placeholder="Enter Email Address"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Class <span class="login-danger">*</span></label>
                                            <select class="form-control select @error('class') is-invalid @enderror"
                                                name="class">
                                                <option selected disabled>Please Select Class </option>
                                                <option value="12" {{ old('class') == '12' ? 'selected' : '' }}>12
                                                </option>
                                                <option value="11" {{ old('class') == '11' ? 'selected' : '' }}>11
                                                </option>
                                                <option value="10" {{ old('class') == '10' ? 'selected' : '' }}>10
                                                </option>
                                            </select>
                                            @error('class')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Section <span class="login-danger">*</span></label>
                                            <select class="form-control select @error('section') is-invalid @enderror"
                                                name="section">
                                                <option selected disabled>Please Select Section </option>
                                                <option value="A" {{ old('section') == 'A' ? 'selected' : '' }}>A
                                                </option>
                                                <option value="B" {{ old('section') == 'B' ? 'selected' : '' }}>B
                                                </option>
                                                <option value="C" {{ old('section') == 'C' ? 'selected' : '' }}>C
                                                </option>
                                            </select>
                                            @error('section')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Admission ID </label>
                                            <input class="form-control @error('admission_id') is-invalid @enderror"
                                                type="text" name="admission_id" placeholder="Enter Admission ID"
                                                value="{{ old('admission_id') }}">
                                            @error('admission_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Phone </label>
                                            <input class="form-control @error('phone_number') is-invalid @enderror"
                                                maxlength="10"
                                                type="text"
                                                oninput="this.value = this.value.replace(/\D/g, '').slice(0, 10)
                                                name="phone_number" placeholder="Enter Phone Number"
                                                value="{{ old('phone_number') }}">
                                            @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center ">
                                        <div class="form-group students-up-files">
                                            <div class="uplod">
                                                <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                                                <div class="file-upload">
                                                    <button class="file-upload-btn" type="button"
                                                        onclick="$('.file-upload-input').trigger( 'click' )">
                                                        Upload Student Photo</button>

                                                    <div class="image-upload-wrap">
                                                        <input class="file-upload-input" type='file'
                                                            onchange="readURL(this);" accept="image/*" name="upload" />
                                                        <div class="drag-text">
                                                            <h3>Drag and drop a file or select add Image</h3>
                                                        </div>
                                                    </div>
                                                    <div class="file-upload-content">
                                                        <img class="file-upload-image" src="#" alt="your image" />
                                                        <div class="image-title-wrap">
                                                            <button type="button" onclick="removeUpload()"
                                                                class="remove-image">Remove <span
                                                                    class="image-title">Uploaded Image</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('upload')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
