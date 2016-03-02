<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_71a86e9d447dd650fca1646ed0cfa7912e755367b60cb6fc1c3a1558b6251339 extends Twig_Template
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
        $__internal_6a28769e5dc1d9529ba407df6b4692a1250d2a44e3225824207d87b9644c53f5 = $this->env->getExtension("native_profiler");
        $__internal_6a28769e5dc1d9529ba407df6b4692a1250d2a44e3225824207d87b9644c53f5->enter($__internal_6a28769e5dc1d9529ba407df6b4692a1250d2a44e3225824207d87b9644c53f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6a28769e5dc1d9529ba407df6b4692a1250d2a44e3225824207d87b9644c53f5->leave($__internal_6a28769e5dc1d9529ba407df6b4692a1250d2a44e3225824207d87b9644c53f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
