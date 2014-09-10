<?php

/* welcome/welcome.html.twig */
class __TwigTemplate_7c2e8cdce896dc236e5ff037b368be8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/welcome.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/welcome.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<section id=\"slider\" style=\"height:576px;\" class=\"shell clearfix garnish\">
    <div class=\"text-slider-wrap\" style=\"opacity: 1;\">
      <div class=\"caroufredsel_wrapper\" style=\"display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 690px; height: 576px; margin: 0px; overflow: hidden;\">
        <div class=\"text-slider\" style=\"text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; height: 2880px; width: 690px; z-index: auto;\">
          <div class=\"slide\" style=\"height: 576px; padding-top: 123px;\">
            <h2>Présentation de <br>Food Share.</h2>
            <p>Description super flateuse</p>
            <a href=\"http://demo.boxystudio.com/garnish/#\" class=\"bx-btn btn-prev\"><i class=\"fa fa-arrow-up\"></i></a>
            <a href=\"http://demo.boxystudio.com/garnish/#\" class=\"bx-btn btn-next\"><i class=\"fa fa-arrow-down\"></i></a>
            <a href=\"http://demo.boxystudio.com/garnish/menu-builder/\" class=\"bx-btn\">UN LIEN</a>
          </div>
          <div class=\"slide\" style=\"height: 576px; padding-top: 134px;\">
            <h2>Un autre titre</h2>
            <p>Une autre description super flateuse.</p>
            <a href=\"http://demo.boxystudio.com/garnish/#\" class=\"bx-btn btn-prev\"><i class=\"fa fa-arrow-up\"></i></a>
            <a href=\"http://demo.boxystudio.com/garnish/#\" class=\"bx-btn btn-next\"><i class=\"fa fa-arrow-down\"></i></a>
            <a href=\"http://demo.boxystudio.com/garnish/events/\" class=\"bx-btn\">UN AUTRE LIEN</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"image-slider-wrap\" style=\"opacity: 1;\">
      <div class=\"caroufredsel_wrapper\" style=\"display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 510px; height: 781px; margin: 0px; overflow: hidden;\">
        <div class=\"image-slider\" style=\"text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 2550px; height: 781px; z-index: auto; opacity: 1;\">
          <div class=\"slide\" style=\"width: 510px;\">
            <img src=\"./Garnish_files/image1.031a07b844-685x768.jpg\" alt=\"\" width=\"685\" id=\"image-id-3\">
          </div>
          <div class=\"slide\" style=\"width: 510px;\">
            <img src=\"./Garnish_files/image2.72f4c6916c-685x774.jpg\" alt=\"\" width=\"685\" id=\"image-id-4\">
          </div>
        </div>
      </div>
    </div>
    <script type=\"text/javascript\">var slider_auto_cycle_speed = 7000;</script>
</section>
<section id=\"feature-blocks\" class=\"shell clearfix\">
  <div class=\"inner-shell\">
    <div class=\"fblock third\">
      <h3>Maxime Dubois</h3>
      <img src=\"/img/happy1.jpg\">
      <p>J'ai été agréablement surpris par Foodshare. Cela me permet de manger de la nourriture de bonne qualité et de cultures différentes chaque jour à petit prix !</p>
      <a class=\"bx-btn sm iconed\" href=\"http://demo.boxystudio.com/garnish/#\"><i class=\"fa fa-cutlery\"></i>Browse Our Menu</a>
    </div>
    <div class=\"fblock third\">
      <h3>Check Our Upcoming Events</h3>
      <img src=\"./Garnish_files/photodune-678346-calendar-m-260x174.jpg\">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
      <a class=\"bx-btn sm iconed\" href=\"http://demo.boxystudio.com/garnish/#\"><i class=\"fa fa-calendar\"></i>View the Calendar</a>
    </div>
    <div class=\"fblock third\">
      <h3>Book Your Table Online</h3>
      <img src=\"./Garnish_files/photodune-438181-people-at-a-restaurant-s-260x174.jpg\">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
      <a class=\"bx-btn sm iconed\" href=\"http://demo.boxystudio.com/garnish/#\"><i class=\"fa fa-coffee\"></i>Book Your Table</a>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "welcome/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
