<div class="section w-100" style="height:80vh;" id="commerce">
    <div class="container-fluid h-100">
        <!-- <div class="row h-100"> carousell backup
            <h1 class="text-center row mt-auto"><b>Produk Kami Tersedia di</b></h1>
            <div class="center-commerce my-auto mx-auto" style="width:80%" >
                @foreach($stores as $store)
                <div class="h-50 px-3">
                    <div class="m-0 p-0" style="background-color:white !important;">
                        <div class="row mb-3">
                            <div class="col-12">
                                <a href="{{$store->url}}" target="_blank">
                                    <img src="{{url('/storage/'.$store->logo)}}" class="w-100" style="border-radius:.5rem;"  alt="...">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div> -->
        <div class="row " style="min-heigth:100vh !important; height:auto !important">
            <h1 class="text-center row mt-auto"><b>Produk Kami Tersedia di</b></h1>
            <div class="my-auto mx-auto" style="width:80%" >
                @foreach($stores as $store)
                <div class="h-50 px-3">
                    <div class="m-0 p-0" style="background-color:white !important;">
                        <div class="row mb-3">
                            <div class="col-2">
                                <a href="{{$store->url}}" target="_blank">
                                    <img src="{{url('/storage/'.$store->logo)}}" class="w-100" style="border-radius:.5rem;"  alt="...">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>