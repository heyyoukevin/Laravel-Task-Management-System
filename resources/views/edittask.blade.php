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
                 <h2 style="width: 100%;text-align: center;">EDIT TASK DETAILS</h2>
            </div>
         </div>
      </div>		
</section>


<fieldset>
<center>
<form action="/edittask/updatetask" method="POST" onSubmit="return check()">
{{ csrf_field() }}
<table>

<br>

<input type="text" name="prjid" id="prjid" value="{{$prjid}}" hidden>

</tr><tr><td><br></td></tr>

<input type="text" name="mid" id="mid" value="{{$mid}}" hidden>

</tr><tr><td><br></td></tr>

<td>TASK TITLE</td>
<td><input type="text" name="tstl" id="mdtl" value="{{$user->tstl}}" required ></td>

</tr><tr><td><br></td></tr>

<td>TECHNOLOGY</td>
<td>
<select name="tech" id="tech" required>
<option value="{{$user->tech}}" selected>{{$user->tech}}</option>
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

<td>STATUS</td>
<td>
<select name="sts" id="sts" required>
<option value="{{$user->sts}}" selected>{{$user->sts}}</option>
<option value="assigned">ASSIGNED</option>
</select>
</td>

</tr><tr><td><br></td></tr>

<td>DESCRIPTION</td>
<td><textarea name="desc" id="desc" required>{{$user->desc}}</textarea></td>


</tr><tr><td><br></td></tr>

<td>START DATE</td>
<td><input type="date" name="stdt" id="stdt" value="{{$user->stdt}}" required ></td>

</tr><tr><td><br></td></tr>

<td>START TIME</td>
<td><input type="time" name="sttm" id="sttm" value="{{$user->sttm}}" required ></td>

</tr><tr><td><br></td></tr>

<td>END DATE</td>
<td><input type="date" name="endt" id="endt" value="{{$user->endt}}" required ></td>

</tr><tr><td><br></td></tr>

<td>END TIME</td>
<td><input type="time" name="entm" id="entm" value="{{$user->entm}}" required ></td>

</tr><tr><td><br></td></tr>

<td>HOURS</td>
<td><input type="text" name="hr" id="hr" value="{{$user->hr}}" required ></td>

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


<script>
  $("#endt").change(function()
  {
    var startDate = document.getElementById("stdt").value;
    var endDate = document.getElementById("endt").value;

    if ((Date.parse(endDate) <= Date.parse(startDate)))
    {
      alert("End date should be greater than Start date");
      document.getElementById("endt").value = "";
    }
  });
</script>


<script type="text/javascript">
    var letters=/^[a-z A-Z]+$/;
    var numbers=/^[0-9]+$/;
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var tech = document.getElementById("tech");

    function check()
    {
    if(!document.getElementById("hr").value.match(numbers))
        {
            alert('Please input numeric characters only,enter hours properly');
            return false;
        }
    else if (tech.value == "Select")
        {
            alert("Please select any technology");
            return false;
        }
    else if (sts.value == "Select")
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