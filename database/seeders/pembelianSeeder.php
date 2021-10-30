<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_barang' => 'laptop',
            'nama_suplier' => 'selvi',
            'qty' => '200',
            'tgl' => '2021-10-29'],
            ['nama_barang' => 'komputer',
            'nama_suplier' => 'suci',
            'qty' => '300',
            'tgl' => '2021-10-29'],
            ['nama_barang' => 'handphone',
            'nama_suplier' => 'silvi',
            'qty' => '400',
            'tgl' => '2021-10-29'],
            ['nama_barang' => 'mouse',
            'nama_suplier' => 'rizky',
            'qty' => '500',
            'tgl' => '2021-10-29'],
            ['nama_barang' => 'speaker',
            'nama_suplier' => 'syukur',
            'qty' => '600',
            'tgl' => '2021-10-29']
        ];
        DB :: table ('pembelian')->insert($data);
        }
    }
