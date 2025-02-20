<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;
    use CrudTrait;

    protected $table = 'comments';

    protected $fillable = [
        'film_id',
        'user_id',
        'comment'
    ];

    /**
     * Отношения с фильмами
     */
    public function film(): BelongsTo
    {
        return $this->belongsTo(Film::class, 'film_id', 'id');
    }

    /**
     * Отношения с пользователем
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
