<?php

/* @BloggerBlog/Bidd/index.html.twig */
class __TwigTemplate_02e647f8f9c81674d19f0f006d67e32ac6b423b3f57b2bf6fa64d72bb55aa6a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@BloggerBlog/Bidd/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5266c876d434f4ce7b1835dad2cea0b48b5557fa8e784399c4bf8a021292077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5266c876d434f4ce7b1835dad2cea0b48b5557fa8e784399c4bf8a021292077->enter($__internal_a5266c876d434f4ce7b1835dad2cea0b48b5557fa8e784399c4bf8a021292077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Bidd/index.html.twig"));

        $__internal_bc746125a44b6b5decb20131a1147b3d56ca43a1e0cbbb42f8a0e36b3df67237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc746125a44b6b5decb20131a1147b3d56ca43a1e0cbbb42f8a0e36b3df67237->enter($__internal_bc746125a44b6b5decb20131a1147b3d56ca43a1e0cbbb42f8a0e36b3df67237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Bidd/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5266c876d434f4ce7b1835dad2cea0b48b5557fa8e784399c4bf8a021292077->leave($__internal_a5266c876d434f4ce7b1835dad2cea0b48b5557fa8e784399c4bf8a021292077_prof);

        
        $__internal_bc746125a44b6b5decb20131a1147b3d56ca43a1e0cbbb42f8a0e36b3df67237->leave($__internal_bc746125a44b6b5decb20131a1147b3d56ca43a1e0cbbb42f8a0e36b3df67237_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d289fb1a47247878194be53c2a70c04823c1b1ef30682429c96f76da4e5e2095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d289fb1a47247878194be53c2a70c04823c1b1ef30682429c96f76da4e5e2095->enter($__internal_d289fb1a47247878194be53c2a70c04823c1b1ef30682429c96f76da4e5e2095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_730aeceddd9e03f7d7a66dc2d8883628ae8cf7af61b42e11d3ccc38aac41f76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730aeceddd9e03f7d7a66dc2d8883628ae8cf7af61b42e11d3ccc38aac41f76b->enter($__internal_730aeceddd9e03f7d7a66dc2d8883628ae8cf7af61b42e11d3ccc38aac41f76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h1>Заявки</h1>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>ФИО</th>
                    <th>Оценка 1</th>
                    <th>Оценка 2</th>
                    <th>Оценка 3</th>
                    <th>Специальность</th>
                    <th>Редактирование</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bidds"]) || array_key_exists("bidds", $context) ? $context["bidds"] : (function () { throw new Twig_Error_Runtime('Variable "bidds" does not exist.', 20, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bidd"]) {
            // line 21
            echo "                <tr>
                    <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "fio", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "mark1", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "mark2", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "mark3", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "specialty", array()), "title", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "id", array()))), "html", null, true);
            echo "\">Просмотреть</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "id", array()))), "html", null, true);
            echo "\">Редактировать</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bidd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
        </table>
        <hr>
        <h3><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_prepod");
        echo "\">Назад в панель преподавателя</a></h3>
    </div>
";
        
        $__internal_730aeceddd9e03f7d7a66dc2d8883628ae8cf7af61b42e11d3ccc38aac41f76b->leave($__internal_730aeceddd9e03f7d7a66dc2d8883628ae8cf7af61b42e11d3ccc38aac41f76b_prof);

        
        $__internal_d289fb1a47247878194be53c2a70c04823c1b1ef30682429c96f76da4e5e2095->leave($__internal_d289fb1a47247878194be53c2a70c04823c1b1ef30682429c96f76da4e5e2095_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Bidd/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  121 => 40,  109 => 34,  103 => 31,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <h1>Заявки</h1>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>ФИО</th>
                    <th>Оценка 1</th>
                    <th>Оценка 2</th>
                    <th>Оценка 3</th>
                    <th>Специальность</th>
                    <th>Редактирование</th>
                </tr>
            </thead>
            <tbody>
            {% for bidd in bidds %}
                <tr>
                    <td><a href=\"{{ path('blogger_blog_bidd_show', { 'id': bidd.id }) }}\">{{ bidd.id }}</a></td>
                    <td>{{ bidd.fio }}</td>
                    <td>{{ bidd.mark1 }}</td>
                    <td>{{ bidd.mark2 }}</td>
                    <td>{{ bidd.mark3 }}</td>
                    <td>{{ bidd.specialty.title }}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('blogger_blog_bidd_show', { 'id': bidd.id }) }}\">Просмотреть</a>
                            </li>
                            <li>
                                <a href=\"{{ path('blogger_blog_bidd_edit', { 'id': bidd.id }) }}\">Редактировать</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        <hr>
        <h3><a href=\"{{ path('blogger_blog_prepod') }}\">Назад в панель преподавателя</a></h3>
    </div>
{% endblock %}
", "@BloggerBlog/Bidd/index.html.twig", "D:\\krr\\kr\\src\\Blogger\\BlogBundle\\Resources\\views\\Bidd\\index.html.twig");
    }
}
