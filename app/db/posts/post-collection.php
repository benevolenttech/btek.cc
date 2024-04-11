<?php
require_once 'app/db/db.php';

$postCol = new class extends DbCollection
{
  public function __construct()
  {
    foreach (glob(__DIR__ . '/rows/*.php') as $filename) {
      include_once $filename;
      $this->set($post);
    }
    parent::__construct();
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
  public function get(string $id): Post
  {
    return parent::get($id);
  }
  public function g(string $id): Post
  {
    return $this->get($id);
  }

  public function getBySlug(string $id): Post
  {
    // look in the table for the row with the matching slug
    foreach ($this->table as $row) {
      if ($row->slug === $id) {
        return $row;
      }
    }
  }
};
