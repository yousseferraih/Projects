@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Welcome {{ Session::get('name') }}!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active">{{ Session::get('name') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Students</h6>
                                    <h3>{{ $studentCount }}</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Teachers</h6>
                                    <h3>{{ $teacherCount }}</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="assets/img/icons/student-icon-01.svg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Modules</h6>
                                    <h3>30+</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="assets/img/icons/teacher-icon-02.svg" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Local Time</h6>
                                    <h3 id="local-time"></h3>
                                </div>
                                <div class="db-icon">
                                    <img src="assets/img/icons/teacher-icon-03.svg" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function updateClock() {
                    // Get the current date and time
                    var currentTime = new Date();

                    // Format the date and time as desired
                    var hours = currentTime.getHours();
                    var minutes = currentTime.getMinutes();
                    var seconds = currentTime.getSeconds();
                    var ampm = hours >= 12 ? 'PM' : 'AM';
                    hours = hours % 12;
                    hours = hours ? hours : 12;
                    minutes = minutes < 10 ? '0' + minutes : minutes;
                    seconds = seconds < 10 ? '0' + seconds : seconds;
                    var formattedTime = hours + ':' + minutes + ':' + seconds + ' ' + ampm;

                    // Set the formatted time as the text of the h3 element
                    document.getElementById('local-time').innerHTML = formattedTime;
                }

                // Call the updateClock function every second to update the time
                setInterval(updateClock, 1000);
            </script>
            <div class="row">
                <div class="col-md-12 col-lg-12">

                    <div class="card card-chart">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="card-title">Number of Students</h5>
                                </div>
                                <div class="col-6">
                                    <ul class="chart-list-out">
                                        <li><span class="circle-blue"></span>Girls</li>
                                        <li><span class="circle-green"></span>Boys</li>
                                        <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="bar"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 d-flex">

                    <div class="card flex-fill student-space comman-shadow">
                        <div class="card-header d-flex align-items-center">
                            <h5 class="card-title">Star Students</h5>
                            <ul class="chart-list-out student-ellips">
                                <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table star-student table-hover table-center table-borderless table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th class="text-center">Marks</th>
                                            <th class="text-center">Percentage</th>
                                            <th class="text-end">Year</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap">
                                                <div>PRE2209</div>
                                            </td>
                                            <td class="text-nowrap">
                                                <a href="profile.html">
                                                    <img class="rounded-circle"src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}"
                                                        width="25" alt="Star Students"> Soeng Souy
                                                </a>
                                            </td>
                                            <td class="text-center">1185</td>
                                            <td class="text-center">98%</td>
                                            <td class="text-end">
                                                <div>2019</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">
                                                <div>PRE1245</div>
                                            </td>
                                            <td class="text-nowrap">
                                                <a href="profile.html">
                                                    <img class="rounded-circle"src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}"
                                                        width="25" alt="Star Students"> Soeng Souy
                                                </a>
                                            </td>
                                            <td class="text-center">1195</td>
                                            <td class="text-center">99.5%</td>
                                            <td class="text-end">
                                                <div>2018</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">
                                                <div>PRE1625</div>
                                            </td>
                                            <td class="text-nowrap">
                                                <a href="profile.html">
                                                    <img class="rounded-circle"src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}"
                                                        width="25" alt="Star Students"> Soeng Souy
                                                </a>
                                            </td>
                                            <td class="text-center">1196</td>
                                            <td class="text-center">99.6%</td>
                                            <td class="text-end">
                                                <div>2017</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">
                                                <div>PRE2516</div>
                                            </td>
                                            <td class="text-nowrap">
                                                <a href="profile.html">
                                                    <img class="rounded-circle"src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}"
                                                        width="25" alt="Star Students"> Soeng Souy
                                                </a>
                                            </td>
                                            <td class="text-center">1187</td>
                                            <td class="text-center">98.2%</td>
                                            <td class="text-end">
                                                <div>2016</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">
                                                <div>PRE2209</div>
                                            </td>
                                            <td class="text-nowrap">
                                                <a href="profile.html">
                                                    <img class="rounded-circle"src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}"
                                                        width="25" alt="Star Students"> Soeng Souy
                                                </a>
                                            </td>
                                            <td class="text-center">1185</td>
                                            <td class="text-center">98%</td>
                                            <td class="text-end">
                                                <div>2015</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-6 d-flex">

                    <div class="card flex-fill comman-shadow">
                        <div class="card-header d-flex align-items-center">
                            <h5 class="card-title ">Student Activity </h5>
                            <ul class="chart-list-out student-ellips">
                                <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="activity-groups">
                                <div class="activity-awards">
                                    <div class="award-boxs">
                                        <img src="assets/img/icons/award-icon-01.svg" alt="Award">
                                    </div>
                                    <div class="award-list-outs">
                                        <h4>1st place in "Chess”</h4>
                                        <h5>John Doe won 1st place in "Chess"</h5>
                                    </div>
                                    <div class="award-time-list">
                                        <span>1 Day ago</span>
                                    </div>
                                </div>
                                <div class="activity-awards">
                                    <div class="award-boxs">
                                        <img src="assets/img/icons/award-icon-02.svg" alt="Award">
                                    </div>
                                    <div class="award-list-outs">
                                        <h4>Participated in "Carrom"</h4>
                                        <h5>Justin Lee participated in "Carrom"</h5>
                                    </div>
                                    <div class="award-time-list">
                                        <span>2 hours ago</span>
                                    </div>
                                </div>
                                <div class="activity-awards">
                                    <div class="award-boxs">
                                        <img src="assets/img/icons/award-icon-03.svg" alt="Award">
                                    </div>
                                    <div class="award-list-outs">
                                        <h4>Internation conference in "St.John School"</h4>
                                        <h5>Justin Leeattended internation conference in "St.John School"</h5>
                                    </div>
                                    <div class="award-time-list">
                                        <span>2 Week ago</span>
                                    </div>
                                </div>
                                <div class="activity-awards mb-0">
                                    <div class="award-boxs">
                                        <img src="assets/img/icons/award-icon-04.svg" alt="Award">
                                    </div>
                                    <div class="award-list-outs">
                                        <h4>Won 1st place in "Chess"</h4>
                                        <h5>John Doe won 1st place in "Chess"</h5>
                                    </div>
                                    <div class="award-time-list">
                                        <span>3 Day ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
