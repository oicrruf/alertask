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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/dashboard', 'HomeController@admin')->name('dashboard');

//Theme Admin Gull 
Route::get('/gull', function () {
    return view('dashboard.dashboardv1');
})->middleware('admin');
// Route::view('/', 'starter')->name('starter');
Route::get('gull/large-compact-sidebar/dashboard/dashboard1', function () {
    // set layout sesion(key)
    session(['layout' => 'compact']);
    return view('dashboard.dashboardv1');
})->name('compact')->middleware('admin');

Route::get('gull/large-sidebar/dashboard/dashboard1', function () {
    // set layout sesion(key)
    session(['layout' => 'normal']);
    return view('dashboard.dashboardv1');
})->name('normal')->middleware('admin');

Route::get('gull/horizontal-bar/dashboard/dashboard1', function () {
    // set layout sesion(key)
    session(['layout' => 'horizontal']);
    return view('dashboard.dashboardv1');
})->name('horizontal')->middleware('admin');


Route::view('gull/dashboard1', 'dashboard.dashboardv1')->name('dashboard_version_1')->middleware('admin');
Route::view('gull/dashboard2', 'dashboard.dashboardv2')->name('dashboard_version_2')->middleware('admin');
Route::view('gull/dashboard3', 'dashboard.dashboardv3')->name('dashboard_version_3')->middleware('admin');
Route::view('gull/dashboard4', 'dashboard.dashboardv4')->name('dashboard_version_4')->middleware('admin');

// uiKits
Route::view('gull/uikits/alerts', 'uiKits.alerts')->name('alerts')->middleware('admin');
Route::view('gull/uikits/accordion', 'uiKits.accordion')->name('accordion')->middleware('admin');
Route::view('gull/uikits/buttons', 'uiKits.buttons')->name('buttons')->middleware('admin');
Route::view('gull/uikits/badges', 'uiKits.badges')->name('badges')->middleware('admin');
Route::view('gull/uikits/carousel', 'uiKits.carousel')->name('carousel')->middleware('admin');
Route::view('gull/uikits/lists', 'uiKits.lists')->name('lists')->middleware('admin');
Route::view('gull/uikits/pagination', 'uiKits.pagination')->name('pagination')->middleware('admin');
Route::view('gull/uikits/popover', 'uiKits.popover')->name('popover')->middleware('admin');
Route::view('gull/uikits/progressbar', 'uiKits.progressbar')->name('progressbar')->middleware('admin');
Route::view('gull/uikits/tables', 'uiKits.tables')->name('tables')->middleware('admin');
Route::view('gull/uikits/tabs', 'uiKits.tabs')->name('tabs')->middleware('admin');
Route::view('gull/uikits/tooltip', 'uiKits.tooltip')->name('tooltip')->middleware('admin');
Route::view('gull/uikits/modals', 'uiKits.modals')->name('modals')->middleware('admin');
Route::view('gull/uikits/NoUislider', 'uiKits.NoUislider')->name('NoUislider')->middleware('admin');
Route::view('gull/uikits/cards', 'uiKits.cards')->name('cards')->middleware('admin');
Route::view('gull/uikits/cards-metrics', 'uiKits.cards-metrics')->name('cards-metrics')->middleware('admin');

// extra kits
Route::view('gull/extrakits/imageCroper', 'extraKits.imageCroper')->name('imageCroper')->middleware('admin');
Route::view('gull/extrakits/loader', 'extraKits.loader')->name('loader')->middleware('admin');
Route::view('gull/extrakits/laddaButton', 'extraKits.laddaButton')->name('laddaButton')->middleware('admin');
Route::view('gull/extrakits/toastr', 'extraKits.toastr')->name('toastr')->middleware('admin');
Route::view('gull/extrakits/sweetAlert', 'extraKits.sweetAlert')->name('sweetAlert')->middleware('admin');
Route::view('gull/extrakits/tour', 'extraKits.tour')->name('tour')->middleware('admin');
Route::view('gull/extrakits/upload', 'extraKits.upload')->name('upload')->middleware('admin');


// Apps
Route::view('gull/apps/invoice', 'apps.invoice')->name('invoice')->middleware('admin');
Route::view('gull/apps/inbox', 'apps.inbox')->name('inbox')->middleware('admin');
Route::view('gull/apps/chat', 'apps.chat')->name('chat')->middleware('admin');
Route::view('gull/apps/calendar', 'apps.calendar')->name('calendar')->middleware('admin');

// forms
Route::view('gull/forms/smartWizard', 'forms.smartWizard')->name('smartWizard')->middleware('admin');
Route::view('gull/forms/tagInput', 'forms.tagInput')->name('tagInput')->middleware('admin');
Route::view('gull/forms/forms-basic', 'forms.forms-basic')->name('forms-basic')->middleware('admin');
Route::view('gull/forms/form-layouts', 'forms.form-layouts')->name('form-layouts')->middleware('admin');
Route::view('gull/forms/form-input-group', 'forms.form-input-group')->name('form-input-group')->middleware('admin');
Route::view('gull/forms/form-validation', 'forms.form-validation')->name('form-validation')->middleware('admin');
Route::view('gull/forms/form-editor', 'forms.form-editor')->name('form-editor')->middleware('admin');

// Charts
Route::view('gull/charts/echarts', 'charts.echarts')->name('echarts')->middleware('admin');

// datatables
Route::view('gull/datatables/basic-tables', 'datatables.basic-tables')->name('basic-tables')->middleware('admin');

// sessions
Route::view('gull/sessions/signIn', 'sessions.signIn')->name('signIn')->middleware('admin');
Route::view('gull/sessions/signUp', 'sessions.signUp')->name('signUp')->middleware('admin');
Route::view('gull/sessions/forgot', 'sessions.forgot')->name('forgot')->middleware('admin');

// others
Route::view('gull/others/notFound', 'others.notFound')->name('notFound')->middleware('admin');
Route::view('gull/others/user-profile', 'others.user-profile')->name('user-profile')->middleware('admin');
Route::view('gull/others/starter', 'starter')->name('starter')->middleware('admin');