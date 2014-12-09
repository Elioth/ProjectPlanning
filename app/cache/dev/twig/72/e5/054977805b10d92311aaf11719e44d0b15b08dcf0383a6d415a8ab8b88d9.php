<?php

/* PlanningInsta2015Bundle:Default:test.html.twig */
class __TwigTemplate_72e5054977805b10d92311aaf11719e44d0b15b08dcf0383a6d415a8ab8b88d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("PlanningInsta2015Bundle:Menu:guest.html.twig")->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container-fluid\">
    <div class=\"jumbotron\">
\t    <div id=\"one\">
\t        <h1>Planning Insta</h1>
\t        <p> </p>
\t        <p><a href=\"#\" class=\"btn btn-success btn-large\">Se connecter</a></p>
\t    </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PlanningInsta2015Bundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
