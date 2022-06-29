<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function shop404(){ return view("shop/404"); }
    public function shopAbout(){ return view("shop/about"); }
    public function shopAccountAddress(){ return view("shop/account-address"); }
    public function shopAccountOrderDetail(){return view("shop/account-order-detail");}
    public function shopAccountOrders(){return view("shop/account-orders");}
    public function shopAccountProfile(){return view("shop/account-profile");}
    public function shopAccountSignIn(){return view("shop/account-signin");}
    public function shopAccountWishList(){return view("shop/account-wishlist");}
    public function shopBlogGrid(){return view("shop/blog-grid");}
    public function shopBlogList(){return view("shop/blog-list");}
    public function shopBlogSingle(){return view("shop/blog-single");}
    public function shopCart(){return view("shop/cart");}
    public function shopCheckoutComplete(){return view("shop/checkout-complete");}
    public function shopCheckoutPayment(){return view("shop/checkout-payment");}
    public function shopCheckoutReview(){return view("shop/checkout-review");}
    public function shopCheckoutShipping(){return view("shop/checkout-shipping");}
    public function shopCompare(){return view("shop/compare");}
    public function shopComponents(){return view("shop/components");}
    public function shopContact(){return view("shop/contact");}
    public function shopFaq(){return view("shop/faq");}
    public function shopIndex(){ return view("shop/index"); }
    public function shopIndex2(){return view("shop/index2");}
    public function shopIndex3(){return view("shop/index3");}
    public function shopCategories(){return view("shop/shop-categories");}
    public function shopGrid(){return view("shop/shop-grid");}
    public function shopList(){return view("shop/shop-list");}
    public function shopSingle(){return view("shop/shop-single");}

    public function adminAccordion(){return view("admin/accordion");}
    public function adminAlerts(){return view("admin/alerts");}
    public function adminBadge(){return view("admin/badge");}
    public function adminBootstrapSelect(){return view("admin/bootstrap-select");}
    public function adminBootstrapTouchSpin(){return view("admin/bootstrap-touchspin");}
    public function adminBreadcrumb(){return view("admin/breadcrumb");}
    public function adminButtons(){return view("admin/buttons");}
    public function adminCalendar(){return view("admin/calendar");}
    public function adminCards(){return view("admin/cards");}
    public function adminCarousel(){return view("admin/carousel");}
    public function adminChartBar(){return view("admin/chart-bar");}
    public function adminChartDoughnutPie(){return view("admin/chart-doughnutpie");}
    public function adminChartLine(){return view("admin/chart-line");}
    public function adminRadar(){return view("admin/chart-radar");}
    public function adminChat(){return view("admin/chat");}
    public function adminCollapse(){return view("admin/collapse");}
    public function adminColorPicker(){return view("admin/color-picker");}
    public function adminDatePicker(){return view("admin/date-picker");}
    public function adminDropdowns(){return view("admin/dropdowns");}
    public function adminError404(){return view("admin/error-404");}
    public function adminError500(){return view("admin/error-500");}
    public function adminError503(){return view("admin/error-503");}
    public function adminError505(){return view("admin/error-505");}
    public function adminFileManager(){return view("admin/file-manager");}
    public function adminFileManager2(){return view("admin/file-manager2");}
    public function adminForgotPassword(){return view("admin/forgot-password");}
    public function adminFormElements(){return view("admin/form-elements");}
    public function adminFormLayouts(){return view("admin/form-layouts");}
    public function adminFormValidation(){return view("admin/form-validation");}
    public function adminFormWizard(){return view("admin/form-wizard");}
    public function adminForum(){return view("admin/forum");}
    public function adminIcons(){return view("admin/icons");}
    public function adminImages(){return view("admin/images");}
    public function adminIndex(){return view("admin/index");}
    public function adminIndex2(){return view("admin/index2");}
    public function adminInputGroup(){return view("admin/input-group");}
    public function adminInputMasks(){return view("admin/input-masks");}
    public function adminInvoice(){return view("admin/invoice");}
    public function adminLists(){return view("admin/lists");}
    public function adminLogin(){return view("admin/login");}
    public function adminLogin2(){return view("admin/login2");}
    public function adminMail(){return view("admin/mail");}
    public function adminMarkdownParser(){return view("admin/markdown-parser");}
    public function adminMediaObject(){return view("admin/media-object");}
    public function adminModal(){return view("admin/modal");}
    public function adminNavigation(){return view("admin/navigation");}
    public function adminNotifications(){return view("admin/notifications");}
    public function adminPagination(){return view("admin/pagination");}
    public function adminPopovers(){return view("admin/popovers");}
    public function adminPostAll(){return view("admin/post-all");}
    public function adminPostNew(){return view("admin/post-new");}
    public function adminPricing(){return view("admin/pricing");}
    public function adminProgress(){return view("admin/progress");}
    public function adminRangeSlider(){return view("admin/range-slider");}
    public function adminRegister(){return view("admin/register");}
    public function adminSelect2(){return view("admin/select2");}
    public function adminSortable(){return view("admin/sortable");}
    public function adminSparkline(){return view("admin/sparkline");}
    public function adminSpinners(){return view("admin/spinners");}
    public function adminStarter(){return view("admin/starter");}
    public function adminTableAdvanced(){return view("admin/table-advanced");}
    public function adminTableBasic(){return view("admin/table-basic");}
    public function adminTagInput(){return view("admin/tag-input");}
    public function adminTextEditor(){return view("admin/text-editor");}
    public function adminTimeline(){return view("admin/timeline");}
    public function adminTodoList(){return view("admin/todo-list");}
    public function adminTooltips(){return view("admin/tooltips");}
    public function adminTreeView(){return view("admin/treeview");}
    public function adminTypography(){return view("admin/typography");}
    public function adminUserGrid(){return view("admin/user-grid");}
    public function adminUserList(){return view("admin/user-list");}
    public function adminUserProfile(){return view("admin/user-profile");}
    public function adminProfileSetting(){return view("admin/user-profile-setting");}

}
