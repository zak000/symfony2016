<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_350604d16b6266ee1150e83df8ef71ec19352fe0f6de64c06b98dbedfdf3aeb6 extends Twig_Template
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
        $__internal_4bf30c822867160970bec8ad2dc47050defeeb38cc02cc988415e630a22e8235 = $this->env->getExtension("native_profiler");
        $__internal_4bf30c822867160970bec8ad2dc47050defeeb38cc02cc988415e630a22e8235->enter($__internal_4bf30c822867160970bec8ad2dc47050defeeb38cc02cc988415e630a22e8235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4bf30c822867160970bec8ad2dc47050defeeb38cc02cc988415e630a22e8235->leave($__internal_4bf30c822867160970bec8ad2dc47050defeeb38cc02cc988415e630a22e8235_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
