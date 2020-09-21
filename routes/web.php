<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('send-mail', 'SendMailController@sendmail');

Route::get('trang-tac-gia', function () {
    return view('Trang_Admin.TAC_GIA.Tac_gia');
})->name('trang-tac-gia');

Route::get('trang-the-loai', function () {
    return view('Trang_Admin.THE_LOAI.The_loai');
})->name('trang-the-loai');

Route::get('trang-nha-xuat-ban', function () {
    return view('Trang_Admin.NHA_XUAT_BAN.Nha_xuat_ban');
})->name('trang-nha-xuat-ban');

Route::get('trang-doc-gia', function () {
    return view('Trang_Admin.DOC_GIA.Doc_gia');
})->name('trang-doc-gia');

Route::get('trang-the-thu-vien', function () {
    return view('Trang_Admin.THE_THU_VIEN.The_thu_vien');
})->name('trang-the-thu-vien');

Route::get('trang-nhan-vien', function () {
    return view('Trang_Admin.NHAN_VIEN.Nhan_vien');
})->name('trang-nhan-vien');

Route::get('trang-hinh-anh', function () {
    return view('Trang_Admin.HINH_ANH.Hinh_anh');
})->name('trang-hinh-anh');

Route::get('trang-phieu-muon', function () {
    return view('Trang_Admin.PHIEU.Phieu_muon');
})->name('trang-phieu-muon');

Route::get('trang-phieu-tra', function () {
    return view('Trang_Admin.PHIEU.Phieu_tra');
})->name('trang-phieu-tra');

Route::get('trang-phieu-phat', function () {
    return view('Trang_Admin.PHIEU.Phieu_phat');
})->name('trang-phieu-phat');

Route::prefix('trang-chu')->group(function() {
        Route::get('/','PageController@index')->name('trang-chu');
});
Route::prefix('tat-ca-sach')->group(function() {
    Route::get('/','PageController@getallBook')->name('tat-ca-sach');
});
Route::get('sach-tham-khao','PageController@getallBookConsult')->name('sach-tham-khao');

Route::get('gioi-thieu','PageController@getSpecialBook')->name('gioi-thieu');

Route::get('tin-tuc', 'PageController@News')->name('tin-tuc');
Route::get('xem-chi-tiet-tin-tuc/{id}', 'PageController@DetailNews')->name('xem-chi-tiet-tin-tuc');

Route::get('huong-dan','PageController@HuongDan')->name('huong-dan'); 

Route::prefix('lien-he/')->group(function() {
    Route::name('lien-he.')->group(function() {
        Route::get('/','SendMailController@home')->name('lien-he');
    });
     //return view('Lien-he.Lien-he');
});
Route::get('doc-gia-lien-he','PageController@LienHe')->name('doc-gia-lien-he');

Route::get('cap-the','PageController@CapThe')->name('cap-the');     

Route::get('da-phuong-tien','PageController@DaPhuongTien')->name('da-phuong-tien'); 

Route::get('sach-TN-va-XH','PageController@getallBookKH')->name('sach-TN-va-XH'); 
Route::get('sach-khoa-hoc-tu-nhien','PageController@getallBookKHTN')->name('sach-khoa-hoc-tu-nhien'); 
Route::get('sach-khoa-hoc-xa-hoi','PageController@getallBookKHXH')->name('sach-khoa-hoc-xa-hoi'); 


Route::get('test','QuanTriVienController@layThongTin');
Route::get('dang-nhap','QuanTriVienController@dangNhap')->name('dang-nhap');
Route::post('dang-nhap','QuanTriVienController@xulyDangNhap')->name('xu-ly-dang-nhap');
Route::get('dang-xuat','QuanTriVienController@dangXuat')->name('dang-xuat');



