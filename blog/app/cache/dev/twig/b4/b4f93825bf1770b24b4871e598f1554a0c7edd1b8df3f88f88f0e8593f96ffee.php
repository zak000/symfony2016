<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_eb15e2a2dcbd35eddb86db9bb3350079b3f1369bfb3665ffcd86eac9fd765828 extends Twig_Template
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
        $__internal_974e893459320ab7c0cfc309a6224584b2415978f1bff3274b2e75c6c8532e43 = $this->env->getExtension("native_profiler");
        $__internal_974e893459320ab7c0cfc309a6224584b2415978f1bff3274b2e75c6c8532e43->enter($__internal_974e893459320ab7c0cfc309a6224584b2415978f1bff3274b2e75c6c8532e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_974e893459320ab7c0cfc309a6224584b2415978f1bff3274b2e75c6c8532e43->leave($__internal_974e893459320ab7c0cfc309a6224584b2415978f1bff3274b2e75c6c8532e43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
