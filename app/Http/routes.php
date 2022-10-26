<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(array('middleware'  => ['web','admin']), function ()
{
    
    Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\LfmController@upload');
   

    // Show integration error messages
    Route::get('/laravel-filemanager/errors', [
        'uses' => '\Unisharp\Laravelfilemanager\controllers\LfmController@getErrors',
        'as' => 'getErrors',
    ]);

    // upload
    Route::any('/laravel-filemanager/upload', [
        'uses' => 'UploadController@upload',
        'as' => 'upload',
    ]);

    // list images & files
    Route::get('/laravel-filemanager/jsonitems', [
        'uses' => 'ItemsController@getItems',
        'as' => 'getItems',
    ]);

    // folders
    Route::get('/laravel-filemanager/newfolder', [
        'uses' => 'FolderController@getAddfolder',
        'as' => 'getAddfolder',
    ]);
    Route::get('/laravel-filemanager/deletefolder', [
        'uses' => 'FolderController@getDeletefolder',
        'as' => 'getDeletefolder',
    ]);
    Route::get('/laravel-filemanager/folders', [
        'uses' => 'FolderController@getFolders',
        'as' => 'getFolders',
    ]);

    // crop
    Route::get('/laravel-filemanager/crop', [
        'uses' => 'CropController@getCrop',
        'as' => 'getCrop',
    ]);
    Route::get('/laravel-filemanager/cropimage', [
        'uses' => 'CropController@getCropimage',
        'as' => 'getCropimage',
    ]);
    Route::get('/laravel-filemanager/cropnewimage', [
        'uses' => 'CropController@getNewCropimage',
        'as' => 'getCropimage',
    ]);

    // rename
    Route::get('/laravel-filemanager/rename', [
        'uses' => 'RenameController@getRename',
        'as' => 'getRename',
    ]);

    // scale/resize
    Route::get('/laravel-filemanager/resize', [
        'uses' => 'ResizeController@getResize',
        'as' => 'getResize',
    ]);
    Route::get('/laravel-filemanager/doresize', [
        'uses' => 'ResizeController@performResize',
        'as' => 'performResize',
    ]);

    // download
    Route::get('/laravel-filemanager/download', [
        'uses' => 'DownloadController@getDownload',
        'as' => 'getDownload',
    ]);

    // delete
    Route::get('/laravel-filemanager/delete', [
        'uses' => 'DeleteController@getDelete',
        'as' => 'getDelete',
    ]);


});