Route::middleware('auth')->group(function(){
    Route::prefix('trang-quan-ly')->group(function() {
        Route::name('trang-quan-ly.')->group(function() {
            Route::get('/','TrangChuNVController@index')->name('danh-sach');
            Route::get('them-moi','TrangChuNVController@create')->name('them-moi');
            Route::post('them-moi','TrangChuNVController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}','TrangChuNVController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}','TrangChuNVController@update')->name('xu-ly-cap-nhat');
            Route::get('xoa/{id}','TrangChuNVController@destroy')->name('xoa');
        });
    });

    Route::prefix('trang-sach')->group(function() {
        Route::name('trang-sach.')->group(function() {
            Route::get('/','SachController@index')->name('danh-sach');
            Route::get('them-moi','SachController@create')->name('them-moi');
            Route::post('them-moi','SachController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}','SachController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}','SachController@update')->name('xu-ly-cap-nhat');
            Route::get('xoa/{id}','SachController@destroy')->name('xoa');
            Route::get('danh-sach-restore','SachController@getdatarestore')->name('danh-sach-restore');
            Route::get('khoi-phuc/{id}','SachController@datarestore')->name('khoi-phuc');
        });
    });

    Route::prefix('trang-slides')->group(function() {
        Route::name('trang-slides.')->group(function() {
            Route::get('/','SlidesController@index')->name('danh-sach');
            Route::get('them-moi','SlidesController@create')->name('them-moi');
            Route::post('them-moi','SlidesController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}','SlidesController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}','SlidesController@update')->name('xu-ly-cap-nhat');
            Route::get('xoa/{id}','SlidesController@destroy')->name('xoa');
            Route::get('danh-sach-restore','SlidesController@getdatarestore')->name('danh-sach-restore');
            Route::get('khoi-phuc/{id}','SlidesController@datarestore')->name('khoi-phuc');
        });
    });

    Route::prefix('trang-tin-tuc')->group(function() {
        Route::name('trang-tin-tuc.')->group(function() {
            Route::get('/','TinTucController@index')->name('danh-sach');
            Route::get('them-moi','TinTucController@create')->name('them-moi');
            Route::post('them-moi','TinTucController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}','TinTucController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}','TinTucController@update')->name('xu-ly-cap-nhat');
            Route::get('xoa/{id}','TinTucController@destroy')->name('xoa');
            Route::get('danh-sach-restore','TinTucController@getdatarestore')->name('danh-sach-restore');
            Route::get('khoi-phuc/{id}','TinTucController@datarestore')->name('khoi-phuc');
        });
    });
    
    Route::prefix('trang-tac-gia')->group(function() {
        Route::name('trang-tac-gia.')->group(function() {
            Route::get('/','TacGiaController@index')->name('danh-sach');
            Route::get('them-moi','TacGiaController@create')->name('them-moi');
            Route::post('them-moi','TacGiaController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}','TacGiaController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}','TacGiaController@update')->name('xu-ly-cap-nhat');
            Route::get('xoa/{id}','TacGiaController@destroy')->name('xoa');
            Route::get('danh-sach-restore','TacGiaController@getdatarestore')->name('danh-sach-restore');
            Route::get('khoi-phuc/{id}','TacGiaController@datarestore')->name('khoi-phuc');
        });
    });
    
    Route::prefix('trang-the-loai')->group(function() {
        Route::name('trang-the-loai.')->group(function() {
            Route::get('/','TheLoaiController@index')->name('danh-sach');
            Route::get('them-moi','TheLoaiController@create')->name('them-moi');
            Route::post('them-moi','TheLoaiController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}','TheLoaiController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}','TheLoaiController@update')->name('xu-ly-cap-nhat');
            Route::get('xoa/{id}','TheLoaiController@destroy')->name('xoa');
            Route::get('danh-sach-restore','TheLoaiController@getdatarestore')->name('danh-sach-restore');
            Route::get('khoi-phuc/{id}','TheLoaiController@datarestore')->name('khoi-phuc');
        });
    });
    
    Route::prefix('trang-nha-xuat-ban')->group(function() {
        Route::name('trang-nha-xuat-ban.')->group(function() {
            Route::get('/','NhaXuatBanController@index')->name('danh-sach');
            Route::get('them-moi','NhaXuatBanController@create')->name('them-moi');
            Route::post('them-moi','NhaXuatBanController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}','NhaXuatBanController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}','NhaXuatBanController@update')->name('xu-ly-cap-nhat');
            Route::get('xoa/{id}','NhaXuatBanController@destroy')->name('xoa');
            Route::get('danh-sach-restore','NhaXuatBanController@getdatarestore')->name('danh-sach-restore');
            Route::get('khoi-phuc/{id}','NhaXuatBanController@datarestore')->name('khoi-phuc');
        });
    });
    
    Route::prefix('trang-the-thu-vien')->group(function() {
        Route::name('trang-the-thu-vien.')->group(function() {
            Route::get('/','TheThuVienController@index')->name('danh-sach');
            Route::get('them-moi','TheThuVienController@create')->name('them-moi');
            Route::post('them-moi','TheThuVienController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}','TheThuVienController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}','TheThuVienController@update')->name('xu-ly-cap-nhat');
            Route::get('xoa/{id}','TheThuVienController@destroy')->name('xoa');
            Route::get('danh-sach-restore','TheThuVienController@getdatarestore')->name('danh-sach-restore');
            Route::get('khoi-phuc/{id}','TheThuVienController@datarestore')->name('khoi-phuc');
        });
    });
    
    Route::prefix('trang-doc-gia')->group(function() {
        Route::name('trang-doc-gia.')->group(function() {
            Route::get('/','DocGiaController@index')->name('danh-sach');
            Route::get('them-moi','DocGiaController@create')->name('them-moi');
            Route::post('them-moi','DocGiaController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}','DocGiaController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}','DocGiaController@update')->name('xu-ly-cap-nhat');
            Route::get('xoa/{id}','DocGiaController@destroy')->name('xoa');
            Route::get('danh-sach-restore','DocGiaController@getdatarestore')->name('danh-sach-restore');
            Route::get('khoi-phuc/{id}','DocGiaController@datarestore')->name('khoi-phuc');
        });
    });
    
    Route::prefix('trang-phieu-muon')->group(function() {
        Route::name('trang-phieu-muon.')->group(function() {
            Route::get('/','PhieuMuonController@index')->name('danh-sach');
            Route::get('them-moi','PhieuMuonController@create')->name('them-moi');
            Route::post('them-moi','PhieuMuonController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}','PhieuMuonController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}','PhieuMuonController@update')->name('xu-ly-cap-nhat');
            Route::get('xoa/{id}','PhieuMuonController@destroy')->name('xoa');
            Route::get('danh-sach-restore','PhieuMuonController@getdatarestore')->name('danh-sach-restore');
            Route::get('khoi-phuc/{id}','PhieuMuonController@datarestore')->name('khoi-phuc');
        });
    });
    
    Route::prefix('trang-phieu-phat')->group(function() {
        Route::name('trang-phieu-phat.')->group(function() {
            Route::get('/','PhieuPhatController@index')->name('danh-sach');
            Route::get('them-moi','PhieuPhatController@create')->name('them-moi');
            Route::post('them-moi','PhieuPhatController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}','PhieuPhatController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}','PhieuPhatController@update')->name('xu-ly-cap-nhat');
            Route::get('xoa/{id}','PhieuPhatController@destroy')->name('xoa');
            Route::get('danh-sach-den-han','PhieuPhatController@Danhsachphieuphat')->name('danh-sach-den-han');
        });
    });
    
    Route::prefix('trang-phieu-tra')->group(function() {
        Route::name('trang-phieu-tra.')->group(function() {
            Route::get('/','PhieuTraController@index')->name('danh-sach');
            Route::get('them-moi','PhieuTraController@create')->name('them-moi');
            Route::post('them-moi','PhieuTraController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}','PhieuTraController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}','PhieuTraController@update')->name('xu-ly-cap-nhat');
            Route::get('xoa/{id}','PhieuTraController@destroy')->name('xoa');
            Route::get('danh-sach-restore','SachController@getdatarestore')->name('danh-sach-restore');
            Route::get('khoi-phuc/{id}','SachController@datarestore')->name('khoi-phuc');
        });
    });

    Route::prefix('trang-nhan-vien-ho-tro')->group(function() {
        Route::name('trang-nhan-vien-ho-tro.')->group(function() {
            Route::get('/','NhanVienHoTroController@index')->name('danh-sach');
            Route::get('them-moi','NhanVienHoTroController@create')->name('them-moi');
            Route::post('them-moi','NhanVienHoTroController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}','NhanVienHoTroController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}','NhanVienHoTroController@update')->name('xu-ly-cap-nhat');
            Route::get('xoa/{id}','NhanVienHoTroController@destroy')->name('xoa');
            Route::get('danh-sach-restore','NhanVienHoTroController@getdatarestore')->name('danh-sach-restore');
            Route::get('khoi-phuc/{id}','NhanVienHoTroController@datarestore')->name('khoi-phuc');
        });
    });

    Route::prefix('trang-tat-ca-nhan-vien')->group(function() {
        Route::name('trang-tat-ca-nhan-vien.')->group(function() {
            Route::get('/','TatCaNhanVienController@index')->name('danh-sach');
            Route::get('danh-sach-nhan-vien','TatCaNhanVienController@getUser')->name('danh-sach-nhan-vien');
        });
    });
});


