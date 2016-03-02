<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_36f38602f2e6c7afd16edc649fb6fd4caf2a01fdff67ba0230000d59dad0b3bb extends Twig_Template
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
        $__internal_360614fc4b1ffb15b84ae3207e7776931cb2466aefb2355b6e28ee0afb111b78 = $this->env->getExtension("native_profiler");
        $__internal_360614fc4b1ffb15b84ae3207e7776931cb2466aefb2355b6e28ee0afb111b78->enter($__internal_360614fc4b1ffb15b84ae3207e7776931cb2466aefb2355b6e28ee0afb111b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_360614fc4b1ffb15b84ae3207e7776931cb2466aefb2355b6e28ee0afb111b78->leave($__internal_360614fc4b1ffb15b84ae3207e7776931cb2466aefb2355b6e28ee0afb111b78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
