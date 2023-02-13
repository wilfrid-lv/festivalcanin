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
 * @property string $niveau
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Partenaire extends Model
{
	protected $table = 'Partenaires';

	protected $fillable = [
		'nom',
		'imagePath',
		'lien',
		'niveau'
	];
}
