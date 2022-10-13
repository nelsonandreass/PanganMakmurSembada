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
                    <h2>Banner Baru</h2>
                    <form action="{{route('offer.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                
                        <div class="mt-4">
                            <x-label for="foto" : value="Foto" />

                            <x-input id="foto" class="block mt-1 w-full"
                                            type="file"
                                            name="foto"
                                            required />
                        </div>
                        <div class="mt-4">
                            <x-label for="header" : value="Header" />

                            <x-input id="header" class="block mt-1 w-full"
                                            type="text"
                                            name="header"
                                            required 
                                            />
                        </div>
                        <div class="mt-4">
                            <x-label for="detail" : value="Detail" />

                            <x-input id="detail" class="block mt-1 w-full"
                                            type="text"
                                            name="detail"
                                            required 
                                            />
                        </div>
                        <div class="mt-4">
                            <x-label for="discountedPrice" : value="discountedPrice" />

                            <x-input id="discountedPrice" class="block mt-1 w-full"
                                            type="text"
                                            name="discountedPrice"
                                            required 
                                            />
                        </div>
                        <div class="mt-4">
                            <x-label for="originalPrice" : value="originalPrice" />

                            <x-input id="originalPrice" class="block mt-1 w-full"
                                            type="text"
                                            name="originalPrice"
                                            required 
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
