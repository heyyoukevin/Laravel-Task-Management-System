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
                 <h2 style="width: 100%;text-align: center;">PROJECT MEMBERS DETAILS</h2>
            </div>
         </div>
      </div>
</section>


<div class="container">
<div class="row">
<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 ">

<br><br>

<table style="font-family:verdana;color:black(251, 255, 251);"class="table">

<tr>
    <td>SI.NO.</td>
    <td>MEMBER NAME</td>
</tr>

@foreach($user as $userf)

<tr>
     <td>{{$loop->iteration}}</td>
     
     <td>
     <?php
     $un=\DB::select("select *from ulogins where id=?",[$userf->usrid]);

     if(isset($un))
     {
        foreach($un as $u)
        {
            echo $u->name;
        }
     }

     ?>
     </td>
    
    <form action="/deletegroupmembers/{{$userf->id}}/{{$userf->prjid}}" method="POST">
     {{ csrf_field() }}
     <td><button type="submit" class="btn btn-danger">DELETE</button></td>
     </form>

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