<?php

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
Route::get('/', [App\Http\Controllers\AccueilController::class, 'welcome'])->name('welcome');

Route::get('/articles/{id}', [App\Http\Controllers\AccueilController::class, 'articles'])->name('articles');
Route::post('/articlescommentpost', [App\Http\Controllers\AccueilController::class, 'articlescommentpost'])->name('articlescommentpost');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::post('/profilePost', [App\Http\Controllers\HomeController::class, 'profilePost'])->name('profilePost');

Route::post('/getHopitauxVilleprofil', [App\Http\Controllers\HomeController::class,  'getHopitauxVilleprofil'])->name('getHopitauxVilleprofil');

//Secretaire
//Route Patient

Route::get('/secretaire/secretairepatients', [App\Http\Controllers\PatientController::class, 'secretairepatients'])->name('secretairepatients');
Route::post('/secretaire/secretaireADDpatientPost', [App\Http\Controllers\PatientController::class, 'secretaireADDpatientPost' ])->name('secretaireADDpatientPost');
Route::post('/secretaire/secretaireEDITpatientPost', [ App\Http\Controllers\PatientController::class, 'secretaireEDITpatientPost' ])->name('secretaireEDITpatientPost');
Route::POST('/secretaire/secretaireDELETEpatientPost', [ App\Http\Controllers\PatientController::class, 'secretaireDELETEpatientPost' ])->name('secretaireDELETEpatientPost');

//Route Dossier
Route::get('/secretaire/secretairedossiers', [App\Http\Controllers\DossierController::class, 'secretairedossiers'])->name('secretairedossiers');
Route::post('/secretaire/secretaireADDdossierPost', [App\Http\Controllers\DossierController::class, 'secretaireADDdossierPost' ])->name('secretaireADDdossierPost');
Route::post('/secretaire/secretaireEDITdossierPost', [ App\Http\Controllers\DossierController::class, 'secretaireEDITdossierPost' ])->name('secretaireEDITdossierPost');
Route::delete('/secretaire/secretaireDELETEdossier/{id}', [App\Http\Controllers\DossierController::class, 'secretaireDELETEdossier'])->name('secretaireDELETEdossier');
Route::post('/secretaire/secretaireDELETEdossierpost', [App\Http\Controllers\DossierController::class, 'secretaireDELETEdossierPost'])->name('secretaireDELETEdossierPost');
Route::post('/getHopitauxVille', [App\Http\Controllers\PatientController::class,  'getHopitauxVille'])->name('getHopitauxVille');
 
//Route rendez-vous
Route::get('/secretaire/secretairerdvs', [App\Http\Controllers\RdvController::class, 'secretairerdvs'])->name('secretairerdvs');
Route::post('/secretaire/secretaireADDrdvPost', [App\Http\Controllers\RdvController::class, 'secretaireADDrdvPost'])->name('secretaireADDrdvPost');
Route::post('/secretaire/secretaireEDITrdvPost', [ App\Http\Controllers\RdvController::class, 'secretaireEDITrdvPost' ])->name('secretaireEDITrdvPost');
Route::post('/secretaire/secretaireVALIDrdvPost', [ App\Http\Controllers\RdvController::class, 'secretaireVALIDrdvPost' ])->name('secretaireVALIDrdvPost');
Route::POST('/secretaire/secretaireDELETErdvPost', [ App\Http\Controllers\RdvController::class, 'secretaireDELETErdvPost' ])->name('secretaireDELETErdvPost');


//Route visite 
Route::get('/secretaire/secretaireVisites/{dossier_id}', [App\Http\Controllers\VisiteController::class, 'secretaireVisites'])->name('secretaireVisites');
Route::post('/secretaire/secretaireAddvisitePost', [App\Http\Controllers\VisiteController::class, 'secretaireAddvisitePost'])->name('secretaireAddvisitePost');
Route::post('/secretaire/secretaireEditVisitePost', [ App\Http\Controllers\VisiteController::class, 'secretaireEditVisitePost' ])->name('secretaireEditVisitePost');
Route::post('/secretaire/secretaireDELETEvisitePost', [ App\Http\Controllers\VisiteController::class, 'secretaireDELETEvisitePost' ])->name('secretaireDELETEvisitePost');

