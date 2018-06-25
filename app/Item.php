<?php
namespace App;
/**
 * @property int $id
 * @property string $users_id
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $filename
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereUsersId($value)
 * @mixin \Eloquent
 */
use Illuminate\Database\Eloquent\Model;
class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id', 'filename',
    ];
}