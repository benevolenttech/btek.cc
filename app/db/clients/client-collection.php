<?php
require_once 'app/db/db-collection.php';
require_once 'client.php';

$clientCol = new class extends DbCollection
{
  public function __construct()
  {
    $this->table['0001'] = new Client(
      id: "0001",
      name: "APM Foodworks",
      subtitle: "Marketing, SEO, Maryland",
      externalUrl: "#",
      imageUrl: "/img/popcorn-background_dc_seo.jpg",
    );
    $this->table['0002'] = new Client(
      id: "0002",
      name: "Hirely, Inc",
      subtitle: "SEO, Website, Software, DC",
      externalUrl: "#",
      imageUrl: "/img/taking-the-leap_dc_seo.jpg",
    );
    $this->table['0003'] = new Client(
      id: "0003",
      name: "Product Maven",
      subtitle: "Marketing & Technology Consulting, DC",
      externalUrl: "#",
      imageUrl: "/img/productmaven_dc_seo.jpg",
    );
    $this->table['0004'] = new Client(
      id: "0004",
      name: "Sara Anani, Inc",
      subtitle: "Marketing, SEO, Website",
      externalUrl: "#",
      imageUrl: "/img/saraanani_dc_seo.jpg",
    );
    $this->table['0005'] = new Client(
      id: "0005",
      name: "Seasons Therapy",
      subtitle: "Marketing, SEO, Website",
      externalUrl: "http://seasonstherapy.com",
      imageUrl: "/img/ruth-small_dc_seo.jpg",
    );
  }
  // Redeclaring the get methods to return currect type
  public function get(string $id): Category
  {
    return $this->table[$id];
  }
  public function g(string $id): Category
  {
    return $this->get($id);
  }
};
