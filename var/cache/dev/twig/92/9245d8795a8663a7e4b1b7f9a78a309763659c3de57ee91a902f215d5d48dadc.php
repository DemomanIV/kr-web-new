<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_03480c688cc7c510e2f89df2fbc168f3f8ab99f352326bda75a7eb717c107531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c3779287cd155619bc8cc8a26bd9910d8b58016bba739ed60140bd5d9125660b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3779287cd155619bc8cc8a26bd9910d8b58016bba739ed60140bd5d9125660b->enter($__internal_c3779287cd155619bc8cc8a26bd9910d8b58016bba739ed60140bd5d9125660b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d01e3ea678810a74e642c6726c183ba96078742313ab0cbc90c52a77f7f7acbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01e3ea678810a74e642c6726c183ba96078742313ab0cbc90c52a77f7f7acbb->enter($__internal_d01e3ea678810a74e642c6726c183ba96078742313ab0cbc90c52a77f7f7acbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3779287cd155619bc8cc8a26bd9910d8b58016bba739ed60140bd5d9125660b->leave($__internal_c3779287cd155619bc8cc8a26bd9910d8b58016bba739ed60140bd5d9125660b_prof);

        
        $__internal_d01e3ea678810a74e642c6726c183ba96078742313ab0cbc90c52a77f7f7acbb->leave($__internal_d01e3ea678810a74e642c6726c183ba96078742313ab0cbc90c52a77f7f7acbb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_50477e77f995f19a47a36a84bb51ba87a994627859c1f8c3f32b4b62cae38945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50477e77f995f19a47a36a84bb51ba87a994627859c1f8c3f32b4b62cae38945->enter($__internal_50477e77f995f19a47a36a84bb51ba87a994627859c1f8c3f32b4b62cae38945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b564d2f55e8caea33175268194d2a473d53a67b2d929e009a36e0cc75f368af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b564d2f55e8caea33175268194d2a473d53a67b2d929e009a36e0cc75f368af->enter($__internal_7b564d2f55e8caea33175268194d2a473d53a67b2d929e009a36e0cc75f368af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7b564d2f55e8caea33175268194d2a473d53a67b2d929e009a36e0cc75f368af->leave($__internal_7b564d2f55e8caea33175268194d2a473d53a67b2d929e009a36e0cc75f368af_prof);

        
        $__internal_50477e77f995f19a47a36a84bb51ba87a994627859c1f8c3f32b4b62cae38945->leave($__internal_50477e77f995f19a47a36a84bb51ba87a994627859c1f8c3f32b4b62cae38945_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ffde97d3880ee677933854b2b815c9fc3c4cef75923a57950cdb7b3151b7d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ffde97d3880ee677933854b2b815c9fc3c4cef75923a57950cdb7b3151b7d29->enter($__internal_4ffde97d3880ee677933854b2b815c9fc3c4cef75923a57950cdb7b3151b7d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3450f75a9a2567c763c1f13c5e5aa589995f7331b6546c4f70054c7882197b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3450f75a9a2567c763c1f13c5e5aa589995f7331b6546c4f70054c7882197b37->enter($__internal_3450f75a9a2567c763c1f13c5e5aa589995f7331b6546c4f70054c7882197b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3450f75a9a2567c763c1f13c5e5aa589995f7331b6546c4f70054c7882197b37->leave($__internal_3450f75a9a2567c763c1f13c5e5aa589995f7331b6546c4f70054c7882197b37_prof);

        
        $__internal_4ffde97d3880ee677933854b2b815c9fc3c4cef75923a57950cdb7b3151b7d29->leave($__internal_4ffde97d3880ee677933854b2b815c9fc3c4cef75923a57950cdb7b3151b7d29_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_98afe62fff5570c97ce5af47c250e9e329ada3e4d111d3867653445761cc0e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98afe62fff5570c97ce5af47c250e9e329ada3e4d111d3867653445761cc0e35->enter($__internal_98afe62fff5570c97ce5af47c250e9e329ada3e4d111d3867653445761cc0e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9fa4effd64d13af83e7c61057f2d73928aafd651193884887a88b8f05b0dd8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa4effd64d13af83e7c61057f2d73928aafd651193884887a88b8f05b0dd8bb->enter($__internal_9fa4effd64d13af83e7c61057f2d73928aafd651193884887a88b8f05b0dd8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_9fa4effd64d13af83e7c61057f2d73928aafd651193884887a88b8f05b0dd8bb->leave($__internal_9fa4effd64d13af83e7c61057f2d73928aafd651193884887a88b8f05b0dd8bb_prof);

        
        $__internal_98afe62fff5570c97ce5af47c250e9e329ada3e4d111d3867653445761cc0e35->leave($__internal_98afe62fff5570c97ce5af47c250e9e329ada3e4d111d3867653445761cc0e35_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\krr\\kr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
