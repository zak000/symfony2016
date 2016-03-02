<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5703673a5e03bc043186b58ba97d4da2a87b7cdceeb1e0fc2869f58bef374f93 extends Twig_Template
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
        $__internal_93cb785e962423562151fc7895c93dfe47734d1387748b9a8b6bef07fe79fcee = $this->env->getExtension("native_profiler");
        $__internal_93cb785e962423562151fc7895c93dfe47734d1387748b9a8b6bef07fe79fcee->enter($__internal_93cb785e962423562151fc7895c93dfe47734d1387748b9a8b6bef07fe79fcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_93cb785e962423562151fc7895c93dfe47734d1387748b9a8b6bef07fe79fcee->leave($__internal_93cb785e962423562151fc7895c93dfe47734d1387748b9a8b6bef07fe79fcee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
