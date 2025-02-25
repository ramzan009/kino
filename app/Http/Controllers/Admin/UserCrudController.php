<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\Admin\UserCreateRequest;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


class UserCrudController extends CrudController
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
        $this->language_model = 'models/User.';
        $this->language_model_fields = 'models/User.fields.';

        CRUD::setModel(User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
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
                'name'  => 'name',
                'label' => __($this->language_model_fields . 'name')
            ],
            [
                'name'  => 'avatar',
                'label' => __($this->language_model_fields . 'avatar')
            ],
            [
                'name'  => 'email',
                'label' => __($this->language_model_fields . 'email')
            ],
            [
                'name'  => 'favorites',
                'label' => __($this->language_model_fields . 'favorites'),
            ]
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
        CRUD::setValidation(UserCreateRequest::class);
        CRUD::addFields([
            [
                'name'  => 'name',
                'label' => __($this->language_model_fields . 'name'),
            ],
            [
                'name'      => 'avatar',
                'label'     => __($this->language_model_fields . 'avatar'),
                'type'      => 'upload',
                'withFiles' => true
            ],
            [
                'name'  => 'email',
                'label' => __($this->language_model_fields . 'email'),
            ],
            [
                'name'  => 'password',
                'label' => __($this->language_model_fields . 'password'),
            ],
            [
                'name'  => 'favorites',
                'label' => __($this->language_model_fields . 'favorites'),
            ]
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
        CRUD::setValidation(UserRequest::class);
        CRUD::addFields([
            [
                'name'  => 'name',
                'label' => __($this->language_model_fields . 'name'),
            ],
            [
                'name'      => 'avatar',
                'label'     => __($this->language_model_fields . 'avatar'),
                'type'      => 'upload',
                'withFiles' => true
            ],
            [
                'name'  => 'email',
                'label' => __($this->language_model_fields . 'email'),
            ],
            [
                'name'  => 'favorites',
                'label' => __($this->language_model_fields . 'favorites'),
            ]
        ]);
    }
}
