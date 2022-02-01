<?php

namespace App\Http\Livewire\Dashboard\Teacher;

use App\Models\Teacher;
use Carbon\Carbon;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Datatable extends LivewireDatatable
{
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function builder()
    {
        return Teacher::query();
    }

    public function columns()
    {
        return [
            Column::name('id')
                ->label('ID')
                ->searchable(),

            Column::callback(['photo'], function($photo) {
                    $photo_url = asset('storage/' . $photo);

                    return "<img src='$photo_url' class='rounded h-16 border'>";
                })
                ->label('Foto'),

            Column::name('name')
                ->label('Nama')
                ->searchable(),

            Column::name('place_of_birth')
                ->label('Tempat Lahir')
                ->searchable(),

            Column::callback(['date_of_birth'], function($date_of_birth) {
                    $formatted_date = Carbon::parse($date_of_birth)->locale('id_ID')->isoFormat('LL');

                    return "<p class='text-xs italic'>$formatted_date</p>";
                })
                ->label('Tanggal Lahir'),

            Column::callback(['id'], function($id) {
                    $edit_route = route('dashboard.teacher.edit', $id);

                    return view('livewire.datatables.table-actions', [
                        'id' => $id,
                        'edit_route' => $edit_route
                    ]);
                })
                ->label('Opsi'),
        ];
    }
}