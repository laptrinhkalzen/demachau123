<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\ProductAttributeRepository;
use App\Repositories\ProductCategoryRepository;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Repositories\NewsRepository;
use Repositories\AttributeRepository;
use Repositories\CategoryRepository;
use Repositories\KeywordRepository;
use App\Repositories\OrderRepository;
use App\Repositories\OrderDetailRepository;
use Repositories\GalleryRepository;
use App\Product;

class ProductController extends Controller {

    
    
    public function __construct(OrderRepository $orderRepo, OrderDetailRepository $orderdetailRepo, ProductRepository $productRepo,NewsRepository $newsRepo, CategoryRepository $categoryRepo, AttributeRepository $attributeRepo, ProductAttributeRepository $productAttrRepo, ProductCategoryRepository $productCategoryRepo, KeywordRepository $keywordRepo, GalleryRepository $galleryRepo,ProductCategoryRepository $productcategoryRepo) {
        $this->productRepo = $productRepo;
        $this->newsRepo = $newsRepo;
        $this->categoryRepo = $categoryRepo;
        $this->attributeRepo = $attributeRepo;
        $this->productAttrRepo = $productAttrRepo;
        $this->productCategoryRepo = $productCategoryRepo;
        $this->galleryRepo = $galleryRepo;
        $this->keywordRepo = $keywordRepo;
        $this->orderRepo = $orderRepo;
        $this->orderdetailRepo = $orderdetailRepo;
        $this->productcategoryRepo= $productcategoryRepo;
    }

    public function hot(Request $request) {
         ini_set('memory_limit', '2048M');
        $search = $request->all();
        $hot_products_slide = $this->productRepo->readHlProduct($limit = 3);
        $product_new = $this->productRepo->readNewProduct();
        $product_hl = $this->productRepo->readHlProduct();
        $product_cs = $this->productRepo->readCsProduct();
        $platform_category = $this->categoryRepo->readPlatformCategory();
        $os_category = $this->categoryRepo->readOSCategory();
        $genre_category = $this->categoryRepo->readGenreCategory();
       return view('frontend/product/hot',compact('hot_products_slide','product_new','product_hl','product_cs','platform_category','os_category','genre_category'));
    }
    public function all(Request $request) {
         ini_set('memory_limit', '2048M');
        $search = $request->all();
        $hot_products_slide = $this->productRepo->readHlProduct($limit = 3);
        $product_all = $this->productRepo->readAllProduct($limit);
        $product_new = $this->productRepo->readNewProduct();
        $product_hl = $this->productRepo->readHlProduct();
        $product_cs = $this->productRepo->readCsProduct();
        $platform_category = $this->categoryRepo->readPlatformCategory();
        $os_category = $this->categoryRepo->readOSCategory();
        $genre_category = $this->categoryRepo->readGenreCategory();
        // $sizesArray = $this->categoryRepo->readGenreCategory();
        // $sizesArray = array_flatten(json_decode(json_encode($sizesArray),true));
       return view('frontend/product/all',compact('hot_products_slide','product_all','product_new','product_new','product_hl','product_cs','platform_category','os_category','genre_category'));
    }

    public function category(Request $request, $category) {
         ini_set('memory_limit', '2048M');
        $cat=$category;
        $product_category = $this->productRepo->readCategoryProduct($category);
        $hot_products_slide = $this->productRepo->readHlProduct($limit = 3);
        $platform_category = $this->categoryRepo->readPlatformCategory();
        $os_category = $this->categoryRepo->readOSCategory();
        $genre_category = $this->categoryRepo->readGenreCategory();
       return view('frontend/product/category',compact('cat','product_category','hot_products_slide','platform_category','os_category','genre_category'));
    }

    public function search(Request $request) {
         ini_set('memory_limit', '2048M');
        $keywords = $request->key;
        $product_new = $this->productRepo->readHlProduct();
        $product_hl = $this->productRepo->readHlProduct();
        $product_cs = $this->productRepo->readCsProduct();
        $search_product = $this->productRepo->readSearchProduct($keywords);
       return view('frontend/product/search',compact('product_new','product_hl','product_cs','search_product'));
    } 

    public function filter(Request $request){
        $filter=array();
        $hot_products_slide = $this->productRepo->readHlProduct($limit = 3);
        $platform_category = $this->categoryRepo->readPlatformCategory();
        $os_category = $this->categoryRepo->readOSCategory();
        $genre_category = $this->categoryRepo->readGenreCategory();
        if($request->filter != null){
        foreach($request->filter as $fil){
            $array[] = $fil;
            $product_all = $this->productRepo->getFilterProduct($array,$request);    
        }
        }
        else{
        $product_all = $this->productRepo->readAllProduct($limit);
        }
        return view('frontend/product/all',compact('hot_products_slide','product_all','platform_category','os_category','genre_category'));
        
    }
    public function detail(Request $request,$alias,$id) {
            $detail_products=  $this->productRepo->getDetailProduct($id);
            $cat = $this->categoryRepo->getGenreCategory($id);
            $hot_products_slide = $this->productRepo->readHlProduct($limit = 10);
            return view('frontend/product/detail',compact('detail_products','hot_products_slide','cat'));
        }      

