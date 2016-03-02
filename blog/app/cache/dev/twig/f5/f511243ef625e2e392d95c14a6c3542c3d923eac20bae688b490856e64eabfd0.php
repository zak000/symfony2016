<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3592c0328881523e51c6fb6b1294ad4d188fe20ab17b49f96adaeeeefcc5ac40 extends Twig_Template
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
        $__internal_7b6133bddf546af7fc26531ce44f3148d3e42b140d414e8d6d929a273bcb01e0 = $this->env->getExtension("native_profiler");
        $__internal_7b6133bddf546af7fc26531ce44f3148d3e42b140d414e8d6d929a273bcb01e0->enter($__internal_7b6133bddf546af7fc26531ce44f3148d3e42b140d414e8d6d929a273bcb01e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7b6133bddf546af7fc26531ce44f3148d3e42b140d414e8d6d929a273bcb01e0->leave($__internal_7b6133bddf546af7fc26531ce44f3148d3e42b140d414e8d6d929a273bcb01e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
