<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = Transaksi::factory(10)->create();

        foreach ($transaksis as $transaksi){
            TransaksiDetail::factory(5)->create(['transaksi_id' => $transaksi->id, 'barang_id' => $transaksi->id]);
        }

    }
}