Route::get('/secretaire/medecinOrdonnances/{visite_id}', [App\Http\Controllers\OrdonnanceController::class, 'medecinOrdonnances'])->name('medecinOrdonnances');
Route::post('/secretaire/medecinAddordonnancePost', [App\Http\Controllers\OrdonnanceController::class, 'medecinAddordonnancePost'])->name('medecinAddordonnancePost');
Route::post('/secretaire/medecinEditordonnancePost', [ App\Http\Controllers\OrdonnanceController::class, 'medecinEditordonnancePost' ])->name('medecinEditordonnancePost');
Route::post('/secretaire/medecinDELETEordonnancePost', [ App\Http\Controllers\OrdonnanceController::class, 'medecinDELETEordonnancePost' ])->name('medecinDELETEordonnancePost');


//Admiin
//hopital
Route::get('/admin/adminhopitaux', [App\Http\Controllers\hopitalController::class, 'adminhopitaux'])->name('adminhopitaux');
Route::post('/admin/adminADDhopitalPost', [App\Http\Controllers\hopitalController::class, 'adminADDhopitalPost' ])->name('adminADDhopitalPost');
Route::post('/admin/adminEDIThopitalPost', [ App\Http\Controllers\hopitalController::class, 'adminEDIThopitalPost' ])->name('adminEDIThopitalPost');
Route::POST('/admin/adminDELETEhopitalPost', [ App\Http\Controllers\hopitalController::class, 'adminDELETEhopitalPost' ])->name('adminDELETEhopitalPost');

//Ville
Route::get('/admin/adminvilles', [App\Http\Controllers\VilleController::class, 'adminvilles'])->name('adminvilles');
Route::get('/admin/adminADDville', [App\Http\Controllers\VilleController::class, 'adminADDville'])->name('adminADDville');
Route::post('/admin/adminADDvillePost', [App\Http\Controllers\VilleController::class, 'adminADDvillePost' ])->name('adminADDvillePost');



//Medecin
//medecin dossier 
Route::get('/medecin/medecindossiers', [App\Http\Controllers\DossierController::class, 'medecindossiers'])->name('medecindossiers');
Route::post('/medecin/medecinADDdossierPost', [App\Http\Controllers\DossierController::class, 'medecinADDdossierPost' ])->name('medecinADDdossierPost');
Route::post('/medecin/medecinEDITdossierPost', [ App\Http\Controllers\DossierController::class, 'medecinEDITdossierPost' ])->name('medecinEDITdossierPost');
Route::delete('/medecin/medecinDELETEdossier/{id}', [App\Http\Controllers\DossierController::class, 'medecinDELETEdossier'])->name('medecinDELETEdossier');
Route::post('/medecin/medecinDELETEdossierpost', [App\Http\Controllers\DossierController::class, 'medecinDELETEdossierpost'])->name('medecinDELETEdossierPost');

//Route visite 
Route::get('/medecin/medecinVisites/{dossier_id}', [App\Http\Controllers\VisiteController::class, 'medecinVisites'])->name('medecinVisites');
Route::post('/medecin/medecinADDvisitePost', [App\Http\Controllers\VisiteController::class, 'medecinADDvisitePost'])->name('medecinADDvisitePost');
Route::post('/medecin/medecinEDITvisitePost', [ App\Http\Controllers\VisiteController::class, 'medecinEDITvisitePost' ])->name('medecinEDITvisitePost');
Route::POST('/medecin/medecinDELETEvisitePost', [ App\Http\Controllers\VisiteController::class, 'medecinDELETEvisitePost' ])->name('medecinDELETEvisitePost');

//Route ordonnance
Route::get('/medecin/medecinBilans/{visite_id}', [App\Http\Controllers\BilanController::class, 'medecinBilans'])->name('medecinBilans');
Route::post('/medecin/medecinBilanspost', [App\Http\Controllers\BilanController::class, 'medecinBilanspost'])->name('medecinBilanspost');
Route::get('/medecin/medecinImprimerBilan/{visite_id}', [App\Http\Controllers\BilanController::class, 'medecinImprimerBilan'])->name('medecinImprimerBilan');


//Ordonnance
Route::get('/medecin/medecinordonnance/{id}',[App\Http\Controllers\OrdonnanceController::class, 'medecinordonnance'])->name('medecinordonnance');
Route::post('/medecin/medecinADDordonnancePost', [App\Http\Controllers\OrdonnanceController::class, 'medecinADDordonnancePost'])->name('medecinADDordonnancePost');
Route::post('/medecin/medecinEDITordonnancePost', [ App\Http\Controllers\OrdonnanceController::class, 'medecinEDITordonnancePost' ])->name('medecinEDITordonnancePost');
Route::POST('/medecin/medecinDELETEordonnancePost', [ App\Http\Controllers\OrdonnanceController::class, 'medecinDELETEordonnancePost' ])->name('medecinDELETEordonnancePost');
  
