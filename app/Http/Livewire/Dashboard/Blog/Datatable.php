<?php

namespace App\Http\Livewire\Dashboard\Blog;

use App\Models\Blog;
use Carbon\Carbon;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Datatable extends LivewireDatatable
{
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function builder()
    {
        return Blog::query();
    }

    public function columns()
    {
        return [
            Column::name('id')
                ->label('ID')
                ->searchable(),

            Column::callback(['is_published'], function($status) {
                    if ($status) return "<span class='badge badge-success'>Diterbitkan</span>";
                    return "<span class='badge badge-error'>Belum Diterbitkan</span>";
                })
                ->label('Status'),

            Column::name('creator.name')
                ->label('Pembuat')
                ->searchable(),

            Column::name('title')
                ->label('Judul')
                ->searchable(),

            Column::callback(['description'], function($description) {
                    return "<div class='line-clamp-3' style='max-width: 300px; white-space: break-spaces'>$description</div>";
                })
                ->label('Konten')
                ->searchable(),

            Column::callback(['created_at'], function($created_at) {
                    $formatted_date = Carbon::parse($created_at)->format('Y-m-d H:i:s');

                    return "<p class='text-xs italic'>$formatted_date</p>";
                })
                ->label('Tanggal Pembuatan'),

            Column::callback(['view_count'], function($view_count) {
                    return "
                        <div class='flex items-center'>
                            <span>$view_count</span>
                            <svg xmlns='http://www.w3.org/2000/svg' class='h-4 w-4 ml-2' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                <path stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M15 12a3 3 0 11-6 0 3 3 0 016 0z' />
                                <path stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z' />
                            </svg>
                        </div>
                    ";
                })
                ->label('Status'),

            Column::callback(['id'], function($id) {
                    $edit_route = route('dashboard.blog.edit', $id);

                    return view('livewire.datatables.table-actions', [
                        'id' => $id,
                        'edit_route' => $edit_route
                    ]);
                })
                ->label('Opsi'),
        ];
    }
}