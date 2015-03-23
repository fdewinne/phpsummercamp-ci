<?php
namespace CIBlog;

class PostRepository
{
  private $pdo;

  public function __construct(\PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function findLastPost()
  {
    $q = sprintf("SELECT * FROM post ORDER BY published_at DESC LIMIT 1");

    $result = $this->pdo
                   ->query($q)
                   ->fetch(\PDO::FETCH_ASSOC);

    $post = new Post();
    $post->fromArray($result);

    return $post;
  }

  public function findAll()
  {
    $q = sprintf("SELECT * FROM post ORDER BY published_at DESC");

    $result = $this->pdo
                   ->query($q)
                   ->fetchAll(\PDO::FETCH_ASSOC);

    $res = array();

    foreach ($result as $row) {
      $post = new Post();
      $post->fromArray($row);

      $res[] = $post;
    }

    return $res;
  }
}