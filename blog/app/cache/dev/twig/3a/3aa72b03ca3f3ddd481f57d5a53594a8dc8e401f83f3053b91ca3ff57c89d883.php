<?php

/* BlogBundle:Page:index.html.twig */
class __TwigTemplate_a3e632be04ce5d24a9396a6cc97d7a9337301d04ce8e19ee765813d6c9b53f23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Page:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6559042f7a9613f2045c63d289e9c518020ca3905b3fb05f4be0f27ce1c9d5b1 = $this->env->getExtension("native_profiler");
        $__internal_6559042f7a9613f2045c63d289e9c518020ca3905b3fb05f4be0f27ce1c9d5b1->enter($__internal_6559042f7a9613f2045c63d289e9c518020ca3905b3fb05f4be0f27ce1c9d5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6559042f7a9613f2045c63d289e9c518020ca3905b3fb05f4be0f27ce1c9d5b1->leave($__internal_6559042f7a9613f2045c63d289e9c518020ca3905b3fb05f4be0f27ce1c9d5b1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8be9707bd95d254bd2d7754547614b1c6a4a4d400b068eb55926441899c49ca5 = $this->env->getExtension("native_profiler");
        $__internal_8be9707bd95d254bd2d7754547614b1c6a4a4d400b068eb55926441899c49ca5->enter($__internal_8be9707bd95d254bd2d7754547614b1c6a4a4d400b068eb55926441899c49ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_8be9707bd95d254bd2d7754547614b1c6a4a4d400b068eb55926441899c49ca5->leave($__internal_8be9707bd95d254bd2d7754547614b1c6a4a4d400b068eb55926441899c49ca5_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/BlogBundle/BlogBundle/Resources/views/Page/index.html.twig #}*/
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Blog homepage*/
/* {% endblock %}*/
