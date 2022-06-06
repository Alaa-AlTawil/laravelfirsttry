<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller{
    
    public function sayHi(){
        $message = "From DB";

        return response()->json([
            "status" => "Success",
            "message" => $message
        ], 200);
    }
    public function palendrom1(){
        $array=['toot','bob','nan','mam','ssssw'];
        $count=0;
        foreach ($array as $pal){
            if ($pal==strrev($pal)){
                $count++;
            }
        }
        echo $count;
    }
    public function time(){
        $second = time() + (31536000*238) - (105*86400);
        echo $second;
    }
    public function pablo(){
        $array=["pablo","charbel","avo","pablo","alaa","dani","Tawil","pablo"];
        $name=rand(0,count($array)-1);
        echo $array[$name];
    }
    public function students(){
        $array=["pablo","charbel","avo","pablo","alaa","dani","Tawil","Tawil","jamal"];
        $m=count($array)/2;
        $gen=[];
        $final=[];
        if (is_numeric($m)){
            while(count($array)!=0){
                array_push($gen,array_pop($array),array_pop($array));
                array_push($final,$gen);
                $gen=[];     
            }
        }
        else{
            while(count($array)!=1){        
                    array_push($gen,array_pop($array),array_pop($array));
                    array_push($final,$gen);
                    $gen=[]; 
                }
                array_push($final,$array[0]);
        }
        echo json_encode($final);
    }


}
