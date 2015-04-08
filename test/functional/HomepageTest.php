<?php

use CIBlog\Test\WebTestCase;

/**
 * @group functional
 * @group post
*/
class HomepageTest extends WebTestCase
{
  public function createApplication()
  {
    $app = require __DIR__.'/../../src/app.php';
    $app['debug'] = true;
    $app['exception_handler']->disable();

    return $app;
  }

  public function testHomepageContainsAPost()
  {
    $client = $this->createClient();
    $crawler = $client->request('GET', '/');

    $this->assertEquals('CIBlog', $crawler->filter('h1')->text());
    $this->assertCount(2, $crawler->filter('div.post'));
    $this->assertCount(2, $crawler->filter('.author'));
  }
}