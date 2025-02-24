<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\RatingRequest;
use App\Models\Rating;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


class RatingCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;


    private string $language_model;
    private string $language_model_fields;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        $this->language_model = 'models/Rating.';
        $this->language_model_fields = 'models/Rating.fields.';

        CRUD::setModel(Rating::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/rating');
        CRUD::setEntityNameStrings(__($this->language_model . 'entity_name'), __($this->language_model . 'entity_plural_name'));
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation(): void
    {
        CRUD::addColumns([
            [
                'name'  => 'id',
                'label' => __($this->language_model_fields . 'id')
            ],
            [
                'name'  => 'film',
                'label' => __($this->language_model_fields . 'film_id')
            ],
            [
                'name'  => 'user',
                'label' => __($this->language_model_fields . 'user_id'),
                'attribute' => 'name'
            ],
            [
                'name'  => 'rating',
                'label' => __($this->language_model_fields . 'rating')
            ],
        ]);
    }

    protected function setupShowOperation()
    {
        $this->setupListOperation();
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(RatingRequest::class);
        CRUD::addFields([
            [
                'name'  => 'film',
                'label' => __($this->language_model_fields . 'film_id'),
            ],
            [
                'name'  => 'user',
                'label' => __($this->language_model_fields . 'user_id'),
                'attribute' => 'name'
            ],
            [
                'name'  => 'rating',
                'label' => __($this->language_model_fields . 'rating'),
            ],
        ]);
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
