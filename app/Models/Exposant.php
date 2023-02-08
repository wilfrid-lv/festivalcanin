<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Exposant
 * 
 * @property int $id
 * @property string $nom
 * @property string $pathImage
 * @property string $lien
 * @property string $description
 * @property int $utilisateur_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Utilisateur $utilisateur
 *
 * @package App\Models
 */
class Exposant extends Model
{
	protected $table = 'Exposants';

	protected $casts = [
		'utilisateur_id' => 'int'
	];

	protected $fillable = [
		'nom',
		'pathImage',
		'lien',
		'description',
		'utilisateur_id'
	];

	public function utilisateur()
	{
		return $this->belongsTo(Utilisateur::class, 'utilisateur_id');
	}
}
