<?php

namespace App\Http\Livewire\Dashboard\Blog;

use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
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

    public function update()
    {
        $this->validate();

        try {
            if ($this->photo) {
                Storage::disk('hosting')->delete($this->blog->photo);

                $this->blog->photo = $this->photo->store('blogs', 'hosting');
            }

            $this->blog->update();
        } catch (\Throwable $th) {
            return session()->flash('error', 'Gagal memperbarui data blog: ' . $th->getMessage());
        }

        return session()->flash('success', 'Berhasil memperbarui data blog.');
    }

    public function mount(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function render()
    {
        return view('livewire.dashboard.blog.edit');
    }
}
