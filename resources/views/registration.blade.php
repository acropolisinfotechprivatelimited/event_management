<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" >

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Registration Form</title>
    <style>
    .note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
    margin-left: 15px;
}
.form{
    position: relative;
    top: 97px;
}

.file {
    position: relative;
    overflow: hidden;
    /* margin-top: 0; */
    margin-top: -40px;
    width: 100%;
    border: none;
    background: #A9A9A9;
    z-index: 5;
    cursor: pointer;
    opacity: 0;
}
.login{
position: absolute;
    top: 0%;
    left: 89%;
    color: white;
}
body{
    background-image: url("");
}
.custom-input-button-container {
    position: relative;
    border: 1px solid #d3d3d3;
    padding: 0px 0px;
    border-radius: 1.5rem;
    }
    .custom-input-button-container button {
    border-radius: 25px;
    font-size: 12px;
    border: none;
    transition: all 0.2s linear;
    box-shadow: 0px 0px 0px #fff;
    padding: 8px 30px;
    border: 0px solid #1FBBA6;
    transition: all 0.3s linear;
    cursor: pointer;

</style>

</head>
<body>
        <div class="container register-form">
                <div class="form">
                    <div class="note">
                        <p>Register Form </p>
                        <a href="{{ url('/log-in')}}" ><p class="login">Login Here</p></a>
                    </div>

@if(Session::has('success'))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success">
            {{Session::get('success')}}

        </div>
    </div>
</div>
@endif

                 <form action="register_data" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                    <div class="form-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="user_name" name="name" placeholder="Your Name *" value=""  />
                                    @if($errors->has('name')) <p> {{$errors->first('name')}} </p> @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phonenumber" id="user_number" placeholder="Phone Number *" value="" />
                                    @if($errors->has('phonenumber')) <p> {{$errors->first('phonenumber')}} </p> @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="user_email" placeholder="Your Email *" value="" />
                                    @if($errors->has('email')) <p> {{$errors->first('email')}} </p> @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="password" id="user_password" placeholder="Your Password *" value="" />
                                    @if($errors->has('password')) <p> {{$errors->first('password')}} </p> @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <input type="text" class="form-control" name="profession" id="user_profession" placeholder="Your Profession *" value="" />
                                @if($errors->has('profession')) <p> {{$errors->first('profession')}} </p> @endif
                            </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="custom-input-button-container relative">
                                            <button type="button" class="custom-input-button ">Upload Picture</button>
                                        </div>
                                <input type="file" name="images" id="original-file-type" class="file form-control" value="upload picture">
                                    </div>
                                    @if($errors->has('images')) <p> {{$errors->first('images')}} </p> @endif
                                </div>
                        <button type="submit" id="submit" class="btnSubmit">Submit</button>
                    </div>
                </div>
            </form>
            </div>
        </div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="js/formvalidation.js"></script>
<script>
    $(document).ready(function()
    {
        var file_message="Upload Your File";

         var check_file_format=function()
    {
         setTimeout(function()
         {
             $(".loading-container.file-loader").hide();
         },500);
          $(".loading-container.file-loader").show();

               var value=document.getElementById("original-file-type").files[0].name;
        var size=document.getElementById("original-file-type").files[0].size;
        if(size> 1000000)
        {
            $(".custom-input-button").text("File Size Too Large");
             $(".custom-input-button").css("color","red");
           $("input[name='original-file-type']").val("");
            return false;
        }
        else if(size<20600)
        {
            $(".custom-input-button").text("File Size Too Small");
            $(".custom-input-button").css("color","red");
            return false;

        }
        else
        {
        $(".custom-input-button").text(value);
         $(".custom-input-button").css("color","black");
                    return true;
        }
    }

      $("input[type='file']").change(function(){
        console.log("Input value changed");
        var file_status=check_file_format();
        if(file_status === true)
        {
            console.log("Submision Happen");
            $("[type='submit']").attr("disabled",false);
        }
        else
        {
            console.log("Submiion Not Happen");
            $("[type='submit']").attr("disabled","disabled");
        }

    });
    })

</script>

</body>
</html>
