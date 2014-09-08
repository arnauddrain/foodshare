<?php

/* elements/alerts.html.twig */
class __TwigTemplate_0230bdd0d05da4746df2e943fc320925 extends Twig_Template
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
        echo "<div class=\"alerts\">
\t";
        // line 2
        if (array_key_exists("alerts", $context)) {
            // line 3
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alerts"]) ? $context["alerts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                // line 4
                echo "\t\t\t";
                if (($this->getAttribute((isset($context["alert"]) ? $context["alert"] : null), "type") == "error")) {
                    // line 5
                    echo "\t\t\t\t<div class=\"alert alert-dismissable alert-danger\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t";
                    // line 7
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alert"]) ? $context["alert"] : null), "text"), "html", null, true);
                    echo "
\t\t\t\t</div>
\t\t\t";
                } else {
                    // line 10
                    echo "\t\t\t\t<div class=\"alert alert-dismissable alert-success\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alert"]) ? $context["alert"] : null), "text"), "html", null, true);
                    echo "
\t\t\t\t</div>
\t\t\t";
                }
                // line 14
                echo "\t\t\t
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t";
        }
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "elements/alerts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  46 => 12,  36 => 7,  32 => 5,  29 => 4,  24 => 3,  62 => 17,  49 => 23,  38 => 15,  35 => 14,  33 => 13,  19 => 1,  89 => 34,  86 => 33,  79 => 31,  76 => 30,  69 => 20,  66 => 19,  59 => 16,  56 => 33,  54 => 30,  44 => 22,  42 => 10,  22 => 2,  31 => 4,  28 => 3,);
    }
}
