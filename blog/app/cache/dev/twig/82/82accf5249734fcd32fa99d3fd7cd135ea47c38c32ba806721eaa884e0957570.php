<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b6ecd58e206b6b0c44d8fd2699273c4b4933bf894f82c1477c40c7197fdd8cea extends Twig_Template
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
        $__internal_c49ffc79c75d392608937a9c7ba93506b2dc2a39a3a9055732a4175fd81ef780 = $this->env->getExtension("native_profiler");
        $__internal_c49ffc79c75d392608937a9c7ba93506b2dc2a39a3a9055732a4175fd81ef780->enter($__internal_c49ffc79c75d392608937a9c7ba93506b2dc2a39a3a9055732a4175fd81ef780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c49ffc79c75d392608937a9c7ba93506b2dc2a39a3a9055732a4175fd81ef780->leave($__internal_c49ffc79c75d392608937a9c7ba93506b2dc2a39a3a9055732a4175fd81ef780_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
