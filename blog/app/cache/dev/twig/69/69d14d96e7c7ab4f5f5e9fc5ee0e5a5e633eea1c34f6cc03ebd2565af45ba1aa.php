<?php

/* BlogBundle:Page:contact.html.twig */
class __TwigTemplate_6171037309ae80cdeca46236df872dd1ff2f3fde0182424e053686f77424b7bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Page:contact.html.twig", 2);
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
        $__internal_14c5fde0ff7e5013ed15b5bedf52393008f7ed94ad1f7519b338f7d8a013df0b = $this->env->getExtension("native_profiler");
        $__internal_14c5fde0ff7e5013ed15b5bedf52393008f7ed94ad1f7519b338f7d8a013df0b->enter($__internal_14c5fde0ff7e5013ed15b5bedf52393008f7ed94ad1f7519b338f7d8a013df0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14c5fde0ff7e5013ed15b5bedf52393008f7ed94ad1f7519b338f7d8a013df0b->leave($__internal_14c5fde0ff7e5013ed15b5bedf52393008f7ed94ad1f7519b338f7d8a013df0b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbce9e2f6f46b25523cc468518180648ec8e424aa9ac2d0670eecc27472eb908 = $this->env->getExtension("native_profiler");
        $__internal_fbce9e2f6f46b25523cc468518180648ec8e424aa9ac2d0670eecc27472eb908->enter($__internal_fbce9e2f6f46b25523cc468518180648ec8e424aa9ac2d0670eecc27472eb908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_fbce9e2f6f46b25523cc468518180648ec8e424aa9ac2d0670eecc27472eb908->leave($__internal_fbce9e2f6f46b25523cc468518180648ec8e424aa9ac2d0670eecc27472eb908_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_291e40146c55c420cb5f45f07721164951ffa1b81f6dc47da54a69b84298036c = $this->env->getExtension("native_profiler");
        $__internal_291e40146c55c420cb5f45f07721164951ffa1b81f6dc47da54a69b84298036c->enter($__internal_291e40146c55c420cb5f45f07721164951ffa1b81f6dc47da54a69b84298036c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>

    <p>Want to contact symblog?</p>

    <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("BlogBundle_contact");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row');
        echo "

        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        <input type=\"submit\" value=\"Submit\" />
    </form>
";
        
        $__internal_291e40146c55c420cb5f45f07721164951ffa1b81f6dc47da54a69b84298036c->leave($__internal_291e40146c55c420cb5f45f07721164951ffa1b81f6dc47da54a69b84298036c_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  67 => 14,  61 => 13,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Page/contact.html.twig #}*/
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
/* */
/*     <form action="{{ path('BlogBundle_contact') }}" method="post" {{ form_enctype(form) }} class="blogger">*/
/*         {{ form_errors(form) }}*/
/* */
/*         {{ form_row(form.name) }}*/
/*         {{ form_row(form.email) }}*/
/*         {{ form_row(form.subject) }}*/
/*         {{ form_row(form.body) }}*/
/* */
/*         {{ form_rest(form) }}*/
/* */
/*         <input type="submit" value="Submit" />*/
/*     </form>*/
/* {% endblock %}*/
