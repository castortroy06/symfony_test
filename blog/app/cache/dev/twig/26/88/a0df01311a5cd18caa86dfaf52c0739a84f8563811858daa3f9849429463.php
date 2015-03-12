<?php

/* emails/happybithday.html.twig */
class __TwigTemplate_2688a0df01311a5cd18caa86dfaf52c0739a84f8563811858daa3f9849429463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<p>
    ";
        // line 5
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getGender", array(), "method"), "getGender", array(), "method") == "муж")) {
            // line 6
            echo "        Уважаемый
    ";
        } else {
            // line 8
            echo "        Уважаемая
    ";
        }
        // line 9
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getName", array(), "method"), "html", null, true);
        echo ", поздравляем Вас с днем рождения! От чыстага сэрца!
</p>
";
    }

    public function getTemplateName()
    {
        return "emails/happybithday.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  48 => 8,  44 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
