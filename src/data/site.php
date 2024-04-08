<?php
$site = new class
{
  public function __construct(
    public string $title = 'btek',
    public string $address = '12721 Oxen Way, Austin TX 78732',
    public string $street = '12721 Oxen Way',
    public string $town = 'Austin',
    public string $region = 'TX',
    public string $country = 'USA',
    public string $postalCode = '78732',
    public string $contact_email_address = 'hi@btek.cc',
    public string $contact_phone_number = '+1.202.644.2237',
    public string $description = 'A boutique online communications shop for small businesses.',
    public string $url = 'https://btek.cc',
    public string $version = '1.0.0',
    public array $sameAs = [
      "https://www.instagram.com/benevolenttech",
      "https://twitter.com/benevolentweb",
      "https://facebook.com/benevolenttech",
      "https://www.linkedin.com/company/benevolent-tech",
      "https://www.yelp.com/biz/benevolent-tech-washington",
      "https://member.angieslist.com/member/store/22294999",
      "https://angel.co/benevolenttech",
      "https://github.com/benevolenttech",
      "https://plus.google.com/+BenevolentTechDC",
      "https://clutch.co/profile/benevolent-tech"
    ],
  ) {
  }
};
