<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_530204fa26bc1ed61a43d6917baad63c86714413b713d47f820a101b5432f5ec extends Twig_Template
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
        $__internal_61a522fc66ed2544a5507f47d9425f21f655b5de2cd75ebd35df04e0985acaef = $this->env->getExtension("native_profiler");
        $__internal_61a522fc66ed2544a5507f47d9425f21f655b5de2cd75ebd35df04e0985acaef->enter($__internal_61a522fc66ed2544a5507f47d9425f21f655b5de2cd75ebd35df04e0985acaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_61a522fc66ed2544a5507f47d9425f21f655b5de2cd75ebd35df04e0985acaef->leave($__internal_61a522fc66ed2544a5507f47d9425f21f655b5de2cd75ebd35df04e0985acaef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
