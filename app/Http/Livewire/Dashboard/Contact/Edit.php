<?php

namespace App\Http\Livewire\Dashboard\Contact;

use App\Models\SiteSettings;
use Livewire\Component;

class Edit extends Component
{
    public $contact;

    protected $rules = [
        'contact.content' => 'required',
    ];

    protected $messages = [
        'contact.content.required' => 'Konten kontak harus diisi.',
    ];

    public function update()
    {
        $this->validate();

        try {
            $this->contact->update();
        } catch (\Throwable $th) {
            return session()->flash('error', 'Gagal memperbarui data kontak: ' . $th->getMessage());
        }

        return session()->flash('success', 'Berhasil memperbarui data kontak.');
    }

    public function mount(SiteSettings $contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.dashboard.contact.edit');
    }
}
