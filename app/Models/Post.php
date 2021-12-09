<?php

namespace App\Models;

class Post
{
	static $blog_posts =         [
		[
			"title" => "Judul Post Pertama",
			"slug" => "judul-post-pertama",
			"author" => "Haris Wijayanto",
			"body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim blanditiis ab earum a modi minima quis sapiente delectus! Ducimus aut, laboriosam cupiditate accusantium quasi numquam maxime accusamus nostrum ea facere, praesentium quaerat dolore vero! Nesciunt enim iste sapiente obcaecati tempora id, quasi consequuntur recusandae doloremque distinctio similique quo cum atque sint non, autem eligendi consectetur maxime excepturi veniam cupiditate ipsa porro! Cupiditate, quidem? Quis alias ab hic! Delectus totam debitis aperiam odit tempore, praesentium nobis. Voluptas amet dolorem ullam tenetur?"
		], [
			"title" => "Judul Post Kedua",
			"slug" => "judul-post-kedua",
			"author" => "Azizi",
			"body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat aliquid earum dolore inventore? Exercitationem eum explicabo assumenda dolor molestias non blanditiis odio. Magnam deserunt ut consequuntur incidunt eius voluptate veritatis quo quae quia amet nulla ipsa maiores explicabo magni porro odit obcaecati in mollitia, placeat commodi aliquam. Deserunt beatae ex quis sint totam rerum esse dignissimos consequatur harum perspiciatis? Voluptatem, amet dolore. Harum id cumque aliquid culpa reiciendis sint, eligendi quidem saepe. Perspiciatis totam, facere consequuntur nemo corporis tempore a nobis ea possimus sit molestias autem rerum adipisci recusandae saepe illo perferendis temporibus delectus vel praesentium sint quas. Est, repellendus?"
		]
	];

	public static function all()
	{
		return collect(self::$blog_posts);
	}

	public static function find($slug)
	{
		$posts = static::all();

		return $posts->firstWhere('slug', $slug);
	}
}
