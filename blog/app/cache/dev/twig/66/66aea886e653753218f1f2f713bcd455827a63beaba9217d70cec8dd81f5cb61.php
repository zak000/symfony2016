<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ec013898fef307d4f85012bd1b5e8416243c9844159a643e8c8fb110fec7443b extends Twig_Template
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
        $__internal_3956bfb504fff66faeefb2317ac87b3d218dc57c11e65294095a77ffe2b21d93 = $this->env->getExtension("native_profiler");
        $__internal_3956bfb504fff66faeefb2317ac87b3d218dc57c11e65294095a77ffe2b21d93->enter($__internal_3956bfb504fff66faeefb2317ac87b3d218dc57c11e65294095a77ffe2b21d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3956bfb504fff66faeefb2317ac87b3d218dc57c11e65294095a77ffe2b21d93->leave($__internal_3956bfb504fff66faeefb2317ac87b3d218dc57c11e65294095a77ffe2b21d93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
