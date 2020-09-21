<?php

use Illuminate\Database\Seeder;

class ThemSachThamKhaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\SACH:: create([
            'MA_SACH'=>'KHXH_TK_VanMauTK',
            'TEN_SACH' =>'270 Đề Và Bài Văn Mẫu Lớp 6',
            'MA_TAC_GIA' => '25',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '7',
            'MA_HA' => '270DeVanMau.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Là bộ sách tham khảo lớp 6 là trọn bộ sách tham khảo lớp 6, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn tham khảo sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Giáo dục trong giai đoạn hiện nay được xem là sự nghiệp quan trọng và đổi mới giáo dục cũng là vấn đề đang được đặt ra ở nước ta.
            Để học sinh có thể phát huy tính chủ động trong việc học, bên cạnh sự có mặt của giáo viên, các loại tài liệu tham khảo cũng đóng một vai trò hết sức quan trọng và cần thiết; đặc biệt là với một môn học đòi hỏi sự nhạy bén, tinh tế như môn Ngữ văn.
            Nhằm giúp các em học tốt hơn chương trình Ngữ văn lớp 6, giới thiệu  cuốn "270 Đề và bài văn mẫu 6".
            Cuốn sách bám sát chương trình sách giáo khoa mới của Bộ Giáo dục và Đào tạo để xây dựng các bài văn cho các em tham khảo, bên cạnh đó là các đề mở rộng để các em luyện tập khả năng viết văn của mình.
            Những bài văn mẫu và đề văn sẽ tạo điều kiện cho các em có thể tự học tốt môn Ngữ văn một cách chủ động, sáng tạo.',    
            'NAM_XUAT_BAN' => '2018',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_TK_SinhHocTK',
            'TEN_SACH' =>'17 Chuyên đề lý thuyết và Trắc nghiệm thi THPT QG Sinh Học 11',
            'MA_TAC_GIA' => '2',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '1',
            'MA_HA' => '17chuyendelythuyetvatracnghiemthithptquocgiasinhhoc11.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Là bộ sách tham khảo, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn tham khảo sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Kể từ kỳ thi THPT Quốc Gia về sau, chương trình Sinh học lớp 11 sẽ có chính thức trong đề thi THPT Quốc Gia. Giups các em có kiến thức để tự ôn tập và luyện kỹ năng giải tốt đề thi môn Sinh học, chúng tôi quyết định biên soạn bộ sách 17 Chuyên Đề Lý Thuyết Và Trắc Nghiệm Thi THPT Quốc Gia - Sinh Học 11.
            Cuốn sách này được biên soạn bám sát chương trình môn Sinh học THPT do Bộ Giáo và Đào tạo ban hành, đồng thời cũng được tăng cường những câu hỏi, bài tập rèn luyện hay và khó để nhằm đáp ứng đầy đủ kiến thức Sinh học 11.
            Chúng tôi tin tưởng thông qua cuốn sách này sẽ giúp cho các em có một nền tảng kiến thức vững chắc bộ môn Sinh học lớp 11 và chuẩn bị tốt cho kì thi THPT sắp tới.
            ',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_TK_VatLyTK',
            'TEN_SACH' =>'Công phá đề thi THPT Quốc Gia Chuyên Đề Vật Lý',
            'MA_TAC_GIA' => '3',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '3',
            'MA_HA' => 'congphadethiVatLy.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Là bộ sách tham khảo và luyện thi, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn tham khảo sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Trong các môn thi tự chọn ở kỳ thi Tốt nghiệp THPT năm 2014 và kỳ thi THPT Quốc gia năm 2015 thì môn Vật lí được học sinh chọn nhiều nhất, và các em có thể tổ hợp thành khối A (Toán - Lí - Hóa) hoặc khối D1 (Toán - Lí - Anh) để xét tuyển vào rất nhiều trường Đại học, Cao đẳng trong cả nước với nhiều ngành nghề khác nhau.
            Cũng không ngoài mục đích tạo nguồn tài liệu ôn tập cho các em trước kỳ thi lớn, tác giả biên soạn cuốn sách này với mong muốn các em có thể tự học môn Vật lí dễ dàng hơn, ôn tập hiệu quả hơn.
            ',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_TK_VatLyTK',
            'TEN_SACH' =>'Công phá đề thi THPT Quốc Gia Chuyên Đề Vật Lý',
            'MA_TAC_GIA' => '3',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '3',
            'MA_HA' => 'congphadethiVatLy.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Là bộ sách tham khảo và luyện thi, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn tham khảo sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Trong các môn thi tự chọn ở kỳ thi Tốt nghiệp THPT năm 2014 và kỳ thi THPT Quốc gia năm 2015 thì môn Vật lí được học sinh chọn nhiều nhất, và các em có thể tổ hợp thành khối A (Toán - Lí - Hóa) hoặc khối D1 (Toán - Lí - Anh) để xét tuyển vào rất nhiều trường Đại học, Cao đẳng trong cả nước với nhiều ngành nghề khác nhau.
            Cũng không ngoài mục đích tạo nguồn tài liệu ôn tập cho các em trước kỳ thi lớn, tác giả biên soạn cuốn sách này với mong muốn các em có thể tự học môn Vật lí dễ dàng hơn, ôn tập hiệu quả hơn.
            ',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_TK_ToanDS12TK',
            'TEN_SACH' =>'Kỹ thuật giải nhanh bài toán hay và khó Đại Số giải tích 12',
            'MA_TAC_GIA' => '4',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '2',
            'MA_HA' => 'giainhanhbaitoanhayvakho12.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Là bộ sách tham khảo và luyện thi, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn tham khảo sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Kĩ Thuật Giải Nhanh Bài Toán Hay & Khó Giải Tích 12
            Sách được biên soạn theo chương trình sách giáo khoa hiện hành gồm các chuyên đề toán nâng cao và phương pháp giải nhằm ôn tập và chuẩn bị cho kỳ thi THPT Quốc Gia.
            Nội dung bám sát chương trình THPT, nhất là chương trình lớp 12.
            Đây là cuốn sách hữu ích cho các em học sinh trong quá trình học tập và ôn luyện cho các kỳ thi sắp tới.
            ',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_TK_ToanHH12TK',
            'TEN_SACH' =>'Kỹ thuật giải nhanh bài toán hay và khó Hình Học 12',
            'MA_TAC_GIA' => '4',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '2',
            'MA_HA' => 'giainhanhbaitoanhayvakho12.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Là bộ sách tham khảo và luyện thi, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn tham khảo sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Kĩ Thuật Giải Nhanh Bài Toán Hay Và Khó Hình Học 12
            Cuốn sách được trình bày theo từng vấn đề, mỗi vấn đề là một dạng toán thường gặp liên quan đến kiến thức của từng bài tương ứng. Cuối mỗi chương có các bài tập tổng hợp để giúp  người học ôn tập các kiến thức đã học. Các bài tập được chọn lọc và tổng hợp từ sách giáo khoa, các đề thi tốt nghiệp, các đề thi Đại học và cao đẳng, các đề thi thử đại học...',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_TK_ToanHH11TK',
            'TEN_SACH' =>'Kỹ thuật giải nhanh bài toán hay và khó Hình Học 11',
            'MA_TAC_GIA' => '4',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '2',
            'MA_HA' => 'giainhanhbaitoanhinhhochayvakho11.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Là bộ sách tham khảo và luyện thi, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn tham khảo sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Kĩ Thuật Giải Nhanh Bài Toán Hay & Khó Hình Học 11
            Cuốn sách tổng hợp các trọng tâm, các dạng bài tập cùng với phương pháp giải nhanh, chi tiết để các em học sinh tham khảo, học tập.
            Nội dung bám sát chương trình sách giáo khoa hiện hành.
            Đây thực sự là cuốn sách hữu ích giúp các em học sinh ôn luyện trong quá trình học tập cũng như chuẩn bị cho những kỳ thi sắp tới.',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_TK_ToanDS11TK',
            'TEN_SACH' =>'Kỹ thuật giải nhanh bài toán hay và khó Giải Tích 11',
            'MA_TAC_GIA' => '4',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '2',
            'MA_HA' => 'giainhanhbaitoandaisohayvakho11.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Là bộ sách tham khảo và luyện thi, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn tham khảo sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Kĩ Thuật Giải Nhanh Bài Toán Hay & Khó Đại Số 11
            Cuốn sách tổng hợp các trọng tâm, các dạng bài tập cùng với phương pháp giải nhanh, chi tiết để các em học sinh tham khảo, học tập.
            Nội dung bám sát chương trình sách giáo khoa hiện hành.
            Đây thực sự là cuốn sách hữu ích giúp các em học sinh ôn luyện trong quá trình học tập cũng như chuẩn bị cho những kỳ thi sắp tới.',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_TK_ToanPPTK',
            'TEN_SACH' =>'Giải nhanh bằng máy tính bỏ túi môn Toán ',
            'MA_TAC_GIA' => '5',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '2',
            'MA_HA' => 'GiainhanhmaytinhbotuiToan.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Là bộ sách tham khảo và luyện thi, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn tham khảo sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Giải Nhanh Bằng Máy Tính Bỏ Túi Môn Toán
            Kì thi THPT Quốc gia hằng năm và các kì thi khác đã được Bộ Giáo dục và Đào tạo áp dụng hinh thức trắc nghiệm cho môn Toán.
            Qua nhiều năm học tập, tác giả đã được quí Thầy, Cô hướng dẫn và bạn bè chia sẻ. Hơn thế nữa, suốt thời gian giảng dạy tác giả đã tìm hiểu thêm kinh nghiệm áp dụng phương pháp giải toán bằng máy tính bỏ túi, càng lúc càng thấy hiệu quả khá cao, nhất là làm bài trắc nghiệm. Do đó, tác giả biên soạn cuốn sách Giải Nhanh Bằng Máy Tính Bỏ Túi Môn Toán.
            Giải toán bằng máy tính bỏ túi có thể xem là một phương pháp làm toán, giúp chúng ta sáng tạo hơn trong giảng dạy và học tập môn Toán.
            Đối với việc giải toán bằng máy tính bỏ túi chúng ta không quá quan tâm mình trình bày thế nào, quan trọng là làm sao để có đáp án nhanh và chính xác nhất. Tuy nhiên, đây không phải là tuyệt kĩ hay bí kíp để giải mọi bài toán, mà chỉ là công cụ hỗ trợ giải toán dựa trên những kiến thức mà chúng ta đã nắm vững.',    
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 


        App\SACH:: create([
            'MA_SACH'=>'KHTN_TK_HoaPPTK11',
            'TEN_SACH' =>'Giải nhanh bằng máy tính bỏ túi môn Hóa Học lớp 11',
            'MA_TAC_GIA' => '6',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '2',
            'MA_HA' => 'GiainhanhmaytinhbotuiHoa.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Là bộ sách tham khảo và luyện thi, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn tham khảo sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Giải Nhanh Bằng Máy Tính Bỏ Túi Môn Hóa Học 11 gồm 8 chương, được biên soạn bám sát nội dung học chương trình của Bộ Giáo dục, và mong rằng với cách trình bày kỹ thuật giải mỗi bài tập hóa học trên máy tính cầm tay một cách mạch lạc, logic, khoa học, ngắn gọn, dễ hiểu sẽ giúp cho các em nhanh chóng lĩnh hội được tri thức đã học, hình thành, rèn luyện và phát triển nhiều kỹ năng giải nhanh bài tập Hóa học. Từ đó, tiết kiệm thời gian và công sức làm bài, tạo bước đột phá trong học tập bộ môn Hóa học.',    
            'NAM_XUAT_BAN' => '2020',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_TK_KhoiTuNhien11',
            'TEN_SACH' =>'Hướng dẫn ôn thi tổ hợp Khoa Học Tự Nhiên lớp 11',
            'MA_TAC_GIA' => '9',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '2',
            'MA_HA' => 'hươngdanonthitohopkhoitunhien.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Là bộ sách tham khảo và luyện thi, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn tham khảo sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Hướng Dẫn Ôn Thi Tổ Hợp Khoa Học Tự Nhiên (Vật Lí - Hóa Học - Sinh Học)
            Bao quát toàn bộ nội dung, chương trình lớp 11
            Dùng ôn thi học kì, THPT Quốc gia, xét tuyển Đại học - Cao đẳng
            Bồi dưỡng học sinh khá, giỏi',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_TK_HoaHocNC11',
            'TEN_SACH' =>'Nâng cao và phát triển tư duy giải bài tập Hóa Học 11',
            'MA_TAC_GIA' => '11',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '2',
            'MA_HA' => 'tuduyphattrienhoahoc11.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Là bộ sách tham khảo và luyện thi, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn tham khảo sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Nâng Cao Và Phát Triển Tư Duy Hóa Học 11 (Tập 2)
            Do đặc thù của môn Hóa là thi trắc nghiệm và việc giải bài tập Hóa trong các đề thi THPT Quốc Gia đòi hỏi các thí sinh phải giải quyết với tốc độ nhanh nhất mới đạt được kết quả cao.Do đó nhằm giúp các em phát triển tư duy, nâng cao kỹ năng giải bài tập hóa ngay từ lớp 11 và không còn “sợ” môn Hóa.Trong cuốn sách này các em sẽ:
            Được hệ thống hóa lại phần giáo khoa của môn Hóa lớp 11 một cách đơn giản nhất, dễ ghi nhớ nhất thông qua “Sơ đồ tư duy” với nhiều hình ảnh sinh động.
            Được hướng dẫn cụ thể và chi tiết phần giải bài tập môn Hóa thông qua việc phân dạng bài tập rõ ràng, đầy đủ từ bài cơ bản đến các bài nâng cao trong đề thi đại học.',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_TK_CongPhaLTBTHoaHoc',
            'TEN_SACH' =>'Combo công phá lí thuyết + Bài tập Hóa lớp 10 11 12',
            'MA_TAC_GIA' => '12',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '2',
            'MA_HA' => 'congphadethi.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Là bộ sách tham khảo và luyện thi, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn tham khảo sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Công phá bài tập Hóa 10-11-12 bạn sẽ:
            Thử thách bản thân với hàng loạt bài tập phân bổ đều cả 3 lớp 10-11-12, được chọn lọc kĩ càng. Cả cuốn sách được chia thành 20 chương theo từng dạng bài cụ thể và 10 chương theo từng phương pháp giải bài tập điển hình. Các bài tập trong cuốn sách đều là những bài tập điển hình và quen thuộc nhất trong các đề thi thử THPT quốc gia và chính các bài kiểm tra trên lớp của các em học sinh. Ngoài các ví dụ giúp các bạn định hình dạng toán, cuốn sách còn bao hàm rất nhiều bài tập tự luyện có đáp án, giúp các bạn giải quen dạng và quen tay, nhằm tối ưu hóa thời gian khi làm các đề thi.',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHXH_TK_NguVanTK',
            'TEN_SACH' =>'Làm chủ kiến thức Ngữ Văn 9 luyện thi vào lớp 10',
            'MA_TAC_GIA' => '19',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '2',
            'MA_HA' => 'lamchukienthucnguvan9vao10.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Là bộ sách tham khảo và luyện thi, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn tham khảo sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Sách được biên soạn theo phương pháp đổi mới cách đánh giá và rèn luyện kĩ năng cho học sinh chứ không đơn thuần là văn mẫu. Đặc biệt, phần đọc hiểu văn bản được biên soạn theo yêu cầu đổi mới trong việc kiểm tra và ra đề thi. Ngoài những văn bản quen thuộc lấy từ sách giáo khoa, các em sẽ được tiếp cận thêm nhiều văn bản mới đủ mọi lĩnh vực của đời sống, vừa đảm bảo kiểm tra đầy đủ kiến thức bộ môn và tích hợp liên môn.
            Hơn nữa, sau kì thi tuyển sinh, sách còn là tài liệu tham khảo rất bổ ích cho chương trình Ngữ văn ở bậc Trung học phổ thông. Kiến thức trong sách được hệ thống hóa chi tiết và có tính liên thông theo từng cấp học.',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'KHTN_TK_VatLyTK2',
            'TEN_SACH' =>'Chiến thắng kỳ thi 9 vào 10 chuyên Vật Lý Tập 2',
            'MA_TAC_GIA' => '18',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '2',
            'MA_HA' => 'chienthangkythi9vao10vatly.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Là bộ sách tham khảo và luyện thi, bao gồm những cuốn cơ bản, cần thiết nhất trong quá trình học tại nhà trường. Đặc biệt, những cuốn tham khảo sẽ giúp ích cho các em học sinh rất nhiều trong quá trình học tập.',
            'NOI_DUNG_CHINH' => 'Hàng năm, Sở giáo dục và đào tạo các tỉnh - thành phố đều tổ chức kì thi tuyển sinh vào lớp 10 trường THPT chuyên ở nhiều môn nói chung và môn Vật lí nói riêng. Mặc dù trên thị trường đã có một số tài liệu tham khảo phục vụ cho việc ôn thi vào lớp 10 chuyên lý song để đáp ứng được sự hội tụ đầy đủ các dạng bài tập, bài tập thí nghiệm thực hành, phương pháp giải và hệ thống đề thi của nhiều trường chuyên nổi tiếng trên toàn quốc thì vẫn chưa có. 
            Bộ sách Chiến Thắng Kì Thi Lớp 9 Vào Lớp 10 Chuyên Vật Lí (Tập 2) được biên soạn nhằm mang đến cho bạn đọc một bộ sách Thi vào lớp 10 chuyên Lí toàn diện, đầy đủ, nhiều dạng bài tập, nhiều đề ôn luyện, đặc biệt để các em học sinh luôn là người chiến thắng trong thi vào 10 chuyên lý.',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 
    }
}
