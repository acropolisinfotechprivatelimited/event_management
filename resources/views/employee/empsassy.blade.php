@extends('employee.empheader')

@section('title')

<title>Sassy Saturday</title>

@endsection
@section('body')

 <!-- Bread crumb and right sidebar toggle -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Sassy Saturday</h3>
            <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Sassy Saturday</li>
            </ol>
    </div>
</div>

<!-- start page content-->
<br>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
              <h2>Sassy Saturday</h2>
                <form class="form-horizontal ">
                    <label class="col-md-12">NOTICE</label>
                    <div class="form-group" style="height:200px; width:100%; overflow:auto; overflow-x:hidden">

                            @foreach ($sassy as $sas)
                            <div class="col-md-12" >

                            <textarea rows="4" class="form-control form-control-line" readonly placeholder="">{{ $sas->decision }}, {{ $sas->description}}</textarea>
                        </div>
                            @endforeach
                    </div>

                </form>
            </div>


         </div>
    </div>
</div>


@endsection
