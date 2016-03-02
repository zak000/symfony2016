<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_121af92cff4373be1a7124ee9d1c546fca4286756ccee5b82fac633a3d3b5c41 extends Twig_Template
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
        $__internal_24df01fdd16deadb47a890f4fbf013628d4d09b2b8aa11bf573475c70163b773 = $this->env->getExtension("native_profiler");
        $__internal_24df01fdd16deadb47a890f4fbf013628d4d09b2b8aa11bf573475c70163b773->enter($__internal_24df01fdd16deadb47a890f4fbf013628d4d09b2b8aa11bf573475c70163b773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_24df01fdd16deadb47a890f4fbf013628d4d09b2b8aa11bf573475c70163b773->leave($__internal_24df01fdd16deadb47a890f4fbf013628d4d09b2b8aa11bf573475c70163b773_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
