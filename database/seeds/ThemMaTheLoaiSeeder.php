<?php

use Illuminate\Database\Seeder;

class ThemMaTheLoaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\TheLoai::create([
            'MA_THE_LOAI' => '1',
            'TEN_THE_LOAI' => 'Khoa Học Tự Nhiên'
        ]);

        App\TheLoai::create([
            'MA_THE_LOAI' => '2',
            'TEN_THE_LOAI' => 'Khoa Học Xã Hội'
        ]);

        App\TheLoai::create([
            'MA_THE_LOAI' => '3',
            'TEN_THE_LOAI' => 'Sách Đặc Biệt'
        ]);

        App\TheLoai::create([
            'MA_THE_LOAI' => '4',
            'TEN_THE_LOAI' => 'Sách Tham Khảo'
        ]);
    }
}
