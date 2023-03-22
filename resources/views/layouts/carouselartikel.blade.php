<div class="section w-100 background-light-dark" style="height:100vh !important;" id="artikel">
    <!-- <div class="container-fluid h-100">
        <div class="row h-100" >
            
            <div class="MultiCarousel my-auto mx-auto" style="width:80%" data-items="1,3,3,3" data-slide="2" id="ArtikelCarousel" data-interval="1000">
            <div class="col-md-12 text-center mb-5"><h1><b>Artikel Terbaru</b></h1></div>
                <div class="MultiCarousel-inner mt-5">
                    
                    <div class="item h-50 px-3" >
                        <div class="m-0 p-0" style="background-color:white !important;">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <span style="position:absolute;z-index:100;background-color:#FFC435 !important;color:white; border-radius:.2rem" class="mt-3 mx-3 p-1">16/09/2022</span>
                                    <img src="{{url('/storage/'.$first_banner->foto)}}" class="w-100" style="border-radius:.5rem;"  alt="...">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <b>Apa yang membuat beras merah<br>lebih rendah karbohidrat?</b>
                            </div>
                        </div>
                    </div>
                    <div class="item h-50 px-3" >
                        <div class="m-0 p-0" style="background-color:white !important;">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <span style="position:absolute;z-index:100;background-color:#FFC435 !important;color:white; border-radius:.2rem" class="mt-3 mx-3 p-1">16/09/2022</span>
                                    <img src="{{url('/storage/'.$first_banner->foto)}}" class="w-100" style="border-radius:.5rem;"  alt="...">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <b>Apa yang membuat beras merah<br>lebih rendah karbohidrat?</b>
                            </div>
                        </div>
                    </div>
                    <div class="item h-50 px-3" >
                        <div class="m-0 p-0" style="background-color:white !important;">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <span style="position:absolute;z-index:100;background-color:#FFC435 !important;color:white; border-radius:.2rem" class="mt-3 mx-3 p-1">16/09/2022</span>
                                    <img src="{{url('/storage/'.$first_banner->foto)}}" class="w-100" style="border-radius:.5rem;"  alt="...">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <b>Apa yang membuat beras merah<br>lebih rendah karbohidrat?</b>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary leftLst mt-5 "><</button>
                <button class="btn btn-primary rightLst mt-5">></button>
               
            </div>
        </div>
    </div> -->

    <div class="container-fluid h-100">
        <div class="row h-100">
            <h1 class="text-center row mt-auto"><b>Artikel Terbaru</b></h1>
            <div class="center-artikel my-auto mx-auto" style="width:80%" >
                @foreach($products as $product)
                <div class="h-50 px-3" >
                        <div class="m-0 p-0" style="background-color:white !important;">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <span style="position:absolute;z-index:100;background-color:#FFC435 !important;color:white; border-radius:.2rem" class="mt-3 mx-3 px-2 py-1">16/09/2022</span>
                                    <img src="{{url('/storage/'.$first_banner->foto)}}" class="w-100" style="border-radius:.5rem;"  alt="...">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <b>Apa yang membuat beras merah<br>lebih rendah karbohidrat?</b>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row ">
                <button class="btn-green mx-auto" style="width:10rem !important;height:4rem;">Semua Artikel</button>
            </div>
        </div>
    </div>
</div>