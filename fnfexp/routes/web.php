<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyprofileController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\CompanyintroController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ParcelController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HeaderController;


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
//Frontend
Route::get('/',[HomeController::class,'index']);
Route::get('/company-profile',[HomeController::class,'company_profile']);
Route::get('/service',[HomeController::class,'service']);
Route::get('/area-coverage',[HomeController::class,'area_coverage']);
Route::get('/our-management',[HomeController::class,'our_management']);
Route::get('/blog',[HomeController::class,'blog']);
Route::get('/success-story',[HomeController::class,'success_story']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/faq',[HomeController::class,'faq']);

Route::get('/detailview/{name}', [HomeController::class, 'detailView']);

//parcel Tracking

Route::get('/parcel-track',[ParcelController::class,'list']);

 

Route::get('/parcel-search',[ParcelController::class,'action']);
// Route::get('/parcel-id',[ParcelController::class,'showParcelDetails']);

//Contact (Sending Message)

Route::resource('/messages/',HomeController::class);
Route::post('/message',[HomeController::class,'storeMessage']);
Route::get('/show-message',[HomeController::class,'show_message']);
Route::delete('/messagedelete/{messages}',[HomeController::class,'delete']);


 
//Backend
//Admin 
Route::get('/admins',[AdminController::class,'index']);
Route::post('/admin.dashboard',[AdminController::class,'show_dashboard']);
Route::get('/dashboard',[SuperAdminController::class,'dashboard']);
Route::get('/logout',[SuperAdminController::class,'logout']);

//About Us (Our management team)
Route::resource('/aboutuses/',AboutusController::class);
Route::get('/cat-status{aboutus}',[AboutusController::class,'change_status']);
Route::get('/edit/{aboutus}',[AboutusController::class,'edit']);
Route::post('/update/{aboutus}',[AboutusController::class,'update']);
Route::delete('/delete/{aboutus}',[AboutusController::class,'delete']);

//About Us (Company profile)

Route::resource('/company_profiles/',CompanyprofileController::class);
Route::get('/profile-status{company_profile}',[CompanyprofileController::class,'change_status']);
Route::get('/profile-edit/{company_profile}',[CompanyprofileController::class,'edit']);
Route::post('/profile-update/{company_profile}',[CompanyprofileController::class,'update']);
Route::delete('/profile-delete/{company_profile}',[CompanyprofileController::class,'delete']);

// About Us (Company profile)-testimonial

Route::resource('/testimonials/',TestimonialController::class);
Route::get('/testimonial-status{testimonial}',[TestimonialController::class,'change_status']);
Route::get('/testimonial-edit/{testimonial}',[TestimonialController::class,'edit']);
Route::post('/testimonial-update/{testimonial}',[TestimonialController::class,'update']);
Route::delete('/testimonial-delete/{testimonial}',[TestimonialController::class,'delete']);

// About Us (Company profile)-team

Route::resource('/teams/',TeamController::class);
Route::get('/team-status{team}',[TeamController::class,'change_status']);
Route::get('/team-edit/{team}',[TeamController::class,'edit']);
Route::post('/team-update/{team}',[TeamController::class,'update']);
Route::delete('/team-delete/{team}',[TeamController::class,'delete']);

// Service (Our service)-service

Route::resource('/services/',ServiceController::class);
Route::get('/service-status{service}',[ServiceController::class,'change_status']);
Route::get('/service-edit/{service}',[ServiceController::class,'edit']);
Route::post('/service-update/{service}',[ServiceController::class,'update']);
Route::delete('/service-delete/{service}',[ServiceController::class,'delete']);

// Service (Our service)-Plan

Route::resource('/plans/',PlanController::class);
Route::get('/plan-status{plan}',[PlanController::class,'change_status']);
Route::get('/plan-edit/{plan}',[PlanController::class,'edit']);
Route::post('/plan-update/{plan}',[PlanController::class,'update']);
Route::delete('/plan-delete/{plan}',[PlanController::class,'delete']);



// Home (Our Company Intro)-Introduction

Route::resource('/company_intros/',CompanyintroController::class);
Route::get('/intro-status{company_intro}',[CompanyintroController::class,'change_status']);
Route::get('/intro-edit/{company_intro}',[CompanyintroController::class,'edit']);
Route::post('/intro-update/{company_intro}',[CompanyintroController::class,'update']);
Route::delete('/intro-delete/{company_intro}',[CompanyintroController::class,'delete']);

// News/Media (News)

Route::resource('/blogs/',BlogController::class);
Route::get('/blog-status{blog}',[BlogController::class,'change_status']);
Route::get('/blog-edit/{blog}',[BlogController::class,'edit']);
Route::post('/blog-update/{blog}',[BlogController::class,'update']);
Route::delete('/blog-delete/{blog}',[BlogController::class,'delete']);

// News & Media - FaQ

Route::resource('/faqs/',FaqController::class);
Route::get('/faq-status{faq}',[FaqController::class,'change_status']);
Route::get('/faq-edit/{faq}',[FaqController::class,'edit']);
Route::post('/faq-update/{faq}',[FaqController::class,'update']);
Route::delete('/faq-delete/{faq}',[FaqController::class,'delete']);

// Footer

Route::resource('/footers/',FooterController::class);
Route::get('/footer-status{footer}',[FooterController::class,'change_status']);
Route::get('/footer-edit/{footer}',[FooterController::class,'edit']);
Route::post('/footer-update/{footer}',[FooterController::class,'update']);
Route::delete('/footer-delete/{footer}',[FooterController::class,'delete']);

//Header
Route::resource('/headers/',HeaderController::class); 
Route::get('/create-header',[HeaderController::class,'create']);
Route::delete('/header-delete/{header}',[HeaderController::class,'delete']);

