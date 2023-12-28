<?php

use App\Livewire\Admin\AdminAddBlogComponent;
use App\Livewire\Admin\AdminAddBrandComponent;
use App\Livewire\Admin\AdminAddCategoryComponent;
use App\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Livewire\Admin\AdminAddProductComponent;
use App\Livewire\Admin\AdminBlogsComponent;
use App\Livewire\Admin\AdminBrandsComponent;
use App\Livewire\Admin\AdminCategoryComponent;
use App\Livewire\Admin\AdminDashboardComponent;
use App\Livewire\Admin\AdminEditBrandComponent;
use App\Livewire\Admin\AdminEditCategoryComponent;
use App\Livewire\Admin\AdminEditHomeSliderComponent;
use App\Livewire\Admin\AdminEditProductComponent;
use App\Livewire\Admin\AdminHomeCategoryComponent;
use App\Livewire\Admin\AdminHomeSliderComponent;
use App\Livewire\Admin\AdminProductComponent;
use App\Livewire\BrandsComponent;
use App\Livewire\CartComponent;
use App\Livewire\CategoriesComponent;
use App\Livewire\CategoryComponent;
use App\Livewire\CheckoutComponent;
use App\Livewire\DetailsComponent;
use App\Livewire\HomeController;
use App\Livewire\PrivacyPolicyComponent;
use App\Livewire\ReturnPolicyComponent;
use App\Livewire\SearchComponent;
use App\Livewire\ShopComponent;
use App\Livewire\SupportPolicyComponent;
use App\Livewire\TermConditionComponent;
use App\Livewire\User\AffiliateComponent;
use App\Livewire\User\CompareComponent;
use App\Livewire\User\MyProfileComponent;
use App\Livewire\User\MyWalletComponent;
use App\Livewire\User\OrdersComponent;
use App\Livewire\User\PackagesComponent;
use App\Livewire\User\PurchaseHistoryComponent;
use App\Livewire\User\RecieveRefundRequestComponent;
use App\Livewire\User\SendRefundRequestComponent;
use App\Livewire\User\ShopSettingComponent;
use App\Livewire\User\SupportTicketComponent;
use App\Livewire\User\UploadFilesComponent;
use App\Livewire\User\UserDashboardComponent;
use App\Livewire\User\WishListComponent;
use App\Livewire\WishlistComponent as LivewireWishlistComponent;
use Illuminate\Support\Facades\Route;

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

// Route::get('welcome', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class);

Route::get('/shop',ShopComponent::class);

Route::get('/cart',CartComponent::class)->name('product.cart');

Route::get('/checkout',CheckoutComponent::class);

Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

Route::get('/product-category/{category_slug}',CategoryComponent::class)->name('product.category');

Route::get('/search',SearchComponent::class)->name('product.search');
Route::get('/wishlist',LivewireWishlistComponent::class)->name('product.wishlist');
Route::get('/terms',TermConditionComponent::class)->name('terms');
Route::get('/return-policy',ReturnPolicyComponent::class)->name('return-policy');
Route::get('/privacy-policy',PrivacyPolicyComponent::class)->name('privacy-policy');
Route::get('/support-policy',SupportPolicyComponent::class)->name('support-policy');
Route::get('/brands',BrandsComponent::class)->name('brands');
Route::get('/categories',CategoriesComponent::class)->name('categories');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
// for customer
Route::prefix('customer')->middleware(['auth:sanctum','verified'])->group(function () {
   Route::get('/dashboard',UserDashboardComponent::class)->name('customer.dashboard');
});

// for seller
Route::prefix('seller')->middleware(['auth:sanctum','verified'])->group(function () {
   Route::get('/dashboard',UserDashboardComponent::class)->name('seller.dashboard');
   Route::get('/purchaseHistory',PurchaseHistoryComponent::class)->name('seller.purchaseHistory');
   Route::get('/refundRequest',SendRefundRequestComponent::class)->name('seller.refundRequest');
   Route::get('/wishlist',WishListComponent::class)->name('seller.wishlist');
   Route::get('/compare',CompareComponent::class)->name('seller.compare');
   Route::get('/packages',PackagesComponent::class)->name('seller.packages');
   Route::get('/uploadFiles',UploadFilesComponent::class)->name('seller.uploadFiles');
   Route::get('/orders',OrdersComponent::class)->name('seller.orders');
   Route::get('/recieveRefundRequest',RecieveRefundRequestComponent::class)->name('seller.recieveRefundRequest');
   Route::get('/shopSetting',ShopSettingComponent::class)->name('seller.shopSetting');
   Route::get('/affiliate',AffiliateComponent::class)->name('seller.affiliate');
   Route::get('/myWallet',MyWalletComponent::class)->name('seller.myWallet');
   Route::get('/supportTicket',SupportTicketComponent::class)->name('seller.supportTicket');
   Route::get('/manageProfile',MyProfileComponent::class)->name('seller.manageProfile');









});

// for admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function () {
   Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
   Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
   Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
   Route::get('/admin/category/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
   Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
   Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.addproduct');
   Route::get('/admin/product/edit/{product_slug}',AdminEditProductComponent::class)->name('admin.editproduct');
   Route::get('/admin/brands',AdminBrandsComponent::class)->name('admin.brands');
   Route::get('/admin/brands/add',AdminAddBrandComponent::class)->name('admin.addbrand');
   Route::get('/admin/brand/edit/{id}', AdminEditBrandComponent::class)->name('admin.editbrand');
   Route::get('/admin/slider',AdminHomeSliderComponent::class)->name('admin.homeslider');
   Route::get('/admin/slider/add',AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
   Route::get('/admin/slider/edit/{slide_id}',AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');
   Route::get('/admin/home-categories',AdminHomeCategoryComponent::class)->name('admin.homecategories');

   Route::get('/admin/blogs',AdminBlogsComponent::class)->name('admin.blogs');
   Route::get('/admin/addBlog',AdminAddBlogComponent::class)->name('admin.addBlog');
});
