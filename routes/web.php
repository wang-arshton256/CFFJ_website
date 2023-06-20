<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagescontroller;
use App\Http\Controllers\Subscribercontroller;
use App\Http\Controllers\BlogsController;


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

//Route::get('/', function () {
  //  return view('welcome');
//});


Route::get('/', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/whatwedo', function () {
    return view('whatwedo');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog_single', function () {
    return view('blog_single');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/Cadreenbio', function () {
    return view('Cadreenbio');
});

Route::get('/caseofcovidexblog', function () {
    return view('caseofcovidexblog');
});

Route::get('/Cynthiabio', function () {
    return view('Cynthiabio');
});

Route::get('/directdt', function () {
    return view('directdt');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/DrIjjobio', function () {
    return view('DrIjjobio');
});

Route::get('/Duncanbio', function () {
    return view('Duncanbio');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/IHRdayblog', function () {
    return view('IHRdayblog');
});

Route::get('/Juukobio', function () {
    return view('Juukobio');
});

Route::get('/matrimonialpropertyblog', function () {
    return view('matrimonialpropertyblog');
});

Route::get('/MCNamawabio', function () {
    return view('MCNamawabio');
});

Route::get('/mentalhealthamidstblog', function () {
    return view('mentalhealthamidstblog');
});

Route::get('/nexusbetweenblog', function () {
    return view('nexusbetweenblog');
});

Route::get('/opinionbank', function () {
    return view('opinionbank');
});

Route::get('/ourpartners', function () {
    return view('ourpartners');
});

Route::get('/podcasts', function () {
    return view('podcasts');
});

Route::get('/policyrecommendations', function () {
    return view('policyrecommendations');
});

Route::get('/Prof_bio', function () {
    return view('Prof_bio');
});

Route::get('/researchandpublications', function () {
    return view('researchandpublications');
});

Route::get('/researchandpublications_2', function () {
    return view('researchandpublications_2');
});

Route::get('/policydialogueandwebinars', function () {
    return view('policydialogueandwebinars');
});

Route::get('/standingord', function () {
    return view('standingord');
});

Route::get('/wangbio', function () {
    return view('wangbio');
});

Route::get('/webinars', function () {
    return view('webinars');
});

Route::get('/nabanjja_blog', function () {
    return view('nabanjja_blog');
});

Route::get('/outreach', function () {
    return view('outreach');
});


Route::get('/outreachgallary', function () {
    return view('outreachgallary');
});

Route::get('/continousinovation', function () {
    return view('continousinovation');
});

Route::get('/hopeinaweb', function () {
    return view('hopeinaweb');
});

Route::get('/silentmutiny', function () {
    return view('silentmutiny');
});


Route::get('/whyugandas_oil', function () {
    return view('whyugandas_oil');
});

Route::get('/emyoga', function () {
    return view('emyoga');
});

Route::get('/In_Pursuit_Of_Opportunity', function () {
    return view('In_Pursuit_Of_Opportunity');
});

Route::get('/A_Stich_In_dTime', function () {
    return view('A_Stich_In_Time');
});

Route::get('/Grief_and_The_Politics_of_Ethnicity', function () {
    return view('Grief_and_The_Politics_of_Ethnicity');
});

Route::get('/enhancing_mobility', function () {
    return view('enhancing_mobility');
});

Route::get('/ugandanfuel', function () {
    return view('ugandanfuel');
});


Route::get('/trade_africe_economics', function () {
    return view('trade_africe_economics');
});

Route::get('/family_contraception_law', function () {
    return view('family_contraception_law');
});

Route::get('/climate_environment_economics', function () {
    return view('climate_environment_economics');
});
Route::get('/hunger_agriculture_economics', function () {
    return view('hunger_agriculture_economics');
});
Route::get('/religion', function () {
    return view('religion');
});
Route::get('/law', function () {
    return view('law');
});
Route::get('/innovation', function () {
    return view('innovation');
});
Route::get('/business_economics', function () {
    return view('business_economics');
});

Route::get('/instability_in_Karamoja', function () {
    return view('instability_in_Karamoja');
});
Route::get('/coffee_deal', function () {
    return view('coffee_deal');
});

Route::get('/government', function () {
    return view('government');
});


Route::get('/family_stories', function () {
    return view('family_stories');
});
Route::get('/one_mans_story', function () {
    return view('one_mans_story');
});
Route::get('/agony', function () {
    return view('agony');
});
Route::get('/hope_in_a_web', function () {
    return view('hope_in_a_web');
});

Route::get('/unemployement', function () {
    return view('unemployement');
});

Route::get('/Saving_the_VIPs', function () {
    return view('Saving_the_VIPs');
});
Route::get('/education', function () {
    return view('education');
});

Route::get('/education', function () {
    return view('education');
});
Route::get('/uganda', function () {
    return view('uganda');
});

Route::get('/accessibilty_to_loans', function () {
    return view('accessibilty_to_loans');
});

Route::get('/need_for_mental_health', function () {
    return view('need_for_mental_health');
});

Route::get('/The_Need_for_Climate', function () {
    return view('The_Need_for_Climate');
});


Route::get('/Gender_Based_Violence', function () {
    return view('Gender_Based_Violence');
});

Route::get('/economy_family_development', function () {
    return view('economy_family_development');
});

Route::get('/Uganda’s_Inflation', function () {
    return view('Uganda’s_Inflation');
});

Route::get('/blog_business_category', function () {
    return view('blog_business_category');
});
Route::get('/blog_family_category', function () {
    return view('blog_family_category');
});
Route::get('/blog_development_category', function () {
    return view('blog_development_category');
});
Route::get('/blog_development1_category', function () {
    return view('blog_development1_category');
});


Route::get('/blogs_education_category', function () {
    return view('blogs_education_category');
});
Route::get('/blogs_climate_category', function () {
    return view('blogs_climate_category');
});
Route::get('/blogs_religion_category', function () {
    return view('blogs_religion_category');
});


Route::get('/blog1', function () {
    return view('blog1');
});
Route::get('/blog2', function () {
    return view('blog2');
});
Route::get('/blog3', function () {
    return view('blog3');
});

Route::get('/teenage_pregnacies', function () {
    return view('teenage_pregnacies');
});
Route::get('/cognitive_development', function () {
    return view('cognitive_development');
});
Route::get('/democratic_governance', function () {
    return view('democratic_governance');
});

Route::get('/public_Investment', function () {
    return view('public_Investment');
});
Route::get('/businessandinnovations', function () {
    return view('businessandinnovations');
});

Route::get('/programs', function () {
    return view('programs');
});


//Route::get('registersubscriber',[Subscribercontroller::class,'registersubscriber']);


Route::post('RecordSubsriber',[Pagescontroller::class,'RecordSubsriber']);
Route::post('Registercontactpage',[Pagescontroller::class,'Registercontactpage']);

Route::POST('Registercontact',[Pagescontroller::class,'Registercontact']);


Route::post('Registerschoolpoll',[Pagescontroller::class,'Registerschoolpoll']);
//Route::post('Recordblogcomment',[Pagescontroller::class,'Recordblogcomment']);

Route::post('Recordblogcomment',[BlogsController::class,'Recordblogcomment']);


//Route::post('/RecordSubsriber',[Subscribercontroller::class,'RecordSubsriber'])->name('RecordSubsriber');

//Route::post('RecordSubsriber', Subscribercontroller::class,'RecordSubsriber');
//Route::resource('subscribes', 'CffjsubscriberController');


