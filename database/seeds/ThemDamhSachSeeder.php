<?php

use Illuminate\Database\Seeder;

class ThemDamhSachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\SACH:: create([
            'MA_SACH'=>'KHTN_VayLy6',
            'TEN_SACH' =>'Vật lý 6 ',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'BT_VatLy6.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 6 là trọn bộ sách giáo khoa lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Vật Lí Lớp 6 là một trong những cuốn sách giáo khoa lớp 6 cơ bản do Bộ Giáo Dục & Đào Tạo tổ chức biên soạn.Tập sách gồm 30 bài học được chia thành 2 chương',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_Toan6_Tap1',
            'TEN_SACH' =>'Toán 6 tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Toan_6_Tap1.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 6 là trọn bộ sách giáo khoa lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Toán Lớp 6 (Tập 1) là một trong những cuốn sách giáo khoa cơ bản do Bộ Giáo Dục & Đào Tạo tổ chức biên soạn. Sách gồm những nội dung chính như phần số học ( bao gồm: Ôn tập và bổ túc về số tự nhiên) và phần hình học ( bao gồm: Đoạn thẳng).',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_Toan6_Tap2',
            'TEN_SACH' =>'Toán 6 tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Toan_6_Tap2.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 6 là trọn bộ sách giáo khoa lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Toán Lớp 6 (Tập 2) là một trong những cuốn sách giáo khoa cơ bản do Bộ Giáo Dục & Đào Tạo tổ chức biên soạn. Sách gồm những nội dung chính như phần số học ( bao gồm: Ôn tập và bổ túc về số tự nhiên) và phần hình học ( bao gồm: Đoạn thẳng).',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_SinhHoc6',
            'TEN_SACH' =>'Sinh học 6',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Sinh_Hoc_6.jpg', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 6 là trọn bộ sách giáo khoa lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sinh Học Lớp 6 giúp các em tìm hiểu cấu tạo cơ thể.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHXH_NguVan6_Tap1',
            'TEN_SACH' =>'Ngữ văn 6 tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Ngu_Van6_Tap1.jpg', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 6 là trọn bộ sách giáo khoa lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Ngữ Văn Lớp 6 (Tập 1) gồm 17 bài học. Mỗi bài học gồm 3 phân môn: tác phẩm văn học, ngữ pháp và tập làm văn.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHXH_NguVan6_Tap2',
            'TEN_SACH' =>'Ngữ văn 6 tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Ngu_Van6_Tap2.jpg', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 6 là trọn bộ sách giáo khoa lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Cập nhật các nội dung tương tác và dữ liệu mở rộng (đọc diễn cảm, thông tin tác giả - tác phẩm, hướng dẫn phân tích tác phẩm, phim tư liệu - trích đoạn chuyển thể văn học của tác phẩm).',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHXH_LichSu6',
            'TEN_SACH' =>'Lịch sử 6',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'lich_su_6.jpg', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 6 là trọn bộ sách giáo khoa lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Lịch sử 6 giúp học sinh tìm hiểu các kiến thưc lịch sử từ thời cổ đại cho tới thế kỉ X, giúp học sinh nắm được quá trình hình thành và phát triển của nước ta qua các thời kì lịch sử',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHXH_DiaLy6',
            'TEN_SACH' =>'Địa lý 6',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Dia_Ly_6.png', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 6 là trọn bộ sách giáo khoa lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Địa Lí 6 giúp các em tiếp thu kiến thức cơ bản trong môn học, đồng thời nắm vững kiến thức và mở rộng hiểu biết. Qua đó, các em sẽ biết thêm được nhiều thông tin về địa lý qua bài giảng và hình ảnh minh họa.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHXH_GDCD6',
            'TEN_SACH' =>'Giáo dục công dân 6',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'GDCD_6.jpg', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 6 là trọn bộ sách giáo khoa lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách gồm 18 bài học về phẩm chất đạo đức cần có, cách ứng xử với môi trường tự nhiên, xã hội ( bao gồm:Tự chăm sóc, rèn luyện thân thể.Siêng năng, kiên trì.Tiết kiệm.Lễ độ.Yêu thiên nhiên, sống hòa hợp với thiên nhiên.Sống chan hòa với mọi người)',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_CongNghe6',
            'TEN_SACH' =>'Công nghệ 6',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'cong_nghe_6.jpg', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 6 là trọn bộ sách giáo khoa lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách Công nghệ lớp 6 được biên soạn bám sát chương trình giáo khoa Công nghệ lớp 6 do Bộ Giáo dục và Đào tạo ban hành.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHXH_TiengAnh6',
            'TEN_SACH' =>'Tiếng anh 6',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'english6.jpg', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 6 là trọn bộ sách giáo khoa lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Cuốn sách được chuẩn hóa theo khung chương trình của Bộ Giáo Dục, giúp các em rèn luyện các kĩ năng cơ bản nghe, nói, đọc viết bằng giọng phát âm chuẩn và các bài tập giúp các em rèn luyện để nâng cao các kĩ năng.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_Toan7_Tap1',
            'TEN_SACH' =>'Toán 7 tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Toan7_Tap1.jpg', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 7 là trọn bộ sách giáo khoa lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Gồm 2 phần: đại số và hình học bao gồm: Phần đại số ( bao gồm: Chương 1: Số hữu tỉ, Số thực và Chương 2: Hàm số và đồ thị) và Phần hình học ( bao gồm: Chương 1: Đường thẳng vuông góc, Đường thẳng song song và Chương 2: Tam giác).',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_Toan7_Tap2',
            'TEN_SACH' =>'Toán 7 tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Toan_7_Tap2.jpg', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 7 là trọn bộ sách giáo khoa lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Gồm 3 chương: Chương 1: Thống kê và Chương 2: Biểu thức đại số và Chương 3: Quan hệ giữa các yếu tố trong tam giác. Các đường đồng quy của tam giác.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_VayLy7',
            'TEN_SACH' =>'Vật lý 7',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Vat_ly_7.jpg', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 7 là trọn bộ sách giáo khoa lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Gồm 3 chương: Chương 1: Thống kê và Chương 2: Biểu thức đại số và Chương 3: Quan hệ giữa các yếu tố trong tam giác. Các đường đồng quy của tam giác.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_SinhHoc7',
            'TEN_SACH' =>'Sinh học 7',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'sinh-hoc-7.jpg', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 7 là trọn bộ sách giáo khoa lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sinh Học 7 giúp các em tiếp thu kiến thức cơ bản trong môn học, đồng thời nắm vững kiến thức và mở rộng hiểu biết. Qua đó, các em sẽ biết thêm được nhiều thông tin về môn sinh học qua bài giảng và hình ảnh minh họa.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHXH_NguVan7_Tap1',
            'TEN_SACH' =>'Ngữ văn 7 tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Ngu_Van7_Tap1.jpg', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 7 là trọn bộ sách giáo khoa lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Tập làm văn: chủ yếu là 2 kiểu bài Biểu cảm và Nghị luận. Văn học: chú trọng phần thơ trữ tình, trong đó có cả tác phẩm viết bằng chữ Hán thời trung đại và một số tác phẩm văn chương nghị luận.Tiếng Việt: rèn luyện kỹ năng về cấu tạo từ, từ vựng, cú pháp, tu từ và chuẩn mực sử dụng từ',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

        App\SACH:: create([
            'MA_SACH'=>'KHXH_NguVan7_Tap2',
            'TEN_SACH' =>'Ngữ văn 7 tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Ngu_Van7_Tap2.jpg', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 7 là trọn bộ sách giáo khoa lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Tập làm văn: chủ yếu là 2 kiểu bài Biểu cảm và Nghị luận.Văn học: chú trọng phần thơ trữ tình, trong đó có cả tác phẩm viết bằng chữ Hán thời trung đại và một số tác phẩm văn chương nghị luận.Tiếng Việt: rèn luyện kỹ năng về cấu tạo từ, từ vựng, cú pháp, tu từ và chuẩn mực sử dụng từ',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

        App\SACH:: create([
            'MA_SACH'=>'KHXH_LichSu7',
            'TEN_SACH' =>'Lịch sử 7',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'lich-su-7.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 7 là trọn bộ sách giáo khoa lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Lịch Sử 7 giúp các em tiếp thu kiến thức cơ bản trong môn học, đồng thời nắm vững kiến thức và mở rộng hiểu biết sau bài giảng của các thầy cô trên lớp.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

        App\SACH:: create([
            'MA_SACH'=>'KHXH_DiaLy7',
            'TEN_SACH' =>'Địa lý 7',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'dai_ly7.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 7 là trọn bộ sách giáo khoa lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần: Phần 1: Thành phần nhân văn của môi trường và Phần 2: Các môi trường địa lý và Phần 3: Thiên nhiên và con người ở các châu lục',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

        App\SACH:: create([
            'MA_SACH'=>'KHXH_GDCD7',
            'TEN_SACH' =>'Giáo dục công dân 7',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'GDCD_7.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 7 là trọn bộ sách giáo khoa lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm 18 bài học:Sống giản dị, Trung thực, Tự trọng, Đạo đức và kỉ luật, Yêu thương con người, Đoàn kết, tương trợ, Khoan dung..',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


        App\SACH:: create([
            'MA_SACH'=>'KHTN_CongNghe7',
            'TEN_SACH' =>'Công nghệ 7',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'cong_nghe_7.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 7 là trọn bộ sách giáo khoa lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => '',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

        App\SACH:: create([
            'MA_SACH'=>'KHXH_TiengAnh7',
            'TEN_SACH' =>'Tiếng anh 7',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'english7.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 7 là trọn bộ sách giáo khoa lớp 7, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm 16 bài học:
- Giới thiệu ngữ liệu mới, gồm các mục Listen/Repeat - Listen/Read - Read
- Kiểm tra mức độ hiểu ngữ liệu mới, gồm các hoạt động Ask/Answer - True/False...
- Thực hành
- Tóm tắt trọng tâm bài
- Luyện tập ngữ pháp
- Tóm tắt ngữ pháp (Grammar) và bảng từ vựng Glossary',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);
    
        App\SACH:: create([
            'MA_SACH'=>'KHXH_NguVan8_Tap1',
            'TEN_SACH' =>'Ngữ văn 8 tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Ngu_Van8_Tap1.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 8 là trọn bộ sách giáo khoa lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Quyển sách Ngữ văn lớp 8, tập 1 đóng vai trò rất quan trọng trong quá trình học tập của học sinh. Nó là một công cụ học tập, một sợi dây kết nối giữa học sinh và giáo viên, học sinh và tác phẩm,…',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

        App\SACH:: create([
            'MA_SACH'=>'KHXH_NguVan8_Tap2',
            'TEN_SACH' =>'Ngữ văn 8 tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Ngu_Van8_Tap2.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 8 là trọn bộ sách giáo khoa lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Tập làm văn: củng cố một số kỹ năng cơ bản ( xây dựng đoạn văn, liên kết văn bản...), tập trung 3 kiểu văn bản: Tự sự, thuyết minh, nghị luận.
Ngữ văn: tác phẩm trong giai đoạn đầu thế kỷ XX đến 1945
Tiếng Việt: hội thoại, hành động nói, lựa chọn trật tự từ, các biện pháp tu từ...',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

         App\SACH:: create([
            'MA_SACH'=>'KHXH_LichSu8',
            'TEN_SACH' =>'Lịch sử 8',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'lich-su-7.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 8 là trọn bộ sách giáo khoa lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
- Lịch sử thế giới cận đại
Thời kì xác lập của CNTB
Các nước Âu - Mỹ cuối thế kỉ XIX đầu thế kỉ XX
Châu Á thế kỉ XVIII đầu thế kỷ XX
- Lịch sử thế giới hiện đại
- Lịch sử Việt Nam từ 1858 đến 1918',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

          App\SACH:: create([
            'MA_SACH'=>'KHXH_DiaLy8',
            'TEN_SACH' =>'Địa lý 8',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'dia_ly8.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 8 là trọn bộ sách giáo khoa lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
Thiên nhiên con người ở các châu lục
- Châu Á
- Tổng kết địa lí tự nhiên và địa lí các châu lục
Địa lí Việt Nam
- Địa lí tự nhiên',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

          App\SACH:: create([
            'MA_SACH'=>'KHXH_GDCD8',
            'TEN_SACH' =>'Giáo dục công dân 8',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'dia_ly8.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 8 là trọn bộ sách giáo khoa lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
- Tôn trọng lẽ phải
- Liêm khiết
- Tôn trọng người khác
- Giữ chữ tín
- Pháp luật và kỉ luật
- Xây dựng tình bạn trong sánh lành mạnh',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

          App\SACH:: create([
            'MA_SACH'=>'KHTN_VayLy8',
            'TEN_SACH' =>'Vật lý 8',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Vat_ly8.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 8 là trọn bộ sách giáo khoa lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách Giáo Khoa Vật Lí Lớp 8 được Bộ Giáo Dục và Đào Tạo biên soạn.Sách gồm hai chương:Cơ học và Nhiêt cung cấp học đầy đủ công thức, lý thuyết, định luật, chuyên đề vật lý,…',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


           App\SACH:: create([
            'MA_SACH'=>'KHTN_HoaHoc8',
            'TEN_SACH' =>'Hóa học 8',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'hoa_hoc8.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 8 là trọn bộ sách giáo khoa lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Chương 1: Chất - Nguyên tử - Phân tử
Chương 2: Phản ứng hóa học
Chương 3: Mon và tính toán hóa học
Chương 4: Oxi - không khí
Chương 5: Hiđro - Nước
Chương 6: Dung dịch',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

           App\SACH:: create([
            'MA_SACH'=>'KHTN_Toan8_Tap1',
            'TEN_SACH' =>'Toán 8 tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Toan8_Tap1.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 8 là trọn bộ sách giáo khoa lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
Phần đại số
- Phép nhân và phép chia đa thức
- Phân thức đại số
Phần hình học
- Tứ giác
- Đa giác. Diện tích đa giác',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

           App\SACH:: create([
            'MA_SACH'=>'KHTN_Toan8_Tap2',
            'TEN_SACH' =>'Toán 8 tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Toan8_Tap2.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 8 là trọn bộ sách giáo khoa lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
Phần đại số
- Phương trình bậc nhất một ẩn
- Bất Phương trình bậc nhất một ẩn
Phần hình học
- Tam giác đồng dạng
- Hình lăng trụ đứng. Hình chóp đều',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

           App\SACH:: create([
            'MA_SACH'=>'KHTN_SinhHoc8',
            'TEN_SACH' =>'Sinh học 8',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'sinh_hoc8.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 8 là trọn bộ sách giáo khoa lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
- Khái quát về cơ thể người
- Vận động
- Tuần hoàn
- Hô hấp
- Tiêu hóa
- Trao đổi chất và năng lượng
- Bài tiết...',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);


           App\SACH:: create([
            'MA_SACH'=>'KHTN_CongNghe8',
            'TEN_SACH' =>'Công nghệ 8',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'cong_nghe_8.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 8 là trọn bộ sách giáo khoa lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
- Khái quát về cơ thể người
- Vận động
- Tuần hoàn
- Hô hấp
- Tiêu hóa
- Trao đổi chất và năng lượng
- Bài tiết...',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

           App\SACH:: create([
            'MA_SACH'=>'KHXH_TiengAnh8',
            'TEN_SACH' =>'Tiếng Anh 8',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'english8.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 8 là trọn bộ sách giáo khoa lớp 8, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Tiếng Anh Lớp 8 là một trong những cuốn sách giáo khoa lớp cơ bản được biên soạn theo chương trình chuẩn của Bộ Giáo Dục & Đào Tạo.
Tiếng Anh Lớp 8 tiếp tục nâng cao trình độ Tiếng Anh của các em học sinh bằng cách phối hợp rèn luyện các kĩ năng nghe, nói, đọc, viết ở mức độ cao hơn thông qua các bài học có nội dung phong phú, sinh động.
Tiếng Anh Lớp 8 gồm 16 đơn vị bài học cho khoảng 60 tiết học trên lớp. Mỗi đơn vị bài học bao gồm các mục: Getting Started, Listen & Read, Speak, Listen, Read, Write, Language focus.
Cuối sách là phần tóm tắt ngữ pháp và từ vựng.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

           App\SACH:: create([
            'MA_SACH'=>'KHTN_Toan9_Tap1',
            'TEN_SACH' =>'Toán 9 tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Toan9_Tap1.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 9 là trọn bộ sách giáo khoa lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Phần Đại Số:
Chương 1: Căn bậc hai, căn bậc ba
Chương 2: Hàm số bậc nhất
Phần Hình Học:
Chương 1: Hệ thức lượng trong tam giác vuông
Chương 2: Đường tròn',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

           App\SACH:: create([
            'MA_SACH'=>'KHTN_Toan9_Tap2',
            'TEN_SACH' =>'Toán 9 tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Toan9_Tap2.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 9 là trọn bộ sách giáo khoa lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Phần Đại Số:
Chương III: Hệ hai phương trình bậc nhất hai ẩn
Chương IV: Hàm số y - ax^2 (a#0) - Phương trình bậc hai một ẩn
Phần Hình Học:
Chương III: Góc với đường tròn
Chương IV: Hình trụ - Hình nón - Hình cầu',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

           App\SACH:: create([
            'MA_SACH'=>'KHTN_VayLy9',
            'TEN_SACH' =>'Vật lý 9',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'vat-li-9.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 9 là trọn bộ sách giáo khoa lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Là một trong những cuốn sách giáo khoa cơ bản được biên soạn theo chương trình chuẩn của Bộ Giáo Dục & Đào Tạo.
Tập sách gồm những nội dung chính như sau:
Chương I: Điện học
Chương II: Điện từ học
Chương III: Quang học
Chương IV: Sự bảo toàn và chuyển hóa năng lượng',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

            App\SACH:: create([
            'MA_SACH'=>'KHTN_SinhHoc9',
            'TEN_SACH' =>'Sinh học 9',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'sinh_hoc9.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 9 là trọn bộ sách giáo khoa lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Cuốn sách giáo khoa sinh học 9 (bản đầy đủ) do Nhà xuất bản giáo dục ấn bản nhằm cung cấp cho các em học sinh lớp 9 bộ tài liệu để học môn sinh. Cuốn sách gồm 11 chương.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

             App\SACH:: create([
            'MA_SACH'=>'KHXH_NguVan9_Tap1',
            'TEN_SACH' =>'Ngữ Văn 9 tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Ngu_Van9_Tap1.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 9 là trọn bộ sách giáo khoa lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Ngữ Văn Lớp 9 - Tập 1 (Tái Bản) là một trong những cuốn sách giáo khoa cơ bản do Bộ Giáo Dục & Đào Tạo tổ chức biên soạn.Gồm 16 bài học. Mỗi bài học gồm 3 phần: tác phẩm văn học, ngữ pháp và tập làm văn.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

             App\SACH:: create([
            'MA_SACH'=>'KHXH_NguVan9_Tap2',
            'TEN_SACH' =>'Ngữ Văn 9 tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Ngu_Van9_Tap2.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 9 là trọn bộ sách giáo khoa lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Ngữ Văn Lớp 9 - Tập 2 (Tái Bản) là một trong những cuốn sách giáo khoa cơ bản do Bộ Giáo Dục & Đào Tạo tổ chức biên soạn.Gồm 16 bài học. Mỗi bài học gồm 3 phần: tác phẩm văn học, ngữ pháp và tập làm văn.',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

             App\SACH:: create([
            'MA_SACH'=>'KHXH_LichSu9',
            'TEN_SACH' =>'Lịch sử 9',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Lich_su9.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 9 là trọn bộ sách giáo khoa lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Lịch Sử Lớp 9 là một trong những cuốn sách giáo khoa cơ bản được biên soạn theo chương trình chuẩn của Bộ Giáo Dục & Đào Tạo.
Tập sách gồm những nội dung chính như sau:
Phần 1: Lịch sử thế giới hiện đại từ năm 1945 đến nay
Phần 2: Lịch sử Việt Nam từ năm 1919 đến nay.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

             App\SACH:: create([
            'MA_SACH'=>'KHXH_DiaLy9',
            'TEN_SACH' =>'Địa lý 9',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'dia_ly9.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 9 là trọn bộ sách giáo khoa lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách Giáo Khoa Địa Lí Lớp 9 được bộ Giáo Dục và Đào Tạo biên soạn và ban hành .Sách gồm bốn phần về Địa Lý :Dân cư , Kink tế , Sự phân hóa lãnh thổ và Địa lý địa phương cung cấp đầy đủ kiến thức, thực hành vẽ biểu đồ và bài tập địa lý …',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

             App\SACH:: create([
            'MA_SACH'=>'KHXH_GDCD9',
            'TEN_SACH' =>'Giáo dục công dân 9',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'GDCD_9.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 9 là trọn bộ sách giáo khoa lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Bài 1: Chí công vô tư
Bài 2: Tự chủ
.......
Bài 17: Nghĩa vụ bảo vệ Tổ Quốc
Bài 18: Sống có đạo đức và tuân theo pháp luật đủ kiến thức, thực hành vẽ biểu đồ và bài tập địa lý …',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

               App\SACH:: create([
            'MA_SACH'=>'KHXH_TiengAnh9',
            'TEN_SACH' =>'Tiếng Anh 9',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'english9.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 9 là trọn bộ sách giáo khoa lớp 9, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Tiếng Anh Lớp 9 là một trong những cuốn sách giáo khoa lớp cơ bản được biên soạn theo chương trình chuẩn của Bộ Giáo Dục & Đào Tạo.
Tiếng Anh Lớp 9 tiếp tục nâng cao trình độ Tiếng Anh của các em học sinh bằng cách phối hợp rèn luyện các kĩ năng nghe, nói, đọc, viết ở mức độ cao hơn thông qua các bài học có nội dung phong phú, sinh động.
Tiếng Anh Lớp 9 gồm 10 đơn vị bài học cho khoảng 60 tiết học trên lớp. Mỗi đơn vị bài học bao gồm các mục: Getting Started, Listen & Read, Speak, Listen, Read, Write, Language focus.
Cuối sách là phần tóm tắt ngữ pháp và từ vựng.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]);

               App\SACH:: create([
            'MA_SACH'=>'KHTN_ToanDaiSo10',
            'TEN_SACH' =>'Toán Đại Số 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'ToanDaiSo10.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 10 là trọn bộ sách giáo khoa lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách Giáo Khoa Đại Số Lớp 10 được bộ Giáo Dục và Đào Tạo biên soạn và phát hành. Sách gồm sáu chương tổng hợp công thức, lý thuyết, phương pháp giải bài tập đại số …',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

               App\SACH:: create([
            'MA_SACH'=>'KHTN_ToanHinhHoc10',
            'TEN_SACH' =>'Toán Hình Học 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'ToanHinhHoc10.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 10 là trọn bộ sách giáo khoa lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Hình Học 10 là một trong số những cuốn sách cần thiết mà mỗi học sinh đang theo học chương trình lớp 10 cần phải có. Cuốn sách do NXB Giáo dục Việt Nam, Bộ Giáo dục và Đào tạo biên soạn và phát hành trên toàn quốc.
Hình Học 10 giúp các em tiếp thu kiến thức cơ bản trong môn học, đồng thời nắm vững kiến thức và mở rộng hiểu biết thông qua bài giảng của giáo viên trên lớp.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

                App\SACH:: create([
            'MA_SACH'=>'KHTN_VayLy10',
            'TEN_SACH' =>'Vật lý 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Vat_ly10.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 10 là trọn bộ sách giáo khoa lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
Chương 1: Cơ học
- Động học chất điểm
- Động lực học chất điểm
- Cân bằng và chuyển động của vật rắn
- Các định luật bảo toàn
Chương 2: Nhiệt học',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

                 App\SACH:: create([
            'MA_SACH'=>'KHTN_HoaHoc10',
            'TEN_SACH' =>'Hóa học 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'hoa_hoc10.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 10 là trọn bộ sách giáo khoa lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Chương trình Hóa học 10 cung cấp cho các em những kiến thức bổ ích về Hóa học đại cương và một phần Hóa học vô cơ.
Các em sẽ biết nguyên tử được cấu tạo như thế nào, thế nào là các nguyên tố hóa học, quy tắc sắp xếp các nguyên tố hóa học trong bảng hệ thống tuần hoàn ra sao, các kiến thức về tốc độ phản ứng, cân bằng hóa học, đặc điểm và tính chất hóa học của các nguyên tố phi kim điển hình như nhóm halogen, oxi - lưu huỳnh...',
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

                  App\SACH:: create([
            'MA_SACH'=>'KHTN_SinhHoc10',
            'TEN_SACH' =>'Sinh học 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Sinh_hoc10.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 10 là trọn bộ sách giáo khoa lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sinh Học 10 là một trong số những cuốn sách cần thiết mà mỗi học sinh đang theo học chương trình lớp 10 cần phải có. Cuốn sách do NXB Giáo dục Việt Nam, Bộ Giáo dục và Đào tạo biên soạn và phát hành trên toàn quốc.
Sinh Học 10 giúp các em tiếp thu kiến thức cơ bản trong môn học, đồng thời nắm vững kiến thức và mở rộng hiểu biết. Qua đó, các em sẽ biết thêm được nhiều thông tin về môn sinh học qua bài giảng và hình ảnh minh họa.',
            'NAM_XUAT_BAN' => '2017',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

                    App\SACH:: create([
            'MA_SACH'=>'KHXH_NguVan10_Tap1',
            'TEN_SACH' =>'Ngữ Văn 10 tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Ngu_Van10_Tap1.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 10 là trọn bộ sách giáo khoa lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Cuốn sách được biên soạn nhằm mục đích giúp các em phát huy tính chủ động trong việc học, đặc biệt là với môn học đòi hỏi sự nhạy bén tinh tế như môn Ngữ Văn. Nội dung chương trình cơ bản do Bộ GD-ĐT ban hành.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

                     App\SACH:: create([
            'MA_SACH'=>'KHXH_NguVan10_Tap2',
            'TEN_SACH' =>'Ngữ Văn 10 tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Ngu_Van10_Tap2.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 10 là trọn bộ sách giáo khoa lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Phần Hướng dẫn văn bản sau mỗi bài học sẽ giúp các em tự học, tự mình chiếm lĩnh tác phẩm văn chương hay một bài học cụ thể. Có một số câu hỏi, bài tập trắc nghiệm để các em làm quen dần với một hình thức kiểm tra mới.
Mục Kết quả cần đạt và Ghi nhớ là những tiêu chí có tính chất đánh giá, định hướng. Phần Luyện tập giúp người học vận dụng kiến thức để thông hiểu lý luận và khả năng thực hành. Ngoài ra, sách còn có những bài tập nâng cao dành cho học sinh Khá, giỏi.',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

                      App\SACH:: create([
            'MA_SACH'=>'KHXH_LichSu10',
            'TEN_SACH' =>'Lịch Sử 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'lich_su10.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 10 là trọn bộ sách giáo khoa lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
- Lịch sử thế giới thời nguyên thủy, cổ đại và trung đại
- Lịch sử Việt Nam từ nguồn gốc đến giữa thế kỉ XIX
- Lịch sử thế giới cận đại',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 


            App\SACH:: create([
            'MA_SACH'=>'KHXH_DiaLy10',
            'TEN_SACH' =>'Địa Lý 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'dai_ly10.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 10 là trọn bộ sách giáo khoa lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
- Lịch sử thế giới thời nguyên thủy, cổ đại và trung đại
- Lịch sử Việt Nam từ nguồn gốc đến giữa thế kỉ XIX
- Lịch sử thế giới cận đại',
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

     App\SACH:: create([
            'MA_SACH'=>'KHTN_TinHoc10',
            'TEN_SACH' =>'Tin Học 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'tin_hoc10.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 10 là trọn bộ sách giáo khoa lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
Chương I : Một số khái niệm cơ bản của Tin Học
Chương II : Hệ điều hành
Chương III : Soạn thảo văn bản
Chương IV : Mạng máy tính và internet',
            'NAM_XUAT_BAN' => '2018',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

     App\SACH:: create([
            'MA_SACH'=>'KHXH_GDCD10',
            'TEN_SACH' =>'Giáo Dục Công Dân 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'GDCD_10.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 10 là trọn bộ sách giáo khoa lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
- Công dân với việc hình thành thế giới quan, phương pháp luận khoa học
- Công dân với đạo đức',
            'NAM_XUAT_BAN' => '2018',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

      App\SACH:: create([
            'MA_SACH'=>'KHTN_CongNghe10',
            'TEN_SACH' =>'Giáo Dục Công Dân 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'cong_nghe_10.jpg', 
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 10 là trọn bộ sách giáo khoa lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Phần 1 : Nông, Lâm, Ngư Nghiệp
Chương I : Trồng trọt, lâm nghiệp đại cương
Chương II : Thủy sản đại cương
Chương III : Bảo quản, chế biến nông lâm thủy hải sản
Phần 2 : Tạo Lập Doanh Nghiệp
Chương IV : Doanh nghiệp và lựa chọn lĩnh vực kinh doanh
Chương V : Tổ chức và quản lí doanh nghiệp',    
            'NAM_XUAT_BAN' => '2018',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

       App\SACH:: create([
            'MA_SACH'=>'KHXH_TiengAnh10',
            'TEN_SACH' =>'Tiếng Anh 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'english10.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 10 là trọn bộ sách giáo khoa lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm 16 bài học và 6 bài ôn. Cấu trúc mỗi bài học như sau:
- Reading: giúp học sinh rèn kỹ năng đọc lướt, mở rộng vốn từ, nâng cao ngữ pháp
- Listening: gồm bài tập luyện nghe - hiểu
- Speaking: gồm các hoạt động luyện nói theo chức năng ngôn ngữ và theo chủ điểm bài học
- Writing: gồm các bài tập phát triển kỹ năng viết
- Language Focus: thống kê và trình bày các vấn đề liên quan đến từ và ngữ pháp',    
            'NAM_XUAT_BAN' => '2018',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

       App\SACH:: create([
            'MA_SACH'=>'KHXH_GDQPAN10',
            'TEN_SACH' =>'Giáo Dục Quốc Phòng - An Ninh 10',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Giao_Duc_An_Ninh_Quoc_Phong10.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 10 là trọn bộ sách giáo khoa lớp 10, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Bài 1: Truyền thống đánh giặc giữ nước của dân tộc Việt Nam
....
Bài 7: Tác hại của ma túy và trách nhiệm của học sinh trong phòng, chống ma túy
Tài liệu tham khảo',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_ToanDaiSovaGiaiTich11',
            'TEN_SACH' =>'Toán Đại Số và Giải Tích 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'ToanDaiSoGiaiTich11.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 11 là trọn bộ sách giáo khoa lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
Hàm số lượng giác và phương trình lượng giác
Tổ hợp, xác suất
Dãy số, cấp số cộng và cấp số nhân
Giới hạn
Đạo hàm',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

         App\SACH:: create([
            'MA_SACH'=>'KHTN_ToanHinhHoc11',
            'TEN_SACH' =>'Toán Hình Học 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'ToanHinhHoc11.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 11 là trọn bộ sách giáo khoa lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách được sử dụng cho giáo viên giảng dạy và học sinh học tập tại các trường THPT và cơ sở giáo dục trên toàn quốc với các kiến thức Hình học căn bản mà mọi học sinh lớp 11 cần có. Sách còn giúp bạn đọc tra cứu các kiến thức chuẩn Hình học 11.
             Sách gồm ba chương :Phép dời hình và phép đồng dành trong mặt phẳng ;Đường thẳng và mặt phẳng trong không gian,quan hệ song song ;Vecto trong không gian , quan hệ vuông góc trong không gian …',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

         App\SACH:: create([
            'MA_SACH'=>'KHTN_VayLy11',
            'TEN_SACH' =>'Vật Lý 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Vat_ly11.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 11 là trọn bộ sách giáo khoa lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
Phần 1: Điện học, điện từ học
Điện tích, điện trường
Dòng điện không đổi
Dòng điện trong các môi trường
Từ trường
Cảm ứng điện từ
Phần 2: Quang hình học
Khúc xạ ánh sáng
Mắt - Các dụng cụ quang học',    
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

          App\SACH:: create([
            'MA_SACH'=>'KHTN_SinhHoc11',
            'TEN_SACH' =>'Sinh Học 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Sinh_hoc11.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 11 là trọn bộ sách giáo khoa lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
Chuyển hóa vật chất và năng lượng
Chuyển hóa vật chất và năng lượng ở thực vật
Chuyển hóa vật chất và năng lượng ở động vật
Cảm ứng
Sinh trưởng và phát triển
Sinh sản',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

          App\SACH:: create([
            'MA_SACH'=>'KHTN_HoaHoc11',
            'TEN_SACH' =>'Hóa Học 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'hoa_hoc11.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 11 là trọn bộ sách giáo khoa lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung Hóa Học lớp 11
Chương I : Sự điện li
Chương II : Ni tơ - Photpho
Chương III : Cacbon - Silic
Chương IV : Đại Cương Về Hóa Học Hữu Cơ',    
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 


           App\SACH:: create([
            'MA_SACH'=>'KHXH_NguVan11_Tap1',
            'TEN_SACH' =>'Ngữ Văn 11 Tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Ngu_van11_Tap1.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 11 là trọn bộ sách giáo khoa lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
Nghị luận văn học, Nghị luận xã hội
Thực hành thành ngữ, điển cố
Thao tác lập luận so sánh
Luyện tập viết bảng tin
Phỏng vấn và trả lời phỏng vấn',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

           App\SACH:: create([
            'MA_SACH'=>'KHXH_NguVan11_Tap2',
            'TEN_SACH' =>'Ngữ Văn 11 Tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Ngu-van-11_Tap2.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 11 là trọn bộ sách giáo khoa lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
Nghị luận văn học, Nghị luận xã hội
Phong cách ngôn ngữ chính luận
Một số thể loại văn học
Thao tác bình luận văn học',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

           App\SACH:: create([
            'MA_SACH'=>'KHXH_LichSu11',
            'TEN_SACH' =>'Lịch Sử 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'lich_su11.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 11 là trọn bộ sách giáo khoa lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách Giáo Khoa Lịch Sử Lớp 11 được bộ Giáo Dục và Đào Tạo biên soạn và phát hành. Sách gồm ba phần :Lịch sử thế giới cận đại ;Lịch sử thế giới hiện đại và Lịch sử Việt Nam (1858-1918) cung cấp đầy đủ kiến thức, lý thuyết và bài tập lịch sử …',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

           App\SACH:: create([
            'MA_SACH'=>'KHXH_DiaLy11',
            'TEN_SACH' =>'Địa Lý 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Dia_Ly_11.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 11 là trọn bộ sách giáo khoa lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
Khái quát nền kinh tế - xã hội thế giới
Địa lí khu vực và quốc gia
Hợp chủng quốc Hoa Kì
Liên minh châu Âu
Liên bang Nga
Nhật Bản
Cộng hòa nhân dân Trung Hoa
Khu vực Đông Nam Á
Australia',    
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 


            App\SACH:: create([
            'MA_SACH'=>'KHTN_CongNghe11',
            'TEN_SACH' =>'Công Nghệ 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'cong_nghe_11.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 11 là trọn bộ sách giáo khoa lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách Giáo Khoa Công Nghệ Lớp 11 biên soạn theo chương trình mới nhất của bộ giáo dục và đào tạo, giúp các em làm quen với ứng dụng của toán học, hóa học, vật lý,… trong việc nghiên cứu phương tiện phương pháp, kỹ năng cơ bản trong các lĩnh vực sản xuất công nghiệp.',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

             App\SACH:: create([
            'MA_SACH'=>'KHXH_GDCD11',
            'TEN_SACH' =>'Giáo Dục Công Dân 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'GDCD_11.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 11 là trọn bộ sách giáo khoa lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Phần 1: Công dân với kinh tế
Phần 2: Công dân với các vấn đề chính trị - xã hội',    
            'NAM_XUAT_BAN' => '2018',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

             App\SACH:: create([
            'MA_SACH'=>'KHTN_TinHoc11',
            'TEN_SACH' =>'Tin Học 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'tin_hoc11.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 11 là trọn bộ sách giáo khoa lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
Một số khái niệm về lập trình và ngôn ngữ lập trình
Chương trình đơn giản
Cấu trúc rẽ nhánh và lặp
Kiểu dữ liệu có cấu trúc
Tệp và thao tác với tệp
Chương trình con và lập trình có cấu trúc',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

             App\SACH:: create([
            'MA_SACH'=>'KHXH_GDQPAN11',
            'TEN_SACH' =>'Giáo Dục Quốc Phòng - An Ninh 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Giao_Duc_An_Ninh_Quoc_Phong11.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 11 là trọn bộ sách giáo khoa lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Bám sát nội dung chương trình, các tác giả đã mở rộng phạm vi nghiên cứu, học tập gắn với hoạt động thực tế và cập nhật kiến thức mới về quốc phòng, an ninh để giáo viên học sinh có thêm tư liệu giảng dạy, học tập. Đặc biệt, thông tin tư liệu bài đọc thêm ở cuối mỗi bài sẽ cung cấp thêm nhiều kiến thức về quốc phòng, an ninh cho các em học sinh mà sách giáo khoa chưa có dịp đề cập đến.
            Cấu trúc cuốn Giáo Dục Quốc Phòng - An Ninh 11 có các câu hỏi gợi ý cho học sinh nghiên cứu, các dạng bài tập giúp học sinh thuần thục kĩ năng và sự nhận biết công tác quốc phòng, an ninh. Đó là những chủ trương của Đảng, chính sách pháp luật của Nhà nước về xây dựng nền quốc phòng toàn dân, an ninh nhân dân vững mạnh để bảo vệ tổ quốc Việt Nam xã hội chủ nghĩa.',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 


             App\SACH:: create([
            'MA_SACH'=>'KHXH_TiengAnh11',
            'TEN_SACH' =>'Tiếng Anh 11',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'english11.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 11 là trọn bộ sách giáo khoa lớp 11, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
- Reading: Gồm một hoặc một số đoạn văn có độ dài khoảng hơn 300 từ, nhằm giúp học sinh làm quen với chủ đề đơn vị bài học
- Speaking: Gồm các hoạt động luyện nói theo chức năng ngôn ngữ
- Listening: Gồm các đoạn văn hay hội thoại liên quan đến chủ đề bài học
- Writing: Gồm các hoạt động phát triển kĩ năng viết cho học sinh',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

             App\SACH:: create([
            'MA_SACH'=>'KHTN_ToanDaiSovaGiaiTich12',
            'TEN_SACH' =>'Toán Đại Số và Giải Tích 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'ToanGiaiTich12.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 12 là trọn bộ sách giáo khoa lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
Ứng dụng đạo hàm để khảo sát vẽ đồ thị hàm số
Hàm số lũy thừa, hàm số mũ và hàm số logarit
Nguyên hàm, tích phân và ứng dụng
Số phức',    
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 


             App\SACH:: create([
            'MA_SACH'=>'KHTN_ToanHinhHoc12',
            'TEN_SACH' =>'Toán Hình Học 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'ToanHinhHoc12.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 12 là trọn bộ sách giáo khoa lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Chương I : Khối đa diện
1. Khái niệm về khối đa diện
2. Khối đa diện lồi và khối đa diện đều
3. Khái niệm về thể tích khối đa diện
Chương II : Mặt nón, mặt trụ, mặt cầu
1. Khái niệm về mặt tròn xoay
2. Mặt cầu
Chương III : Phương pháp tọa độ trong không gian
1. Hệ tọa độ trong không gian
2. Phương trình mặt phẳng
3. Phương trình đường thẳng trong không gian',    
            'NAM_XUAT_BAN' => '2018',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

              App\SACH:: create([
            'MA_SACH'=>'KHTN_VayLy12',
            'TEN_SACH' =>'Vật Lý 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'Vat_ly12.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 12 là trọn bộ sách giáo khoa lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Chương I : Dao động cơ
Chương II : Sóng cơ và sóng âm
Chương III : Dòng điện xoay chiều
Chương IV : Dao động và sóng điện từ
Chương V : Sóng ánh sáng
Chương VI : Lượng tử ánh sáng
Chương VII : Hạt nhân nguyên tử
Chương VIII : Từ vi mô đến vĩ mô',    
            'NAM_XUAT_BAN' => '2018',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 



              App\SACH:: create([
            'MA_SACH'=>'KHTN_HoaHoc12',
            'TEN_SACH' =>'Hóa Học 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'hoa_hoc12.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 12 là trọn bộ sách giáo khoa lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
- Este, Lipit
- Cacbonhidrat
- Amin, Amino axit, Protein
- Polime và vật liệu Polime
- Đại cương về kim loại
- Kim loại kiềm, kim loại kiềm thổ, nhôm
- Sắt và một số kim loại quan trọng',    
            'NAM_XUAT_BAN' => '2018',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

               App\SACH:: create([
            'MA_SACH'=>'KHXH_NguVan12_Tap1',
            'TEN_SACH' =>'Ngữ Văn 12 Tập 1',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Ngu-van-12-Tap-1-727193-2-400x564.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 12 là trọn bộ sách giáo khoa lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
Kiến thức văn học sử
Nghị luận văn học, Nghị luận xã hội
Thực hành một số phép tu từ ngữ âm
Thực hành một số phép tu từ cú pháp',    
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 


     App\SACH:: create([
            'MA_SACH'=>'KHXH_NguVan12_Tap2',
            'TEN_SACH' =>'Ngữ Văn 12 Tập 2',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Ngu-van-12-Tap-2.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 12 là trọn bộ sách giáo khoa lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
- Nghị luận văn học, Nghị luận xã hội
- Nhân vật giao tiếp
- Thực hành về hàm ý
- Phong cách ngôn ngữ
- Giá trị văn học và tiếp nhận văn học
- Tổng kết',    
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

      App\SACH:: create([
            'MA_SACH'=>'KHXH_LichSu12',
            'TEN_SACH' =>'Lịch Sử 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Lich-su-12.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 12 là trọn bộ sách giáo khoa lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Tập sách gồm các bài học 27 bài học được chia các phần chính như sau:
Phần 1: Lịch sử thế giới hiện đại từ năm 1945 đến năm 2000
Chương 1: Sự hình thành trật tự thế giới mới sau chiến tranh thế giới thứ II (1945-1949)
Chương 2: Liên xô và các nước Đông Âu (1945-1991). Liên Bang Nga (1991-2000)
Chương 3: Các nước Á, Phi, Mỹ La tinh (1945-2000)
Chương 4: Mĩ, Tây Âu, Nhật Bản (1945-2000)
Chương 5: Quan hệ quốc tế
Chương 6: Cách mạng khoa học - công nghệ và xu thế toàn cầu hóa
Phần 2: Lịch sử Việt Nam từ năm 1919 đến năm 2000
Chương 1: Việt Nam từ năm 1919 đến năm 2000
Chương 2: Việt Nam từ năm 1930 đến năm 1945
Chương 3: Việt Nam từ năm 1945 đến năm 1954
Chương 4: Việt Nam từ năm 1954 đến năm 1975
Chương 5: Việt Nam từ năm 1975 đến năm 2000',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 



      App\SACH:: create([
            'MA_SACH'=>'KHXH_DiaLy12',
            'TEN_SACH' =>'Địa Lý 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Dia_Ly_12.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 12 là trọn bộ sách giáo khoa lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách Giáo Khoa Địa Lí Lớp 12 được bộ Giáo Dục và Đào Tạo biên soạn và phát hành .Sách gồm năm phần :Địa lý tự nhiên ;Địa lý dân cư ;Địa lý kinh tế; Địa lý các vùng kinh tế ;Địa lý địa phương …',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

      App\SACH:: create([
            'MA_SACH'=>'KHTN_CongNghe12',
            'TEN_SACH' =>'Công Nghệ 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'cong_nghe_12.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 12 là trọn bộ sách giáo khoa lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
Phần 1: kĩ thuật điện tử
- Linh kiện điện tử
- Một số mạch điện điện tử cơ bản
- Một số mạch điện điện tử điều khiển đơn giản
- Một số thiết bị điện tử dân dụng
Phần 2: Kĩ thuật điện',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 


      App\SACH:: create([
            'MA_SACH'=>'KHXH_GDCD12',
            'TEN_SACH' =>'Giáo Dục Công Dân 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'GDCD_12.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 12 là trọn bộ sách giáo khoa lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách Giáo Khoa Giáo Dục Công Dân Lớp 12 được bộ Giáo Dục và Đào Tạo biên soạn và phát hành .Sách gồm 10 bài đầy đủ lý thuyết về công dân trong đời sống, pháp luật …',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 



      App\SACH:: create([
            'MA_SACH'=>'KHTN_TinHoc12',
            'TEN_SACH' =>'Tin Học 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '1',
            'MA_NXB' => '1',
            'MA_HA' => 'tin_hoc12.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 12 là trọn bộ sách giáo khoa lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Tin Học 12 được biên soạn theo chương trình chuẩn của Bộ Giáo dục và Đào tạo. Nội dung sách gồm các bài học được trình bày theo chương với từng phần kiến thức được sắp xếp khoa học, đầy đủ và các câu hỏi luyện tập giúp học sinh dễ dàng nắm bắt và ghi nhớ kiến thức.
Tin Học 12 giúp các em làm quen với hệ cơ sở dữ liệu; hệ quản trị cơ sở dữ liệu Microsoft Access; hệ cơ sở dữ liệu quan hệ; kiến thức và bảo mật - các hệ cơ sở dữ liệu…. Với tài liệu này các em học sinh có thể tự học ở nhà một cách tự nhiên và ôn tập lại kiến thức sau mỗi bài học.',    
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

      App\SACH:: create([
            'MA_SACH'=>'KHXH_GDQPAN12',
            'TEN_SACH' =>'Giáo Dục Quốc Phòng - An Ninh 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'Giao_Duc_An_Ninh_Quoc_Phong12.png',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 12 là trọn bộ sách giáo khoa lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung chương trình giáo dục quốc phòng và an ninh lớp 12 được quy định tại Mục III Chương trình giáo dục quốc phòng và an ninh trong trường trung học phổ thông ban hành kèm theo Thông tư 02/2017/TT-BGDĐT, theo đó:
Căn cứ nội dung, điều kiện thực tế của môn học và để đảm bảo thuận lợi cho việc phân phối chương trình; thời lượng chương trình cho cả cấp học là 105 tiết, trong đó lớp 10: 35 tiết, lớp 11: 35 tiết và lớp 12: 35 tiết; mỗi tiết 45 phút',    
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 


       App\SACH:: create([
            'MA_SACH'=>'KHXH_TiengAnh12',
            'TEN_SACH' =>'Tiếng Anh 12',
            'MA_TAC_GIA' => '1',
            'MA_THE_LOAI' => '2',
            'MA_NXB' => '1',
            'MA_HA' => 'english12.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Bộ sách giáo khoa lớp 12 là trọn bộ sách giáo khoa lớp 12, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn vở bài tập sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nội dung sách gồm các phần:
- Reading: Gồm một hoặc một số đoạn văn có độ dài khoảng hơn 300 từ, nhằm giúp học sinh làm quen với chủ đề đơn vị bài học
- Speaking: Gồm các hoạt động luyện nói theo chức năng ngôn ngữ
- Listening: Gồm các đoạn văn hay hội thoại liên quan đến chủ đề bài học
- Writing: Gồm các hoạt động phát triển kĩ năng viết cho học sinh',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 
    }
}
