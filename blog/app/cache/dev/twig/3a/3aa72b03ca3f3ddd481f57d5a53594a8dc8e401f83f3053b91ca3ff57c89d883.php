<?php

/* BlogBundle:Page:index.html.twig */
class __TwigTemplate_a3e632be04ce5d24a9396a6cc97d7a9337301d04ce8e19ee765813d6c9b53f23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Page:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbf42a368403299cde6e9c70f9f22e8da7697b2f318a0cea1198d31aa1ca4cbd = $this->env->getExtension("native_profiler");
        $__internal_cbf42a368403299cde6e9c70f9f22e8da7697b2f318a0cea1198d31aa1ca4cbd->enter($__internal_cbf42a368403299cde6e9c70f9f22e8da7697b2f318a0cea1198d31aa1ca4cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbf42a368403299cde6e9c70f9f22e8da7697b2f318a0cea1198d31aa1ca4cbd->leave($__internal_cbf42a368403299cde6e9c70f9f22e8da7697b2f318a0cea1198d31aa1ca4cbd_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba778b0efadb2c24fb9b1d85c9f9a7b1b8caa78d464bebb6fa7149fb5395e625 = $this->env->getExtension("native_profiler");
        $__internal_ba778b0efadb2c24fb9b1d85c9f9a7b1b8caa78d464bebb6fa7149fb5395e625->enter($__internal_ba778b0efadb2c24fb9b1d85c9f9a7b1b8caa78d464bebb6fa7149fb5395e625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_ba778b0efadb2c24fb9b1d85c9f9a7b1b8caa78d464bebb6fa7149fb5395e625->leave($__internal_ba778b0efadb2c24fb9b1d85c9f9a7b1b8caa78d464bebb6fa7149fb5395e625_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/BlogBundle/BlogBundle/Resources/views/Page/index.html.twig #}*/
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Blog homepage*/
/* {% endblock %}*/
