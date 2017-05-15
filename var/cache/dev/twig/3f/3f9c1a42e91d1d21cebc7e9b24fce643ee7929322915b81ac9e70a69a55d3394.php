<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5e8398b7b6d706575966b4fadc774e41d6462910f5c66788d6916fdc4331e3d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6702ff4f7a83fe622ccf98ab4bef702d64e7809f7061dd55cb30e7d08ff0b203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6702ff4f7a83fe622ccf98ab4bef702d64e7809f7061dd55cb30e7d08ff0b203->enter($__internal_6702ff4f7a83fe622ccf98ab4bef702d64e7809f7061dd55cb30e7d08ff0b203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_90b6a3aacc403e863ba812f78f3dca6b9ad60ccf124935b54e0d7fcd717056a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b6a3aacc403e863ba812f78f3dca6b9ad60ccf124935b54e0d7fcd717056a2->enter($__internal_90b6a3aacc403e863ba812f78f3dca6b9ad60ccf124935b54e0d7fcd717056a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6702ff4f7a83fe622ccf98ab4bef702d64e7809f7061dd55cb30e7d08ff0b203->leave($__internal_6702ff4f7a83fe622ccf98ab4bef702d64e7809f7061dd55cb30e7d08ff0b203_prof);

        
        $__internal_90b6a3aacc403e863ba812f78f3dca6b9ad60ccf124935b54e0d7fcd717056a2->leave($__internal_90b6a3aacc403e863ba812f78f3dca6b9ad60ccf124935b54e0d7fcd717056a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1a26f6b347261709c81edb2f1d631f2303cd9c3241642d3f565ac46d235e54e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a26f6b347261709c81edb2f1d631f2303cd9c3241642d3f565ac46d235e54e3->enter($__internal_1a26f6b347261709c81edb2f1d631f2303cd9c3241642d3f565ac46d235e54e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0f0f23e0659cb7eca892f8a996eebead15763e483e56c0da894ceca093b9f91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0f23e0659cb7eca892f8a996eebead15763e483e56c0da894ceca093b9f91c->enter($__internal_0f0f23e0659cb7eca892f8a996eebead15763e483e56c0da894ceca093b9f91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0f0f23e0659cb7eca892f8a996eebead15763e483e56c0da894ceca093b9f91c->leave($__internal_0f0f23e0659cb7eca892f8a996eebead15763e483e56c0da894ceca093b9f91c_prof);

        
        $__internal_1a26f6b347261709c81edb2f1d631f2303cd9c3241642d3f565ac46d235e54e3->leave($__internal_1a26f6b347261709c81edb2f1d631f2303cd9c3241642d3f565ac46d235e54e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_01c891a8b3e977319efc8b1a76c2aa384a0749dca3a3517546115bc36c34ecee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c891a8b3e977319efc8b1a76c2aa384a0749dca3a3517546115bc36c34ecee->enter($__internal_01c891a8b3e977319efc8b1a76c2aa384a0749dca3a3517546115bc36c34ecee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c9161447600444873dabfa24ca5af01edc2d6030493e49e52175867681eed7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9161447600444873dabfa24ca5af01edc2d6030493e49e52175867681eed7d0->enter($__internal_c9161447600444873dabfa24ca5af01edc2d6030493e49e52175867681eed7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9161447600444873dabfa24ca5af01edc2d6030493e49e52175867681eed7d0->leave($__internal_c9161447600444873dabfa24ca5af01edc2d6030493e49e52175867681eed7d0_prof);

        
        $__internal_01c891a8b3e977319efc8b1a76c2aa384a0749dca3a3517546115bc36c34ecee->leave($__internal_01c891a8b3e977319efc8b1a76c2aa384a0749dca3a3517546115bc36c34ecee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e14736f2563c7501cd8ea7cbefee8daf7550390f30a1e19416fc778c1be42c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14736f2563c7501cd8ea7cbefee8daf7550390f30a1e19416fc778c1be42c11->enter($__internal_e14736f2563c7501cd8ea7cbefee8daf7550390f30a1e19416fc778c1be42c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3421562aa56f26e4703df993f3a215a097f82b7386c2523bbde80d0768fdf623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3421562aa56f26e4703df993f3a215a097f82b7386c2523bbde80d0768fdf623->enter($__internal_3421562aa56f26e4703df993f3a215a097f82b7386c2523bbde80d0768fdf623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3421562aa56f26e4703df993f3a215a097f82b7386c2523bbde80d0768fdf623->leave($__internal_3421562aa56f26e4703df993f3a215a097f82b7386c2523bbde80d0768fdf623_prof);

        
        $__internal_e14736f2563c7501cd8ea7cbefee8daf7550390f30a1e19416fc778c1be42c11->leave($__internal_e14736f2563c7501cd8ea7cbefee8daf7550390f30a1e19416fc778c1be42c11_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\krr\\kr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
