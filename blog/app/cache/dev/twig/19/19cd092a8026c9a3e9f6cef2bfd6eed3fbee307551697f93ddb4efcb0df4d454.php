<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d30b99a1ddddbcc8bf2f504fcd2eff1c164ffe712cd4ba519199423206ae5aea extends Twig_Template
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
        $__internal_4c98601bbcf42beb0707a733b2cb0a2ab3b964a3d59943a196959059f3d44036 = $this->env->getExtension("native_profiler");
        $__internal_4c98601bbcf42beb0707a733b2cb0a2ab3b964a3d59943a196959059f3d44036->enter($__internal_4c98601bbcf42beb0707a733b2cb0a2ab3b964a3d59943a196959059f3d44036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4c98601bbcf42beb0707a733b2cb0a2ab3b964a3d59943a196959059f3d44036->leave($__internal_4c98601bbcf42beb0707a733b2cb0a2ab3b964a3d59943a196959059f3d44036_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
