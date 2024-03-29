<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'joueur';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_joueur';

    protected $connection = 'mysql';

    protected $fillable = [
        'ID_joueur',
        'nom',
        'prenom',
        'email',
        'sexe',
        'birthDate',
        'phone',
        'address',
        'IP_address',
        'profile_picture',
        'description',
        'website'
    ];
}
