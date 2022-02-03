<div>
    <div class="flex items-center justify-between mb-6">
        <a href="{{ route('dashboard.blog.index') }}" class="btn btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
            </svg>
            <span class="ml-2">
                Kembali
            </span>
        </a>
        <h6 class="font-medium text-lg">
            Edit Blog
        </h6>
    </div>

    <x-alerts />

    <div class="card bg-base-100 border">
        <div class="card-body">
            <form wire:submit.prevent="update">
                <div class="grid grid-cols-12 grid-flow-row gap-4">
                    <div class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 form-control">
                        <label class="label">
                            <span class="label-text">Judul</span>
                        </label>
                        <input
                            wire:model.defer="blog.title"
                            type="text"
                            class="input input-bordered"
                        >
                    </div>

                    <div class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 form-control">
                        <label class="label">
                            <span class="label-text">Status</span>
                        </label>
                        <select
                            wire:model.defer="blog.is_published"
                            class="select select-bordered"
                        >
                            <option value="0">Draft</option>
                            <option value="1">Terbit</option>
                        </select>
                    </div>

                    <div class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-6 form-control">
                        <label class="label">
                            <span class="label-text">Tags</span>
                        </label>
                        <x-select.multiple
                            wire:model="blog_tags"
                            :tags="$tags"
                        />
                    </div>

                    <div
                        class="col-span-12"
                        wire:model.defer="blog.description"
                        x-init="document.addEventListener('DOMContentLoaded', function(event) {
                            window.editorInstance = initToastUiEditor('editor', $wire.blog.description);
                        })"
                    >
                        <div
                            x-on:keyup="$dispatch('input', editorInstance.getHTML())"
                            wire:ignore
                            id="editor"
                        ></div>
                    </div>

                    <div class="col-span-6">
                        <label class="label">
                            <span class="label-text">Foto Cover Blog</span>
                        </label>

                        @if ($thumbnail)
                            <div class="p-4 border rounded mb-4">
                                <img src="{{ $thumbnail->temporaryUrl() }}" class="w-full rounded object-contain" />
                            </div>
                        @endif

                        @if (!$thumbnail)
                            <div class="p-4 border rounded mb-4">
                                <img src="{{ asset($blog->thumbnail_url) }}" class="w-full rounded object-contain" />
                            </div>
                        @endif

                        <input
                            wire:model="thumbnail"
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
