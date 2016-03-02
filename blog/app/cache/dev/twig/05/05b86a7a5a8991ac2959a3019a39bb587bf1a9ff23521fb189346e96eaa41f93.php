<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_9767bee2458317f099d5cb4e94b65fd8021d54c3624938934f948cabe1e13143 extends Twig_Template
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
        $__internal_6ebb5e8b2e3e923baf7072ebc067e1c6ebb5e68d9002411d4b95b7d1c41e7b62 = $this->env->getExtension("native_profiler");
        $__internal_6ebb5e8b2e3e923baf7072ebc067e1c6ebb5e68d9002411d4b95b7d1c41e7b62->enter($__internal_6ebb5e8b2e3e923baf7072ebc067e1c6ebb5e68d9002411d4b95b7d1c41e7b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6ebb5e8b2e3e923baf7072ebc067e1c6ebb5e68d9002411d4b95b7d1c41e7b62->leave($__internal_6ebb5e8b2e3e923baf7072ebc067e1c6ebb5e68d9002411d4b95b7d1c41e7b62_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
