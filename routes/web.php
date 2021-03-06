<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Allcontroller;
use App\Http\Controllers\BackController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FactsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\UserController;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Allcontroller::class, "index"])->name('home');

Route::get('/back/home', [BackController::class, "index"])->name('back.home');


// PARTIE ABOUT 
Route::get('/back/about', [AboutController::class, "index"])->name('back.about');
Route::get('/back/about/{id}/edit', [AboutController::class, "edit"])->name('about.edit');
Route::put('/back/about/{id}/update', [AboutController::class, 'update'])->name('about.update');
Route::get('/back/about/{id}/show', [AboutController::class, "show"])->name('about.show');
Route::get('about/nav/{id}/edit', [UserController::class, "edit"])->name('nav.edit');
Route::put('about/nav/{id}/update', [UserController::class, "update"])->name('nav.update');


// PARTIE SKILLS 
Route::get('/back/skills', [SkillsController::class, "index"])->name('back.skills');
Route::get('/back/skills/{id}/edit',[SkillsController::class, "edit"])->name("skills.edit");
Route::put('/back/skills/{id}/update', [SkillsController::class, 'update'])->name('skills.update');
Route::delete('back/skills/{id}/delete',[SkillsController::class, "destroy"])->name("skills.delete");
Route::get('back/skills/create', [SkillsController::class, "create"])->name('skills.create');
Route::post('back/skills/store', [SkillsController::class, "store"])->name('skills.store');



// PARTIE PORTFOLIO
Route::get('/back/portfolio', [PortfolioController::class, "index"])->name('back.portfolio');
Route::get('back/portfolio/create', [PortfolioController::class, "create"])->name('portfolio.create');
Route::post('back/portfolio/store', [PortfolioController::class, "store"])->name('portfolio.store');
Route::get('/back/portfolio/{id}/edit', [PortfolioController::class, "edit"])->name('portfolio.edit');
Route::put('/back/portfolio/{id}/update', [PortfolioController::class, 'update'])->name('portfolio.update');
Route::delete('back/portfolio/{id}/delete',[PortfolioController::class, "destroy"])->name("portfolio.delete");
// Route::delete('back/portfolio/{id}/deletee',[PortfolioController::class, "destroyy"])->name("portfolio.deletee");

Route::get('back/portfolio/{id}/show', [PortfolioController::class, "show"])->name('portfolio.show');


// PARTIE CONTACT 
Route::get('back/contact', [ContactController::class, "index"])->name('back.contact');
Route::get('back/contact/{id}/edit', [ContactController::class, "edit"])->name('contact.edit');
Route::put('back/contact/{id}/update', [ContactController::class, "update"])->name('contact.update');


// PARTIE FACT 
Route::get('/back/about/fact/{id}/edit', [FactsController::class, "edit"])->name('fact.edit');
Route::put('/back/about/fact/{id}/update', [FactsController::class, 'update'])->name('fact.update');
Route::delete('back/about/fact/{id}/delete',[FactsController::class, 'destroy'])->name('fact.delete');
Route::get('back/fact/create', [FactsController::class, "create"])->name('fact.create');
Route::post('back/fact/store', [FactsController::class, "store"])->name('fact.store');



// PARTIE SERVICE
Route::get('/back/services/{id}/edit', [ServicesController::class, "edit"])->name('services.edit');
Route::put('/back/services/{id}/update', [ServicesController::class, "update"])->name('services.update');
Route::delete('back/about/services/{id}/delete',[ServicesController::class, 'destroy'])->name('services.delete');
Route::get('back/services/create', [ServicesController::class, "create"])->name('services.create');
Route::post('back/services/store', [ServicesController::class, "store"])->name('services.store');
