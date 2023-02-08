<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Eleveur
 * 
 * @property int $id
 * @property string $nom
 * @property string $description
 * @property string $imagePath
 * @property string $adresse
 * @property string $ville
 * @property int $utilisateur_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Utilisateur $utilisateur
 * @property Collection|Article[] $articles
 * @property Collection|EleveursImage[] $eleveurs_images
 *
 * @package App\Models
 */
class Eleveur extends Model
{
	protected $table = 'Eleveurs';

	protected $casts = [
		'utilisateur_id' => 'int'
	];

	protected $fillable = [
		'nom',
		'description',
		'imagePath',
		'adresse',
		'ville',
		'utilisateur_id'
	];

	public function utilisateur()
	{
		return $this->belongsTo(Utilisateur::class, 'utilisateur_id');
	}

	public function articles()
	{
		return $this->hasMany(Article::class, 'eleveur_id');
	}

	public function eleveurs_images()
	{
		return $this->hasMany(EleveursImage::class, 'eleveur_id');
	}
}
