<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeActivite
 * 
 * @property int $id
 * @property string $nom
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Activite[] $activites
 *
 * @package App\Models
 */
class TypeActivite extends Model
{
	protected $table = 'TypeActivites';

	protected $fillable = [
		'nom'
	];

	public function activites()
	{
		return $this->hasMany(Activite::class, 'typeActivite_id');
	}
}
