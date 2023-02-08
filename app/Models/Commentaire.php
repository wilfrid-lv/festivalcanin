<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Commentaire
 * 
 * @property int $id
 * @property string $contenu
 * @property string $nom
 * @property string $courriel
 * @property int $article_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Article $article
 *
 * @package App\Models
 */
class Commentaire extends Model
{
	protected $table = 'Commentaires';

	protected $casts = [
		'article_id' => 'int'
	];

	protected $fillable = [
		'contenu',
		'nom',
		'courriel',
		'article_id'
	];

	public function article()
	{
		return $this->belongsTo(Article::class, 'article_id');
	}
}
