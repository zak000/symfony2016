<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_89aca3edf9923e98ccfe2b8c113acfbb4c604fec6654a812a933f9534f36ee7c extends Twig_Template
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
        $__internal_80466a6ff05160e16269fa24f800e9456503517f47875da456905c57c25b9972 = $this->env->getExtension("native_profiler");
        $__internal_80466a6ff05160e16269fa24f800e9456503517f47875da456905c57c25b9972->enter($__internal_80466a6ff05160e16269fa24f800e9456503517f47875da456905c57c25b9972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_80466a6ff05160e16269fa24f800e9456503517f47875da456905c57c25b9972->leave($__internal_80466a6ff05160e16269fa24f800e9456503517f47875da456905c57c25b9972_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
