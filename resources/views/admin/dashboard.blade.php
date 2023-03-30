<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <link rel="icon" type="image/x-icon" href="{{url('/assets/images/pms.png')}}">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Saran</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            @foreach($sarans as $saran)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$saran->saran}}</td>
                                    <td>
                                        <form action="{{route('saran.destroy',$saran->id)}}" method="POST" >
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php $i++;?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