Route::get('search', [
    'as'=>'search',
    'uses'=>'PageController@getSearch'
]);

Route::get('chi-tiet-san-pham/{x}','PageController@getDetailBook')->name('chi-tiet-san-pham'); 
Route::get('chi-tiet-san-pham/them-san-pham/{id}', [
    'as'=>'them-san-pham',
    'uses'=>'PageController@AddCart'
]);
Route::get('chi-tiet-san-pham/xoa-san-pham/{id}', [
    'as'=>'xoa-san-pham',
    'uses'=>'PageController@DeleteItemCart'
]);

Route::get('Xem-tai-khoan/{id}', 'PageController@GetInfoAccount')->name('Xem-tai-khoan'); 

    Route::get('them-san-pham/{id}', [
        'as'=>'them-san-pham',
        'uses'=>'PageController@AddCart'
    ]);

    Route::get('xoa-san-pham/{id}', [
        'as'=>'xoa-san-pham',
        'uses'=>'PageController@DeleteItemCart'
    ]);
    // Route::get('xoa-san-pham-cart/{id}', [
    //     'as'=>'xoa-san-pham-cart',
    //     'uses'=>'PageController@DeleteItemDetailCart'
    // ]);
    Route::get('xoa-san-pham-cart/{id}','PageController@DeleteItemDetailCart')->name('xoa-san-pham-cart');

    Route::post('cap-nhat-san-pham', [
        'as'=>'cap-nhat-san-pham',
        'uses'=>'PageController@UpdateAllItemDetailCart'
    ]);

    Route::get('xem-chi-tiet-phieu-muon', [
        'as'=>'xem-chi-tiet-phieu-muon',
        'uses'=>'PageController@DetailCart'
    ])->middleware('authCustomer');

    Route::get('xem-lich-su-muon-tra/{id}','PageController@LichSuMuonTra')->name('xem-lich-su-muon-tra');
     Route::get('chi-tiet-lich-su-muon-tra/{id}','PageController@ChiTietLichSuMuonTra')->name('chi-tiet-lich-su-muon-tra');


