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
                 <h2 style="width: 100%;text-align: center;">REUBRO PROJECT DETAILS</h2>
            </div>
         </div>
      </div>

</section>

<a href="/addproject" class="btn btn-primary" style="background-color:green;color:white">ADD PROJECT</a>

<a href="/addgroupmembers" class="btn btn-primary" style="background-color:green;color:white">ADD PROJECT MEMBERS</a>

<div class="container">
<div class="row">
<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 ">

<br><br>

<table style="font-family:verdana;color:black(251, 255, 251);"class="table">

<tr>
    <td>ID</td>
    <td>PROJECT NAME</td>
    <td>TECHNOLOGY</td>
    <td>DESCRIPTION</td>
    <td>CLIENT NAME</td>
    <td>START DATE</td>
    <td>END DATE</td>
    <td>HOURS</td>
</tr>

@foreach($user as $userf)

<tr>
     <td>{{$userf->id}}</td>
     <td>{{$userf->prjname}}</td>
     <td>{{$userf->tech}}</td>
     <td>{{$userf->desc}}</td>
     <td>{{$userf->clname}}</td>
     <td>{{$userf->stdt}}</td>
     <td>{{$userf->endt}}</td>
     <td>{{$userf->hr}}</td>
     
    <td> <a class="btn btn-primary" href="/editproject/{{$userf->id}}">EDIT PROJECT</a></td>
    
    <form action="/deleteproject/{{$userf->id}}" method="POST">
     {{ csrf_field() }}
     <td><button type="submit" class="btn btn-danger">DELETE PROJECT</button></td>
     </form>

     <td> <a class="btn btn-success" href="/viewgroupmembers/{{$userf->id}}">VIEW MEMBERS</a></td>

     <td> <a class="btn btn-warning" href="/addmodule/{{$userf->id}}">ADD MODULES</a></td>

     <td> <a class="btn btn-secondary" href="/viewmodule/{{$userf->id}}">VIEW MODULES</a></td>

</tr>
 
@endforeach

</table>

</div>
</div>
</div>

<br><br><br>

</body>
</html>

@endsection