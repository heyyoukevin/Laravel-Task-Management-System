@extends("layout.adminheadfoot")

@section("page-content")


<!DOCTYPE html>
<html lang="en">

<head>
    <title>TASK MANAGEMENT SYSTEM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('images/zay.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>


<section>     
      <div class="row">
         <div class="col-lg-12">
            <div class="full text_align_center heading_s1">
                 <h2 style="width: 100%;text-align: center;">EDIT REUBRO EMPLOYEE DETAILS</h2>
            </div>
         </div>
      </div>		
</section>


<fieldset>
<center>
<form action="updatestaff" method="POST" onSubmit="return check()">
{{ csrf_field() }}
<table>

<br>

<td>NAME</td>
<td><input type="text" name="name" id="name" value="{{$user->name}}" required ></td>

</tr><tr><td><br></td></tr>

<td>USERNAME</td>
<td><input type="text" name="uname" id="uname" value="{{$user->uname}}" required ></td>

</tr><tr><td><br></td></tr>

<td>EMAIL ID</td>
<td><input type="email" name="email" id="email" value="{{$user->email}}" required ></td>

</tr><tr><td><br></td></tr>

<td>PHONE NUMBER</td>
<td><input type="text" name="mob" id="mob" value="{{$user->mob}}" maxlength="10" required ></td>

</tr><tr><td><br></td></tr>

<td>ADDRESS</td>
<td><textarea name="add" id="add" required>{{$user->add}}</textarea></td>

</tr><tr><td><br></td></tr>

<td>DEPARTMENT</td>
<td>
<select name="dept" id="dept"  required>
<option value="{{$user->dept}}" selected>{{$user->dept}}</option>
<option value="php">PHP</option>
<option value="android">ANDROID</option>
<option value="ios">IOS</option>
<option value="testing">TESTING</option>
<option value="designing">DESIGNING</option>
<option value="others">OTHERS</option>
<option value="meanstack">MEAN STACK</option>
<option value="intern">INTERN</option>
</select>
</td>

</tr><tr><td><br></td></tr>

<td>PASSWORD</td>
<td><input type="password" name="pass" id="pass" value="{{$user->pass}}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required ></td>

</tr><tr><td><br></td></tr>

<td>CONFIRM PASSWORD</td>
<td><input type="password" name="cpass" id="cpass" value="{{$user->cpass}}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required ></td>

</tr><tr><td><br></td></tr>

<td><input type="hidden" name="id"  value="{{$user->id}}"/></td>


</table>
<br>
<div class="field center">
<button type="submit" style="background-color:black;color:white">UPDATE</button>

<br><br><br>

</fieldset>
</center>
</form>

<script type="text/javascript">
    var letters=/^[a-z A-Z]+$/;
    var numbers=/^[0-9]+$/;
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    function check()
    {
   if(!document.getElementById("name").value.match(letters))
        {
              
            alert('Please input alphabet characters only,enter name properly');
            return false;
        }
    else if(!document.getElementById("mob").value.match(numbers))
        {
            alert('Please input numeric characters only,enter phone number');
            return false;
        }
		else if(document.getElementById("mob").value.length<10)
        {
            alert('invalid Phone number,enter phone number');
            return false;
        }
	else if(document.getElementById("pass").value!=document.getElementById("cpass").value)
        {
            alert('password miss match');
            return false;
        }
        else
        {
            return true;
        }
    }	
</script>

</body>
</html>

@endsection