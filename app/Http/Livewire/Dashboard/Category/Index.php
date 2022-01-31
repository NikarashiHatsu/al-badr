<?php

namespace App\Http\Livewire\Dashboard\Category;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public $category;

    protected $listeners = ['confirmDeletion', 'delete'];

    public function confirmDeletion(Category $category)
    {
        $this->category = $category;

        session()->flash('confirmDeletion', true);
    }

    public function delete()
    {
        try {
            $this->category->delete();
        } catch (\Throwable $th) {
            return session()->flash('error', 'Gagal menghapus kategori: ' . $th->getMessage());
        }

        $this->emitTo('dashboard.category.datatable', 'refreshComponent');

        return session()->flash('success', 'Berhasil menghapus kategori.');
    }

    public function render()
    {
        return view('livewire.dashboard.category.index');
    }
}
