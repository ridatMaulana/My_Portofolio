<?php

use Illuminate\Database\Seeder;

class TipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	'nama_tipe'=>'android'
        ];
        DB::table('table_tipe')->insert($data);

        $data = [
        	'nama_tipe'=>'web'
        ];
        DB::table('table_tipe')->insert($data);

        $data = [
        	'nama_tipe'=>'desktop'
        ];
        DB::table('table_tipe')->insert($data);
    }
}
