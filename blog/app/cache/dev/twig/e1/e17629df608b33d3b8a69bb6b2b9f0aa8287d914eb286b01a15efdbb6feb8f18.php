<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2ba35ec6626b47894f973cd6a89e54ff495c9316793e21ab9358d89fcccd0c64 extends Twig_Template
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
        $__internal_883b4a88fbd10de274d25e44b092ba1a311999916e6b47520600bb5c78ce3ee9 = $this->env->getExtension("native_profiler");
        $__internal_883b4a88fbd10de274d25e44b092ba1a311999916e6b47520600bb5c78ce3ee9->enter($__internal_883b4a88fbd10de274d25e44b092ba1a311999916e6b47520600bb5c78ce3ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_883b4a88fbd10de274d25e44b092ba1a311999916e6b47520600bb5c78ce3ee9->leave($__internal_883b4a88fbd10de274d25e44b092ba1a311999916e6b47520600bb5c78ce3ee9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
