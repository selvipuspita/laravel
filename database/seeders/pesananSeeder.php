<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_pesanan' => 'barang_elektronik',
            'nama_barang' => 'laptop',
            'qty' => '200',
            'tgl_pesan' => '2021-10-29'],
            ['nama_pesanan' => 'barang_elektronik',
            'nama_barang' => 'komputer',
            'qty' => '300',
            'tgl_pesan' => '2021-10-29'],
            ['nama_pesanan' => 'barang_elektronik',
            'nama_barang' => 'handphone',
            'qty' => '400',
            'tgl_pesan' => '2021-10-29'],
            ['nama_pesanan' => 'barang_elektronik',
            'nama_barang' => 'mouse',
            'qty' => '500',
            'tgl_pesan' => '2021-10-29'],
            ['nama_pesanan' => 'barang_elektronik',
            'nama_barang' => 'speaker',
            'qty' => '600',
            'tgl_pesan' => '2021-10-29']
        ];
        DB :: table ('pesanan')->insert($data);
        }
    }