//Article
Route::get('/adminarticles', [App\Http\Controllers\PostController::class, 'adminarticles'])->name('adminarticles');
Route::post('adminAddarticlesPost', [App\Http\Controllers\PostController::class, 'adminAddarticlesPost'])->name('adminAddarticlesPost');
Route::get('adminEDITarticle/{id}', [ App\Http\Controllers\PostController::class, 'adminEDITarticle' ])->name('adminEDITarticle');
Route::post('adminEDITarticlePost', [ App\Http\Controllers\PostController::class, 'adminEDITarticlePost' ])->name('adminEDITarticlePost');
Route::post('adminDELETEarticlePost', [ App\Http\Controllers\PostController::class, 'adminDELETEarticlePost' ])->name('adminDELETEarticlePost');
Route::get('/admincommentaires/{id}', [App\Http\Controllers\PostController::class, 'admincommentaires'])->name('admincommentaires');
Route::post('adminDELETEcommentaires', [App\Http\Controllers\PostController::class, 'adminDELETEcommentaires'])->name('adminDELETEcommentaires');



//Parent
//Route patient
Route::get('/parent/parentpatients', [App\Http\Controllers\PatientController::class, 'parentpatients'])->name('parentpatients');
Route::get('/parent/parentpatient/{id}',[App\Http\Controllers\PatientController::class, 'parentpatient'])->name('parentpatient');

//Route rendez-vous
Route::get('/parent/parentrdvs', [App\Http\Controllers\RdvController::class, 'parentrdvs'])->name('parentrdvs');
Route::get('/parent/parentrdv/{id}',[App\Http\Controllers\RdvController::class, 'parentrdv'])->name('parentrdv');
Route::get('/parent/parentDEMANDrdv', [ App\Http\Controllers\RdvController::class, 'parentDEMANDrdv'])->name('parentDEMANDrdv');
Route::post('/parent/parentDEMANDrdvPost', [App\Http\Controllers\RdvController::class, 'parentDEMANDrdvPost'])->name('parentDEMANDrdvPost');


//Verification du compte 
Route::get('/admin/adminverification', [App\Http\Controllers\HomeController::class, 'adminverification'])->name('adminverification');
Route::get('/admin/adminverificationuser/{id}', [App\Http\Controllers\HomeController::class, 'adminverificationuser'])->name('adminverificationuser');
Route::post('adminverificationpost', [App\Http\Controllers\HomeController::class, 'adminverificationpost'])->name('adminverificationpost');
Route::post('admindeleteuser', [App\Http\Controllers\HomeController::class, 'admindeleteuser'])->name('admindeleteuser');


//Messages 
Route::get('/messages/usermessages', [App\Http\Controllers\MessageController::class, 'usermessages'])->name('usermessages');
Route::post('userAddMessagePost', [App\Http\Controllers\MessageController::class, 'userAddMessagePost'])->name('userAddMessagePost');
Route::get('/messages/{userId}', [App\Http\Controllers\MessageController::class, 'getMessagesByUserId'])->name('getMessagesByUserId');
Route::get('/chat/{userId}', [App\Http\Controllers\MessageController::class, 'index'])->name('chat.show');


Route::get('/getMessagesWithUser', [App\Http\Controllers\HomeController::class, 'getMessagesWithUser'])->name('getMessagesWithUser');



//Reclamations 
Route::get('/userreclamations', [App\Http\Controllers\ReclamationController::class, 'userreclamations'])->name('userreclamations');
Route::get('/adminreclamations', [App\Http\Controllers\ReclamationController::class, 'adminreclamations'])->name('adminreclamations');
Route::post('/userAddreclamationPost', [App\Http\Controllers\ReclamationController::class, 'userAddreclamationPost'])->name('userAddreclamationPost');
Route::post('/userEditreclamationPost', [App\Http\Controllers\ReclamationController::class, 'userEditreclamationPost'])->name('userEditreclamationPost');
Route::post('/userDeletereclamationPost', [App\Http\Controllers\ReclamationController::class, 'userDeletereclamationPost'])->name('userDeletereclamationPost');
