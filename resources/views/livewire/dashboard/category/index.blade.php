<div>
    <div class="flex items-center justify-between">
        <h6 class="font-medium text-lg">
            Kategori Blog
        </h6>
        <a href="{{ route('dashboard.category.create') }}" class="btn btn-sm">
            <span class="mr-2">
                Tambah
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
        </a>
    </div>

    <x-alerts />

    @livewire('dashboard.category.datatable')
</div>
