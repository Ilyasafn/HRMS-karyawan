<?php

namespace Database\Seeders;

use App\Models\Divisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Divisi::create([
            'nama' => 'Admin',
            'keterangan' => 'Bertanggung jawab atas pengelolaan sistem informasi dan teknologi.'
        ]);
        Divisi::create([
            'nama' => 'HRD',
            'keterangan' => 'Bertanggung jawab atas pengelolaan sumber daya manusia.'
        ]);
        Divisi::create([
            'nama' => 'Supervisor',
            'keterangan' => 'Bertanggung jawab atas pengelolaan tim.'
        ]);
    }
}
