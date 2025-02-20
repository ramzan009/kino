<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{

    use SoftDeletes;
    use HasFactory;
    use CrudTrait;

    protected $table = 'types';

    protected $fillable = [
        'name',
        'alias'
    ];

    /**
     * Отношения с фильмами
     */
    public function film(): HasMany
    {
        return $this->hasMany(Film::class, 'type_id', 'id');
    }
}
