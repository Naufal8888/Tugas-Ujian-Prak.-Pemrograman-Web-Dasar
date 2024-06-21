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
            'value'=>'Website Sederhana',
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
            'label'=>'Youtube',
            'value'=>'https://www.youtube.com/@naufalmulyaxd',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_istagram',
            'label'=>'Instagram',
            'value'=>'https://www.instagram.com/naufal_mulya_xd2.0',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_twitter',
            'label'=>'Twitter',
            'value'=>'https://x.com/mulya_irsy9211',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_facebook',
            'label'=>'Facebook',
            'value'=>'https://www.youtube.com/@FailboatsDinghy',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_site_description',
            'label'=>'Site Description',
            'value'=>'coba saja',
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
