<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataUser;

class DataUsersSeeder extends Seeder
{
    public function run()
    {
        // Example data
        DataUser::create([
            'nama' => 'John Doe',
            'nama_makam' => 'Makam A',
            'jumlah_pembayaran' => 100,
            'status_pembayaran' => 'Paid',
            'lokasi_makam' => 'Location A',
        ]);

        // Add more data as needed

        // Run seeder
        DataUser::factory()->count(10)->create(); // if using factories

        // Alternatively, you can manually create entries
    }
}
