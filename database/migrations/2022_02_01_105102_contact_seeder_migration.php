<?php

use App\Models\SiteSettings;
use Database\Seeders\ContactSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactSeederMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        (new ContactSeeder)->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        SiteSettings::whereIn('type', [
            'whatsapp',
            'address',
            'short_address',
            'big_google_map',
            'small_google_map',
            'email',
            'facebook',
            'instagram',
            'twitter',
        ])->delete();
    }
}
