<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'IndexProductController@allView');

// // 新增
// Route::get('/insert',function(){
//     DB::insert('insert into test(title,description) values(?, ?)',['最新消息','這是一則勁爆的消息']);
// });
// // 讀
// Route::get('/read', function(){
//     $results = DB::select('select * from test where id = ?',[1]);


//     foreach($results as $new){
//         return $new->title.$new->description;
//     }
// });
// // 刪除
// Route::get('/delete',function(){
//     $deleted = DB::delete('delete from test where id = ?',[1]);
//     return $deleted;
// });
// // 更新
// Route::get('/update',function(){
//     $updated = DB::update('update test set title = "更新最新消息" where id = ?',[1]);
//     return $updated;
// });

use App\Test; //引用model

//表示會撈到所有裡面的資料 all回傳型態陣列
Route::get('/read', function () {
    // $results = Test::all();
    // foreach ($results as $new) {
    //     return $new->title;
    // }


});

// 找特定資料
Route::get('/find', function () {

    // $results = Test::find(2);
    // return $results->id;
    // mkdir("../storage", 0777, true);

});


Route::get('/findwhere', function () {
    // $post = Test::where('id','>',16)->orderBy('nameClass','desc')->take(2)->get();
    // return $post;
});
/*
where('id',1)等於 where id=1
where('id','>',1)等於 where id>1
orderBy('title','desc') 等於 order by title desc
take(1) 限制從頭開始算幾筆資料
get()取得資料
*/

// 新增s
Route::get('/inserdata', function () {

    // $flight = Test::find(1);
    // $flight->title = 'NewFlightName';
    // $flight->description = 'asdasdd';
    // $flight->save();
    $post = Test::find(49);

    $post->nameClass = '咖啡';
    $post->save();
    return $post;

});

Route::get('/create', function(){
    Test::create(['title'=>'利用create新增的','description'=>'create的描述']);
});