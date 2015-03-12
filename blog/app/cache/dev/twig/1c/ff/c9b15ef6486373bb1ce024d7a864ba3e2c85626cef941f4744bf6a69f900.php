<?php

/* AppBundle:emails:happybithday.html.twig */
class __TwigTemplate_1cffc9b15ef6486373bb1ce024d7a864ba3e2c85626cef941f4744bf6a69f900 extends Twig_Template
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
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "<p>
    ";
        // line 3
        if (((isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")) == (isset($context["man"]) ? $context["man"] : $this->getContext($context, "man")))) {
            // line 4
            echo "        Uvazhaemy
    ";
        } else {
            // line 6
            echo "        Uvazhaemaja
    ";
        }
        // line 7
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo ", поздравляем Вас с днем рождения! От чыстага сэрца!
</p>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:emails:happybithday.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
