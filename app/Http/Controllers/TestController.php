<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prod_cat;
use App\Product;
use App\Categorie;
use App\Cat_description;
use App\User;

use DB;

class TestController extends Controller
{
    //
    public function prodfunct(){
        
        $prod=Prod_cat::all();
        return view('productlist',compact('prod'));
    }

    public function findProductName(Request $request){
        $data=Product::select('productname', 'id')->where('prod_cat_id', $request->id)->take(100)->get();
        return response()->json($data);
  
        }

    public function findPrice(Request $request){
        //$p=Product::select('price')->where('id', $request->id)->first();
        $p = DB::table('products')
            ->select('products.id', 'products.price', 'products.productname', 'prod_cats.product_cat_name')
            ->join('prod_cats', 'prod_cats.id', '=', 'products.prod_cat_id')
            ->where('products.id', '=', $request->id)
            ->get();
        
        return response()->json($p);
    
        }

        public function affiche(){
        
            /* $fil=User::get();
            dd($fil->name); */
            return view('Cat_prod.affiche');
        }

        public function traite(Request $request){
            /*$this->validate($request, ['sous_cat' => 'nullable'
                                      
                                       ]);*/

        $Categori = new Categorie(); 
        $Categori->nom_categorie  = $request->input('Categorie');
        $Categori->espace_categorie  = $request->input('espace_Categorie');
        $Categori->save();

        $description = new Cat_description(); 
        $description->categorie_id  = $Categori->id;
        //$servantes = !empty($_POST['servante']) ? checkInput($_POST['servante']) : NULL;
        $description->nom_description = !empty($request->input('sous_cat')) ? $request->input('sous_cat') : 'ça va';
        //$description->nom_description = $request->input('sous_cat');
        //$valeur1 = $v_p_df;
        
        //dd($description->nom_description);
        $description->espace_description  = $request->input('espace_sous');

        
        $description->save();
        
        
        //$employeurs = Employeur::where('id', '2')->get();
        /*$employeurs->transform(function($employeur, $key){
            
        return $employeur;
        
        
        });*/
        
        
        return redirect ('/affiche')->with('Vos informations ont été enregistrés avec succès'); 
        
        }   
    

        public function search1(){
            //$prod=Prod_cat::all();
            return view('admin.search');
        }

        
        public function search(){
        
            //$prod=Prod_cat::all();
            $q = request()->input('q');
            dd($q);
            //return view('Cat_prod.affiche');
        }


        public function creation(){
        
            /* $fil=User::get();
            dd($fil->name); */
            return view('Cat_prod.creation');
        }
        
        

        public function creation1(Request $request){
            $Categori = new Categorie(); 
        $Categori->nom_categorie  = "cat1";
        $Categori->espace_categorie  = "espacectat2";
        $Categori->creationdate = now();
        $Categori->save();

        dd($Categori);

        }

        public function mediaqu(){
        
            /* $fil=User::get();
            dd($fil->name); */
            return view('Cat_prod.mediaq');
        }
            

}
 