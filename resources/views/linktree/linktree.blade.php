<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Pangan Makmur Sembada</title>
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- slick js-->
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
    <link rel="stylesheet" href=" {{ asset('css/slick.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/slick-theme.css') }}">
    <!-- end of slick js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('css/custom.css') }}">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <style>
        body{
            width:100% !important;
            overflow-x: hidden;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }
        .btn-linktree span img{
            margin-right: 15px;
            display: block;
            width: 2rem;
            height: 2.2rem;
            background-repeat: no-repeat;
            background-size: contain;
            transform: rotate(0deg);
        }
        
        .btn-linktree{
            background-color: #ffffff;
            color: #000000;
            width: 100%;
            text-align: left;
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            font-weight: 800;
            font-style: normal;
            text-decoration: none;
            padding: 14px 15px;
            border: 1px solid #000;
            border-radius: 10px;
            display: inline-flex;
            justify-content: left;
            align-items: left;
            transition: .3s;
        }
        
        .btn-linktree:hover{
            background-color: #1EA3DC;
            border: 1px solid #1EA3DC;
            color: #ffffff;
            transition: .3s;
        }
        .card-custom{
            border-radius: 1rem;
            background-color: #F1EADA;
            box-shadow: 0px 4px 19px -6px rgba(0,0,0,0.75);
            -webkit-box-shadow: 0px 4px 19px -6px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 4px 19px -6px rgba(0,0,0,0.75);
            min-height:90%!important; 
        }
        
        .blue-block{
            height: .5rem;
            background-color: #1EA3DC;
        }
        .linktree{
            background-color: #F7F4EB;
            min-height:100vh !important;
        }
        .linktree-logo{
            width: 11rem;
            height: 8rem;
           
        }
    </style>
  </head>
  <body>

        <div class="container-fluid linktree" style="min-height:100vh !important; ">
          <div class="row p-3 " >
            <div class="col-md-4 p-5 card-custom mx-auto" >
                <div class="col-2 blue-block mb-5"></div>
                <div class="col-12 mx-auto">
                  <img src="{{url('/assets/images/pms.png')}}" class="linktree-logo mx-auto d-block">
                </div>
                <!-- <h1 class="col-8" style="font-weight:700">Pangan Makmur Sembada</h1> -->
                <div class="row">&nbsp;</div>
                <div class="row">&nbsp;</div>
                <div class="row">&nbsp;</div>
                @foreach($datas as $data)
                  <a class="btn-linktree mb-3 " href="{{$data->url}}" target="_blank"><span><img src="{{url('/storage/'.$data->logo)}}" ></span>{{$data->namastore}}</a>
                @endforeach
            </div>
          </div>
        </div>
  </body>
</html>