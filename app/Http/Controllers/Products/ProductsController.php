<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SystemSetting;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\Attribute;
use App\Models\ProductVariationValue;
use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductVariationResource;
use App\Models\UploadFile;
use App\Models\Upload;





class ProductsController extends Controller
{

    public function __construct()
    {
        $this->settings =  SystemSetting::first();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function  index(Request $request, Category $category)
    {

        $settings =  $this->settings;
        $page_title = implode(" ", explode('-', $category->slug));
        $allow_banner = [
            'life' => false,
            'biography' => false,
            'pictures' => true,
            'upload-pictures' => true,
            'videos' => true,
            'upload-videos' => true,
            'tributes' => true,
            'consolation' => true,
            'contact-us' => true
        ];

        $breadcrumb = $category->name;
        $files = UploadFile::with('upload')->where('type', strtolower($category->slug))->where('is_approved', true)->get();
        $uploads = Upload::where('type', strtolower($category->slug))->where('is_approved', true)->orderBy('created_at', 'asc')->get();

        return  view('products.index', compact(
            'category',
            'page_title',
            'breadcrumb',
            'allow_banner',
            'files',
            'uploads'
        ));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Category $category, Product $product)
    {
        $page_title = "{$product->product_name}";
        $favorites = '';
        $data = [];
        foreach ($product->parent_attributes as  $parent_attribute) {
            if ($parent_attribute->p_attribute_children()) {
                $data[$parent_attribute->name] = $parent_attribute->p_attribute_children();
            }
        }
        $attributes =  collect($data);
        $attributes = $attributes->count() ? $attributes : '{}';
        $related_products = RelatedProduct::where(['product_id' => $product->id])->get();
        $product->load(["variants", "variants.images", "default_variation", "default_variation.images"]);
        return view('products.show', compact('category', 'related_products', 'attributes', 'product', 'page_title'));
    }
}
