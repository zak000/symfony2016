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
        $__internal_b9b648141ae8c2761769cf38bb91c285230a19a81c411834188c714830445b65 = $this->env->getExtension("native_profiler");
        $__internal_b9b648141ae8c2761769cf38bb91c285230a19a81c411834188c714830445b65->enter($__internal_b9b648141ae8c2761769cf38bb91c285230a19a81c411834188c714830445b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
    ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 31
        echo "                </div>

                <hgroup>
                   </br>
                    </br>
                     </br>
                    <h3>";
        // line 37
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 45
        $this->displayBlock('sidebar', $context, $blocks);
        // line 46
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "            </div>
        </section>

        ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    </body>
</html>";
        
        $__internal_b9b648141ae8c2761769cf38bb91c285230a19a81c411834188c714830445b65->leave($__internal_b9b648141ae8c2761769cf38bb91c285230a19a81c411834188c714830445b65_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8bee414610d77a0a28327455de1a96e8dab69f04de10fbcb58a922fd018eeab = $this->env->getExtension("native_profiler");
        $__internal_b8bee414610d77a0a28327455de1a96e8dab69f04de10fbcb58a922fd018eeab->enter($__internal_b8bee414610d77a0a28327455de1a96e8dab69f04de10fbcb58a922fd018eeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_b8bee414610d77a0a28327455de1a96e8dab69f04de10fbcb58a922fd018eeab->leave($__internal_b8bee414610d77a0a28327455de1a96e8dab69f04de10fbcb58a922fd018eeab_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_268ad442d602d621cc5df1c7319769168fe306c8a1b267a4e7f5d11129b19910 = $this->env->getExtension("native_profiler");
        $__internal_268ad442d602d621cc5df1c7319769168fe306c8a1b267a4e7f5d11129b19910->enter($__internal_268ad442d602d621cc5df1c7319769168fe306c8a1b267a4e7f5d11129b19910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_268ad442d602d621cc5df1c7319769168fe306c8a1b267a4e7f5d11129b19910->leave($__internal_268ad442d602d621cc5df1c7319769168fe306c8a1b267a4e7f5d11129b19910_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_13ab2449c6a07d3ef97f1015cfdd12299a7fe5b9bddeeb6084444e821f598c24 = $this->env->getExtension("native_profiler");
        $__internal_13ab2449c6a07d3ef97f1015cfdd12299a7fe5b9bddeeb6084444e821f598c24->enter($__internal_13ab2449c6a07d3ef97f1015cfdd12299a7fe5b9bddeeb6084444e821f598c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "    <nav>
        <ul class=\"navigation\">
            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("BlogBundle_homepage");
        echo "\">Home</a></li>
          <li><a >about</a></li>
            <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("BlogBundle_contact");
        echo "\">Contact</a></li>
        </ul>
    </nav>
";
        
        $__internal_13ab2449c6a07d3ef97f1015cfdd12299a7fe5b9bddeeb6084444e821f598c24->leave($__internal_13ab2449c6a07d3ef97f1015cfdd12299a7fe5b9bddeeb6084444e821f598c24_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_761afc9f702fc98573cb3bdc3873eb119ce001831d14748b6a705eba183d2065 = $this->env->getExtension("native_profiler");
        $__internal_761afc9f702fc98573cb3bdc3873eb119ce001831d14748b6a705eba183d2065->enter($__internal_761afc9f702fc98573cb3bdc3873eb119ce001831d14748b6a705eba183d2065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<!--<a href=\"#\">Blog in Symfony2 by Alex Romain Zak Sidney</a>-->";
        
        $__internal_761afc9f702fc98573cb3bdc3873eb119ce001831d14748b6a705eba183d2065->leave($__internal_761afc9f702fc98573cb3bdc3873eb119ce001831d14748b6a705eba183d2065_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd1b9f5950d62d4bbaf168081a257cff55dee388c8fcca8e5b97c808f3c46861 = $this->env->getExtension("native_profiler");
        $__internal_dd1b9f5950d62d4bbaf168081a257cff55dee388c8fcca8e5b97c808f3c46861->enter($__internal_dd1b9f5950d62d4bbaf168081a257cff55dee388c8fcca8e5b97c808f3c46861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dd1b9f5950d62d4bbaf168081a257cff55dee388c8fcca8e5b97c808f3c46861->leave($__internal_dd1b9f5950d62d4bbaf168081a257cff55dee388c8fcca8e5b97c808f3c46861_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b1aa7e18ab22df91782e250644ec369611e7f31c283504e0ce0fb5fe2f7571de = $this->env->getExtension("native_profiler");
        $__internal_b1aa7e18ab22df91782e250644ec369611e7f31c283504e0ce0fb5fe2f7571de->enter($__internal_b1aa7e18ab22df91782e250644ec369611e7f31c283504e0ce0fb5fe2f7571de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_b1aa7e18ab22df91782e250644ec369611e7f31c283504e0ce0fb5fe2f7571de->leave($__internal_b1aa7e18ab22df91782e250644ec369611e7f31c283504e0ce0fb5fe2f7571de_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d603cb096e2fbbca0c7ac1d11123dba9e226fbf8c3237d42fce2af4a6960468b = $this->env->getExtension("native_profiler");
        $__internal_d603cb096e2fbbca0c7ac1d11123dba9e226fbf8c3237d42fce2af4a6960468b->enter($__internal_d603cb096e2fbbca0c7ac1d11123dba9e226fbf8c3237d42fce2af4a6960468b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Symfony2 blog zak/alex/romain/sidney - created by 
                ";
        
        $__internal_d603cb096e2fbbca0c7ac1d11123dba9e226fbf8c3237d42fce2af4a6960468b->leave($__internal_d603cb096e2fbbca0c7ac1d11123dba9e226fbf8c3237d42fce2af4a6960468b_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_acbc741cc462d6f8775edc8bdd110620aca1e0d456ded95ca36f87dd3a944c62 = $this->env->getExtension("native_profiler");
        $__internal_acbc741cc462d6f8775edc8bdd110620aca1e0d456ded95ca36f87dd3a944c62->enter($__internal_acbc741cc462d6f8775edc8bdd110620aca1e0d456ded95ca36f87dd3a944c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_acbc741cc462d6f8775edc8bdd110620aca1e0d456ded95ca36f87dd3a944c62->leave($__internal_acbc741cc462d6f8775edc8bdd110620aca1e0d456ded95ca36f87dd3a944c62_prof);

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
        return array (  210 => 55,  202 => 50,  196 => 49,  185 => 45,  174 => 42,  162 => 37,  151 => 27,  146 => 25,  142 => 23,  136 => 22,  127 => 13,  123 => 11,  117 => 10,  105 => 6,  97 => 56,  95 => 55,  90 => 52,  88 => 49,  83 => 46,  81 => 45,  77 => 43,  75 => 42,  67 => 37,  59 => 31,  57 => 22,  46 => 15,  44 => 10,  37 => 6,  30 => 1,);
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
