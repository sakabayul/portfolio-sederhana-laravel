<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=>'_site_name',
            'label'=>'Judul Situs',
            'value'=>'website sederhana',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_location',
            'label'=>'Alamat Kantor',
            'value'=>'Sleman, Yogyakarta, Indonesia',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_youtube',
            'label'=>'You Tube',
            'value'=>'https://youtube.com',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_instagram',
            'label'=>'instagram',
            'value'=>'https://instagram.com',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_twitter',
            'label'=>'twitter',
            'value'=>'https://twitter.com',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_facebook',
            'label'=>'facebook',
            'value'=>'https://facebook.com',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_site_description',
            'label'=>'Site Description',
            'value'=>'Website Sederhana, dengan admin filament',
            'type'=>'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
