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
            if (isset($context["alerts"])) { $_alerts_ = $context["alerts"]; } else { $_alerts_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_alerts_);
            foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                // line 4
                echo "\t\t\t";
                if (isset($context["alert"])) { $_alert_ = $context["alert"]; } else { $_alert_ = null; }
                if (($this->getAttribute($_alert_, "type") == "error")) {
                    // line 5
                    echo "\t\t\t\t<div class=\"alert alert-dismissable alert-danger\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t";
                    // line 7
                    if (isset($context["alert"])) { $_alert_ = $context["alert"]; } else { $_alert_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_alert_, "text"), "html", null, true);
                    echo "
\t\t\t\t</div>
\t\t\t";
                } else {
                    // line 10
                    echo "\t\t\t\t<div class=\"alert alert-dismissable alert-success\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t";
                    // line 12
                    if (isset($context["alert"])) { $_alert_ = $context["alert"]; } else { $_alert_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_alert_, "text"), "html", null, true);
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
        return array (  63 => 16,  49 => 12,  45 => 10,  38 => 7,  34 => 5,  30 => 4,  24 => 3,  64 => 34,  51 => 23,  39 => 15,  36 => 14,  33 => 13,  19 => 1,  89 => 34,  86 => 33,  79 => 31,  76 => 30,  69 => 20,  66 => 17,  59 => 35,  56 => 14,  54 => 30,  44 => 22,  42 => 19,  22 => 2,  31 => 4,  28 => 3,);
    }
}
