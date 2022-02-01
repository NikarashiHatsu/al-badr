<?php

namespace App\Http\Livewire\Dashboard\VisionAndMission;

use App\Models\SiteSettings;
use Livewire\Component;

class Edit extends Component
{
    public $vision_and_mission;

    protected $rules = [
        'vision_and_mission.content' => 'required',
    ];

    protected $messages = [
        'vision_and_mission.content.required' => 'Konten visi/misi harus diisi.',
    ];

    public function update()
    {
        $this->validate();

        try {
            $this->vision_and_mission->update();
        } catch (\Throwable $th) {
            return session()->flash('error', 'Gagal memperbarui data visi dan misi: ' . $th->getMessage());
        }

        return session()->flash('success', 'Berhasil memperbarui data visi dan misi.');
    }

    public function mount(SiteSettings $visionAndMission)
    {
        $this->vision_and_mission = $visionAndMission;
    }

    public function render()
    {
        return view('livewire.dashboard.vision-and-mission.edit');
    }
}
