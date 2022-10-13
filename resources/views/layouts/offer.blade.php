<div class="container">
        <div class="card-wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="{{url('/storage/'.$offer->foto)}}" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-box">
                        <h5 class="mbr-title mbr-fonts-style display-2">
                            <strong>{{$offer->header}}</strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style display-7">{{$offer->detail}}</p>
                        <div class="cost">
                            <span class="currentcost mbr-fonts-style pr-2 display-2">Rp. {{$offer->discounted_price}}</span>
                                <br>
                            <span class="oldcost mbr-fonts-style display-7 ">Rp. {{$offer->original_price}}</span>
                        </div>
                        <div class="mbr-section-btn pt-3">
                            <a href="https://mobiri.se" class="btn btn-primary display-4">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>