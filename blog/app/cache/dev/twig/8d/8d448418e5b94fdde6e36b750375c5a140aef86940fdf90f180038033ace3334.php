<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_aea8e216503b1223cf4959bcf9644e014b4de3631f6bf9413a7a46f3f0deb5e3 extends Twig_Template
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
        $__internal_f0f3e2f4ea9dd289b57dfc2697e24c499455873a094d954f22f8a9bec8333f34 = $this->env->getExtension("native_profiler");
        $__internal_f0f3e2f4ea9dd289b57dfc2697e24c499455873a094d954f22f8a9bec8333f34->enter($__internal_f0f3e2f4ea9dd289b57dfc2697e24c499455873a094d954f22f8a9bec8333f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f0f3e2f4ea9dd289b57dfc2697e24c499455873a094d954f22f8a9bec8333f34->leave($__internal_f0f3e2f4ea9dd289b57dfc2697e24c499455873a094d954f22f8a9bec8333f34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
