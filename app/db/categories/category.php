<?php
class Category
{
  public function __construct(
    public string $id,
    public string $title,
    public string $slug,
    public string $description,
    public float $count,
  ) {
  }
}
