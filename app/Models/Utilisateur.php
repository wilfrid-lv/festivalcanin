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
 * @property string $nom
 * @property string $email
 * @property string $motdepasse
 * @property int $role_id
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Role $role
 * @property Collection|Eleveur[] $eleveurs
 * @property Collection|Exposant[] $exposants
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
		'nom',
		'email',
		'motdepasse',
		'role_id',
		'remember_token'
	];

	public function role()
	{
		return $this->belongsTo(Role::class, 'role_id');
	}

	public function eleveurs()
	{
		return $this->hasMany(Eleveur::class, 'utilisateur_id');
	}

	public function exposants()
	{
		return $this->hasMany(Exposant::class, 'utilisateur_id');
	}
}
