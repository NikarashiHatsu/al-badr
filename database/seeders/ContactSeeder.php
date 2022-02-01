<?php

namespace Database\Seeders;

use App\Models\SiteSettings;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteSettings::create([
            'name' => 'WhatsApp',
            'content' => '+6281223612624',
            'type' => 'whatsapp',
        ]);

        SiteSettings::create([
            'name' => 'Alamat',
            'content' => 'Kompleks Parkiran Makam Sunan, Astana, Kec. Gunungjati, Cirebon, Jawa Barat 45151, Indonesia',
            'type' => 'address',
        ]);

        SiteSettings::create([
            'name' => 'Alamat Pendek',
            'content' => 'Gunugjati, Cirebon, Jawa Barat',
            'type' => 'short_address',
        ]);

        SiteSettings::create([
            'name' => 'Google Map (Versi Besar)',
            'content' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15851.154543126477!2d108.544678!3d-6.673091!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5dc4cb66d30d7b07!2sRA%20THOLA%20&#39;AL%20BADR!5e0!3m2!1sen!2sus!4v1635481826708!5m2!1sen!2sus&z=18" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'type' => 'big_google_map',
        ]);

        SiteSettings::create([
            'name' => 'Google Map (Versi Kecil)',
            'content' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15851.154543126477!2d108.544678!3d-6.673091!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5dc4cb66d30d7b07!2sRA%20THOLA%20&#39;AL%20BADR!5e0!3m2!1sen!2sus!4v1635481826708!5m2!1sen!2sus&z=18" width="100" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'type' => 'small_google_map',
        ]);

        SiteSettings::create([
            'name' => 'Email',
            'content' => '',
            'type' => 'email',
        ]);

        SiteSettings::create([
            'name' => 'Facebook',
            'content' => '',
            'type' => 'facebook',
        ]);

        SiteSettings::create([
            'name' => 'Instagram',
            'content' => '',
            'type' => 'instagram',
        ]);

        SiteSettings::create([
            'name' => 'Twitter',
            'content' => '',
            'type' => 'twitter',
        ]);
    }
}
