<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UtilisateursImage
 * 
 * @property int $id
 * @property string $imagePath
 * @property int $utilisateur_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Utilisateur $utilisateur
 *
 * @package App\Models
 */
class UtilisateursImage extends Model
{
	protected $table = 'UtilisateursImages';

	protected $casts = [
		'utilisateur_id' => 'int'
	];

	protected $fillable = [
		'imagePath',
		'utilisateur_id'
	];

	public function utilisateur()
	{
		return $this->belongsTo(Utilisateur::class, 'utilisateur_id');
	}
}
