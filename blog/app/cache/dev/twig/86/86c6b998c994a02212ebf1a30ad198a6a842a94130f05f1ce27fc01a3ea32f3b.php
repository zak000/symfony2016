<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_9a1aaeb0bd94c216c4b0f6d349b9413c2136eb3c6ccf2552939adbda8cb7d173 extends Twig_Template
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
        $__internal_72e67f3f97a5e5716aa85a2591666624a40b891db46b1aad1717d7267d592b1d = $this->env->getExtension("native_profiler");
        $__internal_72e67f3f97a5e5716aa85a2591666624a40b891db46b1aad1717d7267d592b1d->enter($__internal_72e67f3f97a5e5716aa85a2591666624a40b891db46b1aad1717d7267d592b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_72e67f3f97a5e5716aa85a2591666624a40b891db46b1aad1717d7267d592b1d->leave($__internal_72e67f3f97a5e5716aa85a2591666624a40b891db46b1aad1717d7267d592b1d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
