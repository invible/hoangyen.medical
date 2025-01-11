<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;
use \DateTime;
use DB;
use Faker\Factory as Faker;

class SanphamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $uFN = new VnFullname();
        $uPI = new VnPersonalInfo();
        $faker = Faker::create('vi_VN');
        $photos = array('dungdichsatkhuan.jpg','khautrang.jpg','nhietke.jpg');

        for ($i=1; $i <= 30; $i++) {
            $today = new DateTime();
            array_push($list, [
                'sp_ten'                  => "sp_ten $i",
                'sp_giaGoc'               => $faker->randomFloat(2000000, 50000, 1999999),
                'sp_giaBan'               => $i,
                'sp_hinh'                 => "tb-$i.jpg",
                'sp_thongTin'             => "sp_thong $i",
                'sp_danhGia'              => "sp_danhGia $i",
                'sp_taoMoi'               => $today->format('Y-m-d H:i:s'),
                'sp_capNhat'              => $today->format('Y-m-d H:i:s'),
                'sp_trangThai'            => $faker->numberBetween(1, 2),
                'l_ma'                    => $faker->numberBetween(1, 9) // Khoa ngoai
            ]);
        }
        DB::table('cusc_sanpham')->insert($list);
    }
}
