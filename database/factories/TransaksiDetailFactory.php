<?php

namespace Database\Factories;

use App\Models\TransaksiDetail;
use App\Models\Transaksi;
use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TransaksiDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'transaksi_id' => 1,
            'barang_id' => 1,
            'jumlah' => $this->faker->numberBetween(1, 20),
            'harga_beli' => $this->faker->randomNumber(),
            'discount' => $this->faker->numberBetween(1000, 5000)
        ];
    }
}