<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('tag', 'TagCrudController');
    Route::crud('article', 'ArticleCrudController');
    Route::crud('cheval', 'ChevalCrudController');
    Route::crud('banque', 'BanqueCrudController');
    Route::crud('joueur', 'JoueurCrudController');
    Route::crud('centre-equestre', 'CentreEquestreCrudController');
    Route::crud('cheval-attribut', 'ChevalAttributCrudController');
    Route::crud('concours', 'ConcoursCrudController');
    Route::crud('etat', 'EtatCrudController');
    Route::crud('club-hippique', 'ClubHippiqueCrudController');
    Route::crud('famille-item', 'FamilleItemCrudController');
    Route::crud('historiquebanquaire', 'HistoriquebanquaireCrudController');
    Route::crud('infrastructure', 'InfrastructureCrudController');
    Route::crud('item', 'ItemCrudController');
    Route::crud('joueur-compte', 'JoueurCompteCrudController');
    Route::crud('journal', 'JournalCrudController');
    Route::crud('magasin', 'MagasinCrudController');
    Route::crud('niveau', 'NiveauCrudController');
    Route::crud('tache-auto', 'TacheAutoCrudController');
    Route::crud('test', 'TestCrudController');
}); // this should be the absolute last line of this file