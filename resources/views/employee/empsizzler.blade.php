@extends('employee.empheader')

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

<!-- Start Page Content -->
<!----
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                    <div class="row">
                            <div class="col-md-6">
                                <label style="font-weight:600;">Saturday Sizzler</label></div>
                                <div class="col-md-4"><input id="filebutton" name="file" class="input-file" type="file">
                                </div>
                                <div class="col-md-2"><button type="submit" class="btn btn-info">Submit</button></div>

                        </div>


            </div>
        </div>
    </div>
</div>
-->
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h2>Saturday Sizzlers</h2>
                <form class="form-horizontal ">
                    <label class="col-md-12">NOTICE</label>
                    <div class="form-group" style="height:200px; width:100%; overflow:auto; overflow-x:hidden">
                          @foreach ($sizzler as $siz)


                        <div class="col-md-12">
                            <textarea rows="4" class="form-control form-control-line" readonly placeholder="">{{ $siz->decision }}, {{ $siz->description}}</textarea>
                        </div>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
