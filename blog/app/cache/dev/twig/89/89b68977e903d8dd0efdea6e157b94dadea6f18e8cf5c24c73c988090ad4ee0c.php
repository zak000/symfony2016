<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7bc1df7b99c0a08331c725fcaf88047ea9072bf386d2d1cd9fec2b30133bfe4c extends Twig_Template
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
        $__internal_dfaf68bd5194826cf58e83c3c2a9b546c5e8900b4e7faccadcf4c4b0d908bf52 = $this->env->getExtension("native_profiler");
        $__internal_dfaf68bd5194826cf58e83c3c2a9b546c5e8900b4e7faccadcf4c4b0d908bf52->enter($__internal_dfaf68bd5194826cf58e83c3c2a9b546c5e8900b4e7faccadcf4c4b0d908bf52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_dfaf68bd5194826cf58e83c3c2a9b546c5e8900b4e7faccadcf4c4b0d908bf52->leave($__internal_dfaf68bd5194826cf58e83c3c2a9b546c5e8900b4e7faccadcf4c4b0d908bf52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
