<div class="section w-100 d-none d-md-block" style="height:auto !important;" id="gallery">
    <div class="row w-100 m-0 p-0" >
        @foreach($minigalleries as $gallery)
            <div class="col-md-3 m-0 p-0">
                <img src="{{url('/storage/'.$gallery->foto)}}" class="d-block" style="width:100%" >
            </div>
        @endforeach
    </div>
</div>
