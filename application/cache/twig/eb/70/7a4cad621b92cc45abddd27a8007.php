<?php

/* templates/welcome.html.twig */
class __TwigTemplate_eb707a4cad621b92cc45abddd27a8007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'alerts' => array($this, 'block_alerts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>Foodshare</title>
\t
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t
\t<link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\">
\t<link href=\"/css/jumbotron.css\" rel=\"stylesheet\" media=\"screen\">
\t<link href=\"/css/authentication.css\" rel=\"stylesheet\" media=\"screen\">
\t<link href=\"/css/menu.css\" rel=\"stylesheet\" media=\"screen\">
\t
\t<script src=\"/js/jquery-2.0.3.min.js\"></script>
\t<script src=\"/js/bootstrap.min.js\"></script>\t
\t<script src=\"/js/authentification.js\"></script>
</head>
<body>

\t";
        // line 19
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "\t\t
\t<div class=\"jumbotron\">
\t\t<div class=\"container\">
\t\t\t<h1>Foodshare</h1>
\t\t</div>
\t</div>
\t
\t<div class=\"container\">
\t\t";
        // line 30
        $this->displayBlock('alerts', $context, $blocks);
        // line 33
        echo "\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "\t</div>
\t
</body>
</html>";
    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        // line 20
        echo "\t\t";
        echo twig_include($this->env, $context, "elements/header.html.twig");
        echo "
\t";
    }

    // line 30
    public function block_alerts($context, array $blocks = array())
    {
        // line 31
        echo "\t\t\t";
        echo twig_include($this->env, $context, "elements/alerts.html.twig");
        echo "
\t\t";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "templates/welcome.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 34,  86 => 33,  79 => 31,  76 => 30,  69 => 20,  66 => 19,  59 => 35,  56 => 33,  54 => 30,  44 => 22,  42 => 19,  22 => 1,);
    }
}
