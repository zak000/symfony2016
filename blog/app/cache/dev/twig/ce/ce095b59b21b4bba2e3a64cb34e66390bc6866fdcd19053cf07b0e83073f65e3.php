<?php

/* BlogBundle:page:contact.html.twig */
class __TwigTemplate_c37e677acc3af7a8afc893793b9186f21d32e7a174a830a42e2f3b662b998fc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:page:contact.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df3d69191e5d8edbceadc4fb8b42a602d12eb68af7c15915ac85e6e0937dd73e = $this->env->getExtension("native_profiler");
        $__internal_df3d69191e5d8edbceadc4fb8b42a602d12eb68af7c15915ac85e6e0937dd73e->enter($__internal_df3d69191e5d8edbceadc4fb8b42a602d12eb68af7c15915ac85e6e0937dd73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df3d69191e5d8edbceadc4fb8b42a602d12eb68af7c15915ac85e6e0937dd73e->leave($__internal_df3d69191e5d8edbceadc4fb8b42a602d12eb68af7c15915ac85e6e0937dd73e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c0f677f0305681c0bb2c0226b51f73bcf88767946235024ee353f3d445b3b3d = $this->env->getExtension("native_profiler");
        $__internal_1c0f677f0305681c0bb2c0226b51f73bcf88767946235024ee353f3d445b3b3d->enter($__internal_1c0f677f0305681c0bb2c0226b51f73bcf88767946235024ee353f3d445b3b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_1c0f677f0305681c0bb2c0226b51f73bcf88767946235024ee353f3d445b3b3d->leave($__internal_1c0f677f0305681c0bb2c0226b51f73bcf88767946235024ee353f3d445b3b3d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_77b318eb1bd648193eb1f6e720451fb5fed9bd59f073b3fb56909f246d49f6e3 = $this->env->getExtension("native_profiler");
        $__internal_77b318eb1bd648193eb1f6e720451fb5fed9bd59f073b3fb56909f246d49f6e3->enter($__internal_77b318eb1bd648193eb1f6e720451fb5fed9bd59f073b3fb56909f246d49f6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>

    <p>Want to contact symblog?</p>
";
        
        $__internal_77b318eb1bd648193eb1f6e720451fb5fed9bd59f073b3fb56909f246d49f6e3->leave($__internal_77b318eb1bd648193eb1f6e720451fb5fed9bd59f073b3fb56909f246d49f6e3_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# src/BlogBundle/Resources/views/Page/contact.html.twig #}*/
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Contact{% endblock%}*/
/* */
/* {% block body %}*/
/*     <header>*/
/*         <h1>Contact symblog</h1>*/
/*     </header>*/
/* */
/*     <p>Want to contact symblog?</p>*/
/* {% endblock %}*/
