<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fa7d219f2df563ffe1b5bfa85f846871a4ac77a0703f4c4df085cfb348e8b086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10b550fd763a0ede1c2910de03151554bc4fe7ad672cff4064d26315472ced89 = $this->env->getExtension("native_profiler");
        $__internal_10b550fd763a0ede1c2910de03151554bc4fe7ad672cff4064d26315472ced89->enter($__internal_10b550fd763a0ede1c2910de03151554bc4fe7ad672cff4064d26315472ced89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10b550fd763a0ede1c2910de03151554bc4fe7ad672cff4064d26315472ced89->leave($__internal_10b550fd763a0ede1c2910de03151554bc4fe7ad672cff4064d26315472ced89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d0764593b65aef8e29f68924dba67112504f26e6087c65ed49db7302dc69f3a = $this->env->getExtension("native_profiler");
        $__internal_6d0764593b65aef8e29f68924dba67112504f26e6087c65ed49db7302dc69f3a->enter($__internal_6d0764593b65aef8e29f68924dba67112504f26e6087c65ed49db7302dc69f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6d0764593b65aef8e29f68924dba67112504f26e6087c65ed49db7302dc69f3a->leave($__internal_6d0764593b65aef8e29f68924dba67112504f26e6087c65ed49db7302dc69f3a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6e7170947b68e0148712f251768a85c16815f6d5d7ef47db0ea908de5ce7959 = $this->env->getExtension("native_profiler");
        $__internal_d6e7170947b68e0148712f251768a85c16815f6d5d7ef47db0ea908de5ce7959->enter($__internal_d6e7170947b68e0148712f251768a85c16815f6d5d7ef47db0ea908de5ce7959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d6e7170947b68e0148712f251768a85c16815f6d5d7ef47db0ea908de5ce7959->leave($__internal_d6e7170947b68e0148712f251768a85c16815f6d5d7ef47db0ea908de5ce7959_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd7528ca0c8932bf5b7fee30331f96f717183b3f08f08b6097d9b58605824969 = $this->env->getExtension("native_profiler");
        $__internal_bd7528ca0c8932bf5b7fee30331f96f717183b3f08f08b6097d9b58605824969->enter($__internal_bd7528ca0c8932bf5b7fee30331f96f717183b3f08f08b6097d9b58605824969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bd7528ca0c8932bf5b7fee30331f96f717183b3f08f08b6097d9b58605824969->leave($__internal_bd7528ca0c8932bf5b7fee30331f96f717183b3f08f08b6097d9b58605824969_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
