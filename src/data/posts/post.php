<?php

class Post
{
  public function __construct(
    public ?string $id = "",
    public string $slug,
    public string $title,
    public ?string $subtitle = "",
    public string $description,
    public string $author_staff_member,
    public string $publishedAt,
    public string $content,
    /** @var string[] $categories */
    public ?array $categories = [],
    public ?string $series = "",
    public ?string $next,
    public ?string $prev,
    public ?string $image = '/images/dc_marketing_seo.png',
  ) {
  }
}
