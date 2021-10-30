<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembeliSeeder extends Seeder
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
            'jns_kelamin' => 'perempuan',
            'alamat' => 'sukamukti',
            'kode_pos' => '40971',
            'kota' => 'bandung',
            'tgl_lahir' => '2003-11-22'],
            ['nama' => 'suci',
            'jns_kelamin' => 'perempuan',
            'alamat' => 'cilebak',
            'kode_pos' => '40921',
            'kota' => 'bandung',
            'tgl_lahir' => '2004-04-27'],
            ['nama' => 'silvi',
            'jns_kelamin' => 'perempuan',
            'alamat' => 'sukamenak',
            'kode_pos' => '40961',
            'kota' => 'bandung',
            'tgl_lahir' => '2003-11-21'],
            ['nama' => 'rizky',
            'jns_kelamin' => 'lelaki',
            'alamat' => 'citepus',
            'kode_pos' => '40951',
            'kota' => 'bandung',
            'tgl_lahir' => '2003-12-05'],
            ['nama' => 'syukur',
            'jns_kelamin' => 'lelaki',
            'alamat' => 'sayati',
            'kode_pos' => '40991',
            'kota' => 'bandung',
            'tgl_lahir' => '2003-07-15']
        ];
        DB :: table ('pembeli')->insert($data);
    }
}
