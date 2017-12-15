<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    public function showProductForm() {
        $publishedCategories = Category::where('publication_status', 1)->get();
        $publishedBrands = Brand::where('publication_status', 1)->get();

        return view('admin.product.add-product', [
            'publishedCategories'=>$publishedCategories,
            'publishedBrands'=>$publishedBrands
        ]);
    }
    public function saveProductInfo(Request $request) {
        $productImage = $request->file('product_image');
        $imageName = $productImage->getClientOriginalName();
        $directory= 'product-images/';
//        $productImage->move($directory,$imageName);

        Image::make($productImage)->save($directory, $imageName);





    }
}
