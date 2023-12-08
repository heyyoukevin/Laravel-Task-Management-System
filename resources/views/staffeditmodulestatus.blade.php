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
                 <h2 style="width: 100%;text-align: center;">UPDATE MODULE STATUS</h2>
            </div>
         </div>
      </div>		
</section>


<fieldset>
<center>
<form action="/staffeditmodulestatus/staffupdatemodulestatus" method="POST" onSubmit="return check()">
{{ csrf_field() }}
<table>

<br>

<input type="text" name="prjid" id="prjid" value="{{$prjid}}" hidden>

</tr><tr><td><br></td></tr>

<td>STATUS</td>
<td>
<select name="sts" id="sts" required>
<option value="{{$user->sts}}" selected>{{$user->sts}}</option>
<option value="assigned">ASSIGNED</option>
<option value="testing">TESTING</option>
<option value="developing">DEVELOPING</option>
<option value="pending">PENDING</option>
<option value="completed">COMPLETED</option>
</select>
</td>

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


<br><br><br><br>


    <!-- Start Script -->
    <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/templatemo.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <!-- End Script -->



<script type="text/javascript">
    var letters=/^[a-z A-Z]+$/;
    var numbers=/^[0-9]+$/;
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var tech = document.getElementById("tech");

    function check()
    {
    if (sts.value == "Select")
        {
            alert("Please update the status");
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