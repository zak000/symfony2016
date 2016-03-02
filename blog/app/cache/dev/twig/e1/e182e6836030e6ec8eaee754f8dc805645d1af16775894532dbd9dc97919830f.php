<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d4c3b8a50e46a18d40afbcc3fc1f1d8d1b78e6eb1a25a248fc6c561caf459666 extends Twig_Template
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
        $__internal_eab64b926883a9720c43f78763c02d339e935ce603ef2be63e83be017e65b55f = $this->env->getExtension("native_profiler");
        $__internal_eab64b926883a9720c43f78763c02d339e935ce603ef2be63e83be017e65b55f->enter($__internal_eab64b926883a9720c43f78763c02d339e935ce603ef2be63e83be017e65b55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_eab64b926883a9720c43f78763c02d339e935ce603ef2be63e83be017e65b55f->leave($__internal_eab64b926883a9720c43f78763c02d339e935ce603ef2be63e83be017e65b55f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