Route::group([
    'namespace' => 'back',
    'prefix'    => 'admin'
], function () {
    Route::group(['middleware' => ['web','admin']], function () {
      

        /*IndexController*/
        Route::get('/', [
            'uses' => "IndexController@index",
            'as'   => 'admin.index.index'
        ]);     
        Route::post('/', [
            'uses' => "IndexController@post",
            'as'   => 'admin.index.index'
        ]);     
     // ServiceController 
        /*ServiceController*/
                Route::get('/service', [
                    'uses' => "ServiceController@index",
                    'as'   => 'admin.service.index'
                ]);
                /*ServiceController  Edit*/
                Route::any('service/edit/{id}', [
                    'uses' => "ServiceController@addEdit",
                    'as'   => 'admin.service.edit'
                ]);       
                /*ServiceController create */
                Route::any('service/create', [
                    'uses' => "ServiceController@addEdit",
                    'as'   => 'admin.service.create'
                ]);   
                Route::any('service/anyData/{type?}', [
                    'uses' => "ServiceController@anyData",
                    'as'   => 'admin.service.create'
                ]);   
                Route::get('service/delete/{id}', ['uses' => "ServiceController@delete"]);
                Route::any('service/sortImages', ['uses' => "ServiceController@sortImages"]);
                Route::any('service/deleteImages/{id}', ['uses' => "ServiceController@deleteImages"]);
                Route::any('service/setMainImages/{id}/{services}', ['uses' => "ServiceController@setMainImages"]);
                Route::any('service/getSubCat/{id?}', ['uses' => "ServiceController@getSubCat"]);
            // ServiceController catEnD

            Route::any('service/type/{approved}', [
                'uses' => "ServiceController@type",
                'as'   => 'admin.service.type.typeApproved'
            ]);   
            Route::any('service/type/{new}', [
                'uses' => "ServiceController@type",
                'as'   => 'admin.service.type.typeNew'
            ]);               
            Route::any('service/type/{blocked}', [
                'uses' => "ServiceController@type",
                'as'   => 'admin.service.type.typeBlocked'
            ]);          
              
            Route::any('service/type/{delete}', [
                'uses' => "ServiceController@type",
                'as'   => 'admin.service.type.typeDelete'
            ]);          


            Route::get('/projects', [
                'uses' => "ProjectsController@index",
                'as'   => 'admin.projects.index'
            ]);
            /*ProjectsController  Edit*/
            Route::any('projects/edit/{id}', [
                'uses' => "ProjectsController@addEdit",
                'as'   => 'admin.projects.edit'
            ]);       
            /*ProjectsController create */
            Route::any('projects/create', [
                'uses' => "ProjectsController@addEdit",
                'as'   => 'admin.projects.create'
            ]);   
            Route::any('projects/anyData', [
                'uses' => "ProjectsController@anyData",
                'as'   => 'admin.projects.create'
            ]);   

            Route::get('projects/delete/{id}', ['uses' => "ProjectsController@delete"]);
            
            Route::get('projects/delete/{id}', ['uses' => "ProjectsController@delete"]);
            Route::any('projects/sortImages', ['uses' => "ProjectsController@sortImages"]);
            Route::any('projects/deleteImages/{id}', ['uses' => "ProjectsController@deleteImages"]);
            Route::any('projects/setMainImages/{id}/{projectss}', ['uses' => "ProjectsController@setMainImages"]);
            Route::any('projects/getSubCat/{id?}', ['uses' => "ProjectsController@getSubCat"]);
        // ServiceController catEnD
        // user 
            /*UserController*/
            Route::get('/user', [
                'uses' => "UserController@index",
                'as'   => 'admin.user.index'
            ]);
            /*UserController  Edit*/
            Route::any('user/edit/{id}', [
                'uses' => "UserController@addEdit",
                'as'   => 'admin.user.edit'
            ]);       
            /*UserController create */
            Route::any('user/create', [
                'uses' => "UserController@addEdit",
                'as'   => 'admin.user.create'
            ]);   
            Route::any('user/anyData', [
                'uses' => "UserController@anyData",
                'as'   => 'admin.user.create'
            ]);   
           Route::get('user/delete/{id}', ['uses' => "UserController@delete"]);
        // end user

        // menu 
            /*menuController*/
            Route::get('/menu', [
            'uses' => "MenuController@index",
            'as'   => 'admin.menu.index'
            ]);
            /*MenuController  Edit*/
            Route::any('menu/edit/{id}', [
            'uses' => "MenuController@addEdit",
            'as'   => 'admin.menu.edit'
            ]);       
            /*MenuController create */
            Route::any('menu/create', [
            'uses' => "MenuController@addEdit",
            'as'   => 'admin.menu.create'
            ]);   
            Route::any('menu/anyData', [
            'uses' => "MenuController@anyData",
            'as'   => 'admin.menu.create'
            ]);              

            Route::get('menu/delete/{id}', ['uses' => "MenuController@delete"]);

            Route::get('menu/view/{id}', [
                'uses' => "MenuPagesController@view",
                'as'   => 'admin.menu.view'
            ]);         
            Route::get('MenuPages/isPageCheckedSave', [
                'uses' => "MenuPagesController@isPageCheckedSave",
                'as'   => 'admin.menu.isPageCheckedSave'
            ]);         
            Route::get('MenuPages/sortTable', [
                'uses' => "MenuPagesController@sortTable",
                'as'   => 'admin.menu.sortTable'
            ]);
        // menu EnD
            // pages 
            /*PagesController*/
            Route::get('/pages', [
            'uses' => "PagesController@index",
            'as'   => 'admin.pages.index'
            ]);
            /*PagesController  Edit*/
            Route::any('pages/edit/{id}', [
            'uses' => "PagesController@addEdit",
            'as'   => 'admin.pages.edit'
            ]);     
            /*PagesController  Edit*/
            Route::any('pages/edit_content/{id}/{lng?}', [
            'uses' => "PagesController@addEditContent",
            'as'   => 'admin.pages.edit'
            ]);       
            /*PagesController create */
            Route::any('pages/create', [
            'uses' => "PagesController@addEdit",
            'as'   => 'admin.pages.create'
            ]);   
            Route::any('pages/anyData', [
            'uses' => "PagesController@anyData",
            'as'   => 'admin.pages.create'
            ]);   
            Route::get('pages/delete/{id}', ['uses' => "PagesController@delete"]);
            Route::any('pages/sortTable', ['uses' => "PagesController@sortTable"]);
        // pages EnD

          // images
             Route::any('/images', [
            'uses' => "ImagesController@add",
            'as'   => 'admin.images.add'
            ]);   
             Route::any('/images/deleteImages/{id}', [
            'uses' => "ImagesController@deleteImages",
            'as'   => 'admin.images.deleteImages'
            ]);   
        // images EnD


             /*LangController*/
             Route::get('language', [
                 'uses' => "LanguageController@index",
                 'as'   => 'admin.lang.list'
             ]);
             Route::any('language/edit/{id?}', [
                 'uses' => "LanguageController@edit",
                 'as'   => 'admin.lang.edit'
             ]);
             Route::get('language/delete/{id}', ['uses' => "LanguageController@delete"]);
    });
});
Route::group([
    'namespace' => 'front',
    'middleware' => [
        'web'
    ],
], function(){
    Route::any('/auth', ['uses' => 'UserController@auth']);
    Route::any('/login/active/{token}', ['uses' => 'UserController@active']);
    // Route::any('/user', ['uses' => 'UserController@userAccount']);
    // Route::any('/reset', ['uses' => 'UserController@reset']);
    Route::any('/logout', ['uses' => 'UserController@logout']);
    // Route::any('/user/reset', ['uses' => 'UserController@logout']);
    // Route::any('/password/reset/{token}', ['uses' => 'UserController@changePassword']);
    
    Route::any('/pages/{slug}', [
            'uses' => 'PagesController@index',
            'as'   => 'front.page.index'
        ]);     
    Route::any('/services', [
        'uses' => 'ServiceController@index',
        'as'   => 'front.page.index'
    ]);        
    Route::any('/contact', [
        'uses' => 'IndexController@contact',
        'as'   => 'front.page.index'
    ]);       
    Route::any('/projects', [
        'uses' => 'ProjectsController@index',
        'as'   => 'front.page.index'
    ]);    
    Route::any('/projects/{id}', [
        'uses' => 'ProjectsController@view',
        'as'   => 'front.page.index'
    ]);    
    Route::get('/', [
        'uses' => 'IndexController@index',
        'as'   => 'front.index'
    ]);
    // Route::any('/admin', ['uses' => 'IndexController@index']);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
