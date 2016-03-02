<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6e742091ca3ed2f5bcf29e0903ffe97dddf025d2f2cb2f3b45108917ee80c5da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acfe58c2e6ea894a4191bdcd364797af27f159c25ca3f9cf9941d6536418912b = $this->env->getExtension("native_profiler");
        $__internal_acfe58c2e6ea894a4191bdcd364797af27f159c25ca3f9cf9941d6536418912b->enter($__internal_acfe58c2e6ea894a4191bdcd364797af27f159c25ca3f9cf9941d6536418912b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acfe58c2e6ea894a4191bdcd364797af27f159c25ca3f9cf9941d6536418912b->leave($__internal_acfe58c2e6ea894a4191bdcd364797af27f159c25ca3f9cf9941d6536418912b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_51c5091c5608be0796af4ed9861931de64303263ee6f624471f7c4da6ee44c16 = $this->env->getExtension("native_profiler");
        $__internal_51c5091c5608be0796af4ed9861931de64303263ee6f624471f7c4da6ee44c16->enter($__internal_51c5091c5608be0796af4ed9861931de64303263ee6f624471f7c4da6ee44c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_51c5091c5608be0796af4ed9861931de64303263ee6f624471f7c4da6ee44c16->leave($__internal_51c5091c5608be0796af4ed9861931de64303263ee6f624471f7c4da6ee44c16_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_876d479566483cbfe11b89535aba8e694ba2b8a42342b62745ee3522274886e4 = $this->env->getExtension("native_profiler");
        $__internal_876d479566483cbfe11b89535aba8e694ba2b8a42342b62745ee3522274886e4->enter($__internal_876d479566483cbfe11b89535aba8e694ba2b8a42342b62745ee3522274886e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_876d479566483cbfe11b89535aba8e694ba2b8a42342b62745ee3522274886e4->leave($__internal_876d479566483cbfe11b89535aba8e694ba2b8a42342b62745ee3522274886e4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
