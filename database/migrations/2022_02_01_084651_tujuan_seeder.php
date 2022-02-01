<?php

use App\Models\SiteSettings;
use Database\Seeders\TujuanSeeder as SeedersTujuanSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TujuanSeeder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        (new SeedersTujuanSeeder)->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        SiteSettings::where('type', 'tujuan')->delete();
    }
}
