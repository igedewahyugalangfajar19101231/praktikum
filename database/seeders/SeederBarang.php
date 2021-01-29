<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederMhs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set("Asia/Makassar");
        DB::table('tb_barang')->insert(
            array(
                [
                    'id'           =>'10101',
                    'nama'         =>'Buku Tulis',
                    'deskripsi'    =>'Buku Tulis SIDU',
                    'stok'         =>'100',
                    'harga'        =>'3000',
                    'created_at'   =>date('Y-m-d H:i:s'),
                    'updated_at'   =>date('Y-m-d H:i:s')
                ],
                [
                    'id'           =>'10102',
                    'nama'         =>'Buku Gambar',
                    'deskripsi'    =>'Buku Gambar SIDU',
                    'stok'         =>'100',
                    'harga'        =>'6000',
                    'created_at'   =>date('Y-m-d H:i:s'),
                    'updated_at'   =>date('Y-m-d H:i:s')
                ],
                [
                    'id'           =>'10103',
                    'nama'         =>'Pensil',
                    'deskripsi'    =>'Pensil 2B',
                    'stok'         =>'100',
                    'harga'        =>'2000',
                    'created_at'   =>date('Y-m-d H:i:s'),
                    'updated_at'   =>date('Y-m-d H:i:s')
                ],
                [
                    'id'           =>'10104',
                    'nama'         =>'Pulpen',
                    'deskripsi'    =>'Pulpen Pilot',
                    'stok'         =>'100',
                    'harga'        =>'2500',
                    'created_at'   =>date('Y-m-d H:i:s'),
                    'updated_at'   =>date('Y-m-d H:i:s')
                ]
            )
        );
    }
}
