<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0ce7a9508e87c66215c50336484e7a73ef4421ac4ba3b798d2df8c3f3f3375e6 extends Twig_Template
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
        $__internal_a65032904d8f89253cc192383a9726858cb31bb8d79dd352f3fab1b2e40abf8a = $this->env->getExtension("native_profiler");
        $__internal_a65032904d8f89253cc192383a9726858cb31bb8d79dd352f3fab1b2e40abf8a->enter($__internal_a65032904d8f89253cc192383a9726858cb31bb8d79dd352f3fab1b2e40abf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a65032904d8f89253cc192383a9726858cb31bb8d79dd352f3fab1b2e40abf8a->leave($__internal_a65032904d8f89253cc192383a9726858cb31bb8d79dd352f3fab1b2e40abf8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
