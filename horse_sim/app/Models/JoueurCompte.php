<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoueurCompte extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'joueur_compte';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_joueur_compte';

    protected $connection = 'mysql';

    protected $fillable = [
        'ID_joueur_compte',
        'ID_joueur',
        'ID_centre',
        'ID_chevaux',
        'ID_club',
        'ID_items',
        'ID_taches',
        'username',
        'mdp',
        'created_at',
        'last_connexion'
    ];
}
