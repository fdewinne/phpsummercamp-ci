<?php

use CIBlog\Test;

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
    // $app['exception_handler']->disable();

    return $app;
  }

  public function testHomepageContainsLatestFivePost()
  {
    $client = $this->createClient();
    $crawler = $client->request('GET', '/');

    $this->assertTrue($client->getResponse()->isOk());
    $this->assertCount(1, $crawler->filter('h1:contains("Contact us")'));
    $this->assertCount(1, $crawler->filter('form'));
  }
}