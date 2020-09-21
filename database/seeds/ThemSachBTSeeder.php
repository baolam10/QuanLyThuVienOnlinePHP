<?php

use Illuminate\Database\Seeder;

class ThemSachBTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_Toan6_Tap1',
            'TEN_SACH' =>'Bài Tập Toán 6 Tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_Toan6_Tap1.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 6 là trọn bộ sách giáo khoa bài tập lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Để đáp ứng tốt hơn nhu cầu ngày càng cao của các thầy, cô giáo và các em học sinh, chúng tôi tiến hành chỉnh lí và bổ sung bộ sách bài tập hiện có theo hướng tạo nhiều cơ hội hơn nữa để các em học sinh được củng cố kiến thức toán học cơ bản.
				Bài Tập Toán Lớp 6 (Tập 1) được biên soạn bám sát nội dung sách giáo khoa Toán 6 gồm các bài tập toán học đa dạng có gợi ý làm bài cụ thể nhằm giúp các em có thể tự học tốt môn Toán học một cách chủ động, sáng tạo.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

        App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_Toan6_Tap2',
            'TEN_SACH' =>'Bài Tập Toán 6 Tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_Toan6_Tap2.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 6 là trọn bộ sách giáo khoa bài tập lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Để đáp ứng tốt hơn nhu cầu ngày càng cao của các thầy, cô giáo và các em học sinh, chúng tôi tiến hành chỉnh lí và bổ sung bộ sách bài tập hiện có theo hướng tạo nhiều cơ hội hơn nữa để các em học sinh được củng cố kiến thức toán học cơ bản.
Bài Tập Toán Lớp 6 (Tập 2) được biên soạn bám sát nội dung sách giáo khoa Toán 6 gồm các bài tập toán học đa dạng có gợi ý làm bài cụ thể nhằm giúp các em có thể tự học tốt môn Toán học một cách chủ động, sáng tạo.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

        App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_NguVan6_Tap1',
            'TEN_SACH' =>'Bài Tập Ngữ Văn 6 Tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_NguVan6_Tap1.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 6 là trọn bộ sách giáo khoa bài tập lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Cập nhật các nội dung tương tác và dữ liệu mở rộng (đọc diễn cảm, thông tin tác giả - tác phẩm, hướng dẫn phân tích tác phẩm, phim tư liệu - trích đoạn chuyển thể văn học của tác phẩm).',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


        App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_NguVan6_Tap2',
            'TEN_SACH' =>'Bài Tập Ngữ Văn 6 Tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_NguVan6_Tap2.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 6 là trọn bộ sách giáo khoa bài tập lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Ngữ Văn Lớp 6 (Tập 1) là một trong những cuốn sách giáo khoa cơ bản do Bộ Giáo Dục & Đào Tạo tổ chức biên soạn.
