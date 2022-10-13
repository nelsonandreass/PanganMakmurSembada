<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Category Baru</h2>
                    <form action="{{route('category.store')}}" method="POST">
                        @csrf
                        <div class="mt-4">
                            <x-label for="nama" : value="Nama" />

                            <x-input id="nama" class="block mt-1 w-full"
                                            type="text"
                                            name="nama"
                                            required />
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
