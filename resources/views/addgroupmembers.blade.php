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
<style>
    .dropdown-check-list {
  display: inline-block;
}

.dropdown-check-list .anchor {
  position: relative;
  cursor: pointer;
  display: inline-block;
  padding: 5px 50px 5px 10px;
  border: 1px solid #ccc;
}

.dropdown-check-list .anchor:after {
  position: absolute;
  content: "";
  border-left: 2px solid black;
  border-top: 2px solid black;
  padding: 5px;
  right: 10px;
  top: 20%;
  -moz-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
  transform: rotate(-135deg);
}

.dropdown-check-list .anchor:active:after {
  right: 8px;
  top: 21%;
}

.dropdown-check-list ul.items {
  padding: 2px;
  display: none;
  margin: 0;
  border: 1px solid #ccc;
  border-top: none;
}

.dropdown-check-list ul.items li {
  list-style: none;
}

.dropdown-check-list.visible .anchor {
  color: #0094ff;
}

.dropdown-check-list.visible .items {
  display: block;
}
    </style>

</head>

<body>

<section >   

      <div class="row">
         <div class="col-lg-12">
            <div class="full text_align_center heading_s1">
                 <h2 style="width: 100%;text-align: center;">ADD GROUP MEMBERS TO THE PROJECT</h2>
            </div>
         </div>
      </div>

</section>

<fieldset>
<center>
<form name="forms" action="/adgroupmembers" method="post" onSubmit="return check()">
{{ csrf_field() }}
<table>

<br>

<td>PROJECT NAME</td>
<td>
<select name="prjid" id="prjid">
<option>Select</option>
@foreach($prfetch as $s)
<option value="{{$s->id}}">{{$s->prjname}}</option>
@endforeach
</select>
</td>

</tr><tr><td><br></td></tr>

<td>ADD GROUP MEMBERS</td>
<td>
<div id="usrid" class="dropdown-check-list">
<option class="anchor">Select</option>
  <ul class="items">
      @foreach($grpmemb as $m)
      <li><input type="checkbox"  name="usrid[]" value="{{$m->id}}">{{$m->name}}</input></li>
      @endforeach
  </ul>
</div>
</td>

</table>

<br><br>

<div class="field center">
<button style="background-color:black;color:white">ADD</button>
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
    var checkList = document.getElementById('usrid');
    checkList.getElementsByClassName('anchor')[0].onclick = function(evt)
    {
      if (checkList.classList.contains('visible'))
        checkList.classList.remove('visible');
      else
        checkList.classList.add('visible');
    }
  </script>


  <script type="text/javascript">

  function check()
  {
    if (prjid.value == "Select")
    {
      alert("Please select a Project Name");
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