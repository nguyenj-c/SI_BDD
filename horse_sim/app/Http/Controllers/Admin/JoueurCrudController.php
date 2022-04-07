<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JoueurRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class JoueurCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class JoueurCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Joueur::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/joueur');
        CRUD::setEntityNameStrings('joueur', 'joueurs');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('ID_joueur');
        CRUD::column('nom');
        CRUD::column('prenom');
        CRUD::column('email');
        CRUD::column('sexe');
        CRUD::column('birthDate');
        CRUD::column('phone');
        CRUD::column('address');
        CRUD::column('IP_address');
        CRUD::column('profile_picture');
        CRUD::column('description');
        CRUD::column('website');
        CRUD::column('CREATED_AT');

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
        CRUD::setValidation(JoueurRequest::class);

        CRUD::field('nom');
        CRUD::field('prenom');
        CRUD::field('email');
        CRUD::field('sexe');
        CRUD::field('birthDate');
        CRUD::field('phone');
        CRUD::field('address');
        CRUD::field('IP_address');
        CRUD::field('profile_picture');
        CRUD::field('description');
        CRUD::field('website');
        CRUD::field('CREATED_AT');

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
