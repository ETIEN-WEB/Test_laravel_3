<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Categorie;
use App\Pizza;

class AdminController extends Controller
{
    //
    public function test(){
        /*$sliders = Slider::where('status', 1)->get();
        $produits = Product::where('status', 1)->orderBy('id', 'desc')->paginate(8);
        */

        $descrip = DB::table('categories')
            ->join('cat_descriptions', 'categories.id', '=', 'cat_descriptions.categorie_id')
            
            ->select('cat_descriptions.*')
            ->where('categories.id', '=', 1)
            ->get();

            //dd($descrip);
        return view('admin.test')->with('descrip', $descrip);
    }


    public function index(){
         
        $categoris =Category::where('id', 1)->get();
       

            //dd($descrip);
        return view('category')->with('categoris', $categoris);
    }


    /*public function subcategory(Request $request){
         
        

        $subcategories = Categorie::where('id', $id)
                        ->with('cat_descriptions')->get();
       

            //dd($descrip);
        return responsive()->json (['subcategories' => $subcategories]);
    }
*/

 

    // upploader plusieurs images plugin jquery en json
    public function jsonimagjquer()
    {
        return view('adjson.jsonimagjquer');
    }  

    public function jsonimage_jquer(Request $request)
    {
        

        $images = $request->file('fileUpload');

  if ($request->hasFile('fileUpload')) :
        foreach ($images as $item):
            $var = date_create();
            $time = date_format($var, 'YmdHis');
            $imageName = $time . '-' . $item->getClientOriginalName();
            //$item->move(base_path() . '/upload/', $imageName);
            $item->move(public_path('upload'), $imageName);
            $arr[] = $imageName;
        endforeach;
        $image = $arr;
        //$image = implode(",", $arr);
        //dd($image);
else:
        $image = '';
       
endif;
//dd($image);

$pazza = new Pizza();

$pazza->toppings = $image;

$pazza->save();

        //Session::flash('message', 'Image upload successfully successfully');
        return redirect('/jsonimagjquer');

        
    }

    public function jsonajquer()
    {
        /*$pizza = User::all();
        $pizza = $pizza->fresh();*/
        $pizza = Pizza::All();
        return view('adjson.jsonajquer')->with('pizza', $pizza);
    } 
    




}



