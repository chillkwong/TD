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


Route::get('/adm/{vue_capture?}', function () {
    return view('backend');
})->where('vue_capture', '[\/\w\.-]*');


//page

//diamond 
Route::get('/{locale}/gia-loose-diamonds/', 'DiamondController@bladeIndex');
//round
Route::get('/{locale}/gia-loose-diamonds/round-cut', 'DiamondController@roundCut');
Route::get('/{locale}/gia-loose-diamonds/round-cut/0-30-0-49-carat-weight', 'DiamondController@p03roundCut');
Route::get('/{locale}/gia-loose-diamonds/round-cut/0-50-0-79-carat-weight', 'DiamondController@p05roundCut');
Route::get('/{locale}/gia-loose-diamonds/round-cut/0-80-0-99-carat-weight', 'DiamondController@p08roundCut');
Route::get('/{locale}/gia-loose-diamonds/round-cut/1-00-1-19-carat-weight', 'DiamondController@p10roundCut');
Route::get('/{locale}/gia-loose-diamonds/round-cut/1-20-1-49-carat-weight', 'DiamondController@p12roundCut');
Route::get('/{locale}/gia-loose-diamonds/round-cut/1-50-1-99-carat-weight', 'DiamondController@p15roundCut');
Route::get('/{locale}/gia-loose-diamonds/round-cut/2-00-2-99-carat-weight', 'DiamondController@p20roundCut');
Route::get('/{locale}/gia-loose-diamonds/round-cut/3-00-up-carat-weight', 'DiamondController@p30roundCut');
//fancy cut
Route::get('/{locale}/gia-loose-diamonds/fancy-cut-diamond', 'DiamondController@fancyCutDiamond');
Route::get('/{locale}/gia-loose-diamonds/fancy-cut-diamond/heart-shaped', 'DiamondController@fancyCutHeart');
Route::get('/{locale}/gia-loose-diamonds/fancy-cut-diamond/princess-cut', 'DiamondController@fancyCutPrincess');
Route::get('/{locale}/gia-loose-diamonds/fancy-cut-diamond/emerald-cut', 'DiamondController@fancyCutEmerald');
Route::get('/{locale}/gia-loose-diamonds/fancy-cut-diamond/asscher-cut', 'DiamondController@fancyCutAsscher');
Route::get('/{locale}/gia-loose-diamonds/fancy-cut-diamond/oval-cut', 'DiamondController@fancyCutOval');
Route::get('/{locale}/gia-loose-diamonds/fancy-cut-diamond/radiant-cut', 'DiamondController@fancyCutRadiant');
Route::get('/{locale}/gia-loose-diamonds/fancy-cut-diamond/pear-shaped', 'DiamondController@fancyCutPear');
Route::get('/{locale}/gia-loose-diamonds/fancy-cut-diamond/marquise-cut', 'DiamondController@fancyCutMarquise');
Route::get('/{locale}/gia-loose-diamonds/fancy-cut-diamond/cushion-cut', 'DiamondController@fancyCutCushion');
//fancy color
Route::get('/{locale}/gia-loose-diamonds/fancy-color', 'DiamondController@fancyColor');
Route::get('/{locale}/gia-loose-diamonds/fancy-color/yellow', 'DiamondController@fancyColorYellow');
Route::get('/{locale}/gia-loose-diamonds/fancy-color/pink', 'DiamondController@fancyColorPink');
Route::get('/{locale}/gia-loose-diamonds/fancy-color/purple', 'DiamondController@fancyColorPurple');
Route::get('/{locale}/gia-loose-diamonds/fancy-color/blue', 'DiamondController@fancyColorBlue');
Route::get('/{locale}/gia-loose-diamonds/fancy-color/green', 'DiamondController@fancyColorGreen');
Route::get('/{locale}/gia-loose-diamonds/fancy-color/orange', 'DiamondController@fancyColorOrange');
Route::get('/{locale}/gia-loose-diamonds/fancy-color/brown', 'DiamondController@fancyColorBrown');
Route::get('/{locale}/gia-loose-diamonds/fancy-color/black', 'DiamondController@fancyColorBlack');
Route::get('/{locale}/gia-loose-diamonds/fancy-color/grey', 'DiamondController@fancyColorGrey');
Route::get('/{locale}/gia-loose-diamonds/{id}', 'DiamondController@bladeShow');

