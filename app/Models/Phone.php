<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Role
 *
 * @property string      phone
 * @method static Builder|Phone newModelQuery()
 * @method static Builder|Phone newQuery()
 * @method static Builder|Phone query()
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Phone whereCreatedAt($value)
 * @method static Builder|Phone whereId($value)
 * @method static Builder|Phone whereName($value)
 * @method static Builder|Phone whereSlug($value)
 * @method static Builder|Phone whereUpdatedAt($value)
 * Eloquent
 */
class Phone extends Model
{
    use HasFactory;

    protected $table = 'phone';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number',
    ];
}
