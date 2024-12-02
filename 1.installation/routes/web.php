<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return [
            'msg'=>'Hello Krishna !'
    ];  
});
 

// Route::get("/user",function(){

//     // return  view('krishna');
//    return redirect("/");

//     return [
//         [
//             "color"=>'red'
//         ],
//         [
//             "color"=>'pink'
//         ]
//     ];
// });

// group routes


// Route::prefix("/api/v1")->group(function(){
//     Route::get("/create",function(){
//         return [
//             'msg'=>'this is create route'
//         ];
//     });
//     Route::get("/edit",function(){
//         return [
//             'msg'=>'this is edit route'
//         ];
//     });
// });



// params

// Route::get("/post/{id}",function($id){
//     return [
//             'msg'=>'post id is '.$id
//     ];
// });     

// Route::get("/post/{id}",function(int $id){
//     return [
//             'msg'=>'post id is '.$id
//     ];
// });     

// Route::get("/post/{id}",function(string $id){
//     return [
//             'msg'=>'post id is '.$id
//     ];
// });     


// Route::get("/post/{id}",function(bool $id){
//     return [
//             'msg'=>'post id is '.$id
//     ];
// });     

    // Route::get("/post/{id}",function($id){

    //     return [
    //                     'msg'=>'post id num is '.$id
    //             ];   

    // })
    // // ->where('id','[0-4]+');
    
    //  ->whereNumber('id');

    
    // Route::get("/post/{str}",function($str){

    //     return [
    //                     'msg'=>'post id str is '.$str
    //             ];   

    // })->whereAlpha('str');

      
    // Route::get("/post/{dd}",function($dd){

    //     return [
    //                     'msg'=>'post id dd is '.$dd
    //             ];   

    // })->whereAlphaNumeric('dd');

    //  optional routing


//     Route::get("/user/{userId?}",function($userId=0){
//             return [
//                         'msg'=>'user id  is '.$userId
//                 ]; 
//     });

    

//     Route::get("/user/{id}/{userId?}",function($userId=0,$id){
//         return [
//                     'msg'=>'user '.$id.'  is '.$userId
//             ]; 
// });



Route::get("/user/{userId?}/comments",function($userId){
    return [
        'msg'=>'user comment page of    '.$userId
]; 
});