<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_843f45fd893da272003a61a587ae52d55b66ec4f2a4a3acd904776651d98b5f4 extends Twig_Template
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
        $__internal_f7c89b66631eb512fb29d4cbb9a710cc38e0364a0166c88ae5fc124aa63ff8ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c89b66631eb512fb29d4cbb9a710cc38e0364a0166c88ae5fc124aa63ff8ee->enter($__internal_f7c89b66631eb512fb29d4cbb9a710cc38e0364a0166c88ae5fc124aa63ff8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_7e0d8a5f2544b0cd56908b3335245666bd6fc9d73784aba18fe2fb349b44d397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0d8a5f2544b0cd56908b3335245666bd6fc9d73784aba18fe2fb349b44d397->enter($__internal_7e0d8a5f2544b0cd56908b3335245666bd6fc9d73784aba18fe2fb349b44d397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f7c89b66631eb512fb29d4cbb9a710cc38e0364a0166c88ae5fc124aa63ff8ee->leave($__internal_f7c89b66631eb512fb29d4cbb9a710cc38e0364a0166c88ae5fc124aa63ff8ee_prof);

        
        $__internal_7e0d8a5f2544b0cd56908b3335245666bd6fc9d73784aba18fe2fb349b44d397->leave($__internal_7e0d8a5f2544b0cd56908b3335245666bd6fc9d73784aba18fe2fb349b44d397_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "D:\\krr\\kr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
