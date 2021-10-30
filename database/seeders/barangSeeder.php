<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'laptop',
            'varian' => 'lenovo',
            'harga_beli' => '5000000',
            'harga_jual' => '4000000'],
            ['nama' => 'komputer',
            'varian' => 'hp',
            'harga_beli' => '8000000',
            'harga_jual' => '6000000'],
            ['nama' => 'handphone',
            'varian' => 'xiaomi',
            'harga_beli' => '2800000',
            'harga_jual' => '2500000'],
            ['nama' => 'mouse',
            'varian' => 'hp',
            'harga_beli' => '50000',
            'harga_jual' => '45000'],
            ['nama' => 'speaker',
            'varian' => 'polytron',
            'harga_beli' => '200000',
            'harga_jual' => '150000']
        ];
        DB :: table ('barang')->insert($data);
        }
    }
