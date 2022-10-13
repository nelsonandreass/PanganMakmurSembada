<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('product.create')}}" class="btn btn-primary mb-3">
                        Tambah Product
                    </a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Category</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;?>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$product->nama}}</td>
                                    <td>{{$product->category->nama}}</td>
                                    <td>{{$product->deskripsi}}</td>
                                    <td><img class="icons" src="{{url('/storage/'.$product->foto)}}" alt="{{$product->foto}}"></td>
                                    <td>
                                      
                                        <form action="{{route('product.destroy',$product->id)}}" method="POST" >
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php $no++;?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
