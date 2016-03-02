<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_67410aa75f07aaba21aa295ea0e0d04ad598c9caa484d5d9a456aa681e0886d1 extends Twig_Template
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
        $__internal_9ed6f561c4852152bd3a17aeb62202510df2a533ec70baa50e96af05f4467f5e = $this->env->getExtension("native_profiler");
        $__internal_9ed6f561c4852152bd3a17aeb62202510df2a533ec70baa50e96af05f4467f5e->enter($__internal_9ed6f561c4852152bd3a17aeb62202510df2a533ec70baa50e96af05f4467f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9ed6f561c4852152bd3a17aeb62202510df2a533ec70baa50e96af05f4467f5e->leave($__internal_9ed6f561c4852152bd3a17aeb62202510df2a533ec70baa50e96af05f4467f5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
