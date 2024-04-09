<?php

namespace Db;

require_once 'app/db/DbCollection.php';
require_once 'client.php';

$clientCol = new class implements DbCollection
{
  private array $table = [];
  public function __construct()
  {
    array_push($this->table, new Client(
      id: "0001",
      name: "APM Foodworks",
      subtitle: "Marketing, SEO, Maryland",
      externalUrl: "#",
      imageUrl: "/img/popcorn-background_dc_seo.jpg",
    ));
    array_push($this->table, new Client(
      id: "0002",
      name: "Hirely, Inc",
      subtitle: "SEO, Website, Software, DC",
      externalUrl: "#",
      imageUrl: "/img/taking-the-leap_dc_seo.jpg",
    ));
    array_push($this->table, new Client(
      id: "0003",
      name: "Product Maven",
      subtitle: "Marketing & Technology Consulting, DC",
      externalUrl: "#",
      imageUrl: "/img/productmaven_dc_seo.jpg",
    ));
    array_push($this->table, new Client(
      id: "0004",
      name: "Sara Anani, Inc",
      subtitle: "Marketing, SEO, Website",
      externalUrl: "#",
      imageUrl: "/img/saraanani_dc_seo.jpg",
    ));
    array_push($this->table, new Client(
      id: "0005",
      name: "Seasons Therapy",
      subtitle: "Marketing, SEO, Website",
      externalUrl: "http://seasonstherapy.com",
      imageUrl: "/img/ruth-small_dc_seo.jpg",
    ));
  }
  public function find(): array
  {
    return array_values($this->table);
  }
  public function get(string $id): Client
  {
    return $this->table[$id];
  }
};
