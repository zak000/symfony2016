<?php

/* BlogBundle:page:index.html.twig */
class __TwigTemplate_5f6e46053bc2f3d9576984c2693b343b76380eff482e696876e7df8e84c627f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:page:index.html.twig", 2);
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
        $__internal_6dccde03255c8e91a57e8f1a2bef680e31b7b0e5561af316472517f2e2ea5337 = $this->env->getExtension("native_profiler");
        $__internal_6dccde03255c8e91a57e8f1a2bef680e31b7b0e5561af316472517f2e2ea5337->enter($__internal_6dccde03255c8e91a57e8f1a2bef680e31b7b0e5561af316472517f2e2ea5337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dccde03255c8e91a57e8f1a2bef680e31b7b0e5561af316472517f2e2ea5337->leave($__internal_6dccde03255c8e91a57e8f1a2bef680e31b7b0e5561af316472517f2e2ea5337_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_28d44a83f2a850ec4281e2b41a34e5ff68fb2cd0ce82c63e0a923ba869230325 = $this->env->getExtension("native_profiler");
        $__internal_28d44a83f2a850ec4281e2b41a34e5ff68fb2cd0ce82c63e0a923ba869230325->enter($__internal_28d44a83f2a850ec4281e2b41a34e5ff68fb2cd0ce82c63e0a923ba869230325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_28d44a83f2a850ec4281e2b41a34e5ff68fb2cd0ce82c63e0a923ba869230325->leave($__internal_28d44a83f2a850ec4281e2b41a34e5ff68fb2cd0ce82c63e0a923ba869230325_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:page:index.html.twig";
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
