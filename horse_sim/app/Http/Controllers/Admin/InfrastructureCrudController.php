<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InfrastructureRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class InfrastructureCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class InfrastructureCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Infrastructure::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/infrastructure');
        CRUD::setEntityNameStrings('infrastructure', 'infrastructures');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('ID');
        CRUD::column('ID_accomodation_capacity');
        CRUD::column('ID_items');
        CRUD::column('type');
        CRUD::column('niveau');
        CRUD::column('description');
        CRUD::column('infrastructure_family');
        CRUD::column('prix');
        CRUD::column('ressource_consumption');

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
        CRUD::setValidation(InfrastructureRequest::class);

        CRUD::field('ID');
        CRUD::field('ID_accomodation_capacity');
        CRUD::field('ID_items');
        CRUD::field('type');
        CRUD::field('niveau');
        CRUD::field('description');
        CRUD::field('infrastructure_family');
        CRUD::field('prix');
        CRUD::field('ressource_consumption');

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
