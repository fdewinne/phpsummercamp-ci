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

		$this->assertEquals(
			'il body sdfsdf',
			$post->getBody()
		);
	}

	public function testConstructAPost()
	{
		$post = new CIBlog\Post();

		$this->assertInstanceOf('CIBlog\Post', $post);
	}
}