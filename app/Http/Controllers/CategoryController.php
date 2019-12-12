<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Category;
class CategoryController extends Controller
{
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
            Category::where(['id'=>$id])->update(['status'=>$status,'name'=>$data['category_name'],'description'=>$data['description'],'slug'=>$data['slug']]);
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

    public function index($categorySlug) {
        $category = Category::where('slug', $categorySlug)->first();

        return view('category', [
            'category' => $category
        ]);
    }
}
