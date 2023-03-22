<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artikel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('artikel.create')}}" class="btn btn-primary mb-3">
                        Tambah Artikel
                    </a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="" scope="col">No</th>
                                <th class="" scope="col">thumbnail</th>
                                <th class="" scope="col">title</th>
                                <th class="" scope="col">content</th>
                                <th class="" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;?>
                            @forelse($artikels as $data)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td style="width:15%; height:30%;"><img src="{{url('/storage/'.$data->thumbnail)}}"  alt=""></td>
                                    <td class="">{{$data->title}}</td>
                                    <td class="">{{$data->body}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="mr-3">
                                                <a href="{{route('artikel.edit' , $data->id)}}" class="btn btn-success">Edit</a>
                                            </div>
                                            <div class="">
                                                <form action="{{route('artikel.destroy',$data->id)}}" method="POST" >
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
                                    <td colspan=5 class="text-center">Empty</td>
                                </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
