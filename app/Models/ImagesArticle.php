<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ImagesArticle
 * 
 * @property int $id
 * @property string $path
 * @property int $article_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Article $article
 *
 * @package App\Models
 */
class ImagesArticle extends Model
{
	protected $table = 'ImagesArticles';

	protected $casts = [
		'article_id' => 'int'
	];

	protected $fillable = [
		'path',
		'article_id'
	];

	public function article()
	{
		return $this->belongsTo(Article::class, 'article_id');
	}
}