//engagementRing 
Route::get('/{locale}/engagement-rings/', 'EngagementRingController@bladeIndex');
Route::get('/{locale}/engagement-rings/solitaire-ring-setting', 'EngagementRingController@solitaireRingSetting');
Route::get('/{locale}/engagement-rings/side-stones-setting', 'EngagementRingController@sideStonesSetting');
Route::get('/{locale}/engagement-rings/halo-setting', 'EngagementRingController@haloSetting');
Route::get('/{locale}/engagement-rings/{id}', 'EngagementRingController@bladeShow');


//weddingRingPair 
Route::get('/{locale}/wedding-rings/', 'WeddingRingPairController@bladeIndex');
Route::get('/{locale}/wedding-rings/classic', 'WeddingRingPairController@classic');
Route::get('/{locale}/wedding-rings/japanese', 'WeddingRingPairController@japanese');
Route::get('/{locale}/wedding-rings/vintage', 'WeddingRingPairController@vintage');
Route::get('/{locale}/wedding-rings/{id}', 'WeddingRingPairController@bladeShow');

//CustomerMoment
Route::get('/{locale}/customer-moments/', 'CustomerMomentController@bladeIndex');
Route::get('/{locale}/engagement-tips/', 'CustomerMomentController@engagementTips');

//CustomerJewellry 
Route::get('/{locale}/customer-jewellries/', 'InvPostController@bladeIndex');
Route::get('/{locale}/customer-jewellries/{id}', 'InvPostController@bladeShow');



//education 
Route::get('/{locale}/education-diamond-grading/', 'EducationController@bladeIndex');

//4cs
Route::get('/{locale}/education-diamond-grading/gia-report', 'EducationController@giaReport');
Route::get('/{locale}/education-diamond-grading/gia-report/4cs', 'EducationController@fourCs');
Route::get('/{locale}/education-diamond-grading/gia-report/4cs/carat', 'EducationController@diamondCarat');
Route::get('/{locale}/education-diamond-grading/gia-report/4cs/color', 'EducationController@diamondColor');
Route::get('/{locale}/education-diamond-grading/gia-report/4cs/cut', 'EducationController@diamondCut');
Route::get('/{locale}/education-diamond-grading/gia-report/4cs/clarity', 'EducationController@diamondClarity');

//cert
Route::get('/{locale}/education-diamond-grading/grading-certficate', 'EducationController@diamondCertificate');
Route::get('/{locale}/education-diamond-grading/gia-report', 'EducationController@giaReport');
Route::get('/{locale}/education-diamond-grading/grading-eye-clean', 'EducationController@gradingEyeClean');


//anatony
Route::get('/{locale}/education-diamond-grading/shape', 'EducationController@diamondShape');
Route::get('/{locale}/education-diamond-grading/hearts-and-arrows', 'EducationController@diamondHeartAndArrow');
Route::get('/{locale}/education-diamond-grading/anatomy-proportion', 'EducationController@diamondProportion');
Route::get('/{locale}/education-diamond-grading/anatomy-symmetry', 'EducationController@diamondSymmetry');
Route::get('/{locale}/education-diamond-grading/anatomy-polish', 'EducationController@diamondPolish');
Route::get('/{locale}/education-diamond-grading/anatomy-fluorescence', 'EducationController@diamondFluorescence');


//about-us
Route::get('/{locale}/about-us', 'AboutUsController@aboutUs');

//buying procedure
Route::get('/{locale}/buying-procedure', 'AboutUsController@buyingProcedure');
Route::get('/{locale}/buying-procedure/custom-engagement-rings', 'AboutUsController@customEngagementRing');
Route::get('/{locale}/buying-procedure/diamond-inlay-engrave', 'AboutUsController@diamondInlayEngrave');



//sitemap
Route::get('/sitemap_index.xml', function(){
    
$d = include 'sitemapRoutes.php';

return $d;
    
});




//all others
Route::get('/{locale}/{vue_capture?}', function ($locale) {
	App::setLocale($locale);
    return view('welcome1');
})->where('vue_capture', '[\/\w\.-]*');


// Route::get('test', 'TestController@test');

Route::get('/{vue_capture?}', function () {
	App::setLocale('hk');
    return view('welcome1');
})->where('vue_capture', '[\/\w\.-]*');






// Route::get('/{vue_capture?}', function () {
//     return view('adm');
// })->where('vue_capture', '[\/\w\.-]*');
