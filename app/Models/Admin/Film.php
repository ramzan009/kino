<?php

namespace App\Models\Admin;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
    use HasFactory;
    use CrudTrait;
    use SoftDeletes;

    protected $table = 'films';
    protected $fillable = [
        'name',
        'description',
        'date_publication',
        'country_id',
        'type_id'
    ];

    /**
     * Отношения страной
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Отношения с типами
     */
    public function type(): BelongsTo
    {
        return  $this->belongsTo(Type::class);
    }
}
