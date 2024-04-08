<?php
require_once 'src/data/db-collection.php';

class PostCollection implements DbCollection
{
  private array $table = [];
  public function __construct()
  {
    foreach (glob(__DIR__ . '/*.php') as $filename) {
      if ($filename !== __FILE__ && strpos($filename, 'Post.php') === false) {
        include_once $filename;
        $this->table[$post->id] = $post;
      }
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
}
$postCol = new PostCollection();
