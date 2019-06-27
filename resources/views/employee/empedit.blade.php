<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<form method="POST" action="{{route('user.updateProfile',['user' => $user])}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="container">
        <div class="jumbotron">
            <h2>Update The Information Of Employee</h2>


                    <div class="form-group">
                      <label >Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ $user->name }} ">
                    </div>
                    <div class="form-group">
                        <label >Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ $user->email }} ">
                    </div>
                    <div class="form-group">
                            <label >Phone Number:</label>
                            <input type="text" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber" value="{{ $user->phonenumber }} ">
                    </div>
                    <div class="form-group">
                            <label >Profession :</label>
                            <input type="text" class="form-control" id="profession" placeholder="Enter Profession" name="profession" value="{{ $user->profession }} ">
                    </div>

                    <div class="form-group">
                            <label >Image :</label>
                            <input type="file" class="form-control" id="images" placeholder="" name="images" value="{{ $user->images }}">
                    </div>

                    <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="submit" style="width:50%;">Update Data</button>
                    </div>




        </div>
    </div>
</form>
</body>
</html>
