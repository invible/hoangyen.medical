<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \DateTime;
use DB;

class LoaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $types = ["Dung dịch sát khuẩn", "Khẩu trang", "Máy đo huyết áp", "Máy thử đường huyết", "Máy hút dịch, hút đàm", "Máy xông khí dung", "Máy tạo oxy", "Nhiệt kế", "Vật tư y tế"];
        sort($types);

        $today = new DateTime('2025-01-11 08:00:00');

        for ($i=1; $i <= count($types); $i++) {
            array_push($list, [
                'l_ma'      => $i,
                'l_ten'     => $types[$i-1],
                'l_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'l_capNhat' => $today->format('Y-m-d H:i:s')
            ]);
        }
        DB::table('cusc_loai')->insert($list);
    }
}
