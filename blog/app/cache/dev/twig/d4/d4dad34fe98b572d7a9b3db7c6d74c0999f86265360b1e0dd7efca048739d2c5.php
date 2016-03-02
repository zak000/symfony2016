<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ea60081af272e7b3d84f1b905abc975d2d8a46396588a82678c19dcc012b6369 extends Twig_Template
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
        $__internal_67e0d9871c0c00a1b805e41d0772406ec79cbc66bc0dbbda1b2b4944ca3e07f1 = $this->env->getExtension("native_profiler");
        $__internal_67e0d9871c0c00a1b805e41d0772406ec79cbc66bc0dbbda1b2b4944ca3e07f1->enter($__internal_67e0d9871c0c00a1b805e41d0772406ec79cbc66bc0dbbda1b2b4944ca3e07f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_67e0d9871c0c00a1b805e41d0772406ec79cbc66bc0dbbda1b2b4944ca3e07f1->leave($__internal_67e0d9871c0c00a1b805e41d0772406ec79cbc66bc0dbbda1b2b4944ca3e07f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
