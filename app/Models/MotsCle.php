<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MotsCle
 * 
 * @property int $id
 * @property string $nom
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Article[] $articles
 *
 * @package App\Models
 */
class MotsCle extends Model
{
	protected $table = 'MotsCles';

	protected $fillable = [
		'nom'
	];

	public function articles()
	{
		return $this->belongsToMany(Article::class, 'MotsClesArticles', 'motcle_id')
					->withPivot('id')
					->withTimestamps();
	}
}
