<link href="public/css/emp.css" rel="stylesheet">
@extends('employee.empheader')

@section('title')

<title>Profile</title>

@endsection
@section('body')

 <!-- Bread crumb and right sidebar toggle -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Profile</h3>
            <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
            </ol>
    </div>
</div>

<!-- start page content-->

@if(Session::has('success'))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success">
            {{Session::get('success')}}

        </div>
    </div>
</div>
@endif
<div class="row" >
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h2>Profile</h2>
                <div class="container emp-profile">
                <form method="post"   enctype="multipart/form-data">
                    {{ csrf_field() }}


                        <div class="row" style="padding-top:20px;">
                            <div class="col-md-4">
                                <div class="profile-img">
                                <img src="{{ asset('uploads/user/' . $employee->images ) }}" alt="images"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-work">

                                </div>
                            </div>
                        <div class="col-md-8" style="margin-top:-35px;">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $employee->name }} </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $employee->email }} </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label>Phone</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $employee->phonenumber }} </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Profession</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $employee->profession }} </p>
                                        </div>
                                    </div>



                                        </div>
                                    </div>
                                </div>
                            </div>

                    </form>
                </div>

                </div>
            </div>
        </div>

    </div>

@endsection
