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
            Edit Data Guru
        </h6>
    </div>

    <x-alerts />

    <div class="card bg-base-100 border">
        <div class="card-body">
            <form wire:submit.prevent="update">
                <div class="grid grid-cols-12 grid-flow-row gap-4">
                    <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3 form-control">
                        <label for="name" class="label">
                            <span class="label-text">Nama</span>
                        </label>
                        <input
                            wire:model.defer="teacher.name"
                            id="name"
                            type="text"
                            class="input input-bordered"
                        />
                    </div>

                    <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3 form-control">
                        <label for="place_of_birth" class="label">
                            <span class="label-text">Tempat Lahir</span>
                        </label>
                        <input
                            wire:model.defer="teacher.place_of_birth"
                            id="place_of_birth"
                            type="text"
                            class="input input-bordered"
                        />
                    </div>

                    <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3 form-control">
                        <label for="phone_number" class="label">
                            <span class="label-text">No. HP</span>
                        </label>
                        <input
                            wire:model.defer="teacher.phone_number"
                            id="phone_number"
                            type="text"
                            class="input input-bordered"
                        />
                    </div>

                    <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3 form-control">
                        <label for="date_of_birth" class="label">
                            <span class="label-text">Tanggal Lahir</span>
                        </label>
                        <input
                            wire:model.defer="teacher.date_of_birth"
                            id="date_of_birth"
                            type="date"
                            class="input input-bordered"
                        />
                    </div>

                    <div class="col-span-12 sm:col-span-6 md:col-span-4 form-control">
                        <label for="photo" class="label">
                            <span class="label-text">Foto</span>
                        </label>

                        @if ($photo)
                            <div class="p-4 border rounded my-4">
                                <img src="{{ $photo->temporaryUrl() }}" class="w-full rounded object-contain" />
                            </div>
                        @endif

                        @if (!$photo)
                            <div class="p-4 border rounded my-4">
                                <img src="{{ asset($teacher->photo) }}" class="w-full rounded object-contain" />
                            </div>
                        @endif

                        <input
                            wire:model="photo"
                            id="photo"
                            type="file"
                            class="input input-bordered"
                        />
                    </div>

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
