<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_4ab1e6697c470b73af3281a0d65edc7a73ef74387e451c5750d01cb1db6431ac extends Twig_Template
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
        $__internal_79d25ebcfae980d1356aec126ffd49008d6962a58bb55455acb9efe041634847 = $this->env->getExtension("native_profiler");
        $__internal_79d25ebcfae980d1356aec126ffd49008d6962a58bb55455acb9efe041634847->enter($__internal_79d25ebcfae980d1356aec126ffd49008d6962a58bb55455acb9efe041634847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_79d25ebcfae980d1356aec126ffd49008d6962a58bb55455acb9efe041634847->leave($__internal_79d25ebcfae980d1356aec126ffd49008d6962a58bb55455acb9efe041634847_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
