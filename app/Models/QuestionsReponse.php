<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QuestionsReponse
 * 
 * @property int $id
 * @property string $question
 * @property string $reponse
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class QuestionsReponse extends Model
{
	protected $table = 'QuestionsReponses';

	protected $fillable = [
		'question',
		'reponse'
	];
}
