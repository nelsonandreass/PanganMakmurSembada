<div id="carouselExampleControls" class="carousel slide"  data-bs-ride="carousel">
    <div class="carousel-inner "style="height: 100vh !important; max-heigth: 100vh;">
        <div class="carousel-item active">
            <img src="{{url('/storage/'.$first_banner->foto)}}" class="d-block w-100" alt="...">
        </div>
        @foreach($banners as $banner)
            <div class="carousel-item">
                <img src="{{url('/storage/'.$banner->foto)}}" class="d-block w-100" alt="...">
            </div>
        @endforeach
        
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>