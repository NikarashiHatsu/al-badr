<?php

namespace App\Http\Livewire\Dashboard\Achievement;

use App\Models\Achievement;
use Livewire\Component;

class Create extends Component
{
    public $achievement;

    public $rules = [
        'achievement.year' => ['required', 'integer', 'date_format:Y'],
        'achievement.content' => ['required', 'string'],
    ];

    public $messages = [
        'achievement.year.required' => 'Tahun harus diisi.',
        'achievement.year.integer' => 'Tahun harus berbentuk angka.',
        'achievement.year.date_format' => 'Tahun harus berbentuk tahun.',
        'achievement.content.required' => 'Konten harus diisi.',
        'achievement.content.string' => 'Konten harus berbentuk teks.',
    ];

    public function store()
    {
        $this->validate();

        try {
            $this->achievement->save();
            $this->achievement = new Achievement();
        } catch (\Throwable $th) {
            return session()->flash('error', 'Gagal menambah data prestasi: ' . $th->getMessage());
        }

        return session()->flash('success', 'Berhasil menambah data prestasi.');
    }

    public function mount()
    {
        $this->achievement = new Achievement();
    }

    public function render()
    {
        return view('livewire.dashboard.achievement.create');
    }
}
