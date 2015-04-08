<?php

namespace CIBlog\Test;

use Symfony\Component\HttpKernel\Client;
use Symfony\Component\HttpKernel\HttpKernel;

abstract class WebTestCase extends \PHPUnit_Extensions_Database_TestCase
{
    protected $app;

    protected $pdo;

    abstract public function createApplication();

    public function getConnection()
    {
        $this->pdo = $this->app['db'];

        return $this->createDefaultDBConnection($this->pdo);
    }

    public function getDataSet()
    {
        return $this->createFlatXMLDataSet(
            __DIR__.'/../../test/fixtures/post.xml'
        );
    }

    public function setUp()
    {
        $this->app = $this->createApplication();

        parent::setUp();
    }

    public function createClient(array $server = array())
    {
        return new Client($this->app, $server);
    }
}
