<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () { return view('welcome'); });

Route::get("/404",[HomeController::class,"shop404"]);
Route::get("/about",[HomeController::class,"shopAbout"]);
Route::get("/account-address",[HomeController::class,"shopAccountAddress"]);
Route::get("/account-order-detail",[HomeController::class,"shopAccountOrderDetail"]);
Route::get("/account-orders",[HomeController::class,"shopAccountOrders"]);
Route::get("/account-profile",[HomeController::class,"shopAccountProfile"]);
Route::get("/account-signin",[HomeController::class,"shopAccountSignIn"]);
Route::get("/account-wishlist",[HomeController::class,"shopAccountWishList"]);
Route::get("/blog-grid",[HomeController::class,"shopBlogGrid"]);
Route::get("/blog-list",[HomeController::class,"shopBlogList"]);
Route::get("/blog-single",[HomeController::class,"shopBlogSingle"]);
Route::get("/cart",[HomeController::class,"shopCart"]);
Route::get("/checkout-complete",[HomeController::class,"shopCheckoutComplete"]);
Route::get("/checkout-payment",[HomeController::class,"shopCheckoutPayment"]);
Route::get("/checkout-review",[HomeController::class,"shopCheckoutReview"]);
Route::get("/checkout-shipping",[HomeController::class,"shopCheckoutShipping"]);
Route::get("/compare",[HomeController::class,"shopCompare"]);
Route::get("/components",[HomeController::class,"shopComponents"]);
Route::get("/contact",[HomeController::class,"shopContact"]);
Route::get("/faq",[HomeController::class,"shopFaq"]);
Route::get("/index",[HomeController::class,"shopIndex"]);
Route::get("/index2",[HomeController::class,"shopIndex2"]);
Route::get("/index3",[HomeController::class,"shopIndex3"]);
Route::get("/shop-categories",[HomeController::class,"shopCategories"]);
Route::get("/shop-grid",[HomeController::class,"shopGrid"]);
Route::get("/shop-list",[HomeController::class,"shopList"]);
Route::get("/shop-single",[HomeController::class,"shopSingle"]);


