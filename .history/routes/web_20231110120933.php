<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\TicketController;
use App\Http\Controllers\Backend\InventoryController;
use App\Http\Controllers\Backend\purchaseOrderController;
use App\Http\Controllers\Backend\UserRolesController;
use App\Http\Controllers\Backend\MaterialController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');s
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/about-us', [WebsiteController::class,'aboutUs'])->name('about.us');
Route::get('/service', [WebsiteController::class,'services'])->name('services');
Route::get('/contact-us', [WebsiteController::class,'contactUs'])->name('contact.us');
Route::post('/store/appointment', [WebsiteController::class,'storeAppointment'])->name('store.appointment');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::get('/admin/calendar', [AdminController::class, 'AdminCalendar'])->name('admin.calendar');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');
    Route::get('/admin/inbox', [AdminController::class, 'AdminInbox'])->name('admin.inbox');
    Route::get('/admin/read/{id}', [AdminController::class,'AdminRead'])->name('read.email');
    Route::get('/admin/add_customer_from_inbox', [AdminController::class, 'addCustomerFromInbox'])->name('add.customer.from.inbox');
    Route::get('/admin/compose', [AdminController::class,'composedMail'])->name('compose.email');
});

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::controller(TicketController::class)->group(function(){
        Route::get('/tickets', 'IndexTicket')->name('index.ticket');
        Route::get('/tickets/create', 'CreateTicket')->name('create.ticket');
        Route::post('/tickets/store', 'storeTicket')->name('store.ticket');
        Route::get('/tickets/view{id}', 'ViewTicket')->name('view.ticket');
        Route::put('/tickets/update{id}', 'UpdateTicket')->name('update.ticket');
        Route::get('/tickets/{id}', 'DestroyTicket')->name('destroy.ticket');
        Route::get('/get-customer-info/{id}', 'getCustomerInfo');
        Route::get('/get-materials-info/{id}', 'getMaterialsInfo');
        Route::get('/get-equipment-info/{id}', 'getEquipmentInfo');
        Route::get('/getUnitType/{itemNumber}', 'getUnitType');
        Route::get('/getEquipmentUnitType/{itemNumber}', 'getEquipmentUnitType');
    });
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::controller(CustomerController::class)->group(function(){
        Route::get('/customer', 'IndexCustomer')->name('index.customer');
        Route::get('/add/customer', 'AddCustomer')->name('add.customer');
        Route::post('/store/customer', 'StoreCustomer')->name('store.customer');
        Route::get('/view/customer{id}', 'ViewCustomer')->name('view.customer');
        Route::put('/update/customer{id}', 'UpdateCustomer')->name('update.customer');
        Route::get('/delete/customer{id}', 'DeleteCustomer')->name('delete.customer');
        Route::get('/getCustomer/Data/{id}', 'getCustomerData');
    });
});

Route::middleware(['auth', 'role:admin'])->group(function(){
Route::controller(InventoryController::class)->group(function(){
        Route::get('/register/materials', 'RegisterItem')->name('register.materials');
        Route::get('/register/equipment', 'RegisterEquipment')->name('register.equipment');
        Route::get('/materials/inventory', 'MaterialsListTable')->name('materials.inventory');
        Route::post('/store/materials', 'StoreItem')->name('store.materials');
        Route::get('/view/materials/{item_no}', 'ViewMaterialsDetail')->name('view.materials.detail');
        Route::get('/equipment/inventory', 'EquipmentListTable')->name('equipment.inventory');
        Route::post('/store/equipment', 'StoreEquipment')->name('store.equipment');
    });
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(PurchaseOrderController::class)->group(function () {
        Route::get('/index/purchaseOrder', 'OrdersList')->name('index.purchaseOrder');
        Route::get('/add/purchaseOrder/Materials', 'PurchaseOrderMaterials')->name('add.purchaseOrder.materials');
        Route::get('/add/purchaseOrder/Equipment', 'PurchaseOrderEquipment')->name('add.purchaseOrder.equipment');
        Route::post('/purchaseOrder/Materials', 'StorePurchaseOrderMaterials')->name('store.purchaseOrders.materials');
        Route::get('/view/purchaseOrderMaterials/{order_no}', 'viewPurchaseOrderMaterials')->name('view.purchaseOrderMaterials');
        Route::get('/delete/purchaseOrderMaterials/{id}', 'DeleteOrdersMaterial')->name('delete.purchaseOrderMaterials');
    });
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(MaterialController::class)->group(function () {
        Route::get('/get-materials', 'getMaterials');
    });
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(EmailController::class)->group(function () {
        Route::post('/compose/email', 'sendEmail')->name('send.email');
    });
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(UserRolesController::class)->group(function () {
        Route::get('/index/userRoles', 'index')->name('index.user.roles');
    });
});
