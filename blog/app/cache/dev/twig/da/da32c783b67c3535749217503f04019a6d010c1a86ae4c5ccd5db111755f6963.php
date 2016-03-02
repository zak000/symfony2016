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
        $__internal_528e13ef1a804a0fd2341e6ec1f5a76dc139312ef88fee8208247dbc0129035c = $this->env->getExtension("native_profiler");
        $__internal_528e13ef1a804a0fd2341e6ec1f5a76dc139312ef88fee8208247dbc0129035c->enter($__internal_528e13ef1a804a0fd2341e6ec1f5a76dc139312ef88fee8208247dbc0129035c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_528e13ef1a804a0fd2341e6ec1f5a76dc139312ef88fee8208247dbc0129035c->leave($__internal_528e13ef1a804a0fd2341e6ec1f5a76dc139312ef88fee8208247dbc0129035c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c800a2fd7bb7bfd0f3f1fad892c4c05e24f958b530de7d00c5e47595827673bc = $this->env->getExtension("native_profiler");
        $__internal_c800a2fd7bb7bfd0f3f1fad892c4c05e24f958b530de7d00c5e47595827673bc->enter($__internal_c800a2fd7bb7bfd0f3f1fad892c4c05e24f958b530de7d00c5e47595827673bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c800a2fd7bb7bfd0f3f1fad892c4c05e24f958b530de7d00c5e47595827673bc->leave($__internal_c800a2fd7bb7bfd0f3f1fad892c4c05e24f958b530de7d00c5e47595827673bc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0b087653707fecd0cfdf7b574e391ed0ac682bc0de7a8e3525e124c66927307 = $this->env->getExtension("native_profiler");
        $__internal_b0b087653707fecd0cfdf7b574e391ed0ac682bc0de7a8e3525e124c66927307->enter($__internal_b0b087653707fecd0cfdf7b574e391ed0ac682bc0de7a8e3525e124c66927307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b0b087653707fecd0cfdf7b574e391ed0ac682bc0de7a8e3525e124c66927307->leave($__internal_b0b087653707fecd0cfdf7b574e391ed0ac682bc0de7a8e3525e124c66927307_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fd87e15771d751f6fa7267a3457811ba74806869f89edbfd32ce63d755aa66f = $this->env->getExtension("native_profiler");
        $__internal_4fd87e15771d751f6fa7267a3457811ba74806869f89edbfd32ce63d755aa66f->enter($__internal_4fd87e15771d751f6fa7267a3457811ba74806869f89edbfd32ce63d755aa66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4fd87e15771d751f6fa7267a3457811ba74806869f89edbfd32ce63d755aa66f->leave($__internal_4fd87e15771d751f6fa7267a3457811ba74806869f89edbfd32ce63d755aa66f_prof);

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
