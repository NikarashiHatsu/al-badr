<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar kategori > Tambah kategori') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alerts />
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b">
                    <a href="{{ route('dashboard.category.index') }}">
                        Kembali
                    </a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('dashboard.category.store') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="block mb-4">Nama kategori</label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                value="{{ old('name') }}"
                                class="rounded border-gray-300
                                        focus:ring focus:ring-green-500 focus:ring-opacity-30 focus:border-green-500/50"
                                required
                            />
                        </div>
                        <div class="flex">
                            <x-button>
                                Simpan
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
