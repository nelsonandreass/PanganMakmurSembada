<div class="d-none d-md-block">
    <div class="row " id="gallery">
        @foreach($minigalleries as $gallery)
            <div class="col-3" style="heigth: 100vh; max-height: 100vh">
                <img src="{{url('/storage/'.$gallery->foto)}}" class="d-block w-100 h-100" alt="...">
            </div>
        @endforeach
        
    </div>
</div>