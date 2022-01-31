<?php

namespace App\Http\Livewire\Dashboard\History;

use App\Models\History;
use Carbon\Carbon;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Datatable extends LivewireDatatable
{
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function builder()
    {
        return History::query();
    }

    public function columns()
    {
        return [
            Column::name('id')
                ->label('ID Sejarah')
                ->searchable(),

            Column::name('year')
                ->label('Tahun')
                ->searchable()
                ->defaultSort('desc'),

            Column::callback(['content'], function($content) {
                    return "<div class='line-clamp-4' style='max-width: 300px; white-space: break-spaces'>$content</div>";
                })
                ->label('Konten')
                ->searchable(),

            Column::callback(['created_at'], function($created_at) {
                    $formatted_date = Carbon::parse($created_at)->format('Y-m-d H:i:s');

                    return "<p class='text-xs italic'>$formatted_date</p>";
                })
                ->label('Tanggal Pembuatan'),

            Column::callback(['id'], function($id) {
                    $edit_route = route('dashboard.history.edit', $id);

                    return view('livewire.datatables.table-actions', [
                        'id' => $id,
                        'edit_route' => $edit_route
                    ]);
                })
                ->label('Opsi'),
        ];
    }
}