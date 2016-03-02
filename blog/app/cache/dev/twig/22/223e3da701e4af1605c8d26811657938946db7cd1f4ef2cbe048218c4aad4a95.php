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
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9200195ac075592c28654d3886c0710505bafcd2cd356e159596f80397bc2d5 = $this->env->getExtension("native_profiler");
        $__internal_d9200195ac075592c28654d3886c0710505bafcd2cd356e159596f80397bc2d5->enter($__internal_d9200195ac075592c28654d3886c0710505bafcd2cd356e159596f80397bc2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9200195ac075592c28654d3886c0710505bafcd2cd356e159596f80397bc2d5->leave($__internal_d9200195ac075592c28654d3886c0710505bafcd2cd356e159596f80397bc2d5_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5eca451c2878e00b902d7fe1f9d38d2ad10577f9e75f505b460e18c05ea4b049 = $this->env->getExtension("native_profiler");
        $__internal_5eca451c2878e00b902d7fe1f9d38d2ad10577f9e75f505b460e18c05ea4b049->enter($__internal_5eca451c2878e00b902d7fe1f9d38d2ad10577f9e75f505b460e18c05ea4b049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_5eca451c2878e00b902d7fe1f9d38d2ad10577f9e75f505b460e18c05ea4b049->leave($__internal_5eca451c2878e00b902d7fe1f9d38d2ad10577f9e75f505b460e18c05ea4b049_prof);

    }

    // line 11
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_99e686de689fa9313e1afbd26e4560e15c633b3bcefaab75d53f6b30d2d559c1 = $this->env->getExtension("native_profiler");
        $__internal_99e686de689fa9313e1afbd26e4560e15c633b3bcefaab75d53f6b30d2d559c1->enter($__internal_99e686de689fa9313e1afbd26e4560e15c633b3bcefaab75d53f6b30d2d559c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 12
        echo "    Sidebar content
";
        
        $__internal_99e686de689fa9313e1afbd26e4560e15c633b3bcefaab75d53f6b30d2d559c1->leave($__internal_99e686de689fa9313e1afbd26e4560e15c633b3bcefaab75d53f6b30d2d559c1_prof);

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
        return array (  61 => 12,  55 => 11,  46 => 7,  41 => 6,  35 => 5,  11 => 2,);
    }
}
/* {# src/BlogBundle/BlogBundle/Resources/views/layout.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('bundles/bloggerblog/css/blog.css') }}" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* */
/* {% block sidebar %}*/
/*     Sidebar content*/
/* {% endblock %}*/
