<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EleveursImage
 * 
 * @property int $id
 * @property string $imagePath
 * @property int $eleveur_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Eleveur $eleveur
 *
 * @package App\Models
 */
class EleveursImage extends Model
{
	protected $table = 'eleveurs_images';

	protected $casts = [
		'eleveur_id' => 'int'
	];

	protected $fillable = [
		'imagePath',
		'eleveur_id'
	];

	public function eleveur()
	{
		return $this->belongsTo(Eleveur::class, 'eleveur_id');
	}
}
