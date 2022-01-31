<?php

namespace App\Http\Livewire\Dashboard\Category;

use App\Models\Category;
use Carbon\Carbon;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Datatable extends LivewireDatatable
{
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function builder()
    {
        return Category::query();
    }

    public function columns()
    {
        return [
            Column::name('id')
                ->label('ID Kategori')
                ->searchable(),

            Column::name('name')
                ->label('Nama Kategori')
                ->searchable(),

            Column::callback(['created_at'], function($created_at) {
                    $formatted_date = Carbon::parse($created_at)->format('Y-m-d H:i:s');

                    return "<p class='text-xs italic'>$formatted_date</p>";
                })
                ->label('Tanggal Pembuatan'),

            Column::callback(['id'], function($id) {
                    $edit_route = route('dashboard.category.edit', $id);

                    return view('livewire.datatables.table-actions', [
                        'id' => $id,
                        'edit_route' => $edit_route
                    ]);
                })
                ->label('Opsi'),
        ];
    }
}