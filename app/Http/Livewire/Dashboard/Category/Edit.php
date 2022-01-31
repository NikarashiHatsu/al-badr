<?php

namespace App\Http\Livewire\Dashboard\Category;

use App\Models\Category;
use Livewire\Component;

class Edit extends Component
{
    public $category;

    protected $rules = [
        'category.name' => ['required', 'string', 'min:4', 'max:255'],
    ];

    protected $messages = [
        'category.name.required' => 'Nama kategori harus diisi.',
        'category.name.string' => 'Nama kategori harus berbentuk teks.',
        'category.name.min' => 'Nama kategori harus berisi minimal 4 huruf.',
        'category.name.max' => 'Nama kategori harus kurang dari 255 huruf.',
    ];

    public function update()
    {
        $this->validate();

        try {
            $this->category->update();
        } catch (\Throwable $th) {
            return session()->flash('error', 'Gagal mengubah kategori blog: ' . $th->getMessage());
        }

        return session()->flash('success', 'Berhasil mengubah kategori blog.');
    }

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function render()
    {
        return view('livewire.dashboard.category.edit');
    }
}
