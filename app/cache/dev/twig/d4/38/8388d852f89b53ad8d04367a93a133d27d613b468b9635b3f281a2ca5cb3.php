<?php

/* PlanningInsta2015Bundle::layout.html.twig */
class __TwigTemplate_d4388388d852f89b53ad8d04367a93a133d27d613b468b9635b3f281a2ca5cb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/planninginsta2015/css/bootstrap.css"), "html", null, true);
        echo "\" />

    </head>
    <body>
\t";
        // line 11
        $this->env->loadTemplate("PlanningInsta2015Bundle:Menu:guest.html.twig")->display($context);
        // line 12
        echo "
        <div id=\"sidebar\">
            ";
        // line 14
        $this->displayBlock('navbar', $context, $blocks);
        // line 20
        echo "        </div>

        <div id=\"content\">
            ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        </div>
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 14
    public function block_navbar($context, array $blocks = array())
    {
        // line 15
        echo "            <ul>
                <li><a href=\"/\">Home</a></li>
                <li><a href=\"/blog\">Blog</a></li>
            </ul>
            ";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PlanningInsta2015Bundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  69 => 15,  66 => 14,  60 => 6,  54 => 24,  52 => 23,  47 => 20,  45 => 14,  41 => 12,  39 => 11,  32 => 7,  28 => 6,  22 => 2,);
    }
}
