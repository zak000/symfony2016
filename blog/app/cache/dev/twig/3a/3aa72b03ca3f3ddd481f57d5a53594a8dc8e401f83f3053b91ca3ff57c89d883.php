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
        $__internal_574ffa67c6b49720449019261205c249d201fda06cffaee89639f7d43cd17644 = $this->env->getExtension("native_profiler");
        $__internal_574ffa67c6b49720449019261205c249d201fda06cffaee89639f7d43cd17644->enter($__internal_574ffa67c6b49720449019261205c249d201fda06cffaee89639f7d43cd17644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_574ffa67c6b49720449019261205c249d201fda06cffaee89639f7d43cd17644->leave($__internal_574ffa67c6b49720449019261205c249d201fda06cffaee89639f7d43cd17644_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_41b7919f5da86baac6aefaf39c4933c8974d79c04b8cd54c3c3a8926169c0c07 = $this->env->getExtension("native_profiler");
        $__internal_41b7919f5da86baac6aefaf39c4933c8974d79c04b8cd54c3c3a8926169c0c07->enter($__internal_41b7919f5da86baac6aefaf39c4933c8974d79c04b8cd54c3c3a8926169c0c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_41b7919f5da86baac6aefaf39c4933c8974d79c04b8cd54c3c3a8926169c0c07->leave($__internal_41b7919f5da86baac6aefaf39c4933c8974d79c04b8cd54c3c3a8926169c0c07_prof);

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
