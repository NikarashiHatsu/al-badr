<?php

namespace App\Http\Livewire\Dashboard\History;

use App\Models\History;
use Livewire\Component;

class Index extends Component
{
    public $history;

    protected $listeners = ['confirmDeletion', 'delete'];

    public function confirmDeletion(History $history)
    {
        $this->history = $history;

        session()->flash('confirmDeletion', true);
    }

    public function delete()
    {
        try {
            $this->history->delete();
        } catch (\Throwable $th) {
            return session()->flash('error', 'Gagal menghapus data sejarah: ' . $th->getMessage());
        }

        $this->emitTo('dashboard.history.datatable', 'refreshComponent');

        return session()->flash('success', 'Berhasil menghapus data sejarah.');
    }

    public function render()
    {
        return view('livewire.dashboard.history.index');
    }
}
