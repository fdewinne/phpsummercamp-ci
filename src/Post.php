<?php

namespace CIBlog;

class Post
{
  private $id;
  private $title;
  private $intro;
  private $body;
  private $image;
  private $published_at;
  private $author;

  public function fromArray(array $data)
  {
    $this->title              = $data['title'];
    $this->intro              = $data['intro'];
    $this->body               = $data['body'];
    $this->image              = $data['image'];
    $this->author             = $data['author'];
    $this->published_at       = $data['published_at'];
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getIntro()
  {
    return $this->intro;
  }

  public function getBody()
  {
    return $this->body;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function getPublishedAt()
  {
    return $this->published_at;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function foo($a, $b, $c, $d, $e, $f, $g, $h)
  {
    return 'ciao';
  }

  public function boh()
  {
    if(false) {
      return;
    }

    if(false) {
      return;
    }

    if(false) {
      return;
    }

    if(false) {
      return;
    }

    if(false) {
      return;
    }

    if(false) {
      return;
    }

    if(false) {
      return;
    }

    if(false) {
      return;
    }
  }
}
?>
