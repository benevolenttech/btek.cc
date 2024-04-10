<?php
require_once 'app/db/db-collection.php';

$postCol = new class extends DbCollection
{
  public function __construct()
  {
    foreach (glob(__DIR__ . '/rows/*.php') as $filename) {
      include_once $filename;
      $this->table[$post->id] = $post;
    }
  }
  public function find(
    ?array $rows = null,
    ?int $limit = null,
    ?array $exclude = null,
    ?array $sortBy = ["publishAt"],
    ?string $sortDir = null,
    ?array $categories = null,
    ?bool $isPublished = true,
    ?array $series = null,
  ): array {
    $posts = array_values($this->table);
    if ($isPublished) {
      $posts = array_filter($posts, fn ($p) => $p->publishAt <= time());
    }
    if ($categories) {
      $posts = array_filter($posts, fn ($p) => count(array_intersect($categories, $p->categories)) > 0);
    }
    if ($series) {
      $posts = array_filter($posts, fn ($p) => in_array($p->series, $series));
    }
    return parent::find(
      rows: $posts,
      limit: $limit,
      exclude: $exclude,
      sortBy: $sortBy,
      sortDir: $sortDir,
    );
  }
  // Redeclaring the get methods to return currect type
  public function get(string $id): Category
  {
    return parent::get($id);
  }
  public function g(string $id): Category
  {
    return $this->get($id);
  }
};
