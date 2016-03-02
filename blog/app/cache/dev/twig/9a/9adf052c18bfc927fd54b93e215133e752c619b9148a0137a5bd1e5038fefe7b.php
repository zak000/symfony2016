<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a9e051738f2f75ca4e4cc34b1f28523c910cc02c4ed9b7a22c5f04e7fdd5de75 extends Twig_Template
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
        $__internal_29b5bbf3940d7bdfaf82ecbc209f43f7e7ef9819c67841b00dcef5805696aa6e = $this->env->getExtension("native_profiler");
        $__internal_29b5bbf3940d7bdfaf82ecbc209f43f7e7ef9819c67841b00dcef5805696aa6e->enter($__internal_29b5bbf3940d7bdfaf82ecbc209f43f7e7ef9819c67841b00dcef5805696aa6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_29b5bbf3940d7bdfaf82ecbc209f43f7e7ef9819c67841b00dcef5805696aa6e->leave($__internal_29b5bbf3940d7bdfaf82ecbc209f43f7e7ef9819c67841b00dcef5805696aa6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
