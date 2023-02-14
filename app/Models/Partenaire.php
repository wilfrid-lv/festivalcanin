<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Partenaire
 * 
 * @property int $id
 * @property string $nom
 * @property string $imagePath
 * @property string $lien
 * @property int $niveau_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Niveau $niveau
 *
 * @package App\Models
 */
class Partenaire extends Model
{
	protected $table = 'Partenaires';

	protected $casts = [
		'niveau_id' => 'int'
	];

	protected $fillable = [
		'nom',
		'imagePath',
		'lien',
		'niveau_id'
	];

	public function niveau()
	{
		return $this->belongsTo(Niveau::class, 'niveau_id');
	}
}
