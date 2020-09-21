<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DocGiaRequest;
use App\SACH;
use App\TAC_GIA;
use App\TACGIA;
use App\Cart;
use App\News;
use App\Slides;
use App\DOCGIA;
use App\PHIEUMUON;
use App\PHIEUTRA;
use App\Chitietphieumuon;
use App\TheThuVien;
use DB;
use Session;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Aler; 


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $redirectTo = 'trang-chu';
    public function index()
    {
        $listSach = SACH::where('TINH_TRANG', 'like', 'Sách Mới')->paginate(4);
        //dd($listSach);
        $list = SACH::orderBy('SO_LUONG_MUON','DESC')->paginate(4);
        //dd($list);
        $slides = Slides::orderBy('created_at', 'DESC')->paginate(3);
        
        $customer = Auth::guard('customer')->user();
        if($customer == null) {
            return view('Trang-chu.trang-chu', compact('listSach','list', 'slides'));
        }
        $Account = DOCGIA::where('id','like',$customer->id)->get();
        return view('Trang-chu.trang-chu', compact('listSach','list','Account', 'slides'));
    }
    public function getSpecialBook()
    {
        $list = SACH::where('MA_THE_LOAI', '=', '3')->paginate(4);
        $customer = Auth::guard('customer')->user();
        if($customer == null) {
            return view('tranggioithieu.gioi-thieu', compact('list'));
        }
        $Account = DOCGIA::where('id',$customer->id)->get();
        return view('tranggioithieu.gioi-thieu', compact('list','Account'));
    }
    public function getDetailBook($x)
    {
        $list = SACH::find($x);
        $tac_gia = TACGIA::where('MA_TAC_GIA','like',$list->MA_TAC_GIA)->get();
        $sp_tuongtu = SACH::where('TEN_SACH','like','%'.$list->TEN_SACH.'%')->paginate(4);
        // $x = count($sp_tuongtu);
        // dd($x);
        $customer = Auth::guard('customer')->user();
        if($customer == null) {
            return view('DetailPro.Detail_pro', compact('list','sp_tuongtu','tac_gia'));
        }
        $Account = DOCGIA::where('id',$customer->id)->get();
        return view('DetailPro.Detail_pro', compact('list','sp_tuongtu','Account','tac_gia'));
    }
    public function getallBook()
    {
        $tat_ca_sach = SACH::all();
        $book = SACH::join('TAC_GIA','SACH.MA_TAC_GIA','=','TAC_GIA.MA_TAC_GIA')->get();
        $all_book = SACH::paginate(12);
        $slide_book = SACH::paginate(5);
        $customer = Auth::guard('customer')->user();
        if($customer == null) {
            return view('Tracuu.AllBook', compact('all_book', 'book' , 'tat_ca_sach', 'slide_book'));
        }
        $Account = DOCGIA::where('id',$customer->id)->get();
        return view('Tracuu.AllBook', compact('all_book', 'book' , 'tat_ca_sach', 'slide_book','Account'));
    }

    public function getallBookConsult(){
        $tat_ca_sach = SACH::where('MA_THE_LOAI','=','4')->paginate(12);
        
        $customer = Auth::guard('customer')->user();
        if($customer == null) {
            return view('Tracuu.Sach-tham-khao', compact('tat_ca_sach'));
        }
        $Account = DOCGIA::where('id',$customer->id)->get();
        return view('Tracuu.Sach-tham-khao', compact('tat_ca_sach','Account'));
    }

    public function getallBookKH(){
        $tat_ca_sachTN = SACH::where('MA_THE_LOAI', 'like','1')->paginate(8);
        $tat_ca_sachXH = SACH::Where('MA_THE_LOAI', 'like','2')->paginate(8);
        $tat_ca_sach = SACH::all();
        
       // dd($tat_ca_sachXH, $tat_ca_sachTN);
                                           
        $book = SACH::join('TAC_GIA','SACH.MA_TAC_GIA','=','TAC_GIA.MA_TAC_GIA')->get();
        $all_book = SACH::where('TINH_TRANG', 'like','%')->paginate(12);
        $slide_book = SACH::where('TINH_TRANG', 'like','%')->paginate(5);
        $customer = Auth::guard('customer')->user();
        if($customer == null) {
            return view('Tracuu.KHTN_KHXH', compact('all_book', 'book' ,'tat_ca_sachTN' ,'tat_ca_sachXH', 'slide_book'));
        }
        $Account = DOCGIA::where('id',$customer->id)->get();
        
        return view('Tracuu.KHTN_KHXH', compact('all_book', 'book' ,'tat_ca_sachTN' ,'tat_ca_sachXH', 'slide_book','Account'));
    }

    public function getallBookKHTN(){
        $tat_ca_sachTN = SACH::where('MA_THE_LOAI', 'like',1)->paginate(10);
        $tat_ca_sach = SACH::all();

       // dd($tat_ca_sachXH, $tat_ca_sachTN);
                                           
        $book = SACH::join('TAC_GIA','SACH.MA_TAC_GIA','=','TAC_GIA.MA_TAC_GIA')->get();
        $all_book = SACH::where('TINH_TRANG', 'like','%')->paginate(10);
        $slide_book = SACH::where('TINH_TRANG', 'like','%')->paginate(5);
        $customer = Auth::guard('customer')->user();
        if($customer == null) {
            return view('Tracuu.KHTN', compact('all_book', 'book' ,'tat_ca_sachTN', 'slide_book'));
        }
        $Account = DOCGIA::where('id',$customer->id)->get();
        
        return view('Tracuu.KHTN', compact('all_book', 'book' ,'tat_ca_sachTN', 'slide_book','Account'));
    }
    public function getallBookKHXH(){
        $tat_ca_sachXH = SACH::Where('MA_THE_LOAI', 'like',2)->paginate(12);
        $tat_ca_sach = SACH::all();

       // dd($tat_ca_sachXH, $tat_ca_sachTN);
                                           
        $book = SACH::join('TAC_GIA','SACH.MA_TAC_GIA','=','TAC_GIA.MA_TAC_GIA')->get();
        $all_book = SACH::where('TINH_TRANG', 'like','%')->paginate(12);
        $slide_book = SACH::where('TINH_TRANG', 'like','%')->paginate(5);
        $customer = Auth::guard('customer')->user();
        if($customer == null) {
            return view('Tracuu.KHXH', compact('all_book', 'book' ,'tat_ca_sachXH', 'slide_book'));
        }
        $Account = DOCGIA::where('id',$customer->id)->get();
        return view('Tracuu.KHXH', compact('all_book', 'book' ,'tat_ca_sachXH', 'slide_book','Account'));
    }

    public function getSearch(Request $req){
        $listSach = SACH::where('TEN_SACH', 'like','%'.$req->Nhan_de.'%')->get();
        $customer = Auth::guard('customer')->user();
        if($customer == null) {
            return view('Tracuu.Search', compact('listSach'));
        } 
        $Account = DOCGIA::where('id',$customer->id)->get(); 
                          
        return view('Tracuu.Search', compact('listSach','Account'));
    }

    public function ChiTiet(Request $req){
        $sanpham = SACH::find($req->id);
        // $sp_tuongtu = SACH::where('MA_THE_LOAI','like',$sanpham->MA_THE_LOAI)->paginate(4); 
        $customer = Auth::guard('customer')->user();
        $Account = DOCGIA::where('id',$customer->id)->get();
        if($customer == null) {
            return view('SanPhamChiTiet.chi-tiet');
        } 
        return view('SanPhamChiTiet.chi-tiet', compact('sanpham','Account'));
    }

    public function AddCart(Request $req, $id)
    {
        $product = DB::table('SACH')->where('id',$id)->first();
        if($product != null){
            $oldCart = Session::has('cart') ? Session::get('cart') : null; 
            $newCart = new Cart($oldCart); 
            $newCart->AddCart($product, $product->id);
 
            $req->session()->put('cart', $newCart);
            // dd($req->session()->get('cart', $newCart));
        }
        return view('Cart.Cart');
    }

    public function DeleteItemCart(Request $req, $id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null; 
        $newCart = new Cart($oldCart); 
        $newCart->DeleteItemCart($id);
        if(Count($newCart->sanpham) > 0){
            //put để lưu
            $req->session()->put('cart', $newCart);
            // dd($req->session()->get('cart', $newCart));
        }
        else {
            // forget là phương thức để xóa dữ liệu ra khỏi phiên
            $req->session()->forget('cart');
        }
        
        return view('Cart.Cart');
    }

     public function DeleteItemDetailCart(Request $req, $id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null; 
        $newCart = new Cart($oldCart); 
        $newCart->DeleteItemCart($id);
        if(Count($newCart->sanpham) > 0){
            $req->session()->put('cart', $newCart);
            // dd($req->session()->get('cart', $newCart));
            return view('Cart.DetailCart');
        }
        else {
            $req->session()->forget('cart');        
        }
        
        return redirect()->back();
       
    }

    public function UpdateAllItemDetailCart(Request $req){
        // dd($req->data);
        foreach ($req->data as $item) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null; 
        $newCart = new Cart($oldCart); 
        $newCart->UpdateItemCart($item["key"],$item["value"]);
        $req->session()->put('cart', $newCart);
        }
    }


    public function DetailCart(){

        $customer = Auth::guard('customer')->user();
        if($customer == null) {
         return view('Dich-vu.Huong-dan');
        }
        $Account = DOCGIA::where('id',$customer->id)->get();
        return view('Cart.DetailCart',compact('Account'));
    }

    public function CreateAcount(){
        return view('Dang-ky.Dang_Ky');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dangNhap()
    {
        return view('Dang-ky.Dang_Nhap');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function xulyDangNhap(Request $request)
    {
        $this->validate($request,[
            'ten_dang_nhap'=>'required',
            'mat_khau'=>'required|min:3|max:12'],
            [
                'ten_dang_nhap.required' => 'Bạn chưa nhập tên đăng nhập',
                'mat_khau.required' => 'Bạn chưa nhập mật khẩu',
                'mat_khau.min' => 'Mật khẩu không được nhỏ hơn 3 ký tự!',
                'mat_khau.max' => 'Mật khẩu không được lớn hơn 12 ký tự!'
            ]);
        $ten_dang_nhap = $request->ten_dang_nhap;
        $mat_khau = $request->mat_khau;
        Session('name',$ten_dang_nhap);
        
        if(Auth::guard('customer')->attempt(['MA_SO_THE'=> $ten_dang_nhap,'password'=>$mat_khau]))
        {
            return redirect('/trang-chu')->with(['success_acc'=>'Tài Khoản Đăng Nhập Thành Công Với Tên','name'=>$ten_dang_nhap]);
        }
        else
        {
            echo '
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script type="text/javascript">
                   
                      swal("Tên Tài Khoản Hoặc Mật Khẩu Không Hợp Lệ!","Chọn OK để tiếp tục!","error");
                    
                </script>
        ';
            return redirect()->route('dang-nhap-nguoi-dung')->with('thongbao','Tên Tài Khoản Hoặc Mật Khẩu Không Hợp Lệ');
            
        }

    }

     public function GetInfoAccount()
    {
        $customer = Auth::guard('customer')->user();
        $Account = DOCGIA::where('id',$customer->id)->get();
        // dd($Account);
        return view('Dang-ky.Profile', compact('Account'));
    }

    public function UpadateInfo(){
        $customer = Auth::guard('customer')->user();
        $Account = DOCGIA::where('id',$customer->id)->get();
        dd($Account);
    }

    public function dangXuat()
    {
        Auth::guard('customer')->logout();
        session()->flush();
        return redirect()->route('dang-nhap-nguoi-dung');
    }

    public function storeDG(Request $request)
    {       
        $this->validate($request,[
            'TEN_DOC_GIA'       =>  'bail|required|max:254|min:5|regex:/[^#&<>,\[\]*`+\-=@"~!:;$^%{}?]$/',
            'DIA_CHI'           =>  'bail|required|min:5|regex:/[^#&<>,\[\]*`+\-=@"~!:;$^%{}?]$/',
            'MA_SO_THE'         =>  'bail|required|max:12|min:0|unique:DOC_GIA',
            'GIOI_TINH'         =>  'bail|required|max:254|min:2',
            'MAT_KHAU'          =>  'bail|required|max:12|min:5',
            // 'HAN_SU_DUNG'       =>  'bail|required|max:254|min:7|after_or_equal:date|after:now',
            'EMAIL'             =>  'bail|required|max:254|min:5|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
            [
            'TEN_DOC_GIA.required'      => 'Tên đọc giả không được để trống!',
            'TEN_DOC_GIA.regex'         => 'Tên đọc giả không chứa các ký tự đặc biệt!',
            'TEN_DOC_GIA.min'           => 'Tên đọc giả phải từ 5 ký tự trở lên!',
            'TEN_DOC_GIA.max'           => 'Tên đọc giả dưới 254 ký tự!',
            'DIA_CHI.required'          => 'Địa chỉ không được để trống!',
            'DIA_CHI.regex'             => 'Địa chỉ không chứa các ký tự đặc biệt!',
            'DIA_CHI.min'               => 'Địa chỉ phải từ 5 ký tự trở lên!',
            'MA_SO_THE.required'        => 'Mã số thẻ không được để trống!',
            'MA_SO_THE.unique'          => 'Mã số thẻ đã tồn tại!',
            'MA_SO_THE.max'             => 'Mã số thẻ nhỏ hơn 12 ký tự!',
            'MA_SO_THE.min'             => 'Mã số thẻ phải lớn hơn 0!',
            'GIOI_TINH.required'        => 'Giới tính không được để trống!',
            'GIOI_TINH.min'             => 'Giới tính phải từ 2 ký tự trở lên!',
            'GIOI_TINH.max'             => 'Giới tính phải dưới 254 ký tự trở xuống!',
            'MAT_KHAU.required'         => 'Mật khẩu không được để trống!',
            'MAT_KHAU.min'              => 'Mật khẩu phải từ 5 ký tự trở lên!',
            'MAT_KHAU.max'              => 'Mật khẩu phải dưới 12 ký tự trở xuống!',
            'EMAIL.required'            => 'Email không được để trống!',
            'EMAIL.regex'               => 'Email không đúng định dạng!',
            'EMAIL.min'                 => 'Email phải từ 5 ký tự trở lên!',
            'EMAIL.max'                 => 'Email phải từ 254 ký tự trở xuống!'
            ]);

       $DanhSach = new DOCGIA;
        $DanhSach->TEN_DOC_GIA = $request->TEN_DOC_GIA;
        $DanhSach->DIA_CHI = $request->DIA_CHI;
        $DanhSach->MA_SO_THE = $request->MA_SO_THE; 
        $DanhSach->GIOI_TINH = $request->input('GIOI_TINH');
        $DanhSach->MAT_KHAU = Hash::make($request->MAT_KHAU);
        $DanhSach->EMAIL = $request->EMAIL;
        $DanhSach->save();

        $TheThuVien = new TheThuVien;
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $end = $dt->addYears(3);

        $TheThuVien->MA_SO_THE = $request->MA_SO_THE; 
        $TheThuVien->NGAY_BAT_DAU = $now->toDateString();
        $TheThuVien->NGAY_HET_HAN = $end->toDateString();
        $TheThuVien->GHI_CHU = '';
        $TheThuVien->save();

        $msg = "";
        return redirect('/dang-nhap-nguoi-dung')->with('success','Đăng Ký Tài khoản thành công!');

    }

    public function XacNhanPhieuMuon(Request $request) {
        $customer = Auth::guard('customer')->user();
        //dd(Auth::guard('customer')->user()->MA_SO_THE);
        $cart = Session::get('cart');
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $end = $dt->addDays(15);

        $list = PHIEUMUON::orderBy('HAN_TRA','DESC')->get();
        
         $DANHSACH = new PHIEUMUON;
            $num = PHIEUMUON::all();
            $MAPM = 'PHIEUMUON_'.count($num);
            $DANHSACH->MA_PHIEU_MUON = 'PHIEUMUON_'.count($num); 
            $DANHSACH->MA_SO_THE = $customer->MA_SO_THE; 
            $DANHSACH->NGAY_MUON = $now->toDateString();
            $DANHSACH->HAN_TRA = $end->toDateString();
            $DANHSACH->TINH_TRANG = 'Chưa Trả';
            $DANHSACH->SO_LUONG = $cart->TongSL;

        foreach ($cart->sanpham as $key => $value) {
            $Detail = new Chitietphieumuon;
            $Detail->MA_PHIEU_MUON = $DANHSACH->MA_PHIEU_MUON;
            $Detail->MA_SACH = $value['ttsanpham']->MA_SACH;
            $Detail->SO_LUONG = $value['quanty'];
            $Detail->TINH_TRANG = $value['ttsanpham']->TINH_TRANG;

           
            $Sach = SACH::find($value['ttsanpham']->id);
            $x = $Sach->SO_LUONG_MUON;
            $y = $value['quanty'];
            $collection = collect([$x, $y])->sum();
            //dd('sLmuon = ',$x,'Slmua = ', $y, 'tong ', $collection);

            $SO_LUONG_CON_LAI = $Sach->SO_LUONG - $Sach->SO_LUONG_MUON;
            //dd($SO_LUONG_CON_LAI);
            if($SO_LUONG_CON_LAI > 0){
                $cart = (int)$value['quanty'];
                //dd($cart, $SO_LUONG_CON_LAI);
                if($SO_LUONG_CON_LAI >= $cart){
                    //dd('OK');
                    $Sach->SO_LUONG_MUON = collect([$cart,$Sach->SO_LUONG_MUON])->sum();
                }
                else{
                    return redirect('xem-chi-tiet-phieu-muon')->with(['flash_mess'=>'Số lượng sản phẩm không đủ cung cấp!']);
                }
                
            }
            else{
                //dd('LOI');
                return redirect('xem-chi-tiet-phieu-muon')->with(['flash_mess'=>'Số lượng sản phẩm không đủ cung cấp!']);
            }  
            $DANHSACH->save();
            $Sach->save();
            $Detail->save();
        }
        Session::forget('cart');
        return redirect('/trang-chu')->with(['success'=>'Xác Nhận Phiếu Mượn Thành Công! Mã Phiếu Mượn Là','name'=>'PHIEUMUON_'.count($num)]); 
    }


    public function LichSuMuonTra($id){
        $PhieuMuon = PHIEUMUON::where('MA_SO_THE','=',$id)
                                ->orderBy('NGAY_MUON','DESC')->get();
        $customer = Auth::guard('customer')->user();
        $Account = DOCGIA::where('id',$customer->id)->get();
        //dd($PhieuMuon);
        return view('Lich-su-nguoi-dung.lich-su', compact('PhieuMuon','Account'))->with(['flash_mess'=>'OK']);
        
    }

    public function ChiTietLichSuMuonTra($id){
        $PhieuMuon = Chitietphieumuon::where('created_at','=',$id)->get();

        $customer = Auth::guard('customer')->user();
        $Account = DOCGIA::where('id',$customer->id)->get();
        //dd($PhieuMuon);
        return view('Lich-su-nguoi-dung.chi-tiet-lich-su', compact('PhieuMuon','Account'))->with(['flash_mess'=>'OK']);

    }


    public function News(){
        $allNews = News::paginate(5);
        $listNews = News::where('THE_LOAI','like','Tin Tức')->orderBy('created_at','DESC')->paginate(3);
        $listEvent = News::where('THE_LOAI','like','Sự Kiện')->orderBy('created_at','DESC')->paginate(2);
        $customer = Auth::guard('customer')->user();
        if($customer == null) {
         return view('Tin-tuc.Tin-tuc',compact('listNews','listEvent','allNews'));   
        }
        $Account = DOCGIA::where('id',$customer->id)->get();
        // dd($Account);
        return view('Tin-tuc.Tin-tuc', compact('Account','listNews','listEvent','allNews'));
    }

    public function DetailNews($id){

        $listNews = News::where('id',$id)->get();
        //dd($listNews);
        $customer = Auth::guard('customer')->user();
        if($customer == null) {
         return view('Tin-tuc.Chi-tiet-Tin-tuc',compact('listNews'));   
        }
        $Account = DOCGIA::where('id',$customer->id)->get();
        // dd($Account);
        return view('Tin-tuc.Chi-tiet-Tin-tuc', compact('Account','listNews'));
    }

    public function LienHe(){
        $customer = Auth::guard('customer')->user();
        if($customer == null) {
         return view('Lien-he.Lien-he');
        }
        $Account = DOCGIA::where('id',$customer->id)->get();
        // dd($Account);
        return view('Lien-he.Lien-he', compact('Account'));
    }
    public function CapThe(){
        $customer = Auth::guard('customer')->user();
        if($customer == null) {
         return view('Dich-vu.Cap-the');
        }
        $Account = DOCGIA::where('id',$customer->id)->get();
        // dd($Account);
        return view('Dich-vu.Cap-the', compact('Account'));
    }
    public function DaPhuongTien(){
        $customer = Auth::guard('customer')->user();
        if($customer == null) {
         return view('Dich-vu.Da-phuong-tien');
        }
        $Account = DOCGIA::where('id',$customer->id)->get();
        // dd($Account);
        return view('Dich-vu.Da-phuong-tien', compact('Account'));
    }
    public function HuongDan(){
        $customer = Auth::guard('customer')->user();
        if($customer == null) {
         return view('Dich-vu.Huong-dan');
        }
        $Account = DOCGIA::where('id',$customer->id)->get();
        // dd($Account);
        return view('Dich-vu.Huong-dan', compact('Account'));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
