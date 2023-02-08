<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MotsClesArticle
 * 
 * @property int $id
 * @property int $motcle_id
 * @property int $article_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Article $article
 * @property MotsCle $mots_cle
 *
 * @package App\Models
 */
class MotsClesArticle extends Model
{
	protected $table = 'MotsClesArticles';

	protected $casts = [
		'motcle_id' => 'int',
		'article_id' => 'int'
	];

	protected $fillable = [
		'motcle_id',
		'article_id'
	];

	public function article()
	{
		return $this->belongsTo(Article::class, 'article_id');
	}

	public function mots_cle()
	{
		return $this->belongsTo(MotsCle::class, 'motcle_id');
	}
}
