<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductLink;

class ProductController extends Controller
{
    public function index(){
        $product = Product::whereNull('deleted_at')->get();
        return view('management.product.index', compact('product'));
    }
    public function new(){
        return view('management.product.new');
    }
    public function newPost(Request $request){
        $title = $request->input('title');
        $image = $request->file('image');
        $description = $request->input('description');
        $link = $request->input('link');
        $merchant = $request->input('merchant');
        if(!empty($image)) {
            $fileExt = $image->getClientOriginalName();
            $arr_ext = explode('.', $fileExt);
            $real_ext = $arr_ext[count($arr_ext) - 1];

            if (!in_array($real_ext, array("jpg", "png", "jpeg"))) {
                $message = 'File tipe bukan image';
                $error = 1;
            }

            $fileSize = $image->getClientSize();
            if($fileSize == 0){
                $message = 'Ukuran file image terlalu besar';
                $error = 1;
            }

            $fileName = 'product-'.date('YmdHis')."-".$this->generateRandomString(2, false, false).'.'.$real_ext;
            $oriPath = $image->getPathName();
            $destPath = base_path()."//public//file//product//".$fileName;
            $copy = \File::copy($oriPath, $destPath);

            $image_link = '/file/product/'.$fileName;

        }else{
            $image_link = '';
        }

        $data_link = [];
        $n = 0;
        foreach($link as $row){
            $data = [
                'link' => $link[$n],
                'merchant' => $merchant[$n]
            ];
            array_push($data_link, $data);
        $n++;
        }

        $table = new Product();

        $table->title = $title;
        $table->image = $image_link;
        $table->description = $description;
        $table->link = JSON_ENCODE($data_link);
        $table->created_at = date('Y-m-d H:i:s');
        $table->save();

        return redirect('management/product')->withSuccess('Success add product');
        
    }
    public function view($id){
        $product = Product::where('id', $id)->whereNull('deleted_at')->first();
        return view('management.product.view', compact('product'));
    }
    public function edit($id){
        $product = Product::where('id', $id)->whereNull('deleted_at')->first();
        return view('management.product.edit', compact('product', 'id'));
    }
    public function editPost($id, Request $request){
        // dd($request->all());
        $title = $request->input('title');
        $image = $request->file('image');
        $description = $request->input('description');
        $link = $request->input('link');
        $merchant = $request->input('merchant');
       

        $data_link = [];
        $n = 0;
        foreach($link as $row){
            $data = [
                'link' => $link[$n],
                'merchant' => $merchant[$n]
            ];
            array_push($data_link, $data);
        $n++;
        }


        $table = Product::where('id', $id)->whereNull('deleted_at')->first();
        $table->title = $title;
        if(!empty($image)) {
            $fileExt = $image->getClientOriginalName();
            $arr_ext = explode('.', $fileExt);
            $real_ext = $arr_ext[count($arr_ext) - 1];

            if (!in_array($real_ext, array("jpg", "png", "jpeg"))) {
                $message = 'File tipe bukan image';
                $error = 1;
            }

            $fileSize = $image->getClientSize();
            if($fileSize == 0){
                $message = 'Ukuran file image terlalu besar';
                $error = 1;
            }

            $fileName = 'product-'.date('YmdHis')."-".$this->generateRandomString(2, false, false).'.'.$real_ext;
            $oriPath = $image->getPathName();
            $destPath = base_path()."//public//file//product//".$fileName;
            $copy = \File::copy($oriPath, $destPath);

            $image_link = '/file/product/'.$fileName;

            $table->image = $image_link;
        }

        $table->description = $description;
        $table->link = JSON_ENCODE($data_link);
        $table->created_at = date('Y-m-d H:i:s');
        $table->save();

        return redirect('management/product')->withSuccess('Success add product');
    }

    public static function generateRandomString($length, $upperCase = true, $lowerCase = true, $numeric = true){
        $characters = '';
        if($numeric){
            $characters .= "0123456789";
        }
        if($lowerCase){
            $characters .= "abcdefghijklmnopqrstuvwxyz";
        }
        if($upperCase){
            $characters .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        }
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
