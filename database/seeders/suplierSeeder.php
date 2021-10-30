<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class suplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'selvi',
            'alamat' => 'sukamukti',
            'kode_pos' => '40971',
            'kota' => 'bandung'],
            ['nama' => 'suci',
            'alamat' => 'cilebak',
            'kode_pos' => '40921',
            'kota' => 'bandung'],
            ['nama' => 'silvi',
            'alamat' => 'sukamenak',
            'kode_pos' => '40961',
            'kota' => 'bandung'],
            ['nama' => 'rizky',
            'alamat' => 'citepus',
            'kode_pos' => '40951',
            'kota' => 'bandung'],
            ['nama' => 'syukur',
            'alamat' => 'sayati',
            'kode_pos' => '40991',
            'kota' => 'bandung']
        ];
        DB :: table ('suplier')->insert($data);
    }
}
