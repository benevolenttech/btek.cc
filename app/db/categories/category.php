<?php
require_once 'app/db/db.php';

class Category extends DbRow
{
  public function __construct(
    public string $title,
    public string $slug,
    public string $description,
    public float $count,
    ?string $id = null,
    mixed $createdAt = null,
    mixed $updatedAt = null,
  ) {
    parent::__construct($id, $createdAt, $updatedAt);
  }
}
