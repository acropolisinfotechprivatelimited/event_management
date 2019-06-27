<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="icon" type="image/png" sizes="16x16" href="public/fevicon.png">

  <link rel="stylesheet" href="public\css\log.css">
<title>Login</title>
</head>
<body >
<div class="header">
<img src="public/logo.png">
</div>
<div class="container-fluid">
<div class="row" style="background-color:lavenderblush;">

<div class="col-md-6">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->

        <!-- Wrapper for slides -->
    <div class="carousel-inner">
    <div class="item active">
      <img src="public/a.jpg" alt="Acropolis" style="width:100%">
    </div>

    <div class="item">
      <img src="public/b.jpg" alt="Chicago" style="width:100%">
    </div>

    <div class="item">
      <img src="public/c.jpg" alt="New York" style="width:100%">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>





<div class="col-md-6">
        <div id="loginbox" style="margin-top:50px;" class="">
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>

                    </div>



                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        @if(count($errors)>0)

                       <div class="row">
                          <div class="col-md-12">
                   @foreach($errors->all() as $error)
                          <p class="alert alert-danger">{{$error}}</p>
                   @endforeach
                </div>
                </div>
                @endif
@if(Session::has('message'))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-danger">
            {{Session::get('message')}}

        </div>
    </div>
</div>
@endif
                        <form id="loginform" class="form-horizontal" role="form" action="login-data" method="post">
                                {{ csrf_field()}}
                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="Enter Email">
                                    </div>

                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
                                    </div>

                                    <div class="input-group">
                                        <div class="checkbox">
                                            <label>
                                            <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                            </label>
                                        </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input type="submit" class="btn-btn-info" value="Login">
                                    </div>
                                </div>
                        </form>

                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account!
                                              <a href="{{ url('/registration')}}">
                                              Registration Here
                                            </a>
                                        </div>
                                    </div>
                                </div>




                        </div>
                    </div>
        </div>

</div>
</div>
</div>
</div>
<div class="footer">
  <p> © 2019 Acropolis Infotech (P) Limited</p>
</div>
</body>
</html>
