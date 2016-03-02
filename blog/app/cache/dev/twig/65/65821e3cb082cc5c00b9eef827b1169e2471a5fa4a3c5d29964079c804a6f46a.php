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
        $__internal_b5a9ecfe03fda26e08267cc57ca88d7304730702c1c71d1cc9fad2b8890b3a0d = $this->env->getExtension("native_profiler");
        $__internal_b5a9ecfe03fda26e08267cc57ca88d7304730702c1c71d1cc9fad2b8890b3a0d->enter($__internal_b5a9ecfe03fda26e08267cc57ca88d7304730702c1c71d1cc9fad2b8890b3a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b5a9ecfe03fda26e08267cc57ca88d7304730702c1c71d1cc9fad2b8890b3a0d->leave($__internal_b5a9ecfe03fda26e08267cc57ca88d7304730702c1c71d1cc9fad2b8890b3a0d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ace956fbc9a6047f11218a483e64aac133c4fcc5a1da206b211fecb4fe9c6291 = $this->env->getExtension("native_profiler");
        $__internal_ace956fbc9a6047f11218a483e64aac133c4fcc5a1da206b211fecb4fe9c6291->enter($__internal_ace956fbc9a6047f11218a483e64aac133c4fcc5a1da206b211fecb4fe9c6291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_ace956fbc9a6047f11218a483e64aac133c4fcc5a1da206b211fecb4fe9c6291->leave($__internal_ace956fbc9a6047f11218a483e64aac133c4fcc5a1da206b211fecb4fe9c6291_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e51d11d000c569f870f329284dcc8f3a1297500a6dec73138de2acb0ff94d11 = $this->env->getExtension("native_profiler");
        $__internal_8e51d11d000c569f870f329284dcc8f3a1297500a6dec73138de2acb0ff94d11->enter($__internal_8e51d11d000c569f870f329284dcc8f3a1297500a6dec73138de2acb0ff94d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_8e51d11d000c569f870f329284dcc8f3a1297500a6dec73138de2acb0ff94d11->leave($__internal_8e51d11d000c569f870f329284dcc8f3a1297500a6dec73138de2acb0ff94d11_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ad046ff0534310932477460cf3d0616854c93f074476e3e23d69d88713fe556d = $this->env->getExtension("native_profiler");
        $__internal_ad046ff0534310932477460cf3d0616854c93f074476e3e23d69d88713fe556d->enter($__internal_ad046ff0534310932477460cf3d0616854c93f074476e3e23d69d88713fe556d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Home</a></li>
                                <li><a href=\"#\">About</a></li>
                                <li><a href=\"#\">Contact</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_ad046ff0534310932477460cf3d0616854c93f074476e3e23d69d88713fe556d->leave($__internal_ad046ff0534310932477460cf3d0616854c93f074476e3e23d69d88713fe556d_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_997f6e270cd272059d77b328df7e853f0e54dd78ad61712d18b48363d6c631ef = $this->env->getExtension("native_profiler");
        $__internal_997f6e270cd272059d77b328df7e853f0e54dd78ad61712d18b48363d6c631ef->enter($__internal_997f6e270cd272059d77b328df7e853f0e54dd78ad61712d18b48363d6c631ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">Blog in Symfony2 by Alex Romain Zak Sidney</a>";
        
        $__internal_997f6e270cd272059d77b328df7e853f0e54dd78ad61712d18b48363d6c631ef->leave($__internal_997f6e270cd272059d77b328df7e853f0e54dd78ad61712d18b48363d6c631ef_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_557d2c1501d9e4fc4ad685a3b6023f1b766068d0bafa5ff66533914f79a79f40 = $this->env->getExtension("native_profiler");
        $__internal_557d2c1501d9e4fc4ad685a3b6023f1b766068d0bafa5ff66533914f79a79f40->enter($__internal_557d2c1501d9e4fc4ad685a3b6023f1b766068d0bafa5ff66533914f79a79f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_557d2c1501d9e4fc4ad685a3b6023f1b766068d0bafa5ff66533914f79a79f40->leave($__internal_557d2c1501d9e4fc4ad685a3b6023f1b766068d0bafa5ff66533914f79a79f40_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2025307cc677d8c833fbae23b6c845e64e807fdf2b02b34c7040e4cc1d199acf = $this->env->getExtension("native_profiler");
        $__internal_2025307cc677d8c833fbae23b6c845e64e807fdf2b02b34c7040e4cc1d199acf->enter($__internal_2025307cc677d8c833fbae23b6c845e64e807fdf2b02b34c7040e4cc1d199acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_2025307cc677d8c833fbae23b6c845e64e807fdf2b02b34c7040e4cc1d199acf->leave($__internal_2025307cc677d8c833fbae23b6c845e64e807fdf2b02b34c7040e4cc1d199acf_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6f055279677ca56734b7b486edbc758565529f8d9030235370021fa3640baf7f = $this->env->getExtension("native_profiler");
        $__internal_6f055279677ca56734b7b486edbc758565529f8d9030235370021fa3640baf7f->enter($__internal_6f055279677ca56734b7b486edbc758565529f8d9030235370021fa3640baf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Symfony2 blog zak/alex/romain/sidney - created by 
                ";
        
        $__internal_6f055279677ca56734b7b486edbc758565529f8d9030235370021fa3640baf7f->leave($__internal_6f055279677ca56734b7b486edbc758565529f8d9030235370021fa3640baf7f_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1914765ac164fdf486e3be6dce63748fbec5431f6a71dabc7028d01ce66ef40c = $this->env->getExtension("native_profiler");
        $__internal_1914765ac164fdf486e3be6dce63748fbec5431f6a71dabc7028d01ce66ef40c->enter($__internal_1914765ac164fdf486e3be6dce63748fbec5431f6a71dabc7028d01ce66ef40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1914765ac164fdf486e3be6dce63748fbec5431f6a71dabc7028d01ce66ef40c->leave($__internal_1914765ac164fdf486e3be6dce63748fbec5431f6a71dabc7028d01ce66ef40c_prof);

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
        return array (  204 => 55,  196 => 50,  190 => 49,  179 => 45,  168 => 42,  156 => 37,  142 => 23,  136 => 22,  127 => 13,  123 => 11,  117 => 10,  105 => 6,  97 => 56,  95 => 55,  90 => 52,  88 => 49,  83 => 46,  81 => 45,  77 => 43,  75 => 42,  67 => 37,  59 => 31,  57 => 22,  46 => 15,  44 => 10,  37 => 6,  30 => 1,);
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
/* */
/*         <section id="wrapper">*/
/*             <header id="header">*/
/*                 <div class="top">*/
/*                     {% block navigation %}*/
/*                         <nav>*/
/*                             <ul class="navigation">*/
/*                                 <li><a href="#">Home</a></li>*/
/*                                 <li><a href="#">About</a></li>*/
/*                                 <li><a href="#">Contact</a></li>*/
/*                             </ul>*/
/*                         </nav>*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*                 <hgroup>*/
/*                    </br>*/
/*                     </br>*/
/*                      </br>*/
/*                     <h3>{% block blog_tagline %}<a href="#">Blog in Symfony2 by Alex Romain Zak Sidney</a>{% endblock %}</h3>*/
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
