<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_90b697657307ff6f00549af946353fd67c9fcf708e80293ccd8a3c74e0c55934 extends Twig_Template
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
        $__internal_eed3c96bc77a084dd94e70e924f656e165fe577fab76740a7833ceacc965fb83 = $this->env->getExtension("native_profiler");
        $__internal_eed3c96bc77a084dd94e70e924f656e165fe577fab76740a7833ceacc965fb83->enter($__internal_eed3c96bc77a084dd94e70e924f656e165fe577fab76740a7833ceacc965fb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_eed3c96bc77a084dd94e70e924f656e165fe577fab76740a7833ceacc965fb83->leave($__internal_eed3c96bc77a084dd94e70e924f656e165fe577fab76740a7833ceacc965fb83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
