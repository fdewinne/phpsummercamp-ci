<?php

/**
 * @group integration
 * @group post
*/
class PostRepositoryTest extends PHPUnit_Extensions_Database_TestCase
{
    private $pdo;

    public function getConnection()
    {
        $this->pdo = new \PDO(
            'mysql:host=localhost;dbname=CIBlog_development',
            'user',
            'password'
        );

        return $this->createDefaultDBConnection($this->pdo);
    }

    public function getDataSet()
    {
        return $this->createFlatXMLDataSet(dirname(__FILE__).'/../fixtures/post.xml');
    }

    public function testRetrieveLastPost()
    {
        $repo = new CIBlog\PostRepository($this->pdo);
        $post = $repo->findLastPost();

        $this->assertEquals('Primo post', $post->getTitle());
    }

    /**
     * @group findall
     */
    public function testFindAll()
    {
        $repo = new CIBlog\PostRepository($this->pdo);
        $posts = $repo->findAll();

        $this->assertCount(2, $posts);
        $this->assertInstanceOf('CIBlog\Post', $posts[0]);
        $this->assertInstanceOf('CIBlog\Post', $posts[1]);
    }
}


