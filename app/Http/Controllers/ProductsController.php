<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use Image;
use App\Category;
use App\Product;
use App\ProductsAttribute;
use App\ProductsImage;
use DB;

class ProductsController extends Controller
{

    public function index($productId)
    {
        $product = Product::find($productId);

        return view('product', [
            'product' => $product
        ]);
    }

    public function addProduct(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $product = new Product;
            $product->category_id = $data['category_id'];
            $product->product_name = $data['product_name'];
            $product->product_code = $data['product_code'];
            $product->product_color = $data['product_color'];
            if (!empty($data['description'])) {
                $product->description = $data['description'];
            } else {
                $product->description = '';
            }
            if (empty($data['status'])) {
                $status = '0';
            } else {
                $status = '1';
            }
            $product->price = $data['price'];
            // Upload Image
            if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'images/backend_img/product/large' . '/' . $fileName;
                    $medium_image_path = 'images/backend_img/product/medium' . '/' . $fileName;
                    $small_image_path = 'images/backend_img/product/small' . '/' . $fileName;
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300, 300)->save($small_image_path);
                    $product->image = $fileName;
                }
            }
            $product->status = $status;
            $product->save();
            return redirect('/admin/view-products')->with('flash_message_success', 'El producto fue agregado');
        }
        $categories = Category::where(['parent_id' => 0])->get();
        $categories_drop_down = "<option value='' selected disabled>Seleccionar</option>";
        foreach ($categories as $cat) {
            $categories_drop_down .= "<option value='" . $cat->id . "'>" . $cat->name . "</option>";
            $sub_categories = Category::where(['parent_id' => $cat->id])->get();
            foreach ($sub_categories as $sub_cat) {
                $categories_drop_down .= "<option value='" . $sub_cat->id . "'>&nbsp;&nbsp;--&nbsp;" . $sub_cat->name . "</option>";
            }
        }
        //echo "<pre>"; print_r($categories_drop_down); die;
        return view('admin.products.add_product')->with(compact('categories_drop_down'));
    }
    public function editProduct(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            if (empty($data['status'])) {
                $status = '0';
            } else {
                $status = '1';
            }
            // Upload Image
            if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'images/backend_img/product/large' . '/' . $fileName;
                    $medium_image_path = 'images/backend_img/product/medium' . '/' . $fileName;
                    $small_image_path = 'images/backend_img/product/small' . '/' . $fileName;
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300, 300)->save($small_image_path);
                }
            } else if (!empty($data['current_image'])) {
                $fileName = $data['current_image'];
            } else {
                $fileName = '';
            }
            if (empty($data['description'])) {
                $data['description'] = '';
            }
            Product::where(['id' => $id])->update([
                'status' => $status, 'category_id' => $data['category_id'], 'product_name' => $data['product_name'],
                'product_code' => $data['product_code'], 'product_color' => $data['product_color'], 'description' => $data['description'], 'price' => $data['price'], 'image' => $fileName
            ]);

            return redirect()->back()->with('flash_message_success', 'El producto fue modificado');
        }
        // Get Product Details start //
        $productDetails = Product::where(['id' => $id])->first();
        // Get Product Details End //
        // Categories drop down start //
        $categories = Category::where(['parent_id' => 0])->get();
        $categories_drop_down = "<option value='' disabled>Select</option>";
        foreach ($categories as $cat) {
            if ($cat->id == $productDetails->category_id) {
                $selected = "selected";
            } else {
                $selected = "";
            }
            $categories_drop_down .= "<option value='" . $cat->id . "' " . $selected . ">" . $cat->name . "</option>";
        }
        // Categories drop down end //
        return view('admin.products.edit_product')->with(compact('productDetails', 'categories_drop_down'));
    }
    public function deleteProductImage($id = null)
    {
        // Get Product Image
        $productImage = Product::where('id', $id)->first();
        // Get Product Image Paths
        $large_image_path = 'images/backend_img/product/large/';
        $medium_image_path = 'images/backend_img/product/medium/';
        $small_image_path = 'images/backend_img/product/small/';
        // Delete Large Image if not exists in Folder
        if (file_exists($large_image_path . $productImage->image)) {
            unlink($large_image_path . $productImage->image);
        }
        // Delete Medium Image if not exists in Folder
        if (file_exists($medium_image_path . $productImage->image)) {
            unlink($medium_image_path . $productImage->image);
        }
        // Delete Small Image if not exists in Folder
        if (file_exists($small_image_path . $productImage->image)) {
            unlink($small_image_path . $productImage->image);
        }
        // Delete Image from Products table
        Product::where(['id' => $id])->update(['image' => '']);
        return redirect()->back()->with('flash_message_success', 'Product image has been deleted successfully');
    }
    public function viewProducts(Request $request)
    {
        $products = Product::get();
        foreach ($products as $key => $val) {
            $category_name = Category::where(['id' => $val->category_id])->first();
            $products[$key]->category_name = $category_name->name;
        }
        $products = json_decode(json_encode($products));
        //echo "<pre>"; print_r($products); die;
        return view('admin.products.view_products')->with(compact('products'));
    }
    public function deleteProduct($id = null)
    {
        Product::where(['id' => $id])->delete();
        return redirect()->back()->with('flash_message_success', 'El producto fue eliminado');
    }
}
