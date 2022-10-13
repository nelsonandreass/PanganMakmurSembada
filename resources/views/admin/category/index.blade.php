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
                    <a href="{{route('category.create')}}" class="btn btn-primary mb-3">
                        Tambah Category
                    </a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1?>
                            @forelse($categories as $category)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$category->nama}}</td>
                                </tr>
                                <?php $no++?>

                            @empty
                                <tr>
                                    <td colspan=2 class="text-center">Empty</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
