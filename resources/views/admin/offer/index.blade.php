<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Offer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('offer.create')}}" class="btn btn-primary mb-3" 
                        @php 
                            if($flag == 1)  print "style='display:none'"
                        @endphp
                     >
                        Buat Offer
                    </a>
                    <table class="table table-striped">
                        
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Header</th>
                                <th scope="col">Details</th>
                                <th scope="col">Discount Price</th>
                                <th scope="col">Original Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">1</td>
                                <td scope="col">
                                    <img class="icons" src="{{url('/storage/'.$data[0]->foto)}}" alt="">
                                </td>
                                <td scope="col">{{$data[0]->header}}</td>
                                <td scope="col">{{$data[0]->detail}}</td>
                                <td scope="col">{{$data[0]->discounted_price}}</td>
                                <td scope="col">{{$data[0]->original_price}}</td>

                                <td scope="col"><a href="{{route('offer.edit' ,$data[0]->id )}}" class="btn btn-success">Edit</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
