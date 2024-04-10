<?php
class Client
{
  public function __construct(
    public string $id,
    public string $name,
    public string $subtitle,
    public string $externalUrl,
    public string $imageUrl,
  ) {
  }
}