    public function index(Request $request) {
        ini_set('memory_limit', '2048M');
        $category_arr = $this->categoryRepo->readHomeProductCategory();
        $search = $request->all();
        $records = $this->productRepo->readFE($request);
        if ($request->get('keyword')) {
            $this->keywordRepo->create(['keyword' => $request->get('keyword')]);
            $category = \App\Category::where('title','like',$request->get('keyword'))->first();
        }
        if (isset($search['attribute_id'])) {
            $search['attribute_arr'] = explode(',', $search['attribute_id']);
        }
        $new_products = $this->productRepo->readNewProduct();
        if (config('global.device') !== 'pc') {
            $product_ids = \DB::table('product_category')->where('category_id', $request->get('category_id') ?: \App\Category::PRODUCT_SHOP_ID)->pluck('product_id');
            Session::put('category_id', $request->get('category_id') ?: \App\Category::PRODUCT_SHOP_ID);
            $attribute_arr = $this->attributeRepo->readAttributeByParent($module = 'product', $parent = 0, $type = 'select', $product_ids);
            if(isset($category)){
                $search['category_id'] = $category->id;
            }
            $current_category = $this->categoryRepo->getCurrentCategory(isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            if (!$current_category->children->toArray()) {
                $current_category = $this->categoryRepo->getCurrentCategory($current_category->parent_id);
            }
            if(isset($search['category_id'])){
                 $category_arr = $this->categoryRepo->getChildren($search['category_id']);
                 if(count($category_arr) == 0){
                     $cate = $this->categoryRepo->find($search['category_id']);
                     $category_arr = $this->categoryRepo->getChildren($cate->parent_id);
                 }
            }
            return view('mobile/product/list', compact('records', 'category_arr', 'attribute_arr', 'new_products', 'search', 'current_category'));
        } else {
            $parent_cat = \App\Category::where('id', isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID)
                    ->with('parentCategories')
                    ->first();
            Session::put('category_id', isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            $parent_arr[] = ['title' => $parent_cat->title, 'url' => route('product.index', ['category_id' => $parent_cat->id])];
            if ($parent_cat->parentCategories) {
                $parent_arr[] = ['title' => $parent_cat->parentCategories->title, 'url' => route('product.index', ['category_id' => $parent_cat->parentCategories->id])];
                if ($parent_cat->parentCategories->parents) {
                    $parent_arr = array_merge($parent_arr, $this->getParent($parent_cat->parentCategories->parents));
                }
            }
            $parent_arr = array_reverse($parent_arr);
             if(isset($category)){
                $search['category_id'] = $category->id;
            }
            $current_category = $this->categoryRepo->getCurrentCategory(isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            if (!$current_category->children->toArray()) {
                $current_category = $this->categoryRepo->getCurrentCategory($current_category->parent_id);
            }
            if (!isset($search['paginate'])) {
                $search['paginate'] = 80;
            }
            return view('frontend/product/list', compact('records', 'category_arr', 'search', 'current_category', 'parent_arr'));
        }
    }

    public function sale(Request $request) {
        ini_set('memory_limit', '2048M');
        $category_arr = $this->categoryRepo->readHomeProductCategory();
        $search = $request->all();
        $records = $this->productRepo->readSale($request);
        if ($request->get('keyword')) {
            $this->keywordRepo->create(['keyword' => $request->get('keyword')]);
        }
        if (isset($search['attribute_id'])) {
            $search['attribute_arr'] = explode(',', $search['attribute_id']);
        }
        $new_products = $this->productRepo->readNewProduct();
        if (config('global.device') !== 'pc') {
            $product_ids = \DB::table('product_category')->where('category_id', $request->get('category_id') ?: \App\Category::PRODUCT_SHOP_ID)->pluck('product_id');
            $attribute_arr = $this->attributeRepo->readAttributeByParent($module = 'product', $parent = 0, $type = 'select', $product_ids);

            $current_category = $this->categoryRepo->getCurrentCategory(isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            if (!$current_category->children->toArray()) {
                $current_category = $this->categoryRepo->getCurrentCategory($current_category->parent_id);
            }
            return view('mobile/product/list', compact('records', 'category_arr', 'attribute_arr', 'new_products', 'search', 'current_category'));
        } else {
            $parent_cat = \App\Category::where('id', isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID)
                    ->with('parentCategories')
                    ->first();
            $parent_arr[] = ['title' => $parent_cat->title, 'url' => route('product.index', ['category_id' => $parent_cat->id])];
            if ($parent_cat->parentCategories) {
                $parent_arr[] = ['title' => $parent_cat->parentCategories->title, 'url' => route('product.index', ['category_id' => $parent_cat->parentCategories->id])];
                if ($parent_cat->parentCategories->parents) {
                    $parent_arr = array_merge($parent_arr, $this->getParent($parent_cat->parentCategories->parents));
                }
            }
            $parent_arr = array_reverse($parent_arr);
            $current_category = $this->categoryRepo->getCurrentCategory(isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            if (!$current_category->children->toArray()) {
                $current_category = $this->categoryRepo->getCurrentCategory($current_category->parent_id);
            }
            if (!isset($search['paginate'])) {
                $search['paginate'] = 80;
            }
            $sale = true;
            return view('frontend/product/list', compact('sale', 'records', 'category_arr', 'search', 'current_category', 'parent_arr'));
        }
    }



    public function getParent($parent) {
        $parent_arr[] = ['title' => $parent->title, 'url' => route('product.index', ['category_id' => $parent->id])];
        if ($parent->parents) {
            $parent_arr = array_merge($parent_arr, $this->getParent($parent->parents));
        }
        return $parent_arr;
    }

//     public function detail($alias) {
//         if (isset($_GET['ref'])) {
//             session(['ref' => $_GET['ref']]);
//         }
//         $record = $this->productRepo->findByAlias($alias);
//         $sale_product = $this->productRepo->getCategorySale($record->id);
//         $this->productRepo->updateViewCount($record->id, $record->view_count);
//         $image_arr = explode(',', $record->images);
//         $gallery = $this->galleryRepo->getImageByKeyword($record->keywords);
// //        $product_arr = $this->productCategoryRepo->getCategory($record->categories);
//         $related_product = $this->productRepo->readRelatedProduct(15, $record->categories()->orderBy('id', 'desc')->first());
//         $url = \Illuminate\Support\Facades\Request::url();
//         if (!session('id')) {
//             session(['id' => [$record->id]]);
//         } else {
//             $ids = array_merge(session('id'), [$record->id]);
//             session(['id' => $ids]);
//         }
//         $config = $this->productRepo->getConfig($record->id);
//         $viewed_products = $this->productRepo->getViewedProduct();
//         $attribute_arr = $this->attributeRepo->readAttributes($record->attributes, 'product');
//         $product = $record;
//         $category_id = $record->categories()->orderBy('id', 'desc')->first()->id;
//         if (config('global.device') !== 'pc') {
//             return view('mobile/product/detail', compact('category_id','record', 'product', 'config', 'gallery', 'image_arr', 'attribute_arr', 'related_product', 'url', 'viewed_products'));
//         } else {
//             return view('frontend/product/detail', compact('category_id','sale_product','record', 'product', 'gallery', 'config', 'image_arr', 'attribute_arr', 'related_product', 'url', 'viewed_products'));
//         }
//     }

    public function cart() {
        $total = 0;
        if (!is_null(session('cart'))) {
            foreach (session('cart') as $key => $val) {
                $total += ($val['price'] * $val['quantity']);
            }
        }
        if (config('global.device') !== 'pc') {
            return view('mobile/cart/index', compact('total'));
        } else {
            return view('frontend/cart/index', compact('total'));
        }
    }

    public function wallet() {
        $order = $this->productRepo->readNewProduct();
        return view('frontend/home/content_wallet',compact('order'));
    }

    public function checkout() {
        $total = 0;
        foreach (session('cart') as $val) {
            $total += ($val['price'] * $val['quantity']);
        }
        if (config('global.device') !== 'pc') {
            return view('mobile/cart/checkout', compact('total'));
        } else {
            return view('frontend/cart/checkout', compact('total'));
        }
    }

    public function checkoutSuccess(Request $request) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->orderRepo->validateCreate());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $total = 0;
        foreach (session('cart') as $key => $val) {
            $total += ($val['price'] * $val['quantity']);
        }
        if (!is_null(session('ref'))) {
            $input['ref'] = session('ref');
        }
        $input['total'] = $total;
        $order = $this->orderRepo->create($input);
        foreach (session('cart') as $key => $val) {
            $detail['order_id'] = $order->id;
            $detail['product_id'] = $key;
            $detail['quantity'] = $val['quantity'];
            $detail['price'] = $val['price'];
            $detail['sub_total'] = $val['price'] * $val['quantity'];
            $this->orderdetailRepo->create($detail);
        }
        $request->session()->flush('cart');
        if (config('global.device') !== 'pc') {
            return view('mobile/cart/success');
        } else {
            return view('frontend/cart/success');
        }
    }

}
