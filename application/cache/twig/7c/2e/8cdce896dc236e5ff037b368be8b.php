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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"menu\">
\t<div class=\"item\">
\t\t<div class=\"picture\">
\t\t\t<img width=\"75\" src=\"/img/icons/user.png\">
\t\t</div>
\t\tProfil
\t</div>
\t\t
\t<div class=\"item\">
\t\t<div class=\"picture\">
\t\t\t<img width=\"75\" src=\"/img/icons/play.png\">
\t\t</div>
\t\tJouer
\t</div>
\t\t
\t<div class=\"item\">
\t\t<div class=\"picture\">
\t\t\t<img width=\"75\" src=\"/img/icons/badge.png\">
\t\t</div>
\t\tRécompenses
\t</div>
</div>

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
        return array (  31 => 4,  28 => 3,);
    }
}
