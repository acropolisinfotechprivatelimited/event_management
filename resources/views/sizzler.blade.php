@extends('template')

@section('title')

<title>Saturday Sizzler</title>

@endsection
@section('body')

<!-- Bread crumb and right sidebar toggle -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Saturday Sizzlers</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Saturday Sizzlers</li>
        </ol>
    </div>

</div>

@if(count($errors)>0)

<div class="row">
    <div class="col-md-12">
        @foreach($errors->all() as $error)

            <div class="alert alert-danger">{{$error}}</div>

        @endforeach
    </div>

</div>

@endif


@if(Session::has('success'))

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success">
            {{Session::get('success')}}

        </div>
    </div>
</div>
@endif
<!-- start page content-->
<form action="sizzler_data" method="POST">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">

              <h2>Saturday Sizzlers</h2>
              <select class="btn" name="decision" style="background-color: #26c6da; color: white; margin-left: 15px;">
                <option value="" selected disabled hidden>Choose here</option>
                 <option value="Today Meeting" style="background-color: white; color:black ;">Today Meeting</option>
                 <option value="Reschedule" style="background-color: white; color:black ;">Reschedule</option>

               </select>

                <form class="form-horizontal ">
                    <div class="form-group">
                        <label class="col-md-12">NOTICE</label>
                            <div class="col-md-12">
                                <textarea rows="5" name="description" class="form-control form-control-line"></textarea>
                            </div>
                    </div>
                    <div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button name="submit" class="btn btn-success">Update </button>
                         </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
</form>


@endsection
