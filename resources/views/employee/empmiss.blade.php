@extends('employee.empheader')

@section('title')

<title>Miscellaneous Event</title>

@endsection

@section('body')

<!-- Bread crumb and right sidebar toggle -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Miscellaneous Event</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Miscellaneous Event</li>
        </ol>
    </div>
</div>

<!-- Start Page Content -->
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h2>Miscellaneous Event</h2>
                <form class="form-horizontal ">
                        <label class="col-md-12">NOTICE</label>
                    <div class="form-group" style="height:200px; width:100%; overflow:auto; overflow-x:hidden">
                           @foreach ($miss as $mis)


                        <div class="col-md-12">
                        <textarea rows="4" class="form-control form-control-line" readonly placeholder="">Event Name: {{ $mis->name }}
venue: {{ $mis->venue }}
Date:{{ $mis->date }}
{{ $mis->description }}</textarea>
                        </div>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
