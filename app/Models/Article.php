<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * 
 * @property int $id
 * @property string $titre
 * @property string $contenu
 * @property bool $approuve
 * @property int $eleveur_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Eleveur $eleveur
 * @property Collection|Commentaire[] $commentaires
 * @property Collection|ImagesArticle[] $images_articles
 * @property Collection|MotsCle[] $mots_cles
 *
 * @package App\Models
 */
class Article extends Model
{
	protected $table = 'Articles';

	protected $casts = [
		'approuve' => 'bool',
		'eleveur_id' => 'int'
	];

	protected $fillable = [
		'titre',
		'contenu',
		'approuve',
		'eleveur_id'
	];

	public function eleveur()
	{
		return $this->belongsTo(Eleveur::class, 'eleveur_id');
	}

	public function commentaires()
	{
		return $this->hasMany(Commentaire::class, 'article_id');
	}

	public function images_articles()
	{
		return $this->hasMany(ImagesArticle::class, 'article_id');
	}

	public function mots_cles()
	{
		return $this->belongsToMany(MotsCle::class, 'MotsClesArticles', 'article_id', 'motcle_id')
					->withPivot('id')
					->withTimestamps();
	}
}
