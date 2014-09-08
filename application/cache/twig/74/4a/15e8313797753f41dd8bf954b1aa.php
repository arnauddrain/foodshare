<?php

/* elements/header.html.twig */
class __TwigTemplate_744a15e8313797753f41dd8bf954b1aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar navbar-inverse navbar-fixed-top\">
\t<div class=\"container\">
\t\t<div class=\"navbar-header\">
          <a class=\"navbar-brand\" href=\"/\">Foodshare</a>
        </div>
        <div class=\"navbar-collapse collapse\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li class=\"active\"><a href=\"/\">Accueil</a></li>
\t\t\t\t<li><a href=\"#about\">A propos</a></li>
\t\t\t\t<li><a href=\"#contact\">Contactez-nous</a></li>
\t\t\t</ul>
\t\t\t<div class=\"navbar-right\">
\t\t\t\t";
        // line 13
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($_user_) {
            // line 14
            echo "\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li><a href=\"#profile\">";
            // line 15
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "pseudo"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<form class=\"navbar-form\" method=\"post\" action=\"/user/logout\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Déconnexion</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t";
        } else {
            // line 23
            echo "\t\t\t\t<form class=\"navbar-form\" method=\"post\" action=\"/user/login\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Pseudo\" class=\"form-control\" name=\"pseudo\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"password\" placeholder=\"Mot de passe\" class=\"form-control\" name=\"password\">
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Se connecter</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-info registration\">S'inscrire</button>
\t\t\t\t</form>
\t\t\t\t";
        }
        // line 34
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t\t
\t<div style=\"display:none\" class=\"registration_popover\">
\t\t<form role=\"form\" method=\"post\" action=\"/user/registration\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"registration_pseudo\">Pseudo :</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"registration_pseudo\" placeholder=\"Pseudo\" name=\"pseudo\">
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"registration_email\">Email :</label>
\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"registration_email\" placeholder=\"Email\" name=\"email\">
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"registration_password\">Mot de passe :</label>
\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"registration_password\" placeholder=\"Mot de passe\" name=\"password\">
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-default\">S'inscrire</button>
\t\t</form>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "elements/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 34,  51 => 23,  39 => 15,  36 => 14,  33 => 13,  19 => 1,  89 => 34,  86 => 33,  79 => 31,  76 => 30,  69 => 20,  66 => 19,  59 => 35,  56 => 33,  54 => 30,  44 => 22,  42 => 19,  22 => 1,);
    }
}
