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
        $__internal_efc6dfc188a92b915d4d9a927b86750b085324709062783e97e86f0b9f514612 = $this->env->getExtension("native_profiler");
        $__internal_efc6dfc188a92b915d4d9a927b86750b085324709062783e97e86f0b9f514612->enter($__internal_efc6dfc188a92b915d4d9a927b86750b085324709062783e97e86f0b9f514612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efc6dfc188a92b915d4d9a927b86750b085324709062783e97e86f0b9f514612->leave($__internal_efc6dfc188a92b915d4d9a927b86750b085324709062783e97e86f0b9f514612_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6555b64d460744372315fb966e53d94fd85ef981475f371b5aeabe02f664e6d5 = $this->env->getExtension("native_profiler");
        $__internal_6555b64d460744372315fb966e53d94fd85ef981475f371b5aeabe02f664e6d5->enter($__internal_6555b64d460744372315fb966e53d94fd85ef981475f371b5aeabe02f664e6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_6555b64d460744372315fb966e53d94fd85ef981475f371b5aeabe02f664e6d5->leave($__internal_6555b64d460744372315fb966e53d94fd85ef981475f371b5aeabe02f664e6d5_prof);

    }

    // line 11
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_dcd91b3017f8bf1cafab47d196e33fba3952e6caf59b314182c002ec1c9c84c8 = $this->env->getExtension("native_profiler");
        $__internal_dcd91b3017f8bf1cafab47d196e33fba3952e6caf59b314182c002ec1c9c84c8->enter($__internal_dcd91b3017f8bf1cafab47d196e33fba3952e6caf59b314182c002ec1c9c84c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 12
        echo "    Sidebar content
";
        
        $__internal_dcd91b3017f8bf1cafab47d196e33fba3952e6caf59b314182c002ec1c9c84c8->leave($__internal_dcd91b3017f8bf1cafab47d196e33fba3952e6caf59b314182c002ec1c9c84c8_prof);

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
