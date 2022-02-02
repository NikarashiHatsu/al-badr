<div>
    <div class="flex items-center justify-between mb-6">
        <a href="{{ route('dashboard.teacher.index') }}" class="btn btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
            </svg>
            <span class="ml-2">
                Kembali
            </span>
        </a>
        <h6 class="font-medium text-lg">
            Tambah Blog
        </h6>
    </div>

    <x-alerts />

    <div class="card bg-base-100 border">
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="grid grid-cols-12 grid-flow-row gap-4">
                    <div class="col-span-12 flex justify-end">
                        <button class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>