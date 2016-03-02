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
        $__internal_4d8b41762537111ce12be854ae1f9894cff5ea36b3eb230ba4463d070bf7623c = $this->env->getExtension("native_profiler");
        $__internal_4d8b41762537111ce12be854ae1f9894cff5ea36b3eb230ba4463d070bf7623c->enter($__internal_4d8b41762537111ce12be854ae1f9894cff5ea36b3eb230ba4463d070bf7623c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d8b41762537111ce12be854ae1f9894cff5ea36b3eb230ba4463d070bf7623c->leave($__internal_4d8b41762537111ce12be854ae1f9894cff5ea36b3eb230ba4463d070bf7623c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_879585023eeac9d4956af08924258f33ba9f45dafb8f454d8d54b96588452d20 = $this->env->getExtension("native_profiler");
        $__internal_879585023eeac9d4956af08924258f33ba9f45dafb8f454d8d54b96588452d20->enter($__internal_879585023eeac9d4956af08924258f33ba9f45dafb8f454d8d54b96588452d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_879585023eeac9d4956af08924258f33ba9f45dafb8f454d8d54b96588452d20->leave($__internal_879585023eeac9d4956af08924258f33ba9f45dafb8f454d8d54b96588452d20_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_913e2ae2019f1af36dd3df1d5aec58a6037334b61c4633862b6e1911f2a1074d = $this->env->getExtension("native_profiler");
        $__internal_913e2ae2019f1af36dd3df1d5aec58a6037334b61c4633862b6e1911f2a1074d->enter($__internal_913e2ae2019f1af36dd3df1d5aec58a6037334b61c4633862b6e1911f2a1074d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_913e2ae2019f1af36dd3df1d5aec58a6037334b61c4633862b6e1911f2a1074d->leave($__internal_913e2ae2019f1af36dd3df1d5aec58a6037334b61c4633862b6e1911f2a1074d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ef05129781bc9cafa15a18d5595977d18ca384e52496644bfdf8d38a4b260a7 = $this->env->getExtension("native_profiler");
        $__internal_9ef05129781bc9cafa15a18d5595977d18ca384e52496644bfdf8d38a4b260a7->enter($__internal_9ef05129781bc9cafa15a18d5595977d18ca384e52496644bfdf8d38a4b260a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9ef05129781bc9cafa15a18d5595977d18ca384e52496644bfdf8d38a4b260a7->leave($__internal_9ef05129781bc9cafa15a18d5595977d18ca384e52496644bfdf8d38a4b260a7_prof);

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
