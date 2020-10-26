<?php



Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::get('/project/memberrequest', 'PostFoundItemController@memberNotification');
Route::get('/project/memberrequest', 'PostFoundItemController@viewMember');

Route::get('/project/foundnotification', 'PostFoundItemController@viewFoundItem');
Route::get('/project/foundnotification', 'PostFoundItemController@foundnotification');
Route::get('/project/lostnotification', 'PostLostItemController@viewLostItem');
Route::get('/project/lostnotification', 'PostLostItemController@lostnotification');

Route::post('/admin/createProfile', 'AdminController@store3');
Route::get('/admin/createProfile', 'AdminController@createProfile');

Route::get('/admin/showadminprofile', 'AdminController@showAdminProfile');
Route::get('/admin/showadminprofile', 'AdminController@viewProfile');
Route::get('/admin/editadminprofile', 'AdminController@editProfile');


//project
//index

Route::group(['middleware' => ['auth']],function(){

//create account
Route::get('/createAccount', 'ProjectController@createAccount');

Route::get('/project/index', 'PostFoundItemController@viewIndex');

//show profile
Route::get('/project/showProfile', 'ProfileController@viewProfile');



//post lost item
Route::post('/project/postLostItem', 'PostLostItemController@store1');
Route::get('/project/lostnotification', 'PostFoundItemController@viewLostItem');


//create Profile
Route::post('/createAccount', 'ProfileController@store');


Route::post('/project/search', 'PostController@search');

Route::get('/project/calculator', 'PostController@catCalculator');

Route::get('/project/clearance', 'PostController@catClearance');

Route::get('/project/idcard', 'PostController@catIdcard');

Route::get('/project/mobile', 'PostController@catMobile');

Route::get('/project/others', 'PostController@catOthers');

Route::get('/project/pendrive', 'PostController@catPendrive');

Route::get('/project/walet', 'PostController@catWalet');

//post found item
Route::get('/project/postfoundItem', function () {
 return view('/project/postfoundItem');
});
Route::post('/project/postfoundItem', 'PostFoundItemController@store');
Route::get('/project/foundnotification', 'PostFoundItemController@viewFoundItem');

//edit found item
Route::get('/project/editfounditem&{id}', 'PostFoundItemController@edit');
Route::post('/project/editfounditem&{id}', 'PostFoundItemController@editFoundItem');

//delete found item
Route::get('/project/deletefounditem&{id}', 'PostFoundItemController@delete');
Route::post('/project/deletefounditem&{id}', 'PostFoundItemController@delete');

//post lost item
Route::get('/project/postlostItem', function () {
 return view('/project/postlostItem');
});
Route::post('/project/postlostItem', 'PostLostItemController@store1');
Route::get('/project/lostnotification', 'PostLostItemController@viewLostItem');

//edit lost item
Route::get('/project/editlostitem&{id}', 'PostLostItemController@edit');
Route::post('/project/editlostitem&{id}', 'PostLostItemController@editLostItem');

//delete lost item
Route::get('/project/deletelostitem&{id}', 'PostLostItemController@delete');
Route::post('/project/deletelostitem&{id}', 'PostLostItemController@delete');

Route::get('/project/removelost&{id}', 'PostLostItemController@remove');
Route::post('/project/removelost&{id}', 'PostLostItemController@remove');

Route::get('/project/removemem&{id}', 'PostFoundItemController@removeMember');
Route::post('/project/removemem&{id}', 'PostFoundItemController@removeMember');


Route::get('/project/removefound&{id}', 'PostFoundItemController@remove');
Route::post('/project/removefound&{id}', 'PostFoundItemController@remove');

//edit pic
Route::get('/project/editimage&{id}', 'ProfileController@edit');
Route::post('/project/editimage&{id}', 'ProfileController@editImage');

Route::get('/project/editprofile&{id}', 'ProfileController@edit1');
Route::post('/project/editprofile&{id}', 'ProfileController@editProfile');

Route::get('/admin/editadmin&{id}', 'AdminController@edit2');
Route::post('/admin/editadmin&{id}', 'AdminController@editAdminProfile');

Route::get('/admin/editadminimage&{id}', 'AdminController@edit');
Route::post('/admin/editadminimage&{id}', 'AdminController@editImage');

Route::get('/project/approvemem&{id}', 'PostFoundItemController@approveMember');

Route::get('/project/approve&{id}', 'PostFoundItemController@approve');
Route::get('/project/approve1&{id}', 'PostLostItemController@approve1');

Route::get('/project/adminindex', 'PostFoundItemController@indexadminfound');
Route::get('/project/adminindex', 'PostLostItemController@indexadminlost');
Route::get('/project/adminindex', 'PostFoundItemController@adminIndex');


});
