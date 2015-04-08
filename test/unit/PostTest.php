<?php

/**
 * @group unit
*/
class PostTest extends PHPUnit_Framework_TestCase
{
	public function testNewPostFromArray()
	{
		$data = array(
			'title'			=> 'titolo del post',
			'intro'			=> 'intro del post',
			'body'			=> 'il body',
			'image'			=> 'nice.jpg',
			'published_at'	=> new DateTime('now'),
		);

		$post = new CIBlog\Post();
		$post->fromArray($data);

		$this->assertEquals('titolo del post', $post->getTitle());
	}
}