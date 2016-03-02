<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e5749968731603e5c090e0e35d80d473400ad699f528cf24480fa488d476da1b extends Twig_Template
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
        $__internal_f8baf0b142441ab56aa3ce049e92ab129cdc59081be00f7709f26076d4db01db = $this->env->getExtension("native_profiler");
        $__internal_f8baf0b142441ab56aa3ce049e92ab129cdc59081be00f7709f26076d4db01db->enter($__internal_f8baf0b142441ab56aa3ce049e92ab129cdc59081be00f7709f26076d4db01db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f8baf0b142441ab56aa3ce049e92ab129cdc59081be00f7709f26076d4db01db->leave($__internal_f8baf0b142441ab56aa3ce049e92ab129cdc59081be00f7709f26076d4db01db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
