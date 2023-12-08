@extends("layout.generalheadfoot")

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
    


<section >     
      <div class="row">
         <div class="col-lg-12">
            <div class="full text_align_center heading_s1">
                 <h2 style="width: 100%;text-align: center;">LOGIN</h2>
            </div>
         </div>
      </div>
</section>

<fieldset>
<center>

<form action="/logs" method="post" onSubmit="return check()">
{{csrf_field()}}
            @if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}} </li>
            @endforeach
            </ul>
            </div>
            @endif
            @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{Session::get('fail')}}
            </div>
            @endif

<table>
<br><br><br>

<td>USER NAME</td>
<td><input type="text" name="uname" id="uname" class="form-control m-3" value="{{old('uname')}}" required ></td>

</tr><tr><td><br></td></tr>

<td>PASSWORD</td>
<td><input type="password" name="pass" id="pass" class="form-control m-3" value="{{old('pass')}}"  required ></td>

</tr><tr><td><br></td></tr>

</table>
<br>
<div class="field center">
<button style="background-color:black;color:white">LOGIN</button>
</fieldset>
</center>
</form>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

<br><br><br>

<script type="text/javascript">
    var letters=/^[a-z A-Z]+$/;
    var numbers=/^[0-9]+$/;
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
</script>


    <!-- Start Script -->
    <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/templatemo.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <!-- End Script -->


</body>
</html>


@endsection