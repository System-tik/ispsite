<?php



use App\Livewire\Pages\About;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Section;
use App\Livewire\Pages\Articles;
use App\Livewire\Pages\DetailArticlePage;
use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\Evenement;
use App\Livewire\Pages\DetailSection;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\DetailsSectionPage;
use App\Livewire\Pages\DetailsEvenementPage;
use App\Livewire\Pages\OrientationsPage;

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

Route::get('/', HomePage::class)->name('home');
Route::get('/section',Section::class)->name('sections');
Route::get('/orientations/{id}',OrientationsPage::class)->name('orientation');
Route::get('/evenement',Evenement::class)->name('evenements');
Route::get('/about',About::class)->name('about');
Route::get('/contact',Contact::class)->name('contact');
Route::get('/articles',Articles::class)->name('articles');
Route::get('/section/{id}',DetailSection::class)->name('section');
Route::get('/evenement/{id}',DetailsEvenementPage::class)->name('evenement');
Route::get('/article/{id}',DetailArticlePage::class)->name('article');
