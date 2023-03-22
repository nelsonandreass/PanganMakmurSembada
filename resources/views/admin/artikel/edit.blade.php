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
                    <h2>Edit Artikel</h2>
                    <form action="{{route('artikel.update',$artikel->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <img class="icons" src="{{url('/storage/'.$artikel->thumbnail)}}" style="width:30%; height:30%;" alt="">
                        <div class="mt-4">
                            <x-label for="foto" : value="Foto" />

                            <x-input id="foto" class="block mt-1 w-full"
                                            type="file"
                                            name="foto"
                                            required />
                        </div>

                        <div class="mt-4">
                            <x-label for="title" : value="Title" />

                            <x-input id="title" class="block mt-1 w-full"
                                            type="text"
                                            name="title"
                                            value="{{$artikel->title}}"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="body" : value="Body" />
                            <textarea class="form-control mt-1 w-full" name="body" id="" cols="30" rows="10" value="">{{$artikel->body}}</textarea>
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
