<?php

namespace Database\Seeders;

use App\Models\SiteSettings;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteSettings::create([
            'name' => 'Visi',
            'content' => '',
            'type' => 'visi',
        ]);

        SiteSettings::create([
            'name' => 'Misi',
            'content' => '',
            'type' => 'misi',
        ]);
    }
}
