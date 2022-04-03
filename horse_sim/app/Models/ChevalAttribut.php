<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChevalAttribut extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'club_hippique';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID';

    protected $connection = 'mysql';

    protected $fillable = [
        'ID',
        'resistance',
        'endurance',
        'detente',
        'vitesse',
        'sociabilite',
        'intelligence',
        'temperament'
    ];
}
