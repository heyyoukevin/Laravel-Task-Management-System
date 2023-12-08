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
                 <h2 style="width: 100%;text-align: center;">PROJECT MODULE DETAILS</h2>
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
    <td>MODULE TITLE</td>
    <td>TECHNOLOGY</td>
    <td>STATUS</td>
    <td>DESCRIPTION</td>
    <td>START DATE</td>
    <td>START TIME</td>
    <td>END DATE</td>
    <td>END TIME</td>
    <td>HOUR</td>
    <td>ASSIGNED TO</td>
    <td></td>
</tr>

@foreach($user as $userf)

<tr>
     <td>{{$loop->iteration}}</td>
     <td>{{$userf->mdtl}}</td>
     <td>{{$userf->tech}}</td>
     <td>{{$userf->sts}}</td>
     <td>{{$userf->desc}}</td>
     <td>{{$userf->stdt}}</td>
     <td>{{$userf->sttm}}</td>
     <td>{{$userf->endt}}</td>
     <td>{{$userf->entm}}</td>
     <td>{{$userf->hr}}</td>

     <td>
     <?php
     $un=\DB::select("select *from ulogins where id=?",[$userf->mdasgn]);

     if(isset($un))
     {
        foreach($un as $u)
        {
            echo $u->name;
        }
     }

     ?>
     </td>

     <td> <a class="btn btn-primary" href="/editmodule/{{$userf->prjid}}/{{$userf->id}}">EDIT MODULE</a></td>

     <td> <a class="btn btn-success" href="/reassignmodule/{{$userf->prjid}}/{{$userf->id}}">REASSIGN MODULE</a></td>

    <form action="/deletemodule/{{$userf->id}}/{{$userf->prjid}}" method="POST">
     {{ csrf_field() }}
     <td><button type="submit" class="btn btn-danger">DELETE MODULE</button></td>
     </form>

     <td> <a class="btn btn-warning" href="/addtask/{{$userf->prjid}}/{{$userf->id}}">ADD TASKS</a></td>

     <td> <a class="btn btn-secondary" href="/viewtask/{{$userf->prjid}}/{{$userf->id}}">VIEW TASKS</a></td>

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