<?php

namespace Db;

// require_once 'app/db/DbCollection.php';

$postCol = new class implements DbCollection
{
  private array $table = [];
  public function __construct()
  {
    foreach (glob(__DIR__ . '/rows/*.php') as $filename) {
      include_once $filename;
      $this->table[$post->id] = $post;
    }
  }
  public function find(): array
  {
    return array_values($this->table);
  }
  public function get(string $id): Post
  {
    return $this->table[$id];
  }
};
