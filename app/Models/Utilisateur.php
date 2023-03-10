<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Utilisateur
 * 
 * @property int $id
 * @property string $email
 * @property string $motdepasse
 * @property string|null $nom
 * @property string|null $description
 * @property string|null $imagePath
 * @property string|null $adresse
 * @property string|null $ville
 * @property int $role_id
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Role $role
 * @property Collection|Article[] $articles
 * @property Collection|UtilisateursImage[] $utilisateurs_images
 *
 * @package App\Models
 */
class Utilisateur extends Model
{
	protected $table = 'Utilisateurs';

	protected $casts = [
		'role_id' => 'int'
	];

	protected $hidden = [
		'remember_token'
	];

	protected $fillable = [
		'email',
		'motdepasse',
		'nom',
		'description',
		'imagePath',
		'adresse',
		'ville',
		'role_id',
		'remember_token'
	];

	public function role()
	{
		return $this->belongsTo(Role::class, 'role_id');
	}

	public function articles()
	{
		return $this->hasMany(Article::class, 'utilisateur_id');
	}

	public function utilisateurs_images()
	{
		return $this->hasMany(UtilisateursImage::class, 'utilisateur_id');
	}
}
