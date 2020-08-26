<?php

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
//  Frontend 
Route::group(['namespace'=>'Frontend'],function(){
	Route::get('/','HomeController@index');
	Route::get('/mission','PagesController@mission');
	Route::get('/our-history','PagesController@ourHistory');
	Route::get('/content','PagesController@community');
	Route::get('/community','PagesController@community');
	Route::get('/community/{id}','PagesController@communityCategory');
	Route::get('/community/details/{id}','PagesController@communityDetails');
	Route::get('/art','PagesController@art');
	Route::get('/video','PagesController@video');
	Route::get('/art/{id}','PagesController@artDetails');
	Route::get('/about-us','PagesController@aboutUs');
	Route::get('/team','PagesController@team');
	Route::get('/team/{id}','PagesController@teamDetails');
	Route::get('/story','PagesController@story');

	Route::get('/event-gallery','PagesController@eventGallery');
	Route::get('/event','PagesController@event');
	Route::get('/event/{id}','PagesController@eventDetails');


	Route::get('/library/category/{id}','PagesController@libraryCategory');
	Route::get('/library/{id}','PagesController@libraryDetails');
 

	Route::get('/news','PagesController@news');
	Route::get('/news/{id}','PagesController@newsDetails');
	Route::get('/shop','PagesController@shop');
	Route::get('/shop/{id}','PagesController@shopDetails');
	Route::get('/shop/category/{id}','PagesController@shopCategory');
	Route::get('/blog','PagesController@blog');
	Route::get('/blog/{id}','PagesController@blogDetails');
	Route::get('/mentor-program/','PagesController@mentorProgram');
	Route::get('/contact','PagesController@contact');
	Route::post('/contact','PagesController@contactSave');
	Route::get('/search','PagesController@search');
	Route::get('/story/details/{id}','PagesController@storyDetails');
	// Contact
	Route::get('/subscribe','PagesController@subscribe');
	Route::post('/subscribe','PagesController@subscribePost');
	Route::get('/leave-a-testimonial-or-question','PagesController@testimonial');
});

//  Login And Registration with facebook and gmail

Route::get('register/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('register/facebook/callback', 'Auth\RegisterController@handleProviderCallback');

Route::get('logout','HomeController@logout');

//  Backend & Admin 


//============================ Backend Route Start ============================//
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm');
// Route::post('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::get('admin/register', 'Auth\AdminRegisterController@showRegistrationForm');
Route::post('admin/register', 'Auth\AdminRegisterController@register')->name('admin.register');

	Route::group(['middleware'=>['assign.guard:admin,admin/login']],function(){
		Route::group(['namespace'=>'Backend'],function(){
		Route::prefix('admin')->group(function () {
			Route::get('/dashboard','HomeController@index')->name('dashboard');
			Route::get('/users','UsersController@showUsers');
			Route::resource('/roles','RoleController');
			Route::resource('/permissions','PermissionController');
			Route::get('/delete-users/{id}','UsersController@destroyUsers');
			Route::get('/edit-users/{id}', 'UsersController@editUsers');
			Route::POST('/edit-users/{id}', 'UsersController@updateUsers');
			Route::get('/change-password', 'UsersController@chnagePassword');
			Route::post('/change-password', 'UsersController@savePassword');
			Route::resource('admin','AdminController');
			Route::get('admin/index','AdminController@index');







			//  Website route
			

			Route::get('subscriber','SubscriberController@index');
			Route::get('deleteimage/{newsId}/{id}','SubscriberController@newsImageDelete');
			// Route::get('deleteimage/{id}','SubscriberController@newsImageDelete');
			Route::resource('setting','SettingController');
			Route::resource('slider','SliderController');
			Route::resource('service','ServiceController');
			Route::resource('project_category','ProjectCategoryController');
			Route::resource('project','ProjectController');
			Route::resource('aboutus','AboutusController');
			Route::resource('mission','MissionController');
			Route::resource('history','HistoryController');
			Route::resource('news','NewsController');
			Route::get('newsimages/{id}','NewsImagesController@index');
			Route::post('newsimages/store','NewsImagesController@store');
			Route::get('newsimages/delete/{id}','NewsImagesController@blogimageDelete');
			Route::resource('blog','BlogController');
			Route::get('blogimage/{id}','BlogImageController@index');
			Route::post('blogimage/store','BlogImageController@store');
			Route::get('blogimage/delete/{id}','BlogImageController@blogimageDelete');
			Route::resource('partner','PartnerController');
			Route::resource('event','EventController');
			Route::resource('story','StoryController');
			Route::resource('gallery','GalleryController');
			Route::resource('blogcategory','BlogPostCategoryController');
			Route::resource('community','CommunityController');
			Route::resource('art','ArtController');
			Route::resource('artcategory','ArtsCategoryController');
			Route::resource('career','CareerController');
			Route::resource('course','CourseController');
			Route::resource('product_category','ProductCategoryController');
			Route::resource('product','ProductController');
			Route::resource('team','TeamController');
			Route::resource('section','SectionController');
			Route::resource('sectiontwo','SectionTwoController');
			Route::resource('sectionevent','SectionEventController');
			Route::resource('sectionshop','SectionShopController');
			Route::resource('sectionvoice','SectionVoicController');
			Route::resource('video','VideoController');
			Route::resource('librarycategory','LibraryCategoryController');
			Route::resource('library','LibraryController');
			

		});
	});
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

