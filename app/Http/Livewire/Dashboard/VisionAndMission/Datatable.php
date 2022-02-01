<?php

namespace App\Http\Livewire\Dashboard\VisionAndMission;

use App\Models\SiteSettings;
use Carbon\Carbon;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Datatable extends LivewireDatatable
{
    public function builder()
    {
        return SiteSettings::query()
            ->whereIn('type', ['visi', 'misi', 'tujuan']);
    }

    public function columns()
    {
        return [
            Column::name('id')
                ->label('ID')
                ->searchable(),

            Column::callback(['content'], function($content) {
                    return "<div class='line-clamp-3' style='max-width: 300px; white-space: break-spaces'>$content</div>";
                })
                ->label('Konten')
                ->searchable(),

            Column::callback(['type'], function($type) {
                    if ($type == 'visi') return "<span class='badge badge-info'>Visi</span>";
                    if ($type == 'misi') return "<span class='badge badge-warning'>Misi</span>";
                    if ($type == 'tujuan') return "<span class='badge badge-success'>Tujuan</span>";
                })
                ->label('name')
                ->searchable(),

            Column::callback(['created_at'], function($created_at) {
                    $formatted_date = Carbon::parse($created_at)->format('Y-m-d H:i:s');

                    return "<p class='text-xs italic'>$formatted_date</p>";
                })
                ->label('Tanggal Pembuatan'),

            Column::callback(['updated_at'], function($updated_at) {
                    $formatted_date = Carbon::parse($updated_at)->format('Y-m-d H:i:s');

                    return "<p class='text-xs italic'>$formatted_date</p>";
                })
                ->label('Perubahan Terakhir'),

            Column::callback(['id'], function($id) {
                    $edit_route = route('dashboard.vision-and-mission.edit', $id);

                    return view('livewire.datatables.table-actions', [
                        'id' => $id,
                        'edit_route' => $edit_route,
                        'can_delete' => false,
                    ]);
                })
                ->label('Opsi'),
        ];
    }
}