Ngữ Văn Lớp 6 (Tập 1) gồm 17 bài học. Mỗi bài học gồm 3 phân môn: tác phẩm văn học, ngữ pháp và tập làm văn.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


        App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_TiengAnh6',
            'TEN_SACH' =>'Bài Tập Tiếng Anh 6',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_TiengAnh6.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 6 là trọn bộ sách giáo khoa bài tập lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Cuốn sách được chuẩn hóa theo khung chương trình của Bộ Giáo Dục, giúp các em rèn luyện các kĩ năng cơ bản nghe, nói, đọc viết bằng giọng phát âm chuẩn và các bài tập giúp các em rèn luyện để nâng cao các kĩ năng.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

        App\SACH::create([
        	'MA_SACH'=>'1_VatLy6',
            'TEN_SACH' =>'Bài Tập Vật Lý 6',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_TiengAnh6.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 6 là trọn bộ sách giáo khoa bài tập lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Cuốn Bài tập Vật Lí 6 được viết nhằm giúp các em học sinh vận dụng những kiến thức đã học vào việc giải bài tập.
Các bài tập trong sách này được viết theo bài học trong sách giáo khoa Vật Lí 6. Mỗi bài có thể có từ 10 đến 20 bài tập để các em dễ dàng lựa chọn các bài tập phù hợp với trình độ của mình. Riêng các bài tổng kết chương không ra thêm bài tập , vì trong phần "Tự kiểm tra" của các bài này trong SGK đã có đủ bài tập cho các em làm. Những bài tập có đánh dấu " * " là những bài khó hơn.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


        App\SACH::create([
        	'MA_SACH'=>'1_BT_Toan7_Tap1',
            'TEN_SACH' =>'Bài Tập Toán 7 Tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_Toan7_Tap1.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 7 là trọn bộ sách giáo khoa bài tập lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Gồm 2 phần: đại số và hình học
Phần đại số
Chương 1: Số hữu tỉ. Số thực
Chương 2: Hàm số và đồ thị
Phần hình học:
Chương 1: Đường thẳng vuông góc. Đường thẳng song song
Chương 2: Tam giác',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


        App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_Toan7_Tap2',
            'TEN_SACH' =>'Bài Tập Toán 7 Tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_Toan7_Tap2.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 7 là trọn bộ sách giáo khoa bài tập lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung kiến thức được trình bày khoa học, từ dễ đến khó, từ cơ bản đến nâng cao
Gồm 3 chương:
Chương 1: Thống kê
Chương 2: Biểu thức đại số
Chương 3: Quan hệ giữa các yếu tố trong tam giác. Các đường đồng quy của tam giác.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

        App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_TiengAnh7',
            'TEN_SACH' =>'Bài Tập Tiếng Anh 7',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_english7.jpg', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 7 là trọn bộ sách giáo khoa bài tập lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Unit 1: Back to school
Unit 2: Personal ìnormation
....
Unit 15: Going out
Unit 16: People and places',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

        App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_VatLy7',
            'TEN_SACH' =>'Bài Tập Vật Lý 7',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_VatLy7.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 7 là trọn bộ sách giáo khoa bài tập lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Cuốn Bài tập Vật Lí 7 được viết nhằm giúp các em học sinh vận dụng những kiến thức đã học vào việc giải bài tập. Các bài tập trong sách này được viết theo bài học trong sách giáo khoa Vật Lí 7.
Mỗi bài có thể có từ 10 đến 20 bài tập để các em dễ dàng lựa chọn các bài tập phù hợp với trình độ của mình. Riêng các bài tổng kết chương không ra thêm bài tập , vì trong phần "Tự kiểm tra" của các bài này trong SGK đã có đủ bài tập cho các em làm. Những bài tập có đánh dấu " * " là những bài khó hơn.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


         App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_GDCD7',
            'TEN_SACH' =>'Bài Tập Giáo Dục Công Dân 7',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_GDCD7.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 7 là trọn bộ sách giáo khoa bài tập lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách Giáo Khoa Giáo Dục Công Dân Lớp 7 được bộ Giáo Dục và Đào Tạo biên soạn phát hành.Sách gồm 18 bài học. Mỗi bài học dạy cho học sinh các các tính cao đẹp của con người…',
            'NAM_XUAT_BAN' => '2018',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


          App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_LichSu7',
            'TEN_SACH' =>'Bài Tập Lịch Sử 7',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_LichSu7.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 7 là trọn bộ sách giáo khoa bài tập lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Vở Bài Tập Lịch Sử Lớp 7 (Tái Bản 2019) được biên soạn dựa theo kiến thức của chương trình sách giáo khoa Lịch Sử 7 của Bộ GD và ĐT.
Quyển sách này giúp cho người đọc tham khảo nội dung cơ bản ở sách giáo khoa và các dạng bài tập từ cơ bản đến nâng cao. Cuốn sách giúp các em nâng cao kiến thức, làm quen với các dạng bài tập đồng thời tiện cho giáo viên và phụ huynh theo dõi quá trình học tập của bé.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

          App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_SinhHoc7',
            'TEN_SACH' =>'Bài Tập Sinh Học 7',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_SinhHoc7.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 7 là trọn bộ sách giáo khoa bài tập lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Mỗi dòng sông đều có cội nguồn, mỗi tri thức đều được xây dựng trên những nền tảng vững chắc và sách giáo khoa là viên gạch đầu đời của mỗi con người cần phải có trước khi vươn mình ra những bến bờ tri thức. Hòa cùng mục đích đó, hành trình sách mang đến cho bạn những quyển sách giáo khoa bình dị, với mong muốn nguồn tri thức này lan tỏa và góp phần giúp những thế hệ trẻ có điều kiện tiếp xúc và học tập tốt.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


           App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_DiaLy7',
            'TEN_SACH' =>'Bài Tập Địa Lý 7',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_dialy.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 7 là trọn bộ sách giáo khoa bài tập lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Vở Bài Tập Địa Lí Lớp 7 (Tái Bản 2019) được biên soạn dựa theo kiến thức của chương trình sách giáo khoa Địa lí lớp 7 của Bộ GD và ĐT.
Quyển sách này giúp cho người đọc tham khảo nội dung cơ bản ở sách giáo khoa và các dạng bài tập từ cơ bản đến nâng cao. Cuốn sách giúp các em nâng cao kiến thức, làm quen với các dạng bài tập đồng thời tiện cho giáo viên và phụ huynh theo dõi quá trình học tập của bé.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


           App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_Toan8_Tap1',
            'TEN_SACH' =>'Bài Tập Toán 8 Tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_Toan8_Tap1.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 8 là trọn bộ sách giáo khoa bài tập lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Bài Tập Toán Lớp 8 (Tập 1) do chính các tác giả biên soạn sách giáo khoa Toán 8 biên soạn. Tập sách là tài liệu bổ ích giúp các em học sinh tự học, rèn luyện kĩ năng qua đó củng cố được kiến thức cơ bản, hình thành phương pháp giải toán, tăng thêm khả năng vận dụng kiến thức và góp phần rèn luyện tư duy toán học.
Trong cuốn sách này, các tác giả giới thiệu nhiều dạng bài tập khác nhau. Dạng câu hỏi trắc nghiệm khách quan giúp các em học sinh tự kiểm tra, đánh giá mức độ nắm vững kiến thức của mình. Một số dạng bài tập chưa có trong sách giáo khoa cũng được bổ sung nhằm làm phong phú thêm các dạng bài tập giúp các em học sinh tập dượt vận dung kiến thức trong nhiều tình huống khác nhau. Tập sách cũng gồm nhiều bài tập khó dành cho các em khá giỏi.
Đặc biệt, tập sách có phần hướng dẫn đáp số giúp các em học sinh dễ dàng kiểm tra kết quả bài làm của mình.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

        App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_Toan8_Tap2',
            'TEN_SACH' =>'Bài Tập Toán 8 Tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_Toan8_Tap2.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 8 là trọn bộ sách giáo khoa bài tập lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Bài Tập Toán Lớp 8 - Tập 2 (Tái Bản 2019) là cuốn sách bài tập đi kèm với cuốn sách Toán 8 trong chương trình Toán học THCS.
Bài Tập Toán Lớp 8 - Tập 2 (Tái Bản 2019) gồm các nội dung chính như sau:
Phần Đại số
Chương III: Phương trình bậc nhất một ẩn
Chương IV: Bất phương trình bậc mất một ẩn
Phần Hình học
Chương III: Tam giác đồng dạng
Chương IV: Hình lăng, trụ đứng, hình chóp đều',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


        App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_NguVan8_Tap1',
            'TEN_SACH' =>'Bài Tập Ngữ Văn 8 Tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_NguVan8_Tap1.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 8 là trọn bộ sách giáo khoa bài tập lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Là cuốn sách bài tập đi kèm với cuốn sách Ngữ văn 8 trong chương trình Ngữ Văn THCS.
Bài Tập Ngữ Văn Lớp 8 (Tập 1). Mỗi bài học gồm các câu hỏi bài tập bám sát sách giáo khoa. Đặc biệt, sau các bài tập có gợi ý làm bài giúp các em học sinh dễ dàng tự học ở nhà.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


        App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_NguVan8_Tap2',
            'TEN_SACH' =>'Bài Tập Ngữ Văn 8 Tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_NguVan8_Tap2.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 8 là trọn bộ sách giáo khoa bài tập lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Là cuốn sách bài tập đi kèm với cuốn sách Ngữ văn 8 trong chương trình Ngữ Văn THCS.
Bài Tập Ngữ Văn Lớp 8 (Tập 2) gồm 16 bài học. Mỗi bài học gồm các câu hỏi bài tập bám sát sách giáo khoa. Đặc biệt, sau các bài tập có gợi ý làm bài giúp các em học sinh dễ dàng tự học ở nhà.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

        App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_TiengAnh8',
            'TEN_SACH' =>'Bài Tập Tiếng Anh 8',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '5',
            'MA_HA' => 'BT_TiengAnh8.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 8 là trọn bộ sách giáo khoa bài tập lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Được chuẩn hóa theo khung chương trình của Bộ Giáo Dục. Giúp các em rèn luyện các kĩ năng cơ bản nghe, nói, đọc viết bằng giọng phát âm chuẩn và các bài tập giúp các em rèn luyện để nâng cao các kĩ năng.',
            'NAM_XUAT_BAN' => '2017',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

        App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_VatLy8',
            'TEN_SACH' =>'Bài Tập Vật Lý 8',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_VatLy8.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 8 là trọn bộ sách giáo khoa bài tập lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách Bài Tập Vật Lí Lớp 8 được Bộ Giáo Dục và Đào Tạo biên soạn. Sách gồm hai chương:Cơ học và Nhiêt cung cấp học đầy đủ công thức, lý thuyết, định luật, chuyên đề vật lý,…',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

        App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_HoaHoc8',
            'TEN_SACH' =>'Bài Tập Hóa Học 8',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_HoaHoc8.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 8 là trọn bộ sách giáo khoa bài tập lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách được biên tập và theo quy chuẩn của Bộ GD-ĐT và được xuất bản bởi NXB Giáo dục Việt Nam.
A. Phần đề bài
B. Phần hướng dẫn giải - đáp số',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


        App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_GDCD8',
            'TEN_SACH' =>'Bài Tập Giáo Dục Công Dân 8',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_GDCD8.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 8 là trọn bộ sách giáo khoa bài tập lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Để học tốt Sách bài tập (SBT) giáo dục công dân lớp 8 đầy đủ lời giải, đáp án câu hỏi GDCD về ý thức đạo đức, quyền và nghĩa vụ trách nhiệm của công dân trong đời sống, pháp luật',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


        App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_LichSu8',
            'TEN_SACH' =>'Bài Tập Lịch Sử 8',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_LichSu8.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 8 là trọn bộ sách giáo khoa bài tập lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Quyển sách Vở Bài Tập Lịch Sử Lớp 8 giúp học sinh thuận lợi hơn trong việc học tập môn Lịch sử tại nhà. Nội dung sách bám sát chương trình sách giáo khoa và gắn liền thực tiễn giúp các em rèn luyện kĩ năng và kiến thức lịch sử của mình.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

         App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_SinhHoc8',
            'TEN_SACH' =>'Bài Tập Sinh Học 8',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_SinhHoc8.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 8 là trọn bộ sách giáo khoa bài tập lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Quyển sách Vở Bài Tập Sinh Học Lớp 8 được biên soạn giúp các em ôn tập và rèn luyện kiến thức môn Sinh học.
Nội dung sách bao gồm các câu hỏi và bài tập bám sát chương trình sách giáo khoa và được trình bày dưới 2 hình thức tự luận và trắc nghiệm. Các dạng bài bao gồm: chọn câu trả lời đúng, điền vào chỗ trống, ô chữ...',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


         App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_DiaLy8',
            'TEN_SACH' =>'Bài Tập Địa Lý 8',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_DiaLy8.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 8 là trọn bộ sách giáo khoa bài tập lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Vở Bài Tập Địa Lí Lớp 8 (Tái Bản 2019) được biên soạn dựa theo kiến thức của chương trình sách giáo khoa Địa lí lớp 8 của Bộ GD và ĐT.
Quyển sách này giúp cho người đọc tham khảo nội dung cơ bản ở sách giáo khoa và các dạng bài tập từ cơ bản đến nâng cao. Cuốn sách giúp các em nâng cao kiến thức, làm quen với các dạng bài tập đồng thời tiện cho giáo viên và phụ huynh theo dõi quá trình học tập của bé.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


          App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_Toan9_Tap1',
            'TEN_SACH' =>'Bài Tập Toán 9 Tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_Toan9_Tap1.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 9 là trọn bộ sách giáo khoa bài tập lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Để học tốt môn Toán, ngoài các kiến thức trong sách giáo khoa và bài giảng của thầy cô, các em học sinh cần tham khảo thêm các tài liệu Toán học khác.
Bài Tập Toán Học Lớp 9 - Tập 1 được biên soạn bám sát nội dung sách giáo khoa Toán Học 9 gồm các bài tập toán học đa dạng. Ngoài ra, tập sách còn có phần hướng dẫn đáp án cụ thể nhằm giúp các em có thể kiểm tra được kết quả bài làm của mình.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

           App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_Toan9_Tap2',
            'TEN_SACH' =>'Bài Tập Toán 9 Tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_Toan9_Tap2.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 9 là trọn bộ sách giáo khoa bài tập lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Để đáp ứng tốt hơn nhu cầu ngày càng cao của các thầy, cô giáo và các em học sinh, chúng tôi tiến hành chỉnh lí và bổ sung bộ sách bài tập hiện có theo hướng tạo nhiều cơ hội hơn nữa để các em học sinh được củng cố kiến thức toán học cơ bản.
Bài Tập Toán Lớp 9 (Tập 2) được biên soạn bám sát nội dung sách giáo khoa Toán 9 gồm các bài tập toán học đa dạng có gợi ý làm bài cụ thể nhằm giúp các em có thể tự học tốt môn Toán học một cách chủ động, sáng tạo.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


           App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_NguVan9_Tap1',
            'TEN_SACH' =>'Bài Tập Ngữ Văn 9 Tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_NguVan9_Tap1.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 9 là trọn bộ sách giáo khoa bài tập lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Bài Tập Ngữ Văn 9 được biên soạn theo chương trình chuẩn của Bộ, nội dung bám sát bài học trong sách giáo khoa giúp các em học sinh ôn tập, củng cố các kiến thức cơ bản và phát triển năng lực tư duy, biết vận dụng kiến thức đã học vào thực tế đời sống, không những thế còn khơi dậy niềm đam mê tìm hiểu bộ môn Ngữ văn, tìm hiểu thiên nhiên đa dạng, phong phú.
Cuốn sách bao gồm các bài tập làm văn, tự luận phù hợp có kèm gợi ý hướng dẫn giải chi tiết, tỉ mỉ giúp các em tiện theo dõi, đối chiếu kết quả của mình làm. Đây sẽ tài liệu tham khảo hữu ích bổ trợ cho học sinh học tốt môn Ngữ văn 9',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

           App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_NguVan9_Tap2',
            'TEN_SACH' =>'Bài Tập Ngữ Văn 9 Tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_NguVan9_Tap2.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 9 là trọn bộ sách giáo khoa bài tập lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Bài Tập Ngữ Văn 9 được biên soạn theo chương trình chuẩn của Bộ, nội dung bám sát bài học trong sách giáo khoa giúp các em học sinh ôn tập, củng cố các kiến thức cơ bản và phát triển năng lực tư duy, biết vận dụng kiến thức đã học vào thực tế đời sống, không những thế còn khơi dậy niềm đam mê tìm hiểu bộ môn Ngữ văn, tìm hiểu thiên nhiên đa dạng, phong phú.
Cuốn sách bao gồm các bài tập làm văn, tự luận phù hợp có kèm gợi ý hướng dẫn giải chi tiết, tỉ mỉ giúp các em tiện theo dõi, đối chiếu kết quả của mình làm. Đây sẽ tài liệu tham khảo hữu ích bổ trợ cho học sinh học tốt môn Ngữ văn 9',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


           App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_TiengAnh9',
            'TEN_SACH' =>'Bài Tập Tiếng Anh 9',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_TiengAnh9.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 9 là trọn bộ sách giáo khoa bài tập lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Bài Tập Tiếng Anh 9 được biên soạn dưới dạng vở bài tập, dựa theo sách giáo khoa Tiếng Anh 9 của Bộ Giáo Dục và Đào Tạo.
Bài Tập Tiếng Anh 9 là tập hợp các bài tập thực hành về từ vựng (vocabulary), ngữ pháp (grammar), đàm thoại (conversation) và đọc hiểu (reading comprehension), nhằm giúp học sinh luyện tập các nội dung trọng tâm của bài học. Sách được chia thành 4 phần.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

           App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_VatLy9',
            'TEN_SACH' =>'Bài Tập Vật Lý 9',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_VatLy9.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 9 là trọn bộ sách giáo khoa bài tập lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Cuốn Vở Bài Tập Vật Lí 9 có thể thay thế cho vở ghi của học sinh trên lớp. Các bài trong cuốn sách này được viết theo các bài trong sách giáo khoa và sách bài tập Vật lí 9.
Phần đầu của bài để học sinh điền ngày, tháng, năm và tên bài học
Phần A: học theo sách giáo khoa. Phần này giúp học sinh trả lời câu hỏi hoặc điền từ thích hợp và chỗ trống của các câu theo các lệnh được kí hiệu bằng chữ "C" trong sách giáo khoa.
Phần B: giải bài tập. Phần này giúp học sinh giải các bài tập chọn lọc trong sách bài tập.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);



    App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_HoaHoc9',
            'TEN_SACH' =>'Bài Tập Hóa Học 9',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_HoaHoc9.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 9 là trọn bộ sách giáo khoa bài tập lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Để phát huy tính chủ động trong việc học, bên cạnh sự có mặt của giáo viên, các loại tài liệu tham khảo cũng đóng vai trò hết sức quan trọng và cần thiết, đặc biệt là với môn học đòi hỏi sự nhạy bén, tinh tế như môn Hóa.
Bài Tập Hóa Học Lớp 9 được biên soạn bám sát nội dung sách giáo khoa Hóa Học Lớp 9 gồm các bài tập hóa học đa dạng có gợi ý làm bài cụ thể nhằm giúp các em có thể tự học tốt môn Hóa học một cách chủ động, sáng tạo.
Đây là tài liệu tham khảo bổ ích giúp các em học sinh học tốt môn Hóa học chương trình lớp 9.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


    App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_LichSu9',
            'TEN_SACH' =>'Bài Tập Lịch Sử 9',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_LichSu9.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 9 là trọn bộ sách giáo khoa bài tập lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Vở Bài Tập Lịch Sử Lớp 9 (Tái Bản 2019) được biên soạn dựa theo kiến thức của chương trình sách giáo khoa Lịch Sử 9 của Bộ GD và ĐT.
Quyển sách này giúp cho người đọc tham khảo nội dung cơ bản ở sách giáo khoa và các dạng bài tập từ cơ bản đến nâng cao. Cuốn sách giúp các em nâng cao kiến thức, làm quen với các dạng bài tập đồng thời tiện cho giáo viên và phụ huynh theo dõi quá trình học tập của bé.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

    App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_SinhHoc9',
            'TEN_SACH' =>'Bài Tập Sinh Học 9',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_SinhHoc9.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 9 là trọn bộ sách giáo khoa bài tập lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Vở bài tập sinh học là tài liệu dùng cho học sinh lớp 9, được sử dụng phối hợp với sách giáo khoa Sinh học trong quá trình học tập trên lớp cũng như tự học ở nhà.
Nội dung tài liệu được biên soạn bám sát theo từng bài trong SGK Sinh học lớp 9. ',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

    App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_DiaLy9',
            'TEN_SACH' =>'Bài Tập Địa Lý 9',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_DiaLy9.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 9 là trọn bộ sách giáo khoa bài tập lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Vở Bài Tập Địa Lí Lớp 9 (Tái Bản 2019) được biên soạn dựa theo kiến thức của chương trình sách giáo khoa Địa lí lớp 9 của Bộ GD và ĐT.
Quyển sách này giúp cho người đọc tham khảo nội dung cơ bản ở sách giáo khoa và các dạng bài tập từ cơ bản đến nâng cao. Cuốn sách giúp các em nâng cao kiến thức, làm quen với các dạng bài tập đồng thời tiện cho giáo viên và phụ huynh theo dõi quá trình học tập của bé.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


    App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_Toan10_DS',
            'TEN_SACH' =>'Bài Tập Đại Số 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_ToanDaiSo10.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 10 là trọn bộ sách giáo khoa bài tập lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Cuốn sách Bài Tập Đại Số Lớp 10 được biên soạn với các nội dung sau:
1. Tóm tắt giáo khoa: tóm tắt các khái niệm, định nghĩa, định lí, công thức cần thiết phục vụ cho việc giải các bài tập của từng phần tương ứng.
2. Bài tập bổ sung: bổ sung thêm các dạng bài tập mà sách giáo khoa chưa đề cập đến, qua các bài tập này một lần nữa học sinh có dịp rèn luyện thêm các dạng toán mới, các phương pháp mới, củng cố thêm kiến thức và rèn luyện kĩ năng giải toán.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

    App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_Toan10_HH',
            'TEN_SACH' =>'Bài Tập Hình Học 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_ToanHinhHoc10.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 10 là trọn bộ sách giáo khoa bài tập lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách Giáo Khoa Hình Học Lớp 10 cơ bản (SGK HH10 CB) gồm 106 trang do nhà xuất bản Giáo dục Việt Nam phát hành, đây là cuốn SGK Hình học 10 chính thống được dành cho học sinh khối 10. Sách được sử dụng cho giáo viên giảng dạy và học sinh học tập tại các trường THPT và cơ sở giáo dục trên toàn quốc với các kiến thức Hình học căn bản mà mọi học sinh lớp 10 cần có. Sách còn giúp bạn đọc tra cứu các kiến thức chuẩn Hình học 10.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


    App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_VatLy10',
            'TEN_SACH' =>'Bài Tập Vật Lý 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_VatLy10.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 10 là trọn bộ sách giáo khoa bài tập lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Cuốn sách Bài Tập Vật Lí Lớp 10 (Cơ Bản) giúp các em học sinh lớp 10 đầu cấp học tốt bộ môn Vật lí theo chương trình mới.
Nội dung cuốn sách bao gồm:
A. Kiến thức cần nắm vững: Đây là phần tóm tắt lý thuyết, giúp học sinh nắm vững những kiến thức cơ bản của phần bài học để vận dụng trả lời câu hỏi.
B. Các câu hỏi: các câu hỏi trong phần bài học',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

    App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_SinhHoc10',
            'TEN_SACH' =>'Bài Tập Sinh Học 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_sinhHoc10.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 10 là trọn bộ sách giáo khoa bài tập lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách bám sát chương trình chuẩn của bộ GD-ĐT. Bài tập tổng quát ở cả 2 dạng tự luận, trắc nghiệm, có cả câu hỏi lý thuyết và tính toán thực hành. Có 2 nhóm bài tập chính:
- Câu hỏi và bài tập có hướng dẫn
- Câu hỏi và bài tập tự giải',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


    App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_NguVan10_Tap1',
            'TEN_SACH' =>'Bài Tập Ngữ Văn 10 Tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_NguVan10_Tap1.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 10 là trọn bộ sách giáo khoa bài tập lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Để phát huy tính chủ động trong việc học, bên cạnh sự có mặt của giáo viên, các loại tài liệu tham khảo cũng đóng vai trò hết sức quan trọng và cần thiết, đặc biệt là với môn học đòi hỏi sự nhạy bén, tinh tế như môn Văn.
Bài Tập Ngữ Văn Lớp 10 Tập 1 được biên soạn bám sát nội dung sách giáo khoa Ngữ Văn lớp 10 gồm các bài tập Ngữ Văn đa dạng có gợi ý làm bài cụ thể nhằm giúp các em có thể tự học tốt môn Ngữ văn một cách chủ động, sáng tạo.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

    App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_NguVan10_Tap2',
            'TEN_SACH' =>'Bài Tập Ngữ Văn 10 Tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_NguVan10_Tap2.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 10 là trọn bộ sách giáo khoa bài tập lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Để phát huy tính chủ động trong việc học, bên cạnh sự có mặt của giáo viên, các loại tài liệu tham khảo cũng đóng vai trò hết sức quan trọng và cần thiết, đặc biệt là với môn học đòi hỏi sự nhạy bén, tinh tế như môn Văn.
Bài Tập Ngữ Văn Lớp 10 Tập 2 được biên soạn bám sát nội dung sách giáo khoa Ngữ Văn lớp 10 gồm các bài tập Ngữ Văn đa dạng có gợi ý làm bài cụ thể nhằm giúp các em có thể tự học tốt môn Ngữ văn một cách chủ động, sáng tạo.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


    App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_TinHoc10',
            'TEN_SACH' =>'Bài Tập Tin Học 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_TinHoc10.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 10 là trọn bộ sách giáo khoa bài tập lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Cuốn sách Bài Tập Tin Học Lớp 10 được biên soạn theo chương trình của Bộ Giáo dục và Đào tạo, nhằm giúp các em học sinh ôn luyện, đào sâu, nâng cao kiến thức và rèn luyện kỹ năng thực hành Tin học.
Học Tốt Tin Học Lớp 10 có cấu trúc như sau:
– Hệ thống lại các bài trong sách giáo khoa.
– Tương ứng với mỗi bài trong sách giáo khoa có phần bài tập cơ bản và bài tập nâng cao nhằm giúp các em học sinh ghi nhớ kiến thức đã học và vận dụng làm các câu hỏi, bài tập thực hành khác.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);



    App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_TiengAnh10',
            'TEN_SACH' =>'Bài Tập Tiếng Anh 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_TiengAnh10.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 10 là trọn bộ sách giáo khoa bài tập lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách bài tập được biên soạn dưới dạng vở bài tập, dựa theo sách giáo khoa Tiếng Anh 10 của Bộ Giáo Dục và Đào Tạo.
            Sách là tập hợp các bài tập thực hành về phát âm (pronunciation), từ vựng (vocabulary), ngữ pháp (grammar and structure), đọc hiểu (reading comprehension), nói (speaking) và viết (writing), nhằm giúp học sinh luyện tập các nội dung trọng tâm của bài học.
            Các bài tập được biên soạn theo từng đơn vị bài học (Unit) có nội dung tương ứng với đơn vị bài học trong sách giáo khoa. Sau phần bài tập tự luận của mỗi đơn vị bài học có hai bài kiểm tra (Test 1 và Test 2) dạng trắc nghiệm củng cố kiến thức trong đơn vị bài học đó.',
            'NAM_XUAT_BAN' => '2018',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


    App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_LichSu10',
            'TEN_SACH' =>'Bài Tập Lịch Sử 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_LichSu10.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 10 là trọn bộ sách giáo khoa bài tập lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Cho đến nay trong dạy học lịch sử ở trường phổ thông nhiều giáo viên và học sinh những quan niệm rằng học lịch sử là một môn học cuối giờ học giáo viên thường căn nhà học sinh ở nhà một cách trung như học bài cũ đọc bài mới trong sách giáo khoa trả lời câu hỏi cuối bài….
Còn học sinh cũng chẳng biết làm gì ngoài đọc lại vỡ ghi so sánh với sách giáo khoa và học thuộc lòng những sự kiện nào đó một nhiệm vụ học tập chung không rõ ràng không biết phải hoàn thành khủng những công việc như thế nào như vậy sẽ không đó thúc đẩy việc học của học sinh vì vậy việc ra các bài tập và yêu cầu học sinh phải hoàn thành các bài tập cụ thể là một yêu cầu cần thiết từng bước hình thành kỹ năng thói quen tự học cho học sinh góp phần nâng cao chất lượng dạy học lịch sử hiện nay.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


    App\SACH::create([
        	'MA_SACH'=>'KHXH_BT_DiaLy10',
            'TEN_SACH' =>'Bài Tập Địa Lý 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_DiaLy10.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 10 là trọn bộ sách giáo khoa bài tập lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung gồm 3 phần:
- Phần 1: Các câu hỏi lý thuyết
- Phần 2: Các câu hỏi bài tập
- Phần 3: Bài tập trắc nghiệm',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


    App\SACH::create([
        	'MA_SACH'=>'KHTN_BT_Toan11_GT',
            'TEN_SACH' =>'Bài Tập Giải Tích 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_ToanDaiSoGiaiTich11.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 11 là trọn bộ sách giáo khoa bài tập lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
- Hàm số lượng giác. Phương trình lượng giác
- Tổ hợp. Xác suất
- Dãy số. Cấp số cộng và cấp số nhân
- Giới hạn
- Đạo hàm',
            'NAM_XUAT_BAN' => '2017',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

    App\SACH::create([
            'MA_SACH'=>'KHTN_BT_Toan11_HH',
            'TEN_SACH' =>'Bài Tập Hình Học 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_ToanHinhHoc11.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 11 là trọn bộ sách giáo khoa bài tập lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Chương I. Phép dời hình và phép đồng dạng trong mặt phẳng
Chương II. Đường thẳng và mặt phẳng trong không gian. Quan hệ song song
Chương III. Vectơ trong không gian. Quan hệ vuông góc trong không gia',
            'NAM_XUAT_BAN' => '2018',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


    App\SACH::create([
            'MA_SACH'=>'KHTN_BT_Toan11',
            'TEN_SACH' =>'Bài Tập Vật Lý 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_VatLy11.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 11 là trọn bộ sách giáo khoa bài tập lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'CHƯƠNG I. ĐIỆN TÍCH. ĐIỆN TRƯỜNG
CHƯƠNG II. DÒNG ĐIỆN KHÔNG ĐỔI
CHƯƠNG III. DÒNG ĐIỆN TRONG CÁC MÔI TRƯỜNG
CHƯƠNG IV. TỪ TRƯỜNG
CHƯƠNG V. CẢM ỨNG ĐIỆN TỪ
CHƯƠNG VI. KHÚC XẠ ÁNH SÁNG',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


    App\SACH::create([
            'MA_SACH'=>'KHTN_BT_HoaHoc11',
            'TEN_SACH' =>'Bài Tập Hóa Học 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_HoaHoc11.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 11 là trọn bộ sách giáo khoa bài tập lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách bài tập môn Hóa học lớp 11 dành cho học sinh ban Chuẩn.
Giúp các em ôn tập các bài học đã được học ở trên lớp, đồng thời làm quen với các dạng bài tập Hóa học 11.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

    App\SACH::create([
            'MA_SACH'=>'KHTN_BT_SinhHoc11',
            'TEN_SACH' =>'Bài Tập Sinh Học 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_SinhHoc11.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 11 là trọn bộ sách giáo khoa bài tập lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách Bài Tập Sinh Học Lớp 11 gồm các bài sau:
            Chương 1: Chuyển hóa vật chất và năng lượng
            Chương 2: Cảm ứng
            Chương 3: Sinh trưởng và Phát triển
            Chương 4: Sinh sản',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


    App\SACH::create([
            'MA_SACH'=>'KHXH_BT_NguVan11_Tap1',
            'TEN_SACH' =>'Bài Tập Ngữ Văn 11 Tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_NguVan11_Tap1.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 11 là trọn bộ sách giáo khoa bài tập lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách gồm hai loại bài tập: một phần nhỏ là các bài tập trong SGK, còn lại phần lớn là các bài tập theo 3 phân môn (Đọc hiểu, Tiếng Việt, Làm văn). Những bài tập được thiết kế đa dạng, có bài nhận diên kiến thức, có bài phát hiện luận điểm, có bài xây dựng đề cương, cũng có bài nghị luận - bình luận.
Cách tốt nhất là khi làm một bài tập trong sách, các em nên tự mình suy nghĩ xây dựng đề cương, sau đó mới xem gợi ý để đối chiếu, kết luận.',
            'NAM_XUAT_BAN' => '2016',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


    App\SACH::create([
            'MA_SACH'=>'KHXH_BT_NguVan11_Tap2',
            'TEN_SACH' =>'Bài Tập Ngữ Văn 11 Tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_NguVan11_Tap2.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 11 là trọn bộ sách giáo khoa bài tập lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Những bài tập được thiết kế đa dạng, có bài nhận diên kiến thức, có bài phát hiện luận điểm, có bài xây dựng đề cương, cũng có bài nghị luận - bình luận.
Cách tốt nhất là khi làm một bài tập trong sách, các em nên tự mình suy nghĩ xây dựng đề cương, sau đó mới xem gợi ý để đối chiếu, kết luận.',
            'NAM_XUAT_BAN' => '2016',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);



     App\SACH::create([
            'MA_SACH'=>'KHXH_BT_LichSu11',
            'TEN_SACH' =>'Bài Tập Lịch Sử 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_LichSu11.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 11 là trọn bộ sách giáo khoa bài tập lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Phần một: Lịch sử thế giới cận đại (tiếp theo).
            Chương 1: Các nước châu Á, châu Phi và khu vực Mĩ La Tinh (Thế kỉ XIX - đầu thế kỉ XX)
            Chương 2: Chiến tranh thế giới thứ nhất (1914 -1918)
            Chương III: Những thành tựu văn hóa thời cận đại
            Phần hai: Lịch sử thế giới hiện đại (Phần từ năm 1917 đến năm 1945)
            Chương 1: Cách mạng tháng mười Nga năm 1917 và công cuộc xây dựng chủ nghĩa xã hội ở Liên Xô (1921 -1941)
            Chương 2: Các nước tư bản chủ nghĩa giữa hai cuộc chiến tranh thế giới (1918 -1939)
             Chương 3: Các nước châu Á giữa hai cuộc chiến tranh thế giới (1918 -1939)
             Chương 4: Chiến tranh thế giới thứ hai (1939 -1945).
             Phần ba: Lịch sử Việt Nam (1858 -1918)
             Chương 1: Việt Nam từ năm 1858 đến cuối thế kỉ XIX
             Chương 2: Việt Nam từ đầu thế kỉ XX đến hết chiến tranh thế giới thứ nhất (1918)',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


      App\SACH::create([
            'MA_SACH'=>'KHXH_BT_DiaLy11',
            'TEN_SACH' =>'Bài Tập Địa Lý 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_DiaLy11.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 11 là trọn bộ sách giáo khoa bài tập lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'A – Khái quát nền kinh tế – xã hội thế giới
            B – Địa lí khu vực và quốc gia
            Bài 6: Hợp chủng quốc Hoa Kì
            Bài 7: Liên minh châu Âu (EU)
            Bài 8: Liên bang Nga
            Bài 9: Nhật Bản
            Bài 10: Cộng hòa nhân dân Trung Hoa (Trung Quốc)
            Bài 11: Khu vực Đông Nam Á
            Bài 12: Ô-xtrây-li-a',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

       App\SACH::create([
            'MA_SACH'=>'KHXH_BT_TiengAnh11',
            'TEN_SACH' =>'Bài Tập Tiếng Anh 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_TiengAnh11.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 11 là trọn bộ sách giáo khoa bài tập lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Cuốn sách Bài tập tiếng Anh 11- English Workbook 11 được biên soạn theo chương trình tiếng Anh 11 xuất bản năm 2016 của Bộ Giáo dục và Đào tạo. Tập sách ra đời nhằm giúp học sinh củng cố kiến thức ngôn ngữ, và giao tiếp tiếng Anh mà các em đã học trong sách giáo khoa Tiếng Anh 11.
Tập sách gồm có 2 phần chính: Phần trọng tâm ngôn ngữ ( Language Focus) và phần luyện tập ( Practice Tests)
Ở phần Luyên tập , các bài tập được biên soạn dựa theo kiến thức ngôn ngữ của từng đơn vị bài học và được phân thành 2 loại bài tập từ bám sát đến nâng cao.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


       App\SACH::create([
            'MA_SACH'=>'KHTN_BT_TinHoc11',
            'TEN_SACH' =>'Bài Tập Tin Học 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_TinHoc11.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 11 là trọn bộ sách giáo khoa bài tập lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Để học tốt Tin học lớp 11, loạt bài Soạn, bài tập Tin học lớp 11 gồm các bài tóm tắt lý thuyết và giải bài tập trong sgk Tin học 11.
            Chương 1: Một số khái niệm về lập trình và ngôn ngữ lập trình
            Chương 2: Chương trình đơn giản
            Chương 3: Cấu trúc rẽ nhánh và lặp
            Chương 4: Kiểu dữ liệu có cấu trúc
            Chương 5: Tệp và thao tác với tệp
            Chương 6: Chương trình con và lập trình có cấu trúc',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


       App\SACH::create([
            'MA_SACH'=>'KHTN_BT_Toan12_GT',
            'TEN_SACH' =>'Bài Tập Giải Tích 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_ToanGiaiTich12.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 12 là trọn bộ sách giáo khoa bài tập lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Chương trình Giải tích bao gồm các nội dung: Khảo sát hàm số và các bài toán liên quan, Lũy thừa - mũ - lôgarit, Nguyên hàm tích phân và ứng dụng, Số phức.
Bài Tập Giải Tích lớp 12 được biên soạn bám sát chương trình Vật Lí Lớp 12 của Bộ Giáo Dục & Đào Tạo',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


       App\SACH::create([
            'MA_SACH'=>'KHTN_BT_Toan12_HH',
            'TEN_SACH' =>'Bài Tập Hình Học 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_ToanHinhHoc12.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 12 là trọn bộ sách giáo khoa bài tập lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách bài tập môn Hình Học lớp 12 dành cho học sinh ban Chuẩn.
Giúp các em ôn tập các bài học đã được học ở trên lớp, đồng thời làm quen với các dạng bài tập Hình Học 12.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

        App\SACH::create([
            'MA_SACH'=>'KHTN_BT_VatLy12',
            'TEN_SACH' =>'Bài Tập Vật Lý 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_VatLy12.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 12 là trọn bộ sách giáo khoa bài tập lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Để học tốt Vật Lí Lớp 12, ngoài những kiến thức trong sách giáo khoa, các em học sinh cần tham khảo thêm các tài liệu Vật Lí khác.
Bài Tập Vật Lí Lớp 12 được biên soạn bám sát chương trình Vật Lí Lớp 12 của Bộ Giáo Dục & Đào Tạo, được chia làm hai phần chính như sau:
Phần 1: Đề bài
Phần 2: Bài giải - Hướng dẫn - Đáp số.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


        App\SACH::create([
            'MA_SACH'=>'KHTN_BT_HoaHoc12',
            'TEN_SACH' =>'Bài Tập Hóa Học 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_HoaHoc12.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 12 là trọn bộ sách giáo khoa bài tập lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách bài tập môn Hóa học lớp 12 dành cho học sinh ban Chuẩn.
Giúp các em ôn tập các bài học đã được học ở trên lớp, đồng thời làm quen với các dạng bài tập Hóa học 12.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


         App\SACH::create([
            'MA_SACH'=>'KHTN_BT_SinhHoc12',
            'TEN_SACH' =>'Bài Tập Sinh Học 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_SinhHoc12.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 12 là trọn bộ sách giáo khoa bài tập lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách Bài Tập Sinh Học Lớp 12 gồm các bài sau:
            Phần 5: Di truyền học
            Phần 6: Tiến hóa
            Phần 7: Sinh thái học',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


         App\SACH::create([
            'MA_SACH'=>'KHXH_BT_NguVan12_Tap1',
            'TEN_SACH' =>'Bài Tập Ngữ Văn 12 Tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_NguVan12_Tap1.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 12 là trọn bộ sách giáo khoa bài tập lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Bài Tập Ngữ Văn 12 được biên soạn theo chương trình chuẩn của Bộ, nội dung bám sát bài học trong sách giáo khoa giúp các em học sinh ôn tập, củng cố các kiến thức cơ bản và phát triển năng lực tư duy, biết vận dụng kiến thức đã học vào thực tế đời sống, không những thế còn khơi dậy niềm đam mê tìm hiểu bộ môn Ngữ văn, tìm hiểu thiên nhiên đa dạng, phong phú.

Cuốn sách bao gồm các bài tập làm văn, tự luận phù hợp có kèm gợi ý hướng dẫn giải chi tiết, tỉ mỉ giúp các em tiện theo dõi, đối chiếu kết quả của mình làm. Đây sẽ tài liệu tham khảo hữu ích bổ trợ cho học sinh học tốt môn Ngữ văn 12',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


         App\SACH::create([
            'MA_SACH'=>'KHXH_BT_NguVan12_Tap2',
            'TEN_SACH' =>'Bài Tập Ngữ Văn 12 Tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_NguVan12_Tap2.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 12 là trọn bộ sách giáo khoa bài tập lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Bài Tập Ngữ Văn 12 được biên soạn theo chương trình chuẩn của Bộ, nội dung bám sát bài học trong sách giáo khoa giúp các em học sinh ôn tập, củng cố các kiến thức cơ bản và phát triển năng lực tư duy, biết vận dụng kiến thức đã học vào thực tế đời sống, không những thế còn khơi dậy niềm đam mê tìm hiểu bộ môn Ngữ văn, tìm hiểu thiên nhiên đa dạng, phong phú.
Cuốn sách bao gồm các bài tập làm văn, tự luận phù hợp có kèm gợi ý hướng dẫn giải chi tiết, tỉ mỉ giúp các em tiện theo dõi, đối chiếu kết quả của mình làm. Đây sẽ tài liệu tham khảo hữu ích bổ trợ cho học sinh học tốt môn Ngữ văn 12',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

         App\SACH::create([
            'MA_SACH'=>'KHXH_BT_LichSu12',
            'TEN_SACH' =>'Bài Tập Lịch Sử 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_LichSu12.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 12 là trọn bộ sách giáo khoa bài tập lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Để học tốt Lịch Sử lớp 12, loạt bài Soạn và bài tập Lịch Sử 12 gồm các bài trả lời các câu hỏi in nghiêng và giải bài tập trong sách giáo khoa Lịch Sử 12.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

          App\SACH::create([
            'MA_SACH'=>'KHXH_BT_DiaLy12',
            'TEN_SACH' =>'Bài Tập Địa Lý 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_DiaLy12.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 12 là trọn bộ sách giáo khoa bài tập lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Địa Lý Việt Nam
            Địa Lý các ngành kinh tế
            Một số vấn đề phát triển và phân bố nông nghiệp
            Một số vấn đề phát triển và phân bố công nghiệp
            Một số vấn đề phát triển và phân bố các ngành dịch vụ
            Địa Lý các vùng kinh tế
            Địa Lý Địa Phương',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


          App\SACH::create([
            'MA_SACH'=>'KHXH_BT_TiengAnh12',
            'TEN_SACH' =>'Bài Tập Tiếng Anh 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_TiengAnh12.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 12 là trọn bộ sách giáo khoa bài tập lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Để học tốt Tiếng Anh lớp 12 mới (Chương trình thí điểm), loạt  sách bài tập Tiếng Anh 12 mới (Giải SBT Tiếng Anh 12 mới) gồm đầy đủ các phần Pronunciation, Vocabulary, Grammar, Speaking, Reading, Writing, Test yourself giúp bạn học tốt môn Tiếng Anh lớp 12 mới hơn.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

          App\SACH::create([
            'MA_SACH'=>'KHTN_BT_TinHoc12',
            'TEN_SACH' =>'Bài Tập Tin Học 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_TinHoc12.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách bài tập giáo khoa lớp 12 là trọn bộ sách giáo khoa bài tập lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Để học tốt Tin học lớp 12, loạt bài Soạn, bài tập Tin học lớp 12 gồm các bài tập trong sgk Tin học 12 giúp bạn học tốt môn Tin 12 hơn.
            Chương 1: Khái niệm về hệ cơ sở dữ liệu
            Chương 2: Hệ quản trị cơ sở dữ liệu Microsoft Access
            Chương 3: Hệ cơ sở dữ liệu quan hệ
            Chương 4: Kiến trúc và bảo mật các hệ cơ sở dữ liệu',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10',
            'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);
    }
}
