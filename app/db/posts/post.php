<?php
class Post
{
  public function __construct(
    public string $slug,
    public string $title,
    public string $description,
    public string $author_staff_member,
    public string $publishAt,
    public string $content,
    /** @var string[] $categories */
    public ?array $categories,
    public ?string $series,
    public ?string $prev,
    public ?string $next,
    public ?string $id = null,
    public ?string $subtitle = null,
    public ?string $image = '/img/dc_marketing_seo.png',
  ) {
  }
}
