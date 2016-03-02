<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_1ed90e5de103e59b1da65b0659914a05cbb95e0d6058334d6a5ae30f5cbef3a3 extends Twig_Template
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
        $__internal_36111499bbec4260d4a5e0fa47a11b2e11f9bd321847dec51541bf76e55d8d0e = $this->env->getExtension("native_profiler");
        $__internal_36111499bbec4260d4a5e0fa47a11b2e11f9bd321847dec51541bf76e55d8d0e->enter($__internal_36111499bbec4260d4a5e0fa47a11b2e11f9bd321847dec51541bf76e55d8d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_36111499bbec4260d4a5e0fa47a11b2e11f9bd321847dec51541bf76e55d8d0e->leave($__internal_36111499bbec4260d4a5e0fa47a11b2e11f9bd321847dec51541bf76e55d8d0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
