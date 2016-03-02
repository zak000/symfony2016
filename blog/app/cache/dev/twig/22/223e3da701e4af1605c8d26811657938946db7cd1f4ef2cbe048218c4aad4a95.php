<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_0c6ec97477032aea1f35f5e9b124912f4c6303fa43b0389900808c563b4d7367 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBundle::layout.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1e82b4d9d2d36e9d2ef8c4509e4ef7124b780d3d4b82decf53776960fe45bb3 = $this->env->getExtension("native_profiler");
        $__internal_f1e82b4d9d2d36e9d2ef8c4509e4ef7124b780d3d4b82decf53776960fe45bb3->enter($__internal_f1e82b4d9d2d36e9d2ef8c4509e4ef7124b780d3d4b82decf53776960fe45bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1e82b4d9d2d36e9d2ef8c4509e4ef7124b780d3d4b82decf53776960fe45bb3->leave($__internal_f1e82b4d9d2d36e9d2ef8c4509e4ef7124b780d3d4b82decf53776960fe45bb3_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_95ec86a2a31295fa12bc8b8c6162684e0313c3deb2a9622b3ca6391b1baac2e9 = $this->env->getExtension("native_profiler");
        $__internal_95ec86a2a31295fa12bc8b8c6162684e0313c3deb2a9622b3ca6391b1baac2e9->enter($__internal_95ec86a2a31295fa12bc8b8c6162684e0313c3deb2a9622b3ca6391b1baac2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    Sidebar content
";
        
        $__internal_95ec86a2a31295fa12bc8b8c6162684e0313c3deb2a9622b3ca6391b1baac2e9->leave($__internal_95ec86a2a31295fa12bc8b8c6162684e0313c3deb2a9622b3ca6391b1baac2e9_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle::layout.html.twig";
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
/* {# src/BlogBundle/BlogBundle/Resources/views/layout.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block sidebar %}*/
/*     Sidebar content*/
/* {% endblock %}*/
