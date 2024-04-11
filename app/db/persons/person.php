<?php
require_once 'app/db/db.php';


class Person extends DbRow
{
  public function __construct(
    public string $name,
    public string $position,
    public string $imagePath,
    public string $link,
    public string $bio,
    ?string $id = null,
    mixed $createdAt = null,
    mixed $updatedAt = null,
  ) {
    parent::__construct($id, $createdAt, $updatedAt);
  }
}
