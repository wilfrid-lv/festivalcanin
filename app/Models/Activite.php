<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Activite
 * 
 * @property int $id
 * @property string $titre
 * @property string $description
 * @property string|null $lienInscription
 * @property Carbon $dateHeure
 * @property int $typeActivite_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property TypeActivite $type_activite
 * @property Collection|GagnantsActivite[] $gagnants_activites
 *
 * @package App\Models
 */
class Activite extends Model
{
	protected $table = 'Activites';

	protected $casts = [
		'typeActivite_id' => 'int'
	];

	protected $dates = [
		'dateHeure'
	];

	protected $fillable = [
		'titre',
		'description',
		'lienInscription',
		'dateHeure',
		'typeActivite_id'
	];

	public function type_activite()
	{
		return $this->belongsTo(TypeActivite::class, 'typeActivite_id');
	}

	public function gagnants_activites()
	{
		return $this->hasMany(GagnantsActivite::class, 'activite_id');
	}
}
