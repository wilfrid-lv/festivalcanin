<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Information
 *
 * @property int $id
 * @property Carbon $dateDebut
 * @property Carbon $dateFin
 * @property string $description
 * @property string $descriptionLocalisation
 * @property string $noTelephoneContact
 * @property string $lieu
 * @property string $courrielContact
 * @property string $resume
 * @property string $adresse
 * @property string $imageAccueil
 * @property string $lienVideo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Information extends Model
{
	protected $table = 'Informations';

	protected $dates = [
		'dateDebut',
		'dateFin'
	];

	protected $fillable = [
		'dateDebut',
		'dateFin',
		'description',
		'noTelephoneContact',
		'courrielContact',
		'resume',
		'adresse',
		'imageAccueil',
		'lienVideo'
	];
}
