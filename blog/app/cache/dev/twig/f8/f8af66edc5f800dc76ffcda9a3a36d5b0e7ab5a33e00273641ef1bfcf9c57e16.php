<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9a62dbb882fe7bb6dbd205fcdb9ded95965a8032c275c349fd4170dea0490850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_268ed4caf933f5652682478400cea49ae87280fa4423ac40b42aa3e61afba576 = $this->env->getExtension("native_profiler");
        $__internal_268ed4caf933f5652682478400cea49ae87280fa4423ac40b42aa3e61afba576->enter($__internal_268ed4caf933f5652682478400cea49ae87280fa4423ac40b42aa3e61afba576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_268ed4caf933f5652682478400cea49ae87280fa4423ac40b42aa3e61afba576->leave($__internal_268ed4caf933f5652682478400cea49ae87280fa4423ac40b42aa3e61afba576_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_467a4aa321d78756de80da726430b5cbbe081e12942f30fcc60a4f1ffc8bedea = $this->env->getExtension("native_profiler");
        $__internal_467a4aa321d78756de80da726430b5cbbe081e12942f30fcc60a4f1ffc8bedea->enter($__internal_467a4aa321d78756de80da726430b5cbbe081e12942f30fcc60a4f1ffc8bedea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_467a4aa321d78756de80da726430b5cbbe081e12942f30fcc60a4f1ffc8bedea->leave($__internal_467a4aa321d78756de80da726430b5cbbe081e12942f30fcc60a4f1ffc8bedea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
