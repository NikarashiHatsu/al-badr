<?php

namespace App\Http\Livewire\Dashboard\Blog;

use App\Models\Blog;
use Livewire\Component;

class Index extends Component
{
    public $blog;

    protected $listeners = ['confirmDeletion', 'delete'];

    public function confirmDeletion(Blog $blog)
    {
        $this->blog = $blog;

        session()->flash('confirmDeletion', true);
    }

    public function delete()
    {
        try {
            $this->blog->delete();
        } catch (\Throwable $th) {
            return session()->flash('error', 'Gagal menghapus data blog: ' . $th->getMessage());
        }

        $this->emitTo('dashboard.blog.datatable', 'refreshComponent');

        return session()->flash('success', 'Berhasil menghapus data blog.');
    }

    public function render()
    {
        return view('livewire.dashboard.blog.index');
    }
}
