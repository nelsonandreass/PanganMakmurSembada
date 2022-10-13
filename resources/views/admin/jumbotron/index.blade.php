<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Banner') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('jumbotron.create')}}" class="btn btn-primary mb-3">
                        Tambah Banner
                    </a>
                    <table class="table table-striped">
                        
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Link</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;?>
                            @forelse($banners as $banner)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td><img class="icons" src="{{url('/storage/'.$banner->foto)}}" alt=""></td>
                                    <td><a href="{{$banner->link}}">{{$banner->link}}</a></td>
                                    <td>
                                        <div class="row">
                                            <div class="mr-3">
                                                <a href="{{route('jumbotron.edit' , $banner->id)}}" class="btn btn-success">Edit</a>
                                            </div>
                                            <div class="">
                                                <form action="{{route('jumbotron.destroy',$banner->id)}}" method="POST" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php $no++;?>
                            @empty
                                <tr>
                                    <td colspan=4 class="text-center">Empty</td>
                                </tr>
                            @endforelse
                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
