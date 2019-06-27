@extends('template')

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

<!--start psge content-->
<form action="miss" method="post">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
               @if(count($errors)>0)
               <ul>
                   @foreach($errors->all() as $error)
                   <li class="alert alert-danger">{{ $error }}</li>
                   @endforeach
               </ul>
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

                    <div class="form-group ">
                      <label for="name">EVENT NAME</label>
                      <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                       <label for="text">VENUE</label>
                       <input type="text" name="venue" class="form-control" id="venue">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea rows="5" name="description" class="form-control form-control-line"></textarea>

                    </div>
                    <div class="form-group " >
                     <label for="date">Date</label>

                     <input type="date" name="date" class="form-control " style="max-width:300px; margin-left:10px;">
                    </div>

                    <div>
                      <input type="hidden" name="_token" value="{{ csrf_token()}}">
                    </div>

                    <div class="form-group">

                        <button class="btn btn-success" name="submit">Update </button>

                    </div>







            </div>
        </div>
    </div>
</div>
</form>


@endsection
