<?php

/* PlanningInsta2015Bundle:Default:index.html.twig */
class __TwigTemplate_af38c585ea3c1a262df989afc5ee565e6cee9a8ff01a3d58c485e26d2d010f3f extends Twig_Template
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
        echo "Hello !
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "PlanningInsta2015Bundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
