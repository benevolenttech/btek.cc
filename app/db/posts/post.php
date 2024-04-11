<?php
require_once 'app/db/db.php';

class Post extends DbRow
{
  public ?int $publishAt = null;

  public function __construct(
    public string $slug,
    public string $title,
    public string $description,
    public string $author_staff_member,
    public string $content,
    /** @var string[] $categories */
    public array $categories = [],
    public ?string $series = null,
    public ?string $prev = null,
    public ?string $next = null,
    public ?string $subtitle = null,
    public ?string $image = '/img/dc_marketing_seo.png',
    ?string $id = null,
    mixed $publishAt = null,
    mixed $createdAt = null,
    mixed $updatedAt = null,
  ) {
    if (is_string($publishAt)) {
      $publishAt = strtotime($publishAt);
    }
    $this->publishAt = $publishAt;
    parent::__construct($id, $createdAt, $updatedAt);
  }
}
