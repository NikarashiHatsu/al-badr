<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar kategori') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alerts />
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full border">
                        <thead>
                            <tr>
                                <th class="border px-4 py-3">No</th>
                                <th class="border px-4 py-3">Nama Kategori</th>
                                <th class="border px-4 py-3">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <td class="border px-4 py-3">{{ ($categories->perPage() * (request()->page ?? 1 - 1)) + $loop->iteration }}</td>
                                    <td class="border px-4 py-3">{{ $category->name }}</td>
                                    <td class="border px-4 py-3">
                                        <a href="{{ route('dashboard.category.edit', $category->id) }}">
                                            <x-button>
                                                Edit
                                            </x-button>
                                        </a>
                                        <form
                                            action="{{ route('dashboard.category.destroy', $category->id) }}"
                                            method="post"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');"
                                            class="inline"
                                        >
                                            @csrf
                                            @method('DELETE')
                                            <x-button-danger>
                                                Hapus
                                            </x-button-danger>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="border px-4 py-3">
                                        Belum ada kategori.
                                        <a
                                            href="{{ route('dashboard.category.create') }}"
                                            class="underline decoration-wavy decoration-blue-500 hover:text-blue-500"
                                        >
                                            Tambah baru?
                                        </a>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
