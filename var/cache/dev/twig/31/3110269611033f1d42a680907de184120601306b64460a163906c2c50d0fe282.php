<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a2e2426a9b0a5e875e807decc806187c57150618db3945402b49031fcd54ade2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3c16a64560c3e55af65cfe5cddc956cabf4a6da1744141a63a6783056375518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c16a64560c3e55af65cfe5cddc956cabf4a6da1744141a63a6783056375518->enter($__internal_b3c16a64560c3e55af65cfe5cddc956cabf4a6da1744141a63a6783056375518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_de809d9ac6a76aa08f0ffce5190ddd8db6b39c6574461604ff79787118717f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de809d9ac6a76aa08f0ffce5190ddd8db6b39c6574461604ff79787118717f14->enter($__internal_de809d9ac6a76aa08f0ffce5190ddd8db6b39c6574461604ff79787118717f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3c16a64560c3e55af65cfe5cddc956cabf4a6da1744141a63a6783056375518->leave($__internal_b3c16a64560c3e55af65cfe5cddc956cabf4a6da1744141a63a6783056375518_prof);

        
        $__internal_de809d9ac6a76aa08f0ffce5190ddd8db6b39c6574461604ff79787118717f14->leave($__internal_de809d9ac6a76aa08f0ffce5190ddd8db6b39c6574461604ff79787118717f14_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d01f11971585bedc431345fb44d00401307e3551a4d8804ab00317e301e6a71e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01f11971585bedc431345fb44d00401307e3551a4d8804ab00317e301e6a71e->enter($__internal_d01f11971585bedc431345fb44d00401307e3551a4d8804ab00317e301e6a71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_edf55c730d9b04c8f49d4341ade5b1bc74596d3e0b9db65147815c1911e2397f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf55c730d9b04c8f49d4341ade5b1bc74596d3e0b9db65147815c1911e2397f->enter($__internal_edf55c730d9b04c8f49d4341ade5b1bc74596d3e0b9db65147815c1911e2397f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_edf55c730d9b04c8f49d4341ade5b1bc74596d3e0b9db65147815c1911e2397f->leave($__internal_edf55c730d9b04c8f49d4341ade5b1bc74596d3e0b9db65147815c1911e2397f_prof);

        
        $__internal_d01f11971585bedc431345fb44d00401307e3551a4d8804ab00317e301e6a71e->leave($__internal_d01f11971585bedc431345fb44d00401307e3551a4d8804ab00317e301e6a71e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c7778f0f091734c2f736a3a83c66df6173e2a1df369f221ba57ae7bac002d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c7778f0f091734c2f736a3a83c66df6173e2a1df369f221ba57ae7bac002d0c->enter($__internal_2c7778f0f091734c2f736a3a83c66df6173e2a1df369f221ba57ae7bac002d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93dedaa26e8a5a0a0a773ae834aefe8ce4719247f0140f05c07ee4099b22240f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93dedaa26e8a5a0a0a773ae834aefe8ce4719247f0140f05c07ee4099b22240f->enter($__internal_93dedaa26e8a5a0a0a773ae834aefe8ce4719247f0140f05c07ee4099b22240f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_93dedaa26e8a5a0a0a773ae834aefe8ce4719247f0140f05c07ee4099b22240f->leave($__internal_93dedaa26e8a5a0a0a773ae834aefe8ce4719247f0140f05c07ee4099b22240f_prof);

        
        $__internal_2c7778f0f091734c2f736a3a83c66df6173e2a1df369f221ba57ae7bac002d0c->leave($__internal_2c7778f0f091734c2f736a3a83c66df6173e2a1df369f221ba57ae7bac002d0c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f619ac9368ba990c6ec08b751cd7420e37923e2a0f131e313458c69f2d4ed74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f619ac9368ba990c6ec08b751cd7420e37923e2a0f131e313458c69f2d4ed74->enter($__internal_4f619ac9368ba990c6ec08b751cd7420e37923e2a0f131e313458c69f2d4ed74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4480094ba813c4cc7620d0961c275815ef37c499e3cd305a0fcc8b0c7072e829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4480094ba813c4cc7620d0961c275815ef37c499e3cd305a0fcc8b0c7072e829->enter($__internal_4480094ba813c4cc7620d0961c275815ef37c499e3cd305a0fcc8b0c7072e829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4480094ba813c4cc7620d0961c275815ef37c499e3cd305a0fcc8b0c7072e829->leave($__internal_4480094ba813c4cc7620d0961c275815ef37c499e3cd305a0fcc8b0c7072e829_prof);

        
        $__internal_4f619ac9368ba990c6ec08b751cd7420e37923e2a0f131e313458c69f2d4ed74->leave($__internal_4f619ac9368ba990c6ec08b751cd7420e37923e2a0f131e313458c69f2d4ed74_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\krr\\kr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
