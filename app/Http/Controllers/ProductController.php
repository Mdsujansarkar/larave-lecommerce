<?php

namespace App\Http\Controllers;
use App\Brand;
use App\Category;
use App\Product;
use Image;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function index(){
    	$categories = Category::where('publication_status',1)->get();
    	$brands= Brand::where('publication_status', 1)->get();
    	return view('admin.product.add-product', [
      'categories'  => $categories,
      'brands'      => $brands

    	]);
    }

   protected function validateCheck($request){
    $this -> validate($request, [
      'product_name' => 'required'
    ]);
   }
   
   protected function UploadImage($request){
     
       $producrImage = $request -> file('product_image');
      // $photo = $request->file('image')->getClientOriginalName();
       $imageName = $producrImage ->getClientOriginalName();
       return $imageName;
       $directoryName = 'product-imags/';
       
       $imageurl = $directoryName.$imageName;
      // $productImages -> move( $directoryName,$imageName );
         Image::make($producrImage)->save($imageurl);
       return $imageurl;

   }

   protected function saveProductbasicInfo($request, $imageurl){
     $product = new Product();

  $product ->category_id = $request -> category_id;
  $product ->brand_id = $request -> brand_id;
  $product ->product_name = $request -> product_name;
  $product ->product_price = $request -> product_price;
  $product ->product_quantity = $request -> product_quantity;
  $product ->product_long_desc = $request -> product_long_desc;
  $product ->product_short_desc = $request -> product_short_desc;
  $product ->product_image = $imageurl;
  $product ->publication_status = $request -> publication_status;
  $product ->save();

   }

    public function saveProduct(Request $request){
      $this -> validateCheck($request);
     

      $imageurl = $this -> UploadImage($request);
       $this -> saveProductbasicInfo($request,$imageurl);
  

  return redirect('/product/add')->with('message','Message save');
    }

    public function manageProduct(){
      $products = DB::table('products')
                ->join('categories','products.category_id', '=' 'categories.id')
                ->join('brands','products.brand_id', '=' 'brands.id')
                ->select('products.*', 'categories.category_name','brands.id')
                ->get();
    
      return view('admin.product.manage-product',['products'=>$products]);
    }
}
