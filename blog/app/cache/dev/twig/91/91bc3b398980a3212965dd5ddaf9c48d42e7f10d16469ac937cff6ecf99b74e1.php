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
        $__internal_eea3eb38ccb6ddebc2e3029741308e9f421d2d72dd385dfbd252a9e8ae49df4c = $this->env->getExtension("native_profiler");
        $__internal_eea3eb38ccb6ddebc2e3029741308e9f421d2d72dd385dfbd252a9e8ae49df4c->enter($__internal_eea3eb38ccb6ddebc2e3029741308e9f421d2d72dd385dfbd252a9e8ae49df4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
Hello ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!";
        
        $__internal_eea3eb38ccb6ddebc2e3029741308e9f421d2d72dd385dfbd252a9e8ae49df4c->leave($__internal_eea3eb38ccb6ddebc2e3029741308e9f421d2d72dd385dfbd252a9e8ae49df4c_prof);

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