Route::get("/admin/accordion",[HomeController::class,"adminAccordion"]);
Route::get("/admin/alerts",[HomeController::class,"adminAlerts"]);
Route::get("/admin/badge",[HomeController::class,"adminBadge"]);
Route::get("/admin/bootstrap-select",[HomeController::class,"adminBootstrapSelect"]);
Route::get("/admin/bootstrap-touchspin",[HomeController::class,"adminBootstrapTouchSpin"]);
Route::get("/admin/breadcrumb",[HomeController::class,"adminBreadcrumb"]);
Route::get("/admin/buttons",[HomeController::class,"adminButtons"]);
Route::get("/admin/calendar",[HomeController::class,"adminCalendar"]);
Route::get("/admin/cards",[HomeController::class,"adminCards"]);
Route::get("/admin/carousel",[HomeController::class,"adminCarousel"]);
Route::get("/admin/chart-bar",[HomeController::class,"adminChartBar"]);
Route::get("/admin/chart-doughnutpie",[HomeController::class,"adminChartDoughnutPie"]);
Route::get("/admin/chart-line",[HomeController::class,"adminChartLine"]);
Route::get("/admin/chart-radar",[HomeController::class,"adminRadar"]);
Route::get("/admin/chat",[HomeController::class,"adminChat"]);
Route::get("/admin/collapse",[HomeController::class,"adminCollapse"]);
Route::get("/admin/color-picker",[HomeController::class,"adminColorPicker"]);
Route::get("/admin/date-picker",[HomeController::class,"adminDatePicker"]);
Route::get("/admin/dropdowns",[HomeController::class,"adminDropdowns"]);
Route::get("/admin/error-404",[HomeController::class,"adminError404"]);
Route::get("/admin/error-500",[HomeController::class,"adminError500"]);
Route::get("/admin/error-503",[HomeController::class,"adminError503"]);
Route::get("/admin/error-505",[HomeController::class,"adminError505"]);
Route::get("/admin/file-manager",[HomeController::class,"adminFileManager"]);
Route::get("/admin/file-manager2",[HomeController::class,"adminFileManager2"]);
Route::get("/admin/forgot-password",[HomeController::class,"adminForgotPassword"]);
Route::get("/admin/form-elements",[HomeController::class,"adminFormElements"]);
Route::get("/admin/form-layouts",[HomeController::class,"adminFormLayouts"]);
Route::get("/admin/form-validation",[HomeController::class,"adminFormValidation"]);
Route::get("/admin/form-wizard",[HomeController::class,"adminFormWizard"]);
Route::get("/admin/forum",[HomeController::class,"adminForum"]);
Route::get("/admin/icons",[HomeController::class,"adminIcons"]);
Route::get("/admin/images",[HomeController::class,"adminImages"]);
Route::get("/admin/index",[HomeController::class,"adminIndex"])->name("admin.index");
Route::get("/admin/index2",[HomeController::class,"adminIndex2"]);
Route::get("/admin/input-group",[HomeController::class,"adminInputGroup"]);
Route::get("/admin/input-masks",[HomeController::class,"adminInputMasks"]);
Route::get("/admin/invoice",[HomeController::class,"adminInvoice"]);
Route::get("/admin/lists",[HomeController::class,"adminLists"]);
Route::get("/admin/login",[HomeController::class,"adminLogin"]);
Route::get("/admin/login2",[HomeController::class,"adminLogin2"]);
Route::get("/admin/mail",[HomeController::class,"adminMail"]);
Route::get("/admin/markdown-parser",[HomeController::class,"adminMarkdownParser"]);
Route::get("/admin/media-object",[HomeController::class,"adminMediaObject"]);
Route::get("/admin/modal",[HomeController::class,"adminModal"]);
Route::get("/admin/navigation",[HomeController::class,"adminNavigation"]);
Route::get("/admin/notifications",[HomeController::class,"adminNotifications"]);
Route::get("/admin/pagination",[HomeController::class,"adminPagination"]);
Route::get("/admin/popovers",[HomeController::class,"adminPopovers"]);
Route::get("/admin/post-all",[HomeController::class,"adminPostAll"]);
Route::get("/admin/post-new",[HomeController::class,"adminPostNew"]);
Route::get("/admin/pricing",[HomeController::class,"adminPricing"]);
Route::get("/admin/progress",[HomeController::class,"adminProgress"]);
Route::get("/admin/range-slider",[HomeController::class,"adminRangeSlider"]);

Route::get("/admin/register",[HomeController::class,"adminRegister"])->name("admin.register");
Route::post("/create_user",[UsersController::class,"createUser"])->name("create.user");

Route::get("/admin/select2",[HomeController::class,"adminSelect2"]);
Route::get("/admin/sortable",[HomeController::class,"adminSortable"]);
Route::get("/admin/sparkline",[HomeController::class,"adminSparkline"]);
Route::get("/admin/spinners",[HomeController::class,"adminSpinners"]);
Route::get("/admin/starter",[HomeController::class,"adminStarter"]);

Route::get("/admin/table-advanced",[HomeController::class,"adminTableAdvanced"]);
Route::get("/show_users",[UsersController::class,"showUsers"])->name("show.users");

Route::get("/admin/table-basic",[HomeController::class,"adminTableBasic"]);
Route::get("/admin/tag-input",[HomeController::class,"adminTagInput"]);
Route::get("/admin/text-editor",[HomeController::class,"adminTextEditor"]);
Route::get("/admin/timeline",[HomeController::class,"adminTimeline"]);
Route::get("/admin/todo-list",[HomeController::class,"adminTodoList"]);
Route::get("/admin/tooltips",[HomeController::class,"adminTooltips"]);
Route::get("/admin/treeview",[HomeController::class,"adminTreeView"]);
Route::get("/admin/typography",[HomeController::class,"adminTypography"]);
Route::get("/admin/user-grid",[HomeController::class,"adminUserGrid"]);
Route::get("/admin/user-list",[HomeController::class,"adminUserList"]);
Route::get("/admin/user-profile",[HomeController::class,"adminUserProfile"]);
Route::get("/admin/user-profile-setting",[HomeController::class,"adminProfileSetting"]);







//
