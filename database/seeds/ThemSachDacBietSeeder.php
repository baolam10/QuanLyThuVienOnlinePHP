<?php

use Illuminate\Database\Seeder;

class ThemSachDacBietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\SACH:: create([
            'MA_SACH'=>'SDB_BanDoTuDuy',
            'TEN_SACH' =>'Bản Đồ Tư Duy Trong Giải Quyết Vấn Đề',
            'MA_TAC_GIA' => '24',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '8',
            'MA_HA' => 'sdbbandotuduy.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Khi xem xét về sách đặc chúng ta không chỉ xem xét ở mỗi góc độ đặc biệt vì nhiều tài liệu rất quý, rất có giá trị nhưng chúng không hiếm và ngược lại chỉ xem xét ở khía cạnh hiếm mà không đánh giá xem nội dung của nó có thực sự đặc biệt, có giá trị hay không thì vẫn chưa đủ. ở đây chúng ta thấy có mối quan hệ biện chứng giữa quý và hiếm. Một tài liệu được cho là quý hiếm mà được xuất bản với số lượng lớn trên thị trường thì không thể gọi là tài liệu quý hiếm, mặc dù tài liệu đó có giá trị nội dung cao, là kết tinh văn hoá, tri thức của nhân loại, là nền tảng cho sự phát triển của xã hội…, phục vụ đắc lực cho công tác nghiên cứu, học tập của một nhóm đối tượng nào đó. ',
            'NOI_DUNG_CHINH' => 'Bản Đồ Tư Duy Trong Giải Quyết Vấn Đề (Tái Bản 2018)
            Vấn đề là thứ mà chúng ta luôn gặp phải trong cuộc sống hàng ngày,nó xuất hiện khắp mọi nơi và rất khác nhau,tính lớn nhỏ,đơn giản hay phức tạp của vấn đề rất đa dạng và tùy thuộc vào bản chất của vấn đề và đối tượng gặp phải.Nhưng dù vậy,quá trình để giải quyết vấn đề là hoàn toàn giống nhau.Vậy bí quyết để giải quyết vấn đề là gì? Cuốn sách này sẽ giúp bạn tìm hiểu và khám phá các bước để cải thiện và xử lý vấn đề thông qua việc sử dụng bản đồ tư duy.',    
            'NAM_XUAT_BAN' => '2018',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'SDB_TuDuyPhanBien',
            'TEN_SACH' =>'Tư Duy Phản Biện',
            'MA_TAC_GIA' => '25',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '8',
            'MA_HA' => 'sdbtuduyphanbien.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Khi xem xét về sách đặc chúng ta không chỉ xem xét ở mỗi góc độ đặc biệt vì nhiều tài liệu rất quý, rất có giá trị nhưng chúng không hiếm và ngược lại chỉ xem xét ở khía cạnh hiếm mà không đánh giá xem nội dung của nó có thực sự đặc biệt, có giá trị hay không thì vẫn chưa đủ. ở đây chúng ta thấy có mối quan hệ biện chứng giữa quý và hiếm. Một tài liệu được cho là quý hiếm mà được xuất bản với số lượng lớn trên thị trường thì không thể gọi là tài liệu quý hiếm, mặc dù tài liệu đó có giá trị nội dung cao, là kết tinh văn hoá, tri thức của nhân loại, là nền tảng cho sự phát triển của xã hội…, phục vụ đắc lực cho công tác nghiên cứu, học tập của một nhóm đối tượng nào đó. ',
            'NOI_DUNG_CHINH' => 'Tư duy phản biện là chìa khóa để bạn thoát khỏi những lối mòn trong suy nghĩ, giúp bạn giải quyết các vấn đề khó khăn một cách sáng tạo và hiệu quả hơn. Cuốn sách "Tư duy phản biện" được viết bởi chuyên gia đào tạo Zoe McKey sẽ giúp bạn khai phá được sức mạnh trí óc của mình. Tác phẩm chứa đựng những bí quyết và chiến lược của các cá nhân thành công nhất, giúp người đọc có thể:
            - Khám phá chiều sâu tư duy
            - Đánh thức trí sáng tạo
            - Nắm bắt được cơ hội
            - Không ngại mơ ước
            - Vượt qua sự lo lắng
            - Quản lí thời gian hiệu quả
            Đọc xong tác phẩm, trực giác của bạn sẽ được mài sắc một cách rõ rệt, nhờ vậy khả năng đánh giá và đưa ra quyết định cũng được cải thiện, giúp bạn tự tin hơn trong mọi hành động.
            Nếu đủ động lực để thực hành các phương pháp trong “Tư duy phản biện”, bạn sẽ học được một lối tư duy có định hướng, tập trung, kỉ luật và tự chủ. Bạn sẽ biết cách phân tích các tình huống từ nhiều góc độ khác nhau, không vội vàng đưa ra những kết luận sai lầm và chủ quan, có cái nhìn đúng đắn hơn với các hiện tượng trong cuộc sống, và không còn phải hối tiếc với các quyết định và hành xử của mình.',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'SDB_TDTDTCVT',
            'TEN_SACH' =>'Thay Đổi Tư Duy Để Thành Công Vượt Trội',
            'MA_TAC_GIA' => '18',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '8',
            'MA_HA' => 'thaydoituduydethanhcongvuottroi.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Khi xem xét về sách đặc chúng ta không chỉ xem xét ở mỗi góc độ đặc biệt vì nhiều tài liệu rất quý, rất có giá trị nhưng chúng không hiếm và ngược lại chỉ xem xét ở khía cạnh hiếm mà không đánh giá xem nội dung của nó có thực sự đặc biệt, có giá trị hay không thì vẫn chưa đủ. ở đây chúng ta thấy có mối quan hệ biện chứng giữa quý và hiếm. Một tài liệu được cho là quý hiếm mà được xuất bản với số lượng lớn trên thị trường thì không thể gọi là tài liệu quý hiếm, mặc dù tài liệu đó có giá trị nội dung cao, là kết tinh văn hoá, tri thức của nhân loại, là nền tảng cho sự phát triển của xã hội…, phục vụ đắc lực cho công tác nghiên cứu, học tập của một nhóm đối tượng nào đó. ',
            'NOI_DUNG_CHINH' => 'Quy luật của tự nhiên là: Nếu con linh dương không cố chạy nhanh hơn, báo đốm sẽ ăn thịt nó. Nếu không “khác biệt” so với người khác, chắc chắn sẽ có ngày bạn bị đào thải. Nghĩa là thế giới vô cùng khắc nghiệt này sẽ không còn chỗ cho sự tầm thường mà buộc bạn phải xuất sắc để có thể “sống sót” và phát triển.
            Dan Strutzel đã mở ra một lối đi riêng dẫn đến sự giàu sang phú quý và hạnh phúc mà nói như Brian Tracy, tác giả lừng danh thế giới, “cuốn sách phi thường” này chứa đựng mọi kỹ thuật và chiến thuật thực tiễn giúp bạn đạt được điều đó.
            Mọi sự thành công đều bắt đầu bằng một quyết định. Và quyết định đó của bạn chính là đọc quyển sách này.  ',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'SDB_CTDLDTC',
            'TEN_SACH' =>'Thay Đổi 1% Cách Lãnh Đạo - 99% Đạt Được Thành Công',
            'MA_TAC_GIA' => '5',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '8',
            'MA_HA' => 'cachlanhdaodatduocthanhcong.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Khi xem xét về sách đặc chúng ta không chỉ xem xét ở mỗi góc độ đặc biệt vì nhiều tài liệu rất quý, rất có giá trị nhưng chúng không hiếm và ngược lại chỉ xem xét ở khía cạnh hiếm mà không đánh giá xem nội dung của nó có thực sự đặc biệt, có giá trị hay không thì vẫn chưa đủ. ở đây chúng ta thấy có mối quan hệ biện chứng giữa quý và hiếm. Một tài liệu được cho là quý hiếm mà được xuất bản với số lượng lớn trên thị trường thì không thể gọi là tài liệu quý hiếm, mặc dù tài liệu đó có giá trị nội dung cao, là kết tinh văn hoá, tri thức của nhân loại, là nền tảng cho sự phát triển của xã hội…, phục vụ đắc lực cho công tác nghiên cứu, học tập của một nhóm đối tượng nào đó. ',
            'NOI_DUNG_CHINH' => 'Thay Đổi 1% Cách Lãnh Đạo - 99% Đạt Được Thành Công
            Cho tới tận bây giờ, chúng ta vẫn có xu hướng cho rằng những nhà lãnh đạo ngay từ đầu đã được trời phú cho tài năng vượt trội. Tuy nhiên, suy nghĩ đó hoàn toàn sai lầm, trên thực tế họ cũng chỉ dám nhận một “vai trò” cụ thể trong cả quá trình làm việc của cả một nhóm hay một tập thể. Cho dù người lãnh đạo là một nhân vật kiệt xuất đến mấy thì điều đó cũng không đồng nghĩa với việc giá trị của họ là lớn hơn tập thể. Nếu như phân tích kỹ thì chúng ta sẽ thấy kỹ năng lãnh đạo không hề khó để nắm bắt được. Một khi đã nắm được thì việc phát huy tài năng lãnh đạo sẽ không còn khó như bạn từng nghĩ.',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'SDB_TDSTLKH',
            'TEN_SACH' =>'Tư Duy Sáng Tạo Trong Lập Kế Hoạch Và Giải Quyết Vấn Đề',
            'MA_TAC_GIA' => '5',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '8',
            'MA_HA' => 'tuduysangtaotrongvieclapkehoach.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Khi xem xét về sách đặc chúng ta không chỉ xem xét ở mỗi góc độ đặc biệt vì nhiều tài liệu rất quý, rất có giá trị nhưng chúng không hiếm và ngược lại chỉ xem xét ở khía cạnh hiếm mà không đánh giá xem nội dung của nó có thực sự đặc biệt, có giá trị hay không thì vẫn chưa đủ. ở đây chúng ta thấy có mối quan hệ biện chứng giữa quý và hiếm. Một tài liệu được cho là quý hiếm mà được xuất bản với số lượng lớn trên thị trường thì không thể gọi là tài liệu quý hiếm, mặc dù tài liệu đó có giá trị nội dung cao, là kết tinh văn hoá, tri thức của nhân loại, là nền tảng cho sự phát triển của xã hội…, phục vụ đắc lực cho công tác nghiên cứu, học tập của một nhóm đối tượng nào đó. ',
            'NOI_DUNG_CHINH' => 'Tư Duy Sáng Tạo Trong Lập Kế Hoạch Và Giải Quyết Vấn Đề
            Ai cũng nói “hãy sáng tạo”, nhưng thế nào là sáng tạo, làm sao để sáng tạo?
            Ai cũng nói “lập kế hoạch”, nhưng một kế hoạch phải bắt đầu từ đâu, cần những gì?
            Bạn thường ghi chép như thế nào? Những dòng chữ ngay ngắn, thẳng tắp hay những dòng chữ nguệch ngoạc viết vội cho kịp thời gian và khi đọc lại thì chẳng hiểu gì cả?
            Giờ đây bạn không cần phải sử dụng những phương pháp ghi chép nhàm chán và cổ điển đó nữa.
            Cuốn sách này sẽ giúp bạn có những cách ghi chép thú vị hơn, đồng thời giải thích cho bạn ý nghĩa của sáng tạo và hướng dẫn bạn cách lên kế hoạch đơn giản nhất, hiệu quả nhất và dễ hiểu nhất để dễ dàng giải quyết mọi khúc mắc mà bạn đang gặp phải.',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'SDB_LKHTCCVHQ',
            'TEN_SACH' =>'Lập Kế Hoạch Tổ Chức Công Việc Hiệu Quả',
            'MA_TAC_GIA' => '9',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '8',
            'MA_HA' => 'lapkehoachtochuccongviechieuqua.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Khi xem xét về sách đặc chúng ta không chỉ xem xét ở mỗi góc độ đặc biệt vì nhiều tài liệu rất quý, rất có giá trị nhưng chúng không hiếm và ngược lại chỉ xem xét ở khía cạnh hiếm mà không đánh giá xem nội dung của nó có thực sự đặc biệt, có giá trị hay không thì vẫn chưa đủ. ở đây chúng ta thấy có mối quan hệ biện chứng giữa quý và hiếm. Một tài liệu được cho là quý hiếm mà được xuất bản với số lượng lớn trên thị trường thì không thể gọi là tài liệu quý hiếm, mặc dù tài liệu đó có giá trị nội dung cao, là kết tinh văn hoá, tri thức của nhân loại, là nền tảng cho sự phát triển của xã hội…, phục vụ đắc lực cho công tác nghiên cứu, học tập của một nhóm đối tượng nào đó. ',
            'NOI_DUNG_CHINH' => '“Lập kế hoạch tổ chức công việc hiệu quả” sẽ giúp bạn học hỏi tất cả những bí quyết để gắn kết các nhân viên giỏi và truyền cho họ cảm hứng làm việc tốt nhất. Trong cuốn sách này, tác giả sẽ sơ đồ hóa rõ ràng các mối quan hệ giữa văn hóa, sự thành công và độ gắn kết, đồng thời giúp bạn xây dựng những bản kế hoạch hành động cụ thể nhằm định hình văn hóa tại nơi làm việc - với mục đích thúc đẩy thành công, và tiếp theo đó, cải thiện sự gắn kết lẫn hiệu quả công việc.
            Cuốn sách sẽ cung cấp cho bạn một mô hình “sổ tay chiến thuật” dễ dàng được áp dụng, cùng ba chương sách đầy những ví dụ thực tiễn về các “chiến thuật” nhằm hướng đến thay đổi đáng kể tình hình hiện tại. Xuyên suốt nội dung cuốn sách đan xen các vấn đề thường gặp trong môi trường lao động nhiều thế hệ để đảm bảo bạn không bỏ sót bất kỳ một nhân viên nào.
            Lập kế hoạch tổ chức công việc hiệu quả bao gồm nhiều chương chứa đầy những ví dụ cụ thể về cách thức cải thiện văn hóa doanh nghiệp và mức độ gắn kết nhân viên – thông qua ứng dụng khoa học kỹ thuật, quá trình hoạt động và mẫu thiết kế - với mục tiêu thúc đẩy sự thành công cho cả người lao động lẫn doanh nghiệp.
            ',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'SDB_KNQLTGTCCVHQ',
            'TEN_SACH' =>'Kỹ Năng Quản Lý Thời Gian Và Tổ Chức Công Việc Hiệu Quả',
            'MA_TAC_GIA' => '15',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '8',
            'MA_HA' => 'kynangquanlythoigianvacongviec.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Khi xem xét về sách đặc chúng ta không chỉ xem xét ở mỗi góc độ đặc biệt vì nhiều tài liệu rất quý, rất có giá trị nhưng chúng không hiếm và ngược lại chỉ xem xét ở khía cạnh hiếm mà không đánh giá xem nội dung của nó có thực sự đặc biệt, có giá trị hay không thì vẫn chưa đủ. ở đây chúng ta thấy có mối quan hệ biện chứng giữa quý và hiếm. Một tài liệu được cho là quý hiếm mà được xuất bản với số lượng lớn trên thị trường thì không thể gọi là tài liệu quý hiếm, mặc dù tài liệu đó có giá trị nội dung cao, là kết tinh văn hoá, tri thức của nhân loại, là nền tảng cho sự phát triển của xã hội…, phục vụ đắc lực cho công tác nghiên cứu, học tập của một nhóm đối tượng nào đó. ',
            'NOI_DUNG_CHINH' => 'Sự trì hoãn là bước tường lớn nhất ngăn cản một ý tưởng tiến tới việc phát triển và hoàn thành. Vậy làm thế nào để vượt qua sự trì hoãn một cách hiệu quả nhất để tiến tới thành công?
            Hoàn toàn xuất phát từ thực tiễn “Kỹ năng quản lý thời gian và tổ chức công việc hiệu quả” chia sẻ cho bạn:
            Lý do tạo nên sự trì hoãn và cách để giải quyết
            Tầm quan trọng của việc tạo nên Dự án lớn
            Hướng dẫn thực tế, sâu sắc để thực hiện các dự án
            Lời khuyên, câu chuyện, và các nghiên cứu về kỹ năng quản lý thời gian và tổ chức công việc
            Cuốn sách này tràn ngập những hiểu biết sâu sắc về quá trình sáng tạo, truyền cảm hứng một cách hài hước, khôn ngoan cho bất cứ ai đang đấu tranh để đạt được thành tựu cá nhân.
            ',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 

        App\SACH:: create([
            'MA_SACH'=>'SDB_LCTGTC',
            'TEN_SACH' =>'Làm Chủ Giao Tiếp Để Thành Công',
            'MA_TAC_GIA' => '16',
            'MA_THE_LOAI' => '4',
            'MA_NXB' => '8',
            'MA_HA' => 'kynangquanlythoigianvacongviec.jpg',     
            'NOI_DUNG_GIOI_THIEU' =>'Khi xem xét về sách đặc chúng ta không chỉ xem xét ở mỗi góc độ đặc biệt vì nhiều tài liệu rất quý, rất có giá trị nhưng chúng không hiếm và ngược lại chỉ xem xét ở khía cạnh hiếm mà không đánh giá xem nội dung của nó có thực sự đặc biệt, có giá trị hay không thì vẫn chưa đủ. ở đây chúng ta thấy có mối quan hệ biện chứng giữa quý và hiếm. Một tài liệu được cho là quý hiếm mà được xuất bản với số lượng lớn trên thị trường thì không thể gọi là tài liệu quý hiếm, mặc dù tài liệu đó có giá trị nội dung cao, là kết tinh văn hoá, tri thức của nhân loại, là nền tảng cho sự phát triển của xã hội…, phục vụ đắc lực cho công tác nghiên cứu, học tập của một nhóm đối tượng nào đó. ',
            'NOI_DUNG_CHINH' => 'Việc đặt ra những câu hỏi như “Phải dùng giọng điệu thế nào cho hay?”, “Không nên nói điều gì để tránh gây nhàm chán”… chỉ mất thêm của bạn khoảng vài phút trước cuộc hội thoại nhưng lại tạo ra hiệu quả hoàn toàn khác biệt. Nếu muốn tiến bộ, hãy học hỏi và luyện tập từ những điều nhỏ nhất.
            Cuốn sách “Làm chủ giao tiếp để thành công” của Satoshi Noguchi sẽ giúp bạn tìm ra các vấn đề để cải thiện kỹ năng giao tiếp và cung cấp các kỹ thuật nhằm giải quyết các vấn đề đó. Bên cạnh các lời khuyên, tác giả cũng liên tục đưa ra những ví dụ cụ thể, thực tế trong cuộc sống để độc giả dễ dàng tham khảo và áp dụng. Hãy nhớ rằng, mọi rào cản khó khăn trong khi trò chuyện đều có thể được phá vỡ. Ngưng trì hoãn, bắt đầu thay đổi và thực hành ngay hôm nay, bạn sẽ trở nên tự tin hơn rất nhiều trong lần tiếp theo phải “xử lý” các tình huống tương tác ngoài xã hội.
            ',    
            'NAM_XUAT_BAN' => '2019',
            'SO_LUONG' => '10', 'SO_LUONG_MUON' => '0',
            'TINH_TRANG' => 'Bình Thường'
        ]); 
    }
}
