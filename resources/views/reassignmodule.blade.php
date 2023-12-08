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
                 <h2 style="width: 100%;text-align: center;">REASSIGN MODULE</h2>
            </div>
         </div>
      </div>		
</section>


<fieldset>
<center>
<form action="/reassignmodule/againassignmodule" method="POST" onSubmit="return check()">
{{ csrf_field() }}
<table>

<br>

<input type="text" name="prjid" id="prjid" value="{{$prjid}}" hidden>

</tr><tr><td><br></td></tr>

<td>ASSIGN TO</td>
<td>
<select name="mdasgn" id="mdasgn">
<option>Select</option>
@foreach($user as $s)
<option value="{{$s->usrid}}">
    <?php
     $un=\DB::select("select *from ulogins where id=?",[$s->usrid]);

     if(isset($un))
     {
        foreach($un as $u)
        {
            echo $u->name;
        }
     }

     ?>
</option>
@endforeach
</select>
</td>

</tr><tr><td><br></td></tr>

<input type="text" name="id" id="id" value="{{$id}}" hidden>

</table>
<br>
<div class="field center">
<button type="submit" style="background-color:black;color:white">REASSIGN</button>

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
    if (mdasgn.value == "Select")
        {
            alert("Please reassign the module");
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