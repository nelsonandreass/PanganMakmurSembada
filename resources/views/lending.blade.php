<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Pangan Makmur Sembada</title>
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- slick js-->
   
    <link rel="stylesheet" href=" {{ asset('css/slick.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/slick-theme.css') }}">
    <!-- end of slick js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <style>
        body{
            width:100% !important;
            overflow-x: hidden;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }
        .store-icon{
            width: 50% !important;
            text-align: center !important;
            margin: auto !important;
            display: block;
        }
        
        .load-more-items{
            display: none;
        }
    
        .text-footer:hover{
            color: #d4d3d3 !important;
        }
    </style>
  </head>
  <body>
    @include('layouts.navbar')
    @include('layouts.sidebar')
    @include('layouts.carousel')
    @include('layouts.desc')
    @include('layouts.tagline')
    @include('layouts.minigallery')
    @include('layouts.why') 
    @include('layouts.whymobile') 

    @include('layouts.carouselproduct')
    @include('layouts.contact')
    @include('layouts.store')
    @include('layouts.footer')


   



    <!-- slickjs -->
  
    <!-- end of slick js -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    @include('layouts.script')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



  </body>
</html>