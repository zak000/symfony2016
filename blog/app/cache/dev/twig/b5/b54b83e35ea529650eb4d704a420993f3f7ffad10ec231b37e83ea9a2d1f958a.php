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
        $__internal_8846ece6683a33f267bb8f8aad9ec58f036d2dbce0708fe68cf58bad14de68ed = $this->env->getExtension("native_profiler");
        $__internal_8846ece6683a33f267bb8f8aad9ec58f036d2dbce0708fe68cf58bad14de68ed->enter($__internal_8846ece6683a33f267bb8f8aad9ec58f036d2dbce0708fe68cf58bad14de68ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8846ece6683a33f267bb8f8aad9ec58f036d2dbce0708fe68cf58bad14de68ed->leave($__internal_8846ece6683a33f267bb8f8aad9ec58f036d2dbce0708fe68cf58bad14de68ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0b91dafb081cbe9d4ce68b517671dec8cdb23d079eafeb5f844a349b0e110b74 = $this->env->getExtension("native_profiler");
        $__internal_0b91dafb081cbe9d4ce68b517671dec8cdb23d079eafeb5f844a349b0e110b74->enter($__internal_0b91dafb081cbe9d4ce68b517671dec8cdb23d079eafeb5f844a349b0e110b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b91dafb081cbe9d4ce68b517671dec8cdb23d079eafeb5f844a349b0e110b74->leave($__internal_0b91dafb081cbe9d4ce68b517671dec8cdb23d079eafeb5f844a349b0e110b74_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_52537d34b4e8c074ca5567a92162b2b1e7d363ae622b6e3056a66afd96ec0374 = $this->env->getExtension("native_profiler");
        $__internal_52537d34b4e8c074ca5567a92162b2b1e7d363ae622b6e3056a66afd96ec0374->enter($__internal_52537d34b4e8c074ca5567a92162b2b1e7d363ae622b6e3056a66afd96ec0374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_52537d34b4e8c074ca5567a92162b2b1e7d363ae622b6e3056a66afd96ec0374->leave($__internal_52537d34b4e8c074ca5567a92162b2b1e7d363ae622b6e3056a66afd96ec0374_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_024c9d130267d03965ab0d1d613b0d177f7283c44771dd6036f4787e0bfa9aad = $this->env->getExtension("native_profiler");
        $__internal_024c9d130267d03965ab0d1d613b0d177f7283c44771dd6036f4787e0bfa9aad->enter($__internal_024c9d130267d03965ab0d1d613b0d177f7283c44771dd6036f4787e0bfa9aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_024c9d130267d03965ab0d1d613b0d177f7283c44771dd6036f4787e0bfa9aad->leave($__internal_024c9d130267d03965ab0d1d613b0d177f7283c44771dd6036f4787e0bfa9aad_prof);

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
