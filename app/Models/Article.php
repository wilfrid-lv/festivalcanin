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
 * @property int $utilisateur_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Utilisateur $utilisateur
 * @property Collection|Commentaire[] $commentaires
 * @property Collection|ImagesArticle[] $images_articles
 *
 * @package App\Models
 */
class Article extends Model
{
	protected $table = 'Articles';

	protected $casts = [
		'approuve' => 'bool',
		'utilisateur_id' => 'int'
	];

	protected $fillable = [
		'titre',
		'contenu',
		'approuve',
		'utilisateur_id'
	];

	public function utilisateur()
	{
		return $this->belongsTo(Utilisateur::class, 'utilisateur_id');
	}

	public function commentaires()
	{
		return $this->hasMany(Commentaire::class, 'article_id');
	}

	public function images_articles()
	{
		return $this->hasMany(ImagesArticle::class, 'article_id');
	}
}
