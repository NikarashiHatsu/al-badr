<?php

namespace App\Http\Livewire\Dashboard\Blog;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $blog;
    public $photo;

    protected $rules = [
        'blog.name' => ['required', 'string'],
        'blog.place_of_birth' => ['required', 'string'],
        'blog.date_of_birth' => ['required', 'date'],
        'blog.phone_number' => ['required', 'string'],
    ];

    protected $messages = [
        'blog.name.required' => 'Nama blog harus diisi.',
        'blog.place_of_birth.required' => 'Tempat lahir harus diisi.',
        'blog.date_of_birth.required' => 'Tanggal lahir harus diisi.',
        'blog.phone_number.required' => 'Nomor telepon harus diisi.',
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
                $this->blog->photo = $this->photo->store('blogs', 'hosting');
            }

            $this->blog->save();
            $this->blog = new Blog();
            $this->reset('photo');
        } catch (\Throwable $th) {
            return session()->flash('error', 'Gagal menambah data blog: ' . $th->getMessage());
        }

        return session()->flash('success', 'Berhasil menambah data blog.');
    }

    public function mount()
    {
        $this->blog = new Blog();
    }

    public function render()
    {
        return view('livewire.dashboard.blog.create');
    }
}
