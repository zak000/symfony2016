<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9b0ffda6901a9276c70422814ab29a28680673e223f2689adbd03721c56e2bf4 extends Twig_Template
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
        $__internal_9b442e3b51960cb826431c1819ad0ce16ba2e4aa9c4afe4b8334d938f7159776 = $this->env->getExtension("native_profiler");
        $__internal_9b442e3b51960cb826431c1819ad0ce16ba2e4aa9c4afe4b8334d938f7159776->enter($__internal_9b442e3b51960cb826431c1819ad0ce16ba2e4aa9c4afe4b8334d938f7159776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9b442e3b51960cb826431c1819ad0ce16ba2e4aa9c4afe4b8334d938f7159776->leave($__internal_9b442e3b51960cb826431c1819ad0ce16ba2e4aa9c4afe4b8334d938f7159776_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
