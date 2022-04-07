<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JoueurCompteRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class JoueurCompteCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class JoueurCompteCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\JoueurCompte::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/joueur-compte');
        CRUD::setEntityNameStrings('joueur compte', 'joueur comptes');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('ID_joueur_compte');
        CRUD::column('ID_joueur');
        CRUD::column('ID_centre');
        CRUD::column('ID_chevaux');
        CRUD::column('ID_club');
        CRUD::column('ID_items');
        CRUD::column('ID_taches');
        CRUD::column('username');
        CRUD::column('mdp');
        CRUD::column('date_Inscription');
        CRUD::column('last_connexion');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(JoueurCompteRequest::class);

        CRUD::field('ID_joueur');
        CRUD::field('ID_centre');
        CRUD::field('ID_chevaux');
        CRUD::field('ID_club');
        CRUD::field('ID_items');
        CRUD::field('ID_taches');
        CRUD::field('username');
        CRUD::field('mdp');
        CRUD::field('date_Inscription');
        CRUD::field('last_connexion');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
