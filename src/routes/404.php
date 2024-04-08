<?php
require_once 'src/data/people.php';
require_once 'src/routes/route-base.php';
require_once 'src/layouts/page.php';

$notFoundRoute = new class extends RouteBase
{
  // public string $title = "About";
  // public string $subtitle = "We have a benevolent mission.";
  // public string $heading = "We have a benevolent mission.";
  // public string $description = "We strive to ensure our communication services truly benefit businesses and the communities they serve.";
  // public string $image = "/images/benevolent_tech_dc_seo.png";
  public function __construct()
  {
    // Maybe put the sets in a function on Route so we can make type-safer
    $this->title = "Not Found";
    $this->subtitle = "We have a benevolent mission.";
    $this->heading = "404: Not Found";
    $this->description = "We strive to ensure our communication services truly benefit businesses and the communities they serve.";
    $this->image = "/images/benevolent_tech_dc_seo.png";
    parent::__construct();
  }

  public function render()
  {
    pageLayout(
      title: $this->title,
      subtitle: $this->subtitle,
      heading: $this->heading,
      description: $this->description,
      image: $this->image,
      fullWidth: false,
      renderChildren: function () {
?>
      <section class="diagonal">
        <div class="container">
          We can't find the page you're looking for.
        </div>
      </section>
<?php
      }
    );
  }
};
return $notFoundRoute;
