<?php

Route::group(['middleware' => 'frontend'], function() {
    Route::get('/', ['as' => 'home.index', 'uses' => 'Frontend\FrontendController@index']);
    Route::get('/support', ['as' => 'home.support', 'uses' => 'Frontend\SupportController@index']);
    Route::get('/store', ['as' => 'home.store', 'uses' => 'Frontend\StoreController@index']);
    Route::get('/store-product', ['as' => 'home.store_product', 'uses' => 'Frontend\StoreProductController@index']);
    Route::get('/news', ['as' => 'home.news', 'uses' => 'Frontend\News2Controller@index']);

    //member
    Route::get('/info-member/{id}','Frontend\MemberController@info_member');
    Route::post('/info-member-store/{id}','Frontend\MemberController@storeProfile');

    //Coupon
    Route::post('/check-coupon','Frontend\CheckoutOrderController@check_coupon');

    //Thanh toán
    Route::post('/checkout-success1', 'Frontend\CheckoutOrderController@checkout_success');
    Route::get('/about', ['as' => 'home.about', 'uses' => 'Frontend\AboutController@index']);
    Route::get('/checkout-order', ['as' => 'home.checkout_order', 'uses' => 'Frontend\CheckoutOrderController@index']);
    Route::get('/checkout-address', ['as' => 'home.checkout_address', 'uses' => 'Frontend\CheckoutAddressController@index']);
    Route::get('/checkout-payment', ['as' => 'home.checkout_payment', 'uses' => 'Frontend\CheckoutPaymentController@index']);
    Route::get('/marketing/activation/{key}', ['as' => 'marketing.activation', 'uses' => 'Frontend\MarketingController@activation']);
    Route::get('/construction/activation/{key}', ['as' => 'construction.activation', 'uses' => 'Frontend\ConstructionController@activation']);
    Route::get('/member/activation/{key}', ['as' => 'member.activation', 'uses' => 'Frontend\MemberController@activation']);
    /* Sản phẩm */
    Route::get('/san-pham', ['as' => 'product.index', 'uses' => 'Frontend\ProductController@index']);
    Route::get('/the-loai/{category}', ['as' => 'product.category', 'uses' => 'Frontend\ProductController@category']);
    Route::post('/search-games', ['as' => 'games.search', 'uses' => 'Frontend\ProductController@search']);
    Route::get('/filter-product', ['as' => 'product.filter', 'uses' => 'Frontend\ProductController@filter']);
    Route::get('/sale', ['as' => 'product.sale', 'uses' => 'Frontend\ProductController@sale']);
    Route::get('/san-pham/{alias}', ['as' => 'product.detail', 'uses' => 'Frontend\ProductController@detail']);
    Route::get('/hot-product', ['as' => 'product.hot', 'uses' => 'Frontend\ProductController@hot']);
    Route::get('/all-product', ['as' => 'product.all', 'uses' => 'Frontend\ProductController@all']);
    Route::get('/product/{alias}/detail/{id}', ['as' => 'product.detail', 'uses' => 'Frontend\ProductController@detail']);

    /* Hình ảnh */
    Route::get('/hinh-anh', ['as' => 'gallery.index', 'uses' => 'Frontend\GalleryController@index']);
    Route::get('/hinh-anh/{alias}', ['as' => 'gallery.detail', 'uses' => 'Frontend\GalleryController@detail']);
    /* Thi công */
    Route::get('/thi-cong', ['as' => 'construction.index', 'uses' => 'Frontend\ConstructionController@index']);
    Route::get('/thi-cong/{alias}', ['as' => 'construction.detail', 'uses' => 'Frontend\ConstructionController@detail']);
    Route::get('/thi-cong/du-an/danh-sach', ['as' => 'construction.list_project', 'uses' => 'Frontend\ConstructionController@listProject']);
    Route::get('/thi-cong/tao-moi/du-an', ['as' => 'construction.add_project', 'uses' => 'Frontend\ConstructionController@addProject']);
    Route::get('/thi-cong/du-an/{alias}', ['as' => 'construction.edit_project', 'uses' => 'Frontend\ConstructionController@editProject']);
    Route::get('/thi-cong/du-an/xoa/{alias}', ['as' => 'construction.delete_project', 'uses' => 'Frontend\ConstructionController@deleteProject']);
    Route::post('/thi-cong/du-an/create', ['as' => 'construction.create_project', 'uses' => 'Frontend\ConstructionController@createProject']);
    Route::post('/thi-cong/du-an/update/{id}', ['as' => 'construction.update_project', 'uses' => 'Frontend\ConstructionController@updateProject']);
    Route::get('/thi-cong/tai-khoan/{alias}', ['as' => 'construction.edit_profile', 'uses' => 'Frontend\ConstructionController@editProfile']);
    Route::post('/thi-cong/cap-nhat-tai-khoan/{alias}', ['as' => 'construction.update_profile', 'uses' => 'Frontend\ConstructionController@updateProfile']);
    /* Dự án */
    Route::get('/du-an/{alias}', ['as' => 'project.detail', 'uses' => 'Frontend\ProjectController@detail']);
    /* Tin tuc */

    Route::get('/tin-tuc', ['as' => 'news.list', 'uses' => 'Frontend\NewsController@index']);
    Route::get('/danh-muc-tin/{alias}', ['as' => 'news_category.index', 'uses' => 'Frontend\NewsController@index']);
    Route::get('/tin-tuc/{alias}', ['as' => 'news.detail', 'uses' => 'Frontend\NewsController@detail']);
    /* Video */
    Route::get('/video', ['as' => 'video.index', 'uses' => 'Frontend\VideoController@index']);
    Route::get('/video/{alias}', ['as' => 'video.detail', 'uses' => 'Frontend\VideoController@detail']);
    Route::get('/search-result', ['as' => 'video.search', 'uses' => 'Frontend\VideoController@search']);
    /* Giỏ hàng */
    Route::get('/cart', ['as' => 'product.cart', 'uses' => 'Frontend\ProductController@cart']);
    Route::get('/all-order', ['as' => 'order.all', 'uses' => 'Frontend\OrderController@all']);
    Route::get('/status-order/{status}', ['as' => 'order.status', 'uses' => 'Frontend\OrderController@status']);
    // Route::get('/all-order', ['as' => 'order.all', 'uses' => 'Frontend\OrderController@all']);
    /* Thanh toán */
    Route::get('/checkout', ['as' => 'product.checkout', 'uses' => 'Frontend\ProductController@checkout']);
    Route::post('/checkout-success', ['as' => 'product.checkout-sucess', 'uses' => 'Frontend\ProductController@checkoutSuccess']);
     Route::get('/checkout', ['as' => 'product.checkout', 'uses' => 'Frontend\ProductController@checkout']);
    /* Tiếp thị liên kết */
    Route::get('/marketing/{alias}', ['as' => 'marketing.index', 'uses' => 'Frontend\MarketingController@index']);
    Route::get('/khach-hang/tai-khoan/{alias}', ['as' => 'member.edit_profile', 'uses' => 'Frontend\MemberController@editProfile']);

    /*Test-mail*/
    Route::get('test-email', 'JobController@processQueue');
});
