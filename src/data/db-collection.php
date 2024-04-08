<?php
interface DbCollection
{
  public function find(): array;
  public function get(string $id): mixed;
}
