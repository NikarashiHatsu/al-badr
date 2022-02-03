<?php

namespace App\Http\Livewire\Dashboard\Teacher;

use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $teacher;
    public $photo;

    protected $rules = [
        'teacher.name' => ['required', 'string'],
        'teacher.place_of_birth' => ['required', 'string'],
        'teacher.date_of_birth' => ['required', 'date'],
        'teacher.phone_number' => ['required', 'string'],
    ];

    protected $messages = [
        'teacher.name.required' => 'Nama guru harus diisi.',
        'teacher.place_of_birth.required' => 'Tempat lahir harus diisi.',
        'teacher.date_of_birth.required' => 'Tanggal lahir harus diisi.',
        'teacher.phone_number.required' => 'Nomor telepon harus diisi.',
    ];

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
    }

    public function store()
    {
        $this->validate();

        try {
            if ($this->photo) {
                $this->teacher->photo = $this->photo->store('teachers', config('filesystems.default'));
            }

            $this->teacher->save();
            $this->teacher = new Teacher();
            $this->reset('photo');
        } catch (\Throwable $th) {
            return session()->flash('error', 'Gagal menambah data guru: ' . $th->getMessage());
        }

        return session()->flash('success', 'Berhasil menambah data guru.');
    }

    public function mount()
    {
        $this->teacher = new Teacher();
    }

    public function render()
    {
        return view('livewire.dashboard.teacher.create');
    }
}
