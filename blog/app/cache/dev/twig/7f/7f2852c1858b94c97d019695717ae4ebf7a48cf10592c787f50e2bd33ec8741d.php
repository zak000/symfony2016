<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d806bd846cd8ad5f9b1874a86b1b1ed7569b1ad62763503ddab51d3ba7749e51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f808977c81715a6ff4f202078b78ba1a5360e0ce2062ff202bf17fc04282a78 = $this->env->getExtension("native_profiler");
        $__internal_1f808977c81715a6ff4f202078b78ba1a5360e0ce2062ff202bf17fc04282a78->enter($__internal_1f808977c81715a6ff4f202078b78ba1a5360e0ce2062ff202bf17fc04282a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1f808977c81715a6ff4f202078b78ba1a5360e0ce2062ff202bf17fc04282a78->leave($__internal_1f808977c81715a6ff4f202078b78ba1a5360e0ce2062ff202bf17fc04282a78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
