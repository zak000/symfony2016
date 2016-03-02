<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a3b52fbe70ca408f13bdd7e6528593d81178ea05e788020c7b53b4088b952f1b extends Twig_Template
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
        $__internal_55bd85afefad03cceeb5be71ac415308466c3d0abb5ac5c3d9ecbc423398de2d = $this->env->getExtension("native_profiler");
        $__internal_55bd85afefad03cceeb5be71ac415308466c3d0abb5ac5c3d9ecbc423398de2d->enter($__internal_55bd85afefad03cceeb5be71ac415308466c3d0abb5ac5c3d9ecbc423398de2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_55bd85afefad03cceeb5be71ac415308466c3d0abb5ac5c3d9ecbc423398de2d->leave($__internal_55bd85afefad03cceeb5be71ac415308466c3d0abb5ac5c3d9ecbc423398de2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
