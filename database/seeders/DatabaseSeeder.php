<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\User;
Use App\Models\Wisata;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        DB::table('wisatas')->insert([
            'name' => 'Kampung Korea',
            'description' => 'Nuansa Seoul berusaha dihadirkan ke Kota Bandung lewat desain tempatnya yang dibuat semirip mungkin.',
            'address' => 'Jl. Banten No.7, Kebonwaru, Kec. Batununggal, Kota Bandung, Jawa Barat 40272',
            'time' => '09.00 - 20.00',
            'phone' => '081214538745',
            'background' => '',
            'facility' => 'Spot foto gratis'
        ]);

        DB::table('wisatas')->insert([
            'name' => 'Bukit Senyum',
            'description' => 'Menyajikan keindahan panorama kebun teh dan pohon pinus berjajar rapi',
            'address' => 'Gunung Burangrang, Desa Cipada, Cikalongwetan, Bandung Barat',
            'time' => '09.00 - 17.00',
            'phone' => '081514159482',
            'background' => "",
            'facility' => 'Free Parking'
        ]);

        DB::table('wisatas')->insert([
            'name' => "DDieuland",
            'description' => 'Destinasi ini statusnya ramah keluarga, jadi tetap seru dikunjungi semua kalangan',
            'address' => 'Rancanumpang, Kec. Gedebage, Kota Bandung, Jawa Barat',
            'time' => '19.00 - 20.00',
            'phone' => '081314156894',
            'background' => "",
            'facility' => 'taman bermain anak-anak'
        ]);

        DB::table('wisatas')->insert([
            'name' => 'Ranca Upas',
            'description' => 'Lokasi camping dan tempat bermain sambil ditemani rusa - rusa yang bisa diberi makan',
            'address' => 'Jl. Raya Ciwidey - Patengan No.KM. 11, Patengan, Kec. Rancabali, Kabupaten Bandung',
            'time' => '07.00 - 17.00',
            'phone' => '08112007768',
            'background' => "",
            'facility' => 'Outbond, Camping Ground'
        ]);
    }
}
