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
        $__internal_447effaafef05b9a36b2f0280fc3566337cddd6f51d6b132a664f14e5e696fb9 = $this->env->getExtension("native_profiler");
        $__internal_447effaafef05b9a36b2f0280fc3566337cddd6f51d6b132a664f14e5e696fb9->enter($__internal_447effaafef05b9a36b2f0280fc3566337cddd6f51d6b132a664f14e5e696fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_447effaafef05b9a36b2f0280fc3566337cddd6f51d6b132a664f14e5e696fb9->leave($__internal_447effaafef05b9a36b2f0280fc3566337cddd6f51d6b132a664f14e5e696fb9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_885051296a77768a39be80cddc9d1fbf5d1830a8bebcc9513afac75bae868852 = $this->env->getExtension("native_profiler");
        $__internal_885051296a77768a39be80cddc9d1fbf5d1830a8bebcc9513afac75bae868852->enter($__internal_885051296a77768a39be80cddc9d1fbf5d1830a8bebcc9513afac75bae868852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_885051296a77768a39be80cddc9d1fbf5d1830a8bebcc9513afac75bae868852->leave($__internal_885051296a77768a39be80cddc9d1fbf5d1830a8bebcc9513afac75bae868852_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5491f3c00e9e01454b30a02c544a2ec42b925656960d7f352b6a1c80c9be942e = $this->env->getExtension("native_profiler");
        $__internal_5491f3c00e9e01454b30a02c544a2ec42b925656960d7f352b6a1c80c9be942e->enter($__internal_5491f3c00e9e01454b30a02c544a2ec42b925656960d7f352b6a1c80c9be942e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5491f3c00e9e01454b30a02c544a2ec42b925656960d7f352b6a1c80c9be942e->leave($__internal_5491f3c00e9e01454b30a02c544a2ec42b925656960d7f352b6a1c80c9be942e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2cd74d075f94f8f1de473af8103d12f53232424d5875ca128ddf07ab0016d853 = $this->env->getExtension("native_profiler");
        $__internal_2cd74d075f94f8f1de473af8103d12f53232424d5875ca128ddf07ab0016d853->enter($__internal_2cd74d075f94f8f1de473af8103d12f53232424d5875ca128ddf07ab0016d853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2cd74d075f94f8f1de473af8103d12f53232424d5875ca128ddf07ab0016d853->leave($__internal_2cd74d075f94f8f1de473af8103d12f53232424d5875ca128ddf07ab0016d853_prof);

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
