<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriqueBanquaire extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'historiquebanquaire';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID';

    protected $connection = 'mysql';

    protected $fillable = [
        'ID',
        'ID_banque_compte',
        'operation_effetuee',
        'montant',
        'last_connexion'
    ];
}
