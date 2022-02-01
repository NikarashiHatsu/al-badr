<?php

namespace App\Http\Livewire\Dashboard\Contact;

use App\Models\SiteSettings;
use Carbon\Carbon;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Datatable extends LivewireDatatable
{
    public function builder()
    {
        return SiteSettings::query()
            ->whereIn('type', [
                'whatsapp',
                'address',
                'short_address',
                'email',
                'facebook',
                'instagram',
                'twitter',
            ]);
    }

    public function columns()
    {
        return [
            Column::name('id')
                ->label('ID')
                ->searchable(),

            Column::name('name')
                ->label('Nama')
                ->searchable(),

            Column::callback(['content'], function($content) {
                    return "<div class='line-clamp-3' style='max-width: 300px; white-space: break-spaces'>$content</div>";
                })
                ->label('Konten')
                ->searchable(),

            Column::callback(['updated_at'], function($updated_at) {
                    $formatted_date = Carbon::parse($updated_at)->format('Y-m-d H:i:s');

                    return "<p class='text-xs italic'>$formatted_date</p>";
                })
                ->label('Perubahan Terakhir'),

            Column::callback(['id'], function($id) {
                    $edit_route = route('dashboard.contact.edit', $id);

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