<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Kiosque
 * 
 * @property int $id
 * @property bool $actif
 * @property string $nom
 * @property string $description
 * @property string $imagePath
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Kiosque extends Model
{
	protected $table = 'Kiosques';

	protected $casts = [
		'actif' => 'bool'
	];

	protected $fillable = [
		'actif',
		'nom',
		'description',
		'imagePath'
	];
}
