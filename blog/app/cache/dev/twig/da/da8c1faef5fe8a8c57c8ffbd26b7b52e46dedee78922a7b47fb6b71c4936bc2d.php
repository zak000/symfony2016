<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d6c693482320b94486a5f58bad9133d6fb60c3fbf3608476550c25bd8dc8d615 extends Twig_Template
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
        $__internal_de104418e4c1653db3fb34b68e1a3139a8b4dd9744d647f1f8f01a8ade574bd0 = $this->env->getExtension("native_profiler");
        $__internal_de104418e4c1653db3fb34b68e1a3139a8b4dd9744d647f1f8f01a8ade574bd0->enter($__internal_de104418e4c1653db3fb34b68e1a3139a8b4dd9744d647f1f8f01a8ade574bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_de104418e4c1653db3fb34b68e1a3139a8b4dd9744d647f1f8f01a8ade574bd0->leave($__internal_de104418e4c1653db3fb34b68e1a3139a8b4dd9744d647f1f8f01a8ade574bd0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
