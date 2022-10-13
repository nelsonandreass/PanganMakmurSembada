<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('F&Q') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>F&Q Baru</h2>
                    <form action="{{route('faq.store')}}" method="POST">
                        @csrf
                        <div class="mt-4">
                            <x-label for="pertanyaan" : value="Pertanyaan" />

                            <x-input id="pertanyaan" class="block mt-1 w-full"
                                            type="text"
                                            name="pertanyaan"
                                            required />
                        </div>
                        <div class="mt-4">
                            <x-label for="jawaban" : value="Jawaban" />

                            <x-input id="jawaban" class="block mt-1 w-full"
                                            type="text"
                                            name="jawaban"
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
