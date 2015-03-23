<?php

namespace CIBlog;

use Symfony\Component\HttpKernel\Client;
use Symfony\Component\HttpKernel\HttpKernel;

abstract class WebTestCase extends \PHPUnit_Extensions_Database_TestCase
{
    protected $app;

    protected $pdo;

    abstract public function createApplication();

    public function getConnection()
    {
        $this->pdo = new \PDO('mysql:host=localhost;dbname=CIBlog', 'user', 'password');
        return $this->createDefaultDBConnection($this->pdo);
    }

    public function getDataSet()
    {
        return $this->createFlatXMLDataSet(dirname(__FILE__).'/../fixtures/post.xml');
    }

    public function setUp()
    {
        parent::setUp();

        $this->app = $this->createApplication();
    }

    public function createClient(array $server = array())
    {
        return new Client($this->app, $server);
    }
}
