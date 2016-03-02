<?php

/* ::base.html.twig */
class __TwigTemplate_9d34ab96c045a6c2f4cfeedf0ae98686f0b4f35b34cd1753560ad5a41f2a46f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1523237a7c32ee9a9711afbfbd6777a5348d5f676ef5820e1f3297348ef63fd5 = $this->env->getExtension("native_profiler");
        $__internal_1523237a7c32ee9a9711afbfbd6777a5348d5f676ef5820e1f3297348ef63fd5->enter($__internal_1523237a7c32ee9a9711afbfbd6777a5348d5f676ef5820e1f3297348ef63fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - test blog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
<p>test</p>
       <p>test2</p>
       
        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
    ";
        // line 24
        $this->displayBlock('navigation', $context, $blocks);
        // line 33
        echo "                </div>

                <hgroup>
                   </br>
                    </br>
                     </br>
                    <h3>";
        // line 39
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 47
        $this->displayBlock('sidebar', $context, $blocks);
        // line 48
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 54
        echo "            </div>
        </section>

        ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "    </body>
</html>";
        
        $__internal_1523237a7c32ee9a9711afbfbd6777a5348d5f676ef5820e1f3297348ef63fd5->leave($__internal_1523237a7c32ee9a9711afbfbd6777a5348d5f676ef5820e1f3297348ef63fd5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_669a3f037048d7c466fc68677c70e51bfa2a1ae2a5e6bcbd2092cf2e5b89c4ba = $this->env->getExtension("native_profiler");
        $__internal_669a3f037048d7c466fc68677c70e51bfa2a1ae2a5e6bcbd2092cf2e5b89c4ba->enter($__internal_669a3f037048d7c466fc68677c70e51bfa2a1ae2a5e6bcbd2092cf2e5b89c4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_669a3f037048d7c466fc68677c70e51bfa2a1ae2a5e6bcbd2092cf2e5b89c4ba->leave($__internal_669a3f037048d7c466fc68677c70e51bfa2a1ae2a5e6bcbd2092cf2e5b89c4ba_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_791282d15eb530057236930ce158fccf99f0a20581983767a100a58f27df9ed2 = $this->env->getExtension("native_profiler");
        $__internal_791282d15eb530057236930ce158fccf99f0a20581983767a100a58f27df9ed2->enter($__internal_791282d15eb530057236930ce158fccf99f0a20581983767a100a58f27df9ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_791282d15eb530057236930ce158fccf99f0a20581983767a100a58f27df9ed2->leave($__internal_791282d15eb530057236930ce158fccf99f0a20581983767a100a58f27df9ed2_prof);

    }

    // line 24
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_e01c4e155bceca710eda2b70fbda8b1ea2eba452ddbc38d7254a0804dfeb6517 = $this->env->getExtension("native_profiler");
        $__internal_e01c4e155bceca710eda2b70fbda8b1ea2eba452ddbc38d7254a0804dfeb6517->enter($__internal_e01c4e155bceca710eda2b70fbda8b1ea2eba452ddbc38d7254a0804dfeb6517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 25
        echo "    <nav>
        <ul class=\"navigation\">
            <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("BlogBundle_homepage");
        echo "\">Home</a></li>
          <li><a >about</a></li>
            <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("BlogBundle_contact");
        echo "\">Contact</a></li>
        </ul>
    </nav>
";
        
        $__internal_e01c4e155bceca710eda2b70fbda8b1ea2eba452ddbc38d7254a0804dfeb6517->leave($__internal_e01c4e155bceca710eda2b70fbda8b1ea2eba452ddbc38d7254a0804dfeb6517_prof);

    }

    // line 39
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_ac096c6820b33e14116e07230df5e33fb286e66d160f54e5b58d347f7fcda5a2 = $this->env->getExtension("native_profiler");
        $__internal_ac096c6820b33e14116e07230df5e33fb286e66d160f54e5b58d347f7fcda5a2->enter($__internal_ac096c6820b33e14116e07230df5e33fb286e66d160f54e5b58d347f7fcda5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<!--<a href=\"#\">Blog in Symfony2 by Alex Romain Zak Sidney</a>-->";
        
        $__internal_ac096c6820b33e14116e07230df5e33fb286e66d160f54e5b58d347f7fcda5a2->leave($__internal_ac096c6820b33e14116e07230df5e33fb286e66d160f54e5b58d347f7fcda5a2_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ed5f3fa68a406b04e0415a650470be0b7e3562b267e3959e78197706e94702c = $this->env->getExtension("native_profiler");
        $__internal_3ed5f3fa68a406b04e0415a650470be0b7e3562b267e3959e78197706e94702c->enter($__internal_3ed5f3fa68a406b04e0415a650470be0b7e3562b267e3959e78197706e94702c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ed5f3fa68a406b04e0415a650470be0b7e3562b267e3959e78197706e94702c->leave($__internal_3ed5f3fa68a406b04e0415a650470be0b7e3562b267e3959e78197706e94702c_prof);

    }

    // line 47
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d0a30064706fdf4499a17ee548b832833258eb1b67662b628e5e95bd427b9737 = $this->env->getExtension("native_profiler");
        $__internal_d0a30064706fdf4499a17ee548b832833258eb1b67662b628e5e95bd427b9737->enter($__internal_d0a30064706fdf4499a17ee548b832833258eb1b67662b628e5e95bd427b9737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_d0a30064706fdf4499a17ee548b832833258eb1b67662b628e5e95bd427b9737->leave($__internal_d0a30064706fdf4499a17ee548b832833258eb1b67662b628e5e95bd427b9737_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ac3ff401748c6b4224ee63e6b9b07d5920a20f3016f5e76e0a94030b708f361e = $this->env->getExtension("native_profiler");
        $__internal_ac3ff401748c6b4224ee63e6b9b07d5920a20f3016f5e76e0a94030b708f361e->enter($__internal_ac3ff401748c6b4224ee63e6b9b07d5920a20f3016f5e76e0a94030b708f361e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 52
        echo "                    Symfony2 blog zak/alex/romain/sidney - created by 
                ";
        
        $__internal_ac3ff401748c6b4224ee63e6b9b07d5920a20f3016f5e76e0a94030b708f361e->leave($__internal_ac3ff401748c6b4224ee63e6b9b07d5920a20f3016f5e76e0a94030b708f361e_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7bd4d445ba78ca969892254ec81f27bfab9d95dc93a7b81f1d1f9f927a4e50d9 = $this->env->getExtension("native_profiler");
        $__internal_7bd4d445ba78ca969892254ec81f27bfab9d95dc93a7b81f1d1f9f927a4e50d9->enter($__internal_7bd4d445ba78ca969892254ec81f27bfab9d95dc93a7b81f1d1f9f927a4e50d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7bd4d445ba78ca969892254ec81f27bfab9d95dc93a7b81f1d1f9f927a4e50d9->leave($__internal_7bd4d445ba78ca969892254ec81f27bfab9d95dc93a7b81f1d1f9f927a4e50d9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 57,  204 => 52,  198 => 51,  187 => 47,  176 => 44,  164 => 39,  153 => 29,  148 => 27,  144 => 25,  138 => 24,  129 => 13,  125 => 11,  119 => 10,  107 => 6,  99 => 58,  97 => 57,  92 => 54,  90 => 51,  85 => 48,  83 => 47,  79 => 45,  77 => 44,  69 => 39,  61 => 33,  59 => 24,  46 => 15,  44 => 10,  37 => 6,  30 => 1,);
    }
}
/* <!-- app/Resources/views/base.html.twig -->*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />*/
/*         <title>{% block title %}symblog{% endblock %} - test blog</title>*/
/*         <!--[if lt IE 9]>*/
/*             <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*         <![endif]-->*/
/*         {% block stylesheets %}*/
/*             <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>*/
/*             <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>*/
/*             <link href="{{ asset('bundles/framework/css/screen.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* <p>test</p>*/
/*        <p>test2</p>*/
/*        */
/*         <section id="wrapper">*/
/*             <header id="header">*/
/*                 <div class="top">*/
/*     {% block navigation %}*/
/*     <nav>*/
/*         <ul class="navigation">*/
/*             <li><a href="{{ path('BlogBundle_homepage') }}">Home</a></li>*/
/*           <li><a >about</a></li>*/
/*             <li><a href="{{ path('BlogBundle_contact') }}">Contact</a></li>*/
/*         </ul>*/
/*     </nav>*/
/* {% endblock %}*/
/*                 </div>*/
/* */
/*                 <hgroup>*/
/*                    </br>*/
/*                     </br>*/
/*                      </br>*/
/*                     <h3>{% block blog_tagline %}<!--<a href="#">Blog in Symfony2 by Alex Romain Zak Sidney</a>-->{% endblock %}</h3>*/
/*                 </hgroup>*/
/*             </header>*/
/* */
/*             <section class="main-col">*/
/*                 {% block body %}{% endblock %}*/
/*             </section>*/
/*             <aside class="sidebar">*/
/*                 {% block sidebar %}{% endblock %}*/
/*             </aside>*/
/* */
/*             <div id="footer">*/
/*                 {% block footer %}*/
/*                     Symfony2 blog zak/alex/romain/sidney - created by */
/*                 {% endblock %}*/
/*             </div>*/
/*         </section>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
