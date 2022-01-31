<?php

namespace App\Http\Livewire\Dashboard\History;

use App\Models\History;
use Livewire\Component;

class Create extends Component
{
    public $history;

    public $rules = [
        'history.year' => ['required', 'integer', 'date_format:Y'],
        'history.content' => ['required', 'string'],
    ];

    public $messages = [
        'history.year.required' => 'Tahun harus diisi.',
        'history.year.integer' => 'Tahun harus berbentuk angka.',
        'history.year.date_format' => 'Tahun harus berbentuk tahun.',
        'history.content.required' => 'Konten harus diisi.',
        'history.content.string' => 'Konten harus berbentuk teks.',
    ];

    public function store()
    {
        $this->validate();

        try {
            $this->history->save();
            $this->history = new History();
        } catch (\Throwable $th) {
            return session()->flash('error', 'Gagal menambah data sejarah: ' . $th->getMessage());
        }

        return session()->flash('success', 'Berhasil menambah data sejarah.');
    }

    public function mount()
    {
        $this->history = new History();
    }

    public function render()
    {
        return view('livewire.dashboard.history.create');
    }
}
