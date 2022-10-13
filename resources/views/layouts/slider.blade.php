<div class="carousel slide" id="tezA4J4bdl" style="max-height:100vh;" data-interval="5000" data-bs-interval="5000">
        <ol class="carousel-indicators">
            <li data-slide-to="0" data-bs-slide-to="0" class="active" data-target="#tezA4J4bdl" data-bs-target="#tezA4J4bdl"></li>
            @for($i = 1 ; $i < $counter ; $i++) 
                <li data-slide-to="{{$i}}" data-bs-slide-to="{{$i}}" data-target="#tezA4J4bdl" data-bs-target="#tezA4J4bdl"></li>

            @endfor
            
        </ol>
        <div class="carousel-inner" >
            <div class="carousel-item slider-image item active">
                <div class="item-wrapper">
                    <img class="d-block w-100" src="{{url('/storage/'.$first_banner->foto)}}" alt="Mobirise Website Builder">
                    
                    <div class="carousel-caption">
                        <h5 class="mbr-section-subtitle mbr-fonts-style display-5">
                            <strong></strong>
                        </h5>
                        <p class="mbr-section-text mbr-fonts-style display-7"></p>
                    </div>
                </div>
            </div>
            @foreach($banners as $banner)
            <div class="carousel-item slider-image item ">
                <div class="item-wrapper">
                    <img class="d-block w-100" src="{{url('/storage/'.$banner->foto)}}" alt="Mobirise Website Builder">
                    
                    <div class="carousel-caption">
                        <h5 class="mbr-section-subtitle mbr-fonts-style display-5">
                            <strong></strong>
                        </h5>
                        <p class="mbr-section-text mbr-fonts-style display-7"></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" data-bs-slide="prev" href="#tezA4J4bdl">
            <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
            <span class="sr-only visually-hidden">Previous</span>
        </a>
        <a class="carousel-control carousel-control-next" role="button" data-slide="next" data-bs-slide="next" href="#tezA4J4bdl">
            <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
            <span class="sr-only visually-hidden">Next</span>
        </a>
    </div>