<?php

use Illuminate\Database\Seeder;

class ThemNhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\NhanVien::create([
        	'MA_NHAN_VIEN' =>'0306171045',
        	'HO_TEN' => 'Đỗ Trần Bảo Lâm',
        	'CV' => 'NV',
            'NGAY_SINH' => '1998-11-22',
            'MAT_KHAU' => Hash::make('123456'),
            'GIOI_TINH' => 'Nam',
            'SO_DIEN_THOAI' => '0338150131',
            'EMAIL'=> 'dotranbaolam123456789@gmail.com',
            'NGAY_VAO_LAM' => '2020-08-15'
        ]);
    }
}
