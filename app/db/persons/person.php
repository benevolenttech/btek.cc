<?php

class Person
{
  public function __construct(
    public string $id,
    public string $name,
    public string $position,
    public string $imagePath,
    public string $link,
    public string $bio,
  ) {
  }
}
