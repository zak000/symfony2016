<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_56847f2367f1c0b1582dbf607a0bf700841d01c383954c405e10f92005a2bae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_583066981976f2525212f2e5606284c8c008991a47c79567658abd29df31bbe4 = $this->env->getExtension("native_profiler");
        $__internal_583066981976f2525212f2e5606284c8c008991a47c79567658abd29df31bbe4->enter($__internal_583066981976f2525212f2e5606284c8c008991a47c79567658abd29df31bbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_583066981976f2525212f2e5606284c8c008991a47c79567658abd29df31bbe4->leave($__internal_583066981976f2525212f2e5606284c8c008991a47c79567658abd29df31bbe4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c96d53bd1586466382a9283ce3d1a52f57290581d13ecca27f6cb760c0ebb386 = $this->env->getExtension("native_profiler");
        $__internal_c96d53bd1586466382a9283ce3d1a52f57290581d13ecca27f6cb760c0ebb386->enter($__internal_c96d53bd1586466382a9283ce3d1a52f57290581d13ecca27f6cb760c0ebb386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c96d53bd1586466382a9283ce3d1a52f57290581d13ecca27f6cb760c0ebb386->leave($__internal_c96d53bd1586466382a9283ce3d1a52f57290581d13ecca27f6cb760c0ebb386_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a04390c615673bfb8f2c71e4a271578c4028abae335caaa8f77363d793e7178e = $this->env->getExtension("native_profiler");
        $__internal_a04390c615673bfb8f2c71e4a271578c4028abae335caaa8f77363d793e7178e->enter($__internal_a04390c615673bfb8f2c71e4a271578c4028abae335caaa8f77363d793e7178e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a04390c615673bfb8f2c71e4a271578c4028abae335caaa8f77363d793e7178e->leave($__internal_a04390c615673bfb8f2c71e4a271578c4028abae335caaa8f77363d793e7178e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d566659493f4602649ba09c7ac5fb4e1759d5746505078e350788f2f043406bf = $this->env->getExtension("native_profiler");
        $__internal_d566659493f4602649ba09c7ac5fb4e1759d5746505078e350788f2f043406bf->enter($__internal_d566659493f4602649ba09c7ac5fb4e1759d5746505078e350788f2f043406bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d566659493f4602649ba09c7ac5fb4e1759d5746505078e350788f2f043406bf->leave($__internal_d566659493f4602649ba09c7ac5fb4e1759d5746505078e350788f2f043406bf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
