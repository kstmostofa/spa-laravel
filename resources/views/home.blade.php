@extends('layouts.master')

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@section('content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Dashboard</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        {{-- <li class="breadcrumb-item active" aria-current="page">CRM</li> --}}
                    </ol>
                </div>
            </div>
            {{-- <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
            <!-- Start col -->
            <div class="col-lg-12 col-xl-6">
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <h5 class="card-title mb-0">Revenue Statistics</h5>
                                    </div>
                                    <div class="col-3">
                                        <div class="dropdown">
                                            <button class="btn btn-link p-0 font-18 float-right" type="button"
                                                id="widgetRevenue" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetRevenue">
                                                <a class="dropdown-item font-13" href="#">Refresh</a>
                                                <a class="dropdown-item font-13" href="#">Export</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-0">
                                <div class="row align-items-center">
                                    <div class="col-lg-3">
                                        <div class="revenue-box border-bottom mb-2">
                                            <h4>+ 4598</h4>
                                            <p>Inward Amount</p>
                                        </div>
                                        <div class="revenue-box">
                                            <h4>- 296</h4>
                                            <p>Outward Amount</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div id="apex-line-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-6 col-xl-6">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="media">
                                    <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i
                                            class="feather icon-folder"></i></span>
                                    <div class="media-body">
                                        <p class="mb-0">Projects</p>
                                        <h5 class="mb-0">85</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-6 col-xl-6">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="media">
                                    <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i
                                            class="feather icon-clipboard"></i></span>
                                    <div class="media-body">
                                        <p class="mb-0">Tasks</p>
                                        <h5 class="mb-0">259</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End col -->
            <!-- Start col -->
            <div class="col-lg-12 col-xl-6">
                <div class="card m-b-30 dash-widget">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-5">
                                <h5 class="card-title mb-0">Index</h5>
                            </div>
                            <div class="col-7">
                                <ul class="nav nav-pills float-right" id="pills-index-tab-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-sales-tab-justified" data-toggle="pill"
                                            href="#pills-sales-justified" role="tab" aria-selected="true">Sales</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-clients-tab-justified" data-toggle="pill"
                                            href="#pills-clients-justified" role="tab" aria-selected="false">Clients</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-0 pl-0 pr-2">
                        <div id="apex-bar-chart"></div>
                    </div>
                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
        <!-- Start row -->
        <div class="row">
            <!-- Start col -->
            <div class="col-lg-12 col-xl-9">
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Issues</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-pie-chart"></div>
                                <div class="row">
                                    <div class="col-6 text-right">
                                        <p class="mb-1">Open<i class="mdi mdi-circle text-primary ml-2"></i></p>
                                        <h5 class="mb-0">105</h5>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-1"><i class="mdi mdi-circle text-light mr-2"></i>Close</p>
                                        <h5 class="mb-0">45</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <p class="my-2"><span class="font-18 f-w-6 text-primary">75%</span></p>
                                    </div>
                                    <div class="col-6">
                                        <p class="my-2">See All</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Progress</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="mb-4">Project Think Tank</h5>
                                <p>Prototyping <span class="float-right">75%</span></p>
                                <div class="progress mb-4" style="height: 4px;">
                                    <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p>Designing <span class="float-right">30%</span></p>
                                <div class="progress mb-4" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%;"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p>Development <span class="float-right">50%</span></p>
                                <div class="progress mb-1" style="height: 4px;">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%;"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span class="mr-3">Teams : </span>
                                <div class="avatar-group">
                                    <div class="avatar">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Amy Adams">
                                            <img src="/backend/assets/images/users/men.svg" alt="avatar"
                                                class="rounded-circle">
                                        </a>
                                    </div>
                                    <div class="avatar">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Amy Adams">
                                            <img src="/backend/assets/images/users/women.svg" alt="avatar"
                                                class="rounded-circle">
                                        </a>
                                    </div>
                                </div>
                                <span class="float-right mt-2"><i class="feather icon-paperclip mr-1"></i>5</span>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-body text-center">
                                <div class="user-slider">
                                    <div class="user-slider-item">
                                        <img src="/backend/assets/images/users/men.svg" alt="avatar"
                                            class="rounded-circle mt-3 mb-4">
                                        <h5>James Smith</h5>
                                        <p>Senior Sales Executive</p>
                                        <p>55 Avenue, North Street Road, Carolina State, New York City, USA</p>
                                    </div>
                                    <div class="user-slider-item">
                                        <img src="/backend/assets/images/users/women.svg" alt="avatar"
                                            class="rounded-circle mt-3 mb-4">
                                        <h5>James Smith</h5>
                                        <p>Senior Sales Executive</p>
                                        <p>55 Avenue, North Street Road, Carolina State, New York City, USA</p>
                                    </div>
                                    <div class="user-slider-item">
                                        <img src="/backend/assets/images/users/girl.svg" alt="avatar"
                                            class="rounded-circle mt-3 mb-4">
                                        <h5>James Smith</h5>
                                        <p>Senior Sales Executive</p>
                                        <p>55 Avenue, North Street Road, Carolina State, New York City, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <p class="my-2">Follow</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="my-2">Message</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-6 col-xl-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <h5 class="card-title mb-0">Recent Activity</h5>
                                    </div>
                                    <div class="col-5">
                                        <button class="btn btn-secondary-rgba float-right font-13">View
                                            All</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="activities-history">
                                    <div class="activities-history-list">
                                        <div class="activities-history-item">
                                            <h6>Finished prototyping Project X.</h6>
                                            <p class="mb-0">Just Now</p>
                                        </div>
                                    </div>
                                    <div class="activities-history-list">
                                        <div class="activities-history-item">
                                            <h6>Received confirmation from marketing manager.</h6>
                                            <p class="mb-0">11:00 AM - 3 Oct, 2019</p>
                                        </div>
                                    </div>
                                    <div class="activities-history-list">
                                        <div class="activities-history-item">
                                            <h6>Zoe Updated quick start guide for development process.</h6>
                                            <p class="mb-0">09:25 PM - 27 Sep, 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <h5 class="card-title mb-0">Best Performers</h5>
                                    </div>
                                    <div class="col-3">
                                        <div class="dropdown">
                                            <button class="btn btn-link p-0 font-18 float-right" type="button"
                                                id="widgetPerformers" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><i
                                                    class="feather icon-more-horizontal-"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="widgetPerformers">
                                                <a class="dropdown-item font-13" href="#">Refresh</a>
                                                <a class="dropdown-item font-13" href="#">Export</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>%</th>
                                                <th>Task</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="/backend/assets/images/users/men.svg" class="img-fluid"
                                                        width="35" alt="customer"></td>
                                                <td>John Doe</td>
                                                <td>demo@example.com</td>
                                                <td>95%</td>
                                                <td>1500</td>
                                            </tr>
                                            <tr>
                                                <td><img src="/backend/assets/images/users/women.svg"
                                                        class="img-fluid" width="35" alt="customer"></td>
                                                <td>Daniel Chris</td>
                                                <td>demo@example.com</td>
                                                <td>93%</td>
                                                <td>1300</td>
                                            </tr>
                                            <tr>
                                                <td><img src="/backend/assets/images/users/boy.svg" class="img-fluid"
                                                        width="35" alt="customer"></td>
                                                <td>John Joshua</td>
                                                <td>demo@example.com</td>
                                                <td>87%</td>
                                                <td>1250</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End col -->
            <!-- Start col -->
            <div class="col-lg-12 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h5 class="card-title mb-0">User Sources</h5>
                            </div>
                            <div class="col-3">
                                <div class="dropdown">
                                    <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetLeads"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="feather icon-more-horizontal-"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetLeads">
                                        <a class="dropdown-item font-13" href="#">Refresh</a>
                                        <a class="dropdown-item font-13" href="#">Export</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <div id="apex-radial-chart"></div>
                        <h4 class="mb-3">Project X</h4>
                        <p class="mb-5">List of top sources for above project</p>
                        <div class="row">
                            <div class="col-6">
                                <p class="mb-1">News</p>
                                <h4>259</h4>
                                <p class="text-danger mb-5"><i class="feather icon-arrow-down-right mr-1"></i>7.5</p>
                            </div>
                            <div class="col-6">
                                <p class="mb-1">Media</p>
                                <h4>25</h4>
                                <p class="text-success mb-5"><i class="feather icon-arrow-up-right mr-1"></i>3.5</p>
                            </div>
                            <div class="col-6">
                                <p class="mb-1">Ads</p>
                                <h4>95</h4>
                                <p class="text-success mb-4"><i class="feather icon-arrow-up-right mr-1"></i>5.1</p>
                            </div>
                            <div class="col-6">
                                <p class="mb-1">Others</p>
                                <h4>63</h4>
                                <p class="text-danger mb-4"><i class="feather icon-arrow-down-right mr-1"></i>8.3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
@endsection
