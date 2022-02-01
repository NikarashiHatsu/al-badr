<?php

namespace App\Http\Livewire\Dashboard\Achievement;

use App\Models\Achievement;
use Livewire\Component;

class Index extends Component
{
    public $achiement;

    protected $listeners = ['confirmDeletion', 'delete'];

    public function confirmDeletion(Achievement $achiement)
    {
        $this->achievement = $achiement;

        session()->flash('confirmDeletion', true);
    }

    public function delete()
    {
        try {
            $this->achievement->delete();
        } catch (\Throwable $th) {
            return session()->flash('error', 'Gagal menghapus data sejarah: ' . $th->getMessage());
        }

        $this->emitTo('dashboard.achievement.datatable', 'refreshComponent');

        return session()->flash('success', 'Berhasil menghapus data prestasi.');
    }

    public function render()
    {
        return view('livewire.dashboard.achievement.index');
    }
}
