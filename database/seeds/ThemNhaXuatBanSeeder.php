<?php

use Illuminate\Database\Seeder;

class ThemNhaXuatBanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\NhaXuatBan::create([
        	'MA_NXB' =>'1',
        	'TEN_NXB' => 'Nhà xuất bản giáo dục Việt Nam',
        	'DIA_CHI' => 'Số 81 Trần Hưng Đạo, Hoàn Kiếm, Hà Nội',
        	'EMAIL' => 'nxbgd@moet.edu.vn'
        ]);

        App\NhaXuatBan::create([
        	'MA_NXB' =>'2',
        	'TEN_NXB' => 'Nhà xuất bản Đại Học Quốc Gia Hà Nội',
        	'DIA_CHI' => '16 Hàng Chuối, Phạm Đình Hổ, Hai Bà Trưng, Hà Nội',
        	'EMAIL' => 'nhaxuatbandhqghanoi@gmail.com'
        ]);


        App\NhaXuatBan::create([
        	'MA_NXB' =>'3',
        	'TEN_NXB' => 'Nhà xuất bản tổng hợp Thành Phố Hồ Chí Minh',
        	'DIA_CHI' => '62 Nguyễn Thị Minh Khai, Đa Kao, Quận 1,Hồ Chí Minh',
        	'EMAIL' => 'tonghop@nxbhcm.com.vn'
        ]);

        App\NhaXuatBan::create([
        	'MA_NXB' =>'4',
        	'TEN_NXB' => 'Nhà xuất bản tổng hợp Đà Nẵng',
        	'DIA_CHI' => 'Số 3 đường 30 tháng 4, P.Hòa Cường Bắc, Q. Hải Châu, TP.Đà Nẵng',
        	'EMAIL' => 'xuatban@nxbdanang.vn'
        ]);

        App\NhaXuatBan::create([
        	'MA_NXB' =>'5',
        	'TEN_NXB' => 'Nhà xuất bản Đại Học Sư Phạm',
        	'DIA_CHI' => '136 Đường Xuân Thủy, Quận Cầu Giấy, Thành Phố Hà Nội',
        	'EMAIL' => 'online@nxbdhsp.edu.vn'
        ]);

        App\NhaXuatBan::create([
        	'MA_NXB' =>'6',
        	'TEN_NXB' => 'Nhà xuất bản Đồng Nai',
        	'DIA_CHI' => '210, Nguyễn Ái Quốc, P. Trung Dũng, TP. Biên Hòa, Đồng Nai',
        	'EMAIL' => 'stttt@dongnai.gov.vn'
		]);
		
		App\NhaXuatBan::create([
        	'MA_NXB' =>'7',
        	'TEN_NXB' => 'Nhà Xuất Bản Đại Học Quốc Gia Hà Nội',
        	'DIA_CHI' => '16 Hàng Chuối, Phạm Đình Hổ, Hai Bà Trưng, Hà Nội',
        	'EMAIL' => 'tramxbqg1.1@gmail.com.vn'
		]);
		
		App\NhaXuatBan::create([
        	'MA_NXB' =>'8',
        	'TEN_NXB' => 'Nhà Xuất Bản Dân Trí',
        	'DIA_CHI' => '113 Đông Các, P. Ô Chợ Dừa, Q. Đống Đa, Hà Nội',
        	'EMAIL' => ' dongahn@sachdonga.vn'
        ]);
    }
}
