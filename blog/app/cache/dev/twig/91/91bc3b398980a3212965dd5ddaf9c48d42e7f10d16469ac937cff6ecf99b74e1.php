<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_e1774417a5fa6bfa33a97e6a4c40e0fb69030394ab4f40c53236d5c3c4df7f3f extends Twig_Template
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
        $__internal_a728ab98c0e3b65af0a27a24895bc45aae0759456c45c81432db827e144bb0a6 = $this->env->getExtension("native_profiler");
        $__internal_a728ab98c0e3b65af0a27a24895bc45aae0759456c45c81432db827e144bb0a6->enter($__internal_a728ab98c0e3b65af0a27a24895bc45aae0759456c45c81432db827e144bb0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
Hello ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!";
        
        $__internal_a728ab98c0e3b65af0a27a24895bc45aae0759456c45c81432db827e144bb0a6->leave($__internal_a728ab98c0e3b65af0a27a24895bc45aae0759456c45c81432db827e144bb0a6_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* Hello World!*/
/* Hello {{ name }}!*/
