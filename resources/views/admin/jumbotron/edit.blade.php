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
                    <h2>Banner Baru</h2>
                    <form action="{{route('jumbotron.update',$banner->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mt-4">
                           <img class="image-show" src="{{url('/storage/'.$banner->foto)}}" alt="">
                        </div>

                        <div class="mt-4">
                            <x-label for="link" : value="Link" />

                            <x-input id="link" class="block mt-1 w-full"
                                            type="text"
                                            name="link"
                                            required 
                                            value="{{$banner->link}}"/>
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
