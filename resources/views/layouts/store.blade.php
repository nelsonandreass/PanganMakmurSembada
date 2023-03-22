<div class="section w-100" style="min-height:80vh !important;" id="commerce">
    <div class="container-fluid " style="min-height:80vh !important">
        <div class="row my-auto mx-auto d-none d-md-block" style="width:80%">
            <div class="row" >
                <h1 class="text-center my-3"><b>Produk Kami Tersedia di</b></h1>
                @foreach($stores as $store)
                    <div class="col-2 load-more-items">
                        <a href="{{$store->url}}" target="_blank">
                            <img src="{{url('/storage/'.$store->logo)}}" class="w-100 store-icon text-center mx-auto" style="border-radius:.5rem;"  alt="...">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <button class="btn-green load-more-button text-center mx-auto my-3" style="height:4rem;width:8rem;">Load More</button>
            </div>
        </div>
        <div class="row my-auto mx-auto d-block d-md-none" style="min-heigth:100vh !important; height:auto !important">
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
        </div>
    </div>
</div>