Route::get('tao-tai-khoan',[
    'as'=>'tao-tai-khoan',
    'uses'=> 'PageController@CreateAcount'
]);
Route::post('xu-ly-tao-tai-khoan',[
    'as'=>'xu-ly-tao-tai-khoan',
    'uses'=> 'PageController@storeDG'
]);
Route::get('dang-nhap-nguoi-dung','PageController@dangNhap')->name('dang-nhap-nguoi-dung');
Route::post('dang-nhap-nguoi-dung','PageController@xulyDangNhap')->name('xu-ly-dang-nhap-nguoi-dung');
Route::get('dang-xuat-nguoi-dung','PageController@dangXuat')->name('dang-xuat-nguoi-dung');
// Route::post('cap-nhat-thong-tin-nguoi-dung','PageController@UpadateInfo')->name('cap-nhat-thong-tin-nguoi-dung');

Route::get('cap-nhat-thong-tin-nguoi-dung','PageController@UpadateInfo')->name('cap-nhat-thong-tin-nguoi-dung');

Route::post('xac-nhan-phieu-muon','PageController@XacNhanPhieuMuon')->name('xac-nhan-phieu-muon');
// Route::get('xac-nhan-phieu-muon-test','PageController@XacNhanPhieuMuon')->name('xac-nhan-phieu-muon');