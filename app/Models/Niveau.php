<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Niveau
 * 
 * @property int $id
 * @property string $nom
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Partenaire[] $partenaires
 *
 * @package App\Models
 */
class Niveau extends Model
{
	protected $table = 'Niveaux';

	protected $fillable = [
		'nom'
	];

	public function partenaires()
	{
		return $this->hasMany(Partenaire::class, 'niveau_id');
	}
}
