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
        $array=["pablo","charbel","avo","pablo","alaa","dani","Tawil"];
        $m=count($array)/2;
        $gen=[];
        $final=[];
        if (is_numeric($m)){
            while(count($array)!=0){
                array_push($gen,$array[0],$array[1]);
                array_push($final,$gen);
                unset($gen[0]);
                unset($gen[1]);
                unset($array[0]);
                unset($array[1]);   
            }
        }
        else{
            while(count($array)!=1){        
                    array_push($gen,array_pop($array),array_pop($array));
                    array_push($final,$gen);
                    unset($gen[0]);
                    unset($gen[1]);
                    unset($array[0]);
                    unset($array[1]);
                  
                }
                array_push($final,$array[0]);
        }
        echo $final;
    }


}
