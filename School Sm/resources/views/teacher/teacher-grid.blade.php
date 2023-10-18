
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">teachers</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('teacher/list/page') }}">teacher</a></li>
                                <li class="breadcrumb-item active">All teachers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table comman-shadow">
                        <div class="card-body pb-0">
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title">teachers</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="{{ route('teacher/list/page') }}" class="btn btn-outline-gray me-2"><i class="feather-list"></i></a>
                                        <a href="{{ route('teacher/grid') }}" class="btn btn-outline-gray me-2 active"><i class="feather-grid "></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="teacher-pro-list">
                                <div class="row">
                                    @foreach ($teacherList as $key=>$list )
                                    <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="teacher-box flex-fill">
                                                    <div class="teacher-img">
                                                        <a href="{{ url('teacher/profile/'.$list->id) }}">
                                                            <img class="img-fluid" alt="teachers Info" src="{{ Storage::url('/teacher-photos/'.$list->upload) }}" width="20%" height="20%">
                                                        </a>
                                                    </div>
                                                    <div class="teacher-content pb-0">
                                                        <h5><a href="{{ url('teacher/profile/'.$list->id) }}">{{ $list->first_name }} {{ $list->last_name }}</a></h5>
                                                        <h6>teacher</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
