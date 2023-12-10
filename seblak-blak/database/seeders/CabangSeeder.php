<?php

namespace Database\Seeders;

use App\Models\Cabang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Cabang::insert([
            'nama' => 'Seblak-Blak Jaksel',
            'lokasi' => 'Jakarta Selatan',
            'owner' => 'Roby W',
            'manager' => 'Kevin C',
            'buka' => '08:00:00',
            'tutup' => '18:30:00',
        ]);

        Cabang::insert([
            'nama' => 'Seblak-Blak Summarecon',
            'lokasi' => 'Bekasi',
            'owner' => 'Owen M',
            'manager' => 'Joel C',
            'buka' => '09:00:00',
            'tutup' => '17:00:00',
        ]);

        Cabang::insert([
            'nama' => 'Seblak-Blak Serpong',
            'lokasi' => 'Tanggerang',
            'owner' => 'Samuel W',
            'manager' => 'Steven S',
            'buka' => '07:00:00',
            'tutup' => '15:00:00',
        ]);
    }

    // $table->id();
    //         $table->string('nama');
    //         $table->string('lokasi');
    //         $table->string('owner');
    //         $table->string('manager');
    //         $table->timestamp('open');
    //         $table->timestamp('close');
    //         $table->timestamps();
}
