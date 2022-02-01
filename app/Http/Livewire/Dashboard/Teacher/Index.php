<?php

namespace App\Http\Livewire\Dashboard\Teacher;

use App\Models\Teacher;
use Livewire\Component;

class Index extends Component
{
    public $teacher;

    protected $listeners = ['confirmDeletion', 'delete'];

    public function confirmDeletion(Teacher $teacher)
    {
        $this->teacher = $teacher;

        session()->flash('confirmDeletion', true);
    }

    public function delete()
    {
        try {
            $this->teacher->delete();
        } catch (\Throwable $th) {
            return session()->flash('error', 'Gagal menghapus data guru: ' . $th->getMessage());
        }

        $this->emitTo('dashboard.teacher.datatable', 'refreshComponent');

        return session()->flash('success', 'Berhasil menghapus data guru.');
    }

    public function render()
    {
        return view('livewire.dashboard.teacher.index');
    }
}
