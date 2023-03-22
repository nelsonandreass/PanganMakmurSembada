<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Store') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Store Baru</h2>
                    <form action="{{route('store.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                
                        <div class="mt-4">
                            <x-label for="logo" : value="logo" />

                            <x-input id="logo" class="block mt-1 w-full"
                                            type="file"
                                            name="logo"
                                            required />
                        </div>

                        <div class="mt-4">
                            <x-label for="url" : value="url" />

                            <x-input id="url" class="block mt-1 w-full"
                                            type="text"
                                            name="url"
                                            />
                        </div>
                        
                        <div class="mt-4">
                            <x-label for="store" : value="store" />

                            <x-input id="store" class="block mt-1 w-full"
                                            type="text"
                                            name="store"
                                            />
                        </div>

                        <div class="mt-4">
                            <x-label for="islinktree" : value="islinktree" />
                            <select name="islinktree" id="" class="form-control">
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                            </select>
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
