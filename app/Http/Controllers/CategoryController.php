<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Category;
class CategoryController extends Controller{

    public function showCat(){
          $categories = category::all();
          return view('categories')->with(compact('categories'));
    }
    public function addCategory(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->all();
    		// echo "<pre>"; print_r($data); die;
            if(empty($data['status'])){
                $status='0';
            }else{
                $status='1';
            }
    		$category = new Category;
    		$category->name = $data['category_name'];
    		$category->description = $data['description'];
    		$category->slug = $data['slug'];
            $category->status = $status;
    		$category->save();
    		return redirect('/admin/view-categories')->with('flash_message_success', 'Categoria agregada exitosamente');
    	}
        $levels = Category::where(['parent_id'=>0])->get();
    	return view('admin.categories.add_category')->with(compact('levels'));
    }
    public function editCategory(Request $request,$id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            /*echo "<pre>"; print_r($data); */
            if(empty($data['status'])){
                $status='0';
            }else{
                $status='1';
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
            Category::where(['id'=>$id])->update(['status'=>$status,'name'=>$data['category_name'],'description'=>$data['description'],'slug'=>$data['slug'],'image' => $fileName]);
            return redirect('/admin/view-categories')->with('flash_message_success', 'La categoria se ha modificado');
        }
        $categoryDetails = Category::where(['id'=>$id])->first();
        $levels = Category::where(['parent_id'=>0])->get();
        return view('admin.categories.edit_category')->with(compact('categoryDetails','levels'));
    }
    public function deleteCategory($id = null){
        Category::where(['id'=>$id])->delete();
        return redirect('/admin/view-categories')->with('flash_message_success', 'La categoria fue eliminada correctamente');
    }
    public function viewCategories(){
        $categories = category::get();
        return view('admin.categories.view_categories')->with(compact('categories'));
    }
    public function index(Request $req, $categorySlug) {
        $category = Category::where('slug', $categorySlug)->first();
        return view('category',
        ['category' => $category]
      );
    }

    public function show()
    {
        $categories = Category::all();
        return view('categories', ['categories' => $categories]);
    }

}
