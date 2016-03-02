<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_63f34752a2638bce8b1deaa36bf1849f14faeb91ba3b1fb44f66b26f879d74d0 extends Twig_Template
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
        $__internal_f3d86e4ed5bd847c9c9916864656e724a0994319ace1b616855ecfa9edc47a5e = $this->env->getExtension("native_profiler");
        $__internal_f3d86e4ed5bd847c9c9916864656e724a0994319ace1b616855ecfa9edc47a5e->enter($__internal_f3d86e4ed5bd847c9c9916864656e724a0994319ace1b616855ecfa9edc47a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f3d86e4ed5bd847c9c9916864656e724a0994319ace1b616855ecfa9edc47a5e->leave($__internal_f3d86e4ed5bd847c9c9916864656e724a0994319ace1b616855ecfa9edc47a5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
