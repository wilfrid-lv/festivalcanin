<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GagnantsActivite
 * 
 * @property int $id
 * @property string $nom
 * @property int $position
 * @property string $imagePath
 * @property int $activite_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Activite $activite
 *
 * @package App\Models
 */
class GagnantsActivite extends Model
{
	protected $table = 'GagnantsActivites';

	protected $casts = [
		'position' => 'int',
		'activite_id' => 'int'
	];

	protected $fillable = [
		'nom',
		'position',
		'imagePath',
		'activite_id'
	];

	public function activite()
	{
		return $this->belongsTo(Activite::class, 'activite_id');
	}
}
