<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gallery') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Gallery Baru</h2>
                    <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                
                        <div class="mt-4">
                            <x-label for="foto" : value="Foto" />

                            <x-input id="foto" class="block mt-1 w-full"
                                            type="file"
                                            name="foto"
                                            required />
                        </div>

                        <div class="mt-4">
                            <x-label for="category" : value="Category" />

                            <select name="category" id="category" class="form-control">
                                <option value="0">--Pilih--</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->nama}}" class="form-control">{{$category->nama}}</option>
                                @endforeach

                            </select>
                        </div>
                        <label for="" class="mt-3">Untuk Produk</label>
                        <div class="mt-4">
                            <x-label for="nama" : value="Nama" />

                            <x-input id="nama" class="block mt-1 w-full"
                                            type="text"
                                            name="nama"
                                            />
                        </div>
                        <div class="mt-4">
                            <x-label for="jenis" : value="Jenis" />

                            <x-input id="jenis" class="block mt-1 w-full"
                                            type="text"
                                            name="jenis"
                                            />
                        </div>
                        <div class="mt-4">
                            <x-label for="ukuran" : value="Ukuran" />

                            <x-input id="ukuran" class="block mt-1 w-full"
                                            type="text"
                                            name="ukuran"
                                            />
                        </div>
                        <x-button class="mt-3">
                            {{ __('Simpan') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
