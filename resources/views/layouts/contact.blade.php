<div class="section" id="contact" style="height:auto !important">
    <!-- for desktop -->
    <div class="wrapper d-none d-md-block">
        <div class="row w-100 m-0 p-0" style="height: 100vh !important;">
            <div class="col-md-6 h-100">
                <div class="row h-100 align-center">
                    <div class="col-10 my-auto h-75"  style="margin-left:15% !important;">
                        <div class="section reguler-font h-100">
                            <h1 class="h1"><b>Hubungi<br>Kami</b></h1>
                            <br>
                            <span>Punya hal yang ingin ditanyakan? Silahkan hubungi kami melalui kontak dibawah ini, atau datanglah ke toko kami untuk berdiskusi bersama kami secara langsung</span>
                            <br>
                            <div class="row">
                                <div class="col-1"><i class="fa-solid fa-location-dot"></i></div>
                                <div class="col-10">Pergudangan Pasar Induk Beras Cipinang Blok E No.2,<br>Cipiang, Pulo Gadung, Jakarta Timur, DKI Jakarta,<br>Indonesia - 13240</div>
                            </div>
                            <div class="row">
                                <div class="col-1"><i class="fa-solid fa-phone"></i></div>
                                <div class="col-10">0812-9212-7772</div>
                            </div>
                            <div class="row">
                                <div class="col-1"><i class="fa-solid fa-envelope"></i></div>
                                <div class="col-10 text-wrap">info@panganmakmursembada.com</div>
                            </div>
                            <br>
                            <h3>Silahkan Koreksi Kami!</h3>
                            <form action="{{route('saran.store')}}" method="post" >
                                @csrf
                                <textarea class="form-control mb-3 text-muted" name="saran" id="saran"  rows="4" style="width: 90% !important;background-color:#F5F5F5;opacity:.8" placeholder="Kritik & Saran"></textarea>
                                <button class="btn-green" id="kirimsaran" style="height:3rem;width:6rem;">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 h-100 " style="background-color: #FFC435">
            <div class="row h-100">
                <div class="col-8 my-auto h-75"  style="margin-left:10% !important;">
                    <div class="section reguler-font">
                        <h1 class="h1" style="color:white;"><b>Jadilah Partner<br>Bisnis Kami</b></h1>
                        <br>
                        <span style="color:white;">Kami siap melayani anda! Bergabunglah bersama kami dan jadilah partner bisnis Pangan Makmur Sembada dengan mengisi form dibawah ini</span>
                        <form class="mt-3" action="">
                            <input class="form-control mb-2" style="height:6vh" type="text" name="nama" placeholder="Nama Anda">
                            <input class="form-control mb-2" style="height:6vh" type="text" name="email" placeholder="E-Mail">
                            <input class="form-control mb-2" style="height:6vh" type="text" name="telepon" placeholder="Telepon">
                            <textarea name="alamat" id="" cols="20" rows="5" class="form-control mb-2" placeholder="Alamat"></textarea>
                            <button class="btn-green" style="height:3rem;width:6rem;">Kirim</button>
                        </form>
                    </div>
                </div>
                <div class="col-2 my-auto">
                &nbsp;
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- for mobile -->
    <div class="wrapper d-block d-md-none py-3">
        <div class="row w-100 m-0 p-0" style="height: auto !important;">
            <div class="col-md-6 h-100">
                <div class="row h-100 mx-auto my-3 container">
                    <div class="col-sm-12 my-auto">
                        <div class="section">
                            <h1 class=" "><b>Hubungi<br>Kami</b></h1>
                            <br>
                            <span>Punya hal yang ingin ditanyakan? Silahkan hubungi kami melalui kontak dibawah ini, atau datanglah ke toko kami untuk berdiskusi bersama kami secara langsung</span>
                            <br>
                            <div class="row">
                                <div class="col-1"><i class="fa-solid fa-location-dot"></i></div>
                                <div class="col-10">Pergudangan Pasar Induk Beras Cipinang Blok E No.2,<br>Cipiang, Pulo Gadung, Jakarta Timur, DKI Jakarta,<br>Indonesia - 13240</div>
                            </div>
                            <div class="row">
                                <div class="col-1"><i class="fa-solid fa-phone"></i></div>
                                <div class="col-10">0812-9212-7772</div>
                            </div>
                            <div class="row">
                                <div class="col-1"><i class="fa-solid fa-envelope"></i></div>
                                <div class="col-10 text-wrap">info@panganmakmursembada.com</div>
                            </div>
                            <br>
                            <h3>Silahkan Koreksi Kami!</h3>
                            <form action="">
                                <textarea class="form-control mb-3 text-muted"name="" id=""  rows="5"style="width: 90% !important;background-color:#F5F5F5;opacity:.8" placeholder="Kritik & Saran"></textarea>
                                <button id="" class="btn-green">Kirim</button>
                            </form>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="col-md-6 h-100 " style="background-color: #FFC435">
                <div class="row h-100 mx-auto my-3 container">
                    <div class="col-sm-12 my-auto">
                        <div class="section">
                            <h1 class="" style="color:white;"><b>Jadilah Partner<br>Bisnis Kami</b></h1>
                            <br>
                            <span style="color:white;">Kami siap melayani anda! Bergabunglah bersama kami dan jadilah partner bisnis Pangan Makmur Sembada dengan mengisi form dibawah ini</span>
                            <form class="mt-3" action="">
                                <input class="form-control mb-2" style="height:6vh" type="text" name="nama" placeholder="Nama Anda">
                                <input class="form-control mb-2" style="height:6vh" type="text" name="email" placeholder="E-Mail">
                                <input class="form-control mb-2" style="height:6vh" type="text" name="telepon" placeholder="Telepon">
                                <textarea name="alamat" id="" cols="20" rows="5" class="form-control mb-2" placeholder="Alamat"></textarea>
                                <button class="btn-green">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.script')