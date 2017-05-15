<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5cf45283c8aa082a23c3dc714cd33383b7738088d9448ed72c821ee832905a83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_499b52128dd42a8d1e5ed4e39b8c6bf26904f319e15eedea13c49533c887826f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499b52128dd42a8d1e5ed4e39b8c6bf26904f319e15eedea13c49533c887826f->enter($__internal_499b52128dd42a8d1e5ed4e39b8c6bf26904f319e15eedea13c49533c887826f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a92e3e7768eac1b71a0118ba4e89f8db3946fa16ac151921bee39e363c79c1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92e3e7768eac1b71a0118ba4e89f8db3946fa16ac151921bee39e363c79c1d3->enter($__internal_a92e3e7768eac1b71a0118ba4e89f8db3946fa16ac151921bee39e363c79c1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_499b52128dd42a8d1e5ed4e39b8c6bf26904f319e15eedea13c49533c887826f->leave($__internal_499b52128dd42a8d1e5ed4e39b8c6bf26904f319e15eedea13c49533c887826f_prof);

        
        $__internal_a92e3e7768eac1b71a0118ba4e89f8db3946fa16ac151921bee39e363c79c1d3->leave($__internal_a92e3e7768eac1b71a0118ba4e89f8db3946fa16ac151921bee39e363c79c1d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0f6c7a5283c791fcf1699647ad7dea33b9e730a84367a0c4e2c9e8c476565ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6c7a5283c791fcf1699647ad7dea33b9e730a84367a0c4e2c9e8c476565ac3->enter($__internal_0f6c7a5283c791fcf1699647ad7dea33b9e730a84367a0c4e2c9e8c476565ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2fb869b82bc01a123dcf3d63dbe18b24b14ef6d970e8718696c051b1614cad90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb869b82bc01a123dcf3d63dbe18b24b14ef6d970e8718696c051b1614cad90->enter($__internal_2fb869b82bc01a123dcf3d63dbe18b24b14ef6d970e8718696c051b1614cad90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2fb869b82bc01a123dcf3d63dbe18b24b14ef6d970e8718696c051b1614cad90->leave($__internal_2fb869b82bc01a123dcf3d63dbe18b24b14ef6d970e8718696c051b1614cad90_prof);

        
        $__internal_0f6c7a5283c791fcf1699647ad7dea33b9e730a84367a0c4e2c9e8c476565ac3->leave($__internal_0f6c7a5283c791fcf1699647ad7dea33b9e730a84367a0c4e2c9e8c476565ac3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\krr\\kr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
