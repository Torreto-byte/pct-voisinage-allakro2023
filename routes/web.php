<?php

use App\Models\Pharmacie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProjetController;
use App\Http\Controllers\Admin\MaladiesController;
use App\Http\Controllers\Admin\HabitantsController;
use App\Http\Controllers\Admin\PharmaciesController;
use App\Http\Controllers\Admin\CentreSanteController;
use App\Http\Controllers\Front\HomeController as Front;
use App\Http\Controllers\WebSite\HomeController as WebSite;

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

Route::get('/', [WebSite::class, 'webSiteHome'])->name('webSiteHome');

Route::get('/connexion', [AuthController::class, 'login'])->name('login');

Route::get('/inscription', [AuthController::class, 'register'])->name('register');


Route::post('/', [AuthController::class, 'authentificate'])->name('authentificated');

Route::post('/creates/user', [AuthController::class, 'created'])->name('created');


Route::middleware(['auth'])->group(function () {

	/****************************          ROUTE ADMIN         ********************************/

	Route::get('/deconnexion', [AuthController::class, 'logout'])->name('logout');

	Route::get('/admin/dashboard', [HomeController::class, 'dashboard'])->name('homePage');


	Route::get('/admin/maladies', [MaladiesController::class, 'afficherMaladies'])->name('listMaladie');
	Route::get('/admin/maladie/enregistrer', [MaladiesController::class, 'creation'])->name('addMaladie');
	Route::post('/admin/maladie/postMaladie', [MaladiesController::class, 'enregistrer'])->name('postMaladie');
	Route::get('/admin/maladie/modifier/{id}', [MaladiesController::class, 'modifier'])->name('editMaladie');
	Route::put('/admin/maladie/update/{id}', [MaladiesController::class, 'update'])->name('updateMaladie');
	Route::delete('/admin/maladie/supprimer/{id}', [MaladiesController::class, 'supprimer'])->name('supprimerMaladie');


	Route::get('/admin/pharmacies', [PharmaciesController::class, 'afficherPharmacie'])->name('listPharmacie');
	Route::get('/admin/pharmacie/enregistrer', [PharmaciesController::class, 'creation'])->name('addPharmacie');
	Route::post('/admin/pharmacie/postPharmacie', [PharmaciesController::class, 'enregistrer'])->name('postPharmacie');
	Route::get('/admin/pharmacie/modifier/{id}', [PharmaciesController::class, 'modifier'])->name('editPharmacie');
	Route::put('/admin/pharmacie/update/{id}', [PharmaciesController::class, 'update'])->name('updatePharmacie');
	Route::delete('/admin/pharmacie/supprimer/{id}', [PharmaciesController::class, 'supprimer'])->name('supprimerPharmacie');


	Route::get('/admin/centre-sante', [CentreSanteController::class, 'afficherCentre'])->name('listCentre');
	Route::get('/admin/centre-sante/enregistrer', [CentreSanteController::class, 'creation'])->name('addCentre');
	Route::post('/admin/centre-sante/postCentre', [CentreSanteController::class, 'enregistrer'])->name('postCentre');
	Route::get('/admin/centre-sante/modifier/{id}', [CentreSanteController::class, 'modifier'])->name('editCentre');
	Route::put('/admin/centre-sante/update/{id}', [CentreSanteController::class, 'update'])->name('updateCentre');
	Route::delete('/admin/centre-sante/supprimer/{id}', [CentreSanteController::class, 'supprimer'])->name('supprimerCentre');


	Route::get('/admin/projet', [ProjetController::class, 'afficherProjet'])->name('listProjet');
	Route::get('/admin/projet/enregistrer', [ProjetController::class, 'creation'])->name('addProjet');
	Route::post('/admin/projet/postCentre', [ProjetController::class, 'enregistrer'])->name('postProjet');
	Route::get('/admin/projet/modifier/{id}', [ProjetController::class, 'modifier'])->name('editProjet');
	Route::put('/admin/projet/update/{id}', [ProjetController::class, 'update'])->name('updateProjet');
	Route::delete('/admin/projet/supprimer/{id}', [ProjetController::class, 'supprimer'])->name('supprimerProjet');


	Route::get('/admin/habitant', [HabitantsController::class, 'afficherHabitant'])->name('listHabitant');
	Route::get('/admin/habitant/enregistrer', [HabitantsController::class, 'creation'])->name('addHabitant');
	Route::post('/admin/habitant/postHabitant', [HabitantsController::class, 'enregistrer'])->name('postHabitant');
	Route::get('/admin/habitant/modifier/{id}', [HabitantsController::class, 'modifier'])->name('editHabitant');
	Route::put('/admin/habitant/update/{id}', [HabitantsController::class, 'update'])->name('updateHabitant');
	Route::delete('/admin/habitant/supprimer/{id}', [HabitantsController::class, 'supprimer'])->name('supprimerHabitant');

	/****************************          FRONT ADMIN         ********************************/

	Route::get('/usager/dashboard', [Front::class, 'frontHome'])->name('frontHomePage');
	Route::get('/usager/maladies', [Front::class, 'afficherMaladies'])->name('frontListMaladie');
	Route::get('/usager/pharmacies', [Front::class, 'afficherPharmacie'])->name('frontListPharmacie');
	Route::get('/usager/centre-sante', [Front::class, 'afficherCentre'])->name('frontListCentre');


	/**********************************  WEBSITE ROUTE  ***********************************/

	Route::get('/enregistrement/naissance', [WebSite::class, 'naissances'])->name('websiteNaissance');
	Route::post('/enregistrement/naissance/create', [WebSite::class, 'enregistrer_naissance'])->name('postNaissance');
	Route::get('/enregistrement/deces', [WebSite::class, 'deces'])->name('websiteDeces');
	Route::post('/enregistrement/deces/create', [WebSite::class, 'enregistrer_deces'])->name('postDeces');
	Route::get('/enregistrement/amenagement', [WebSite::class, 'amenagement'])->name('websiteAmenagement');
	Route::post('/enregistrement/amenagement/create', [WebSite::class, 'enregistrer_amenagement'])->name('postAmenagement');
	Route::get('/enregistrement/demenagement', [WebSite::class, 'demenagement'])->name('websiteDemenagement');
	Route::post('/enregistrement/demenagement/create', [WebSite::class, 'enregistrer_demenagement'])->name('postDemenagement');

});


/****************************          WEBSITE ROUTE         ********************************/

Route::get('/projets', [WebSite::class, 'afficherProjet'])->name('websiteListProjet');
Route::get('/liste/pharmacies', [WebSite::class, 'afficherPharmacie'])->name('websiteListPharmacie');
Route::get('/liste/centre-sante', [WebSite::class, 'afficherCentre'])->name('websiteListCentre');
Route::get('/enregistrement/formulaire', [WebSite::class, 'formulaire'])->name('websiteFormulaire');
Route::post('/enregistrement/formulaire/create', [WebSite::class, 'enregistrer_formulaire'])->name('postFormulaire');