<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ebb23f904d5c304ba1364d9efb266ff6d2fc7100f38efedb3a94985ac17e34e2 extends Twig_Template
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
        $__internal_13410569926292fac82a8aee1e9526800fb95d71edcb9a53f233b5ace7c8013b = $this->env->getExtension("native_profiler");
        $__internal_13410569926292fac82a8aee1e9526800fb95d71edcb9a53f233b5ace7c8013b->enter($__internal_13410569926292fac82a8aee1e9526800fb95d71edcb9a53f233b5ace7c8013b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_13410569926292fac82a8aee1e9526800fb95d71edcb9a53f233b5ace7c8013b->leave($__internal_13410569926292fac82a8aee1e9526800fb95d71edcb9a53f233b5ace7c8013b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
