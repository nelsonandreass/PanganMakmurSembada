<div class="section w-100" style="height:120vh;" id="produk">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="wrapper my-auto">
                <h1 class="text-center row mt-auto mb-5"><b>Produk Kami</b></h1>
                <input type="hidden" id="tempid">
                <div class="center my-auto mx-auto" style="width:80%" >
                    @foreach($products as $product)
                        <div class="item px-3" style="" id="{{$product->foto}}">
                            <div class="row mb-3">
                                <div class="col-12 h-75">
                                    <img src="{{url('/storage/'.$product->foto)}}" class="w-100" style="border-radius:.5rem;"  alt="...">
                                </div>
                            </div>
                            @php
                                $id = "desc-".substr($product->foto,0,strlen($product->foto)-4)
                            @endphp
                            <div class="row mb-3 d-none" id="{{$id}}">
                                <h6 class="text-green text-center">{{$product->nama}}</h6>
                                <br>
                                <pre class="text-wrap text-center">{{$product->jenis}}</pre>
                                <br>
                                <pre class="text-wrap text-center font-bold"><b>Tersedia dalam ukuran</b></pre>
                                <pre class="text-center">{{$product->ukuran}}</pre>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>