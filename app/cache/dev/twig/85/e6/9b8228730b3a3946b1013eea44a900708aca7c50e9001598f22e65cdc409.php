<?php

/* PlanningInsta2015Bundle:Default:guest.html.twig */
class __TwigTemplate_85e69b8228730b3a3946b1013eea44a900708aca7c50e9001598f22e65cdc409 extends Twig_Template
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
        echo "<div class=\"navbar navbar-default navbar-fixed-top\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("welcome");
        echo "\">Planning Insta</a>
      <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-main\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
    </div>
    <div class=\"navbar-collapse collapse\" id=\"navbar-main\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"#\">Promo</a></li>
        <li><a href=\"#\">Planning</a></li>
      </ul>

      <ul class=\"nav navbar-nav navbar-right\">
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                Connexion
                <b class=\"caret\"></b>
            </a>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Se connecter</a></li>
                <li><a href=\"#\">Mot de passe perdu</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\">S'enregistrer</a></li>
            </ul>
        </li>
      </ul>

    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "PlanningInsta2015Bundle:Default:guest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
