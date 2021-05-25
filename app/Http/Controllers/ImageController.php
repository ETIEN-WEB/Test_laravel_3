<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use app\Image;

class ImageController extends Controller
{
    /*
    public function index()
    {
    	return view('image');
    }

    public function store(Request $request)
    {
    	$image = $request->file('file');
        $avatarName = $image->getClientOriginalName();
        $image->move(public_path('images'),$avatarName);
        $imageUpload = new Image();
        $imageUpload->filename = $avatarName;
        $imageUpload->save();
        return response()->json(['success'=>$avatarName]);
    }


    public function inde()
    {
    	return view('dropimg');
    }

    public function stora(Request $request)
    {
    	$image = $request->file('file');
        $avatarName = $image->getClientOriginalName();
        $image->move(public_path('images'),$avatarName);
         
        $imageUpload = new Image();
        $imageUpload->filename = $avatarName;
        $imageUpload->save();
        return response()->json(['success'=>$avatarName]);
    }
*/

    /* upploader plusieurs images avec whashes 
    public function index(){
        
        //$prod=Prod_cat::all();
        return view('image-view');
    }

    public function store(Request $request){
        $imageName=$request->file->getClientOriginalName();
        $request->file->move(public_path('upload'), $imageName);

        return response()->json(['uploaded'=>'/upload/'.$imageName]);
  
        } */


        // upploader plusieurs images avec whashes 2
        public function index(){
        
            //$prod=Prod_cat::all();
            return view('dropimg');
        }
    
        public function store(Request $request){
            $imageName=$request->file->getClientOriginalName();
            $request->file->move(public_path('upload'), $imageName);
    
            return response()->json(['uploaded'=>'/upload/'.$imageName]);
      
            }



    public function view()
    {
        return view('create');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
                'filenames' => 'required',
                'filenames.*' => 'mimes:doc,pdf,docx,zip'
        ]);


        if($request->hasfile('filenames'))
         {
            foreach($request->file('filenames') as $file)
            {
                $name = time().'.'.$file->extension();
                $file->move(public_path().'/files/', $name);  
                $data[] = $name;  
            }
         }


         $file= new File();
         $file->filenames=json_encode($data);
         $file->save();

        return back()->with('success', 'Data Your files has been successfully added');
    }


// upploader plusieurs images sur le site htwa 2
    public function addimagview()
    {
        return view('create');
    }

    public function addimage_submit(Request $request)
    {
        $images = $request->file('files');
  if ($request->hasFile('files')) :
        foreach ($images as $item):
            $var = date_create();
            $time = date_format($var, 'YmdHis');
            $imageName = $time . '-' . $item->getClientOriginalName();
            //$item->move(base_path() . '/upload/', $imageName);
            $item->move(public_path('upload'), $imageName);
            $arr[] = $imageName;
        endforeach;
        $image = implode(",", $arr);
else:
        $image = '';
endif;
//dd($image);

        DB::table('images')->insert(
        array(
            'filename' => $image
           )
       );

        Session::flash('message', 'Image upload successfully successfully');
        return redirect('/addimagview');

        //return ('Data Your files has been successfully added');
    }


    // upploader plusieurs images plugin jquery
    public function addimagjquer()
    {
        return view('admin.addimagjquer');
    }  

    public function addimage_jquer(Request $request)
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
        $image = implode(",", $arr);
else:
        $image = '';
endif;
//dd($image);

        DB::table('images')->insert(
        array(
            'filename' => $image
           )
       );

        //Session::flash('message', 'Image upload successfully successfully');
        return redirect('/addimagjque');

        //return ('Data Your files has been successfully added');
    }



    



    

}
