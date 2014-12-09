<?php

/* PlanningInsta2015Bundle:Default:test.html.twig */
class __TwigTemplate_72e5054977805b10d92311aaf11719e44d0b15b08dcf0383a6d415a8ab8b88d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PlanningInsta2015Bundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PlanningInsta2015Bundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"container-fluid\">
    <div class=\"jumbotron\">
\t    <div id=\"one\">
\t        <h1>Planning Insta</h1>
\t        <p> </p>
\t        <p><a href=\"../login\" class=\"btn btn-success btn-large\">Se connecter</a></p>
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
        return array (  31 => 5,  28 => 4,);
    }
}
