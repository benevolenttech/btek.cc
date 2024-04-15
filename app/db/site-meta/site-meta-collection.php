<?php
require_once 'app/db/db.php';
require_once 'site-meta.php';

$siteMetaCol = new class extends DbCollection
{
  public function __construct()
  {
    $this->table['0001'] = new SiteMeta(
      id: '0001',
      name: 'title',
      value: 'btek',
    );
    $this->table['0002'] = new SiteMeta(
      id: '0002',
      name: 'address',
      value: '12721 Oxen Way, Austin TX 78732',
    );
    $this->table['0003'] = new SiteMeta(
      id: '0003',
      name: 'street',
      value: '12721 Oxen Way',
    );
    $this->table['0004'] = new SiteMeta(
      id: '0004',
      name: 'town',
      value: 'Austin',
    );
    $this->table['0005'] = new SiteMeta(
      id: '0005',
      name: 'region',
      value: 'TX',
    );
    $this->table['0006'] = new SiteMeta(
      id: '0006',
      name: 'country',
      value: 'USA',
    );
    $this->table['0007'] = new SiteMeta(
      id: '0007',
      name: 'postalCode',
      value: '78732',
    );
    $this->table['0008'] = new SiteMeta(
      id: '0008',
      name: 'contact_email_address',
      value: 'admin@btek.cc',
    );
    $this->table['0009'] = new SiteMeta(
      id: '0009',
      name: 'contact_phone_number',
      value: '+1.202.644.2237',
    );
    $this->table['0010'] = new SiteMeta(
      id: '0010',
      name: 'description',
      value: 'A boutique online communications shop for non-profits and small businesses.',
    );
    $this->table['0011'] = new SiteMeta(
      id: '0011',
      name: 'url',
      value: 'https://btek.cc',
    );
    $this->table['0012'] = new SiteMeta(
      id: '0012',
      name: 'image',
      value: '/img/benevolent_tech_dc_seo.png',
    );
    $this->table['0013'] = new SiteMeta(
      id: '0013',
      name: 'version',
      value: '1.0.0',
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

  public function getByName(string $name): string
  {
    foreach ($this->table as $siteMeta) {
      if ($siteMeta->name === $name) {
        return $siteMeta->value;
      }
    }
  }
  public function gbn(string $id): string
  {
    return $this->getByName($id);
  }
};
