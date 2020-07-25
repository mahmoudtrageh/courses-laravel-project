<?php

/* Site Routes */

Route::group(['namespace' => 'Site'], function () {

    Route::get('', 'IndexController@index')->name('site-index');
    Route::get('course-page/{id}/{category}', 'IndexController@course')->name('course-page');
    Route::get('payment/{id}/{category}', 'IndexController@payment')->name('payment');
    Route::get('contact', 'IndexController@contact')->name('contact');
    
    Route::get('/search/{category}', 'IndexController@courses')->name('search');

    Route::post('/register/{category}', 'IndexController@register')->name('register-course');
    Route::post('/pay-bank/{email}', 'IndexController@payBank')->name('pay-bank');

    // Route::post('/pay-data', 'IndexController@payData')->name('pay-data');

    Route::post('/paytabs_response', 'IndexController@paytabsResponse')->name('paytabs-response');

    Route::get('courses/{category}', 'IndexController@courses')->name('courses');
    
    Route::get('about', 'IndexController@about')->name('about');

    Route::post('send-contact', 'IndexController@sendContact')->name('send-contact');

    Route::get('/404','IndexController@customError')->name('custom-error');

        Route::get('set-lang/{lang}', 'IndexController@change_lang')->name('site.change.lang');

});

// admin

Route::group(['namespace' => 'Admin'], function () {
    

    Route::get('/login', 'AuthController@index')->name('get.login');
    Route::post('/login', 'AuthController@login')->name('post.login');
    Route::get('/logout', 'AuthController@logout')->name('logout');


    Route::get('admin', 'IndexController@index')->name('admin-index');

    Route::group(['middleware' => 'admin'], function () {

    Route::get('admin/registers', 'IndexController@registers')->name('admin-registers');

    Route::get('admin/payments', 'IndexController@payments')->name('admin-payments');

    Route::post('/update-status', 'IndexController@updateStatus')->name('update-status');

    Route::get('/404','IndexController@customError')->name('custom-error');

        Route::get('admin/admins', 'AdminsController@admins')->name('admins');
        Route::post('admin/admins/add-admin', 'AdminsController@add')->name('add-admin');
        Route::post('admin/admins/edit-admin', 'AdminsController@edit')->name('edit-admin');
        Route::post('admin/admins/delete-admin', 'AdminsController@delete')->name('delete-admin');

        Route::get('admin/settings', 'SettingsController@index')->name('settings');
        Route::post('/edit-images', 'SettingsController@editImage')->name('edit-image');
        Route::post('/edit-details', 'SettingsController@editDetail')->name('edit-detail');

        Route::get('search-courses', 'CoursesController@index')->name('search-courses');


        Route::post('/add-new', 'SettingsController@addNew')->name('add-new');
        Route::post('/edit-new', 'SettingsController@editNew')->name('edit-new');
        Route::post('/delete-new', 'SettingsController@deleteNew')->name('delete-new');


         Route::post('/add-instructor', 'CoursesController@addInstructor')->name('add-instructor');
        Route::post('/edit-instructor', 'CoursesController@editInstructor')->name('edit-instructor');
        Route::post('/delete-instructor', 'CoursesController@deleteInstructor')->name('delete-instructor');

        
        Route::post('/header-detail', 'SettingsController@editHeaderDetail')->name('edit-header');

        Route::post('/add-first-slider', 'CoursesController@addFirstSlider')->name('add-first-slider');
        Route::post('/edit-first-slider', 'CoursesController@editFirstSlider')->name('edit-first-slider');
        Route::post('/delete-first-slider', 'CoursesController@deleteFirstSlider')->name('delete-first-slider');

        Route::get('admin/sliders', 'SliderController@index')->name('sliders');
        Route::post('/add-second-slider', 'SliderController@addSecondSlider')->name('add-second-slider');
        Route::post('/edit-second-slider', 'SliderController@editSecondSlider')->name('edit-second-slider');
        Route::post('/delete-second-slider', 'SliderController@deleteSecondSlider')->name('delete-second-slider');

        Route::post('/add-third-slider', 'SliderController@addThirdSlider')->name('add-third-slider');
        Route::post('/edit-third-slider', 'SliderController@editThirdSlider')->name('edit-third-slider');
        Route::post('/delete-third-slider', 'SliderController@deleteThirdSlider')->name('delete-third-slider');

        Route::post('/add-fourth-slider', 'SliderController@addFourthSlider')->name('add-fourth-slider');
        Route::post('/edit-fourth-slider', 'SliderController@editFourthSlider')->name('edit-fourth-slider');
        Route::post('/delete-fourth-slider', 'SliderController@deleteFourthSlider')->name('delete-fourth-slider');

        Route::get('admin/courses', 'CoursesController@index')->name('admin-courses');
        Route::post('/add-course', 'CoursesController@addCourse')->name('add-course');
        Route::post('/edit-course', 'CoursesController@editCourse')->name('edit-course');
        Route::post('/delete-course', 'CoursesController@deleteCourse')->name('delete-course');

        Route::post('/edit-register', 'IndexController@editRegister')->name('edit-register');
        Route::post('/delete-register', 'IndexController@deleteRegister')->name('delete-register');

        Route::get('admin/events', 'EventController@index')->name('events');
        Route::post('/add-event', 'EventController@addEvent')->name('add-event');
        Route::post('/edit-event', 'EventController@editEvent')->name('edit-event');
        Route::post('/delete-event', 'EventController@deleteEvent')->name('delete-event');

        Route::post('/add-bank', 'IndexController@addBank')->name('add-bank');
        Route::post('/edit-bank', 'IndexController@editBank')->name('edit-bank');
        Route::post('/delete-bank', 'IndexController@deleteBank')->name('delete-bank');


        Route::get('admin/about', 'AboutController@index')->name('admin-about');
        Route::post('/edit-about', 'AboutController@editAbout')->name('edit-about');

        Route::get('admin/contact', 'ContactController@index')->name('admin-contact');
        Route::post('edit-contact', 'ContactController@editContact')->name('edit-contact');

        Route::get('admin/socials', 'SocialController@index')->name('admin-socials');
        Route::post('edit-social', 'SocialController@editSocial')->name('edit-social');
    
        Route::get('admin/conditions', 'IndexController@conditions')->name('admin-conditions');
        Route::post('edit-condition', 'IndexController@editCondition')->name('edit-condition');

        Route::get('admin/services', 'IndexController@services')->name('admin-services');
        Route::post('edit-services', 'IndexController@editServices')->name('edit-services');

        Route::get('admin/links', 'IndexController@links')->name('admin-links');
        Route::post('edit-links', 'IndexController@editLinks')->name('edit-links');

        Route::post('/edit-newsletter', 'SettingsController@editNewsletter')->name('edit-newsletter');

        Route::post('get-notifications', 'NotificationsController@get_notifications')->name('get.notifications');
        Route::get('get-messages', 'IndexController@getMessage')->name('get.messages');
        Route::post('delete-message', 'IndexController@deleteMessage')->name('delete-message');
        Route::post('/update-message', 'IndexController@updateMessage')->name('update-message');

        
        Route::get('notifications', 'NotificationsController@notifications')->name('notifications');
        Route::post('delete-notification', 'NotificationsController@deleteNotification')->name('delete.notification');

        Route::post('read', 'NotificationsController@read')->name('read.notifications');
        Route::post('read-messages', 'IndexController@readMessage')->name('read.messages');

});

});