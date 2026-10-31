<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $homeArtworks = \App\Models\HomeArtwork::query()
        ->where('is_active', true)
        ->orderBy('slot')
        ->get()
        ->keyBy('slot');

    return view('home', compact('homeArtworks'));
})->name('home');
Route::get('/contact', function () {
    $contactSetting = \App\Models\ContactSetting::first();

    return view('contact', compact('contactSetting'));
})->name('contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');
Route::get('/awards', function () {
    $awards = \App\Models\Award::query()
        ->where('is_published', true)
        ->orderBy('sort_order')
        ->orderBy('year')
        ->get();

    return view('awards', compact('awards'));
})->name('awards');

Route::get('/reviews', function () {
    $reviews = \App\Models\Review::query()
        ->where('is_published', true)
        ->orderBy('sort_order')
        ->orderBy('id')
        ->get();

    return view('reviews', compact('reviews'));
})->name('reviews');

Route::get('/press', function () {
    $presses = \App\Models\Press::query()
        ->where('is_published', true)
        ->orderBy('sort_order')
        ->orderBy('id')
        ->get();

    return view('press', compact('presses'));
})->name('press');

Route::get('/about', function () {
    $aboutSetting = \App\Models\AboutSetting::first();

    $soloExhibitions = \App\Models\Exhibition::query()
        ->where('type', 'solo')
        ->where('is_published', true)
        ->orderBy('sort_order')
        ->orderBy('year')
        ->get();

    $groupExhibitions = \App\Models\Exhibition::query()
    ->where('type', 'group')
    ->where('is_published', true)
    ->orderByDesc('year')
    ->orderBy('sort_order')
    ->orderBy('id')
    ->get();

    return view('about', compact(
        'aboutSetting',
        'soloExhibitions',
        'groupExhibitions'
    ));
})->name('about');

Route::get('/gallery', function () {
    $galleryPeriods = \App\Models\GalleryPeriod::query()
        ->where('is_published', true)
        ->orderBy('sort_order')
        ->orderBy('id')
        ->get();

    $featuredItems = \App\Models\GalleryItem::query()
        ->where('is_published', true)
        ->whereNotNull('image')
        ->orderBy('sort_order')
        ->orderBy('id')
        ->get();

    return view('gallery', compact(
        'galleryPeriods',
        'featuredItems'
    ));
})->name('gallery');

Route::get('/gallery/period/{slug}', function (string $slug) {
    $galleryPeriod = \App\Models\GalleryPeriod::query()
        ->where('slug', $slug)
        ->where('is_published', true)
        ->firstOrFail();

    $items = \App\Models\GalleryItem::query()
        ->where('gallery_period_id', $galleryPeriod->id)
        ->where('is_published', true)
        ->orderBy('sort_order')
        ->orderBy('id')
        ->get();

    return view('gallery-period', compact('galleryPeriod', 'items'));
})->name('gallery.period');

Route::get('/gallery/category/{category}', function (string $category) {
    $items = \App\Models\GalleryItem::query()
        ->where('is_published', true)
        ->where('category', $category)
        ->orderBy('sort_order')
        ->orderBy('id')
        ->get();

    return view('gallery-category', compact('category', 'items'));
})->name('gallery.category');
