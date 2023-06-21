<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* dashboard/index.html.twig */
class __TwigTemplate_cfbdbe03f612d487450159559ccf7905 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello DashboardController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 cursor\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "                <div class=\"bg-white rounded p-3 my-3\"  onclick=\"window.location.href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Ver-Post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "'\">
                    <div class=\"d-flex bd-highlight\">
                        <div class=\"p-2 flex-grow-1 bd-highlight\">
                            <h3>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titulo", [], "any", false, false, false, 14), "html", null, true);
            echo "</h3>
                            <div class=\"my-3 bg-yellow\"> <i class=\"fa fa-user\"></i><strong> Creado por ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</strong></div>
                            <div class=\" bg-green\"><i class=\"far fa-clock\"></i> <strong>Fecha de publicación: ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "fecha_publicacion", [], "any", false, false, false, 16)), "html", null, true);
            echo "</strong></div>
                        </div>
                        <div class=\"p-2 bd-highlight\">
                            <div class=\"align-self-center\">
                                <img class=\"rounded\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, $context["post"], "foto", [], "any", false, false, false, 20))), "html", null, true);
            echo "\" width=\"150px\">
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div>
            <div class=\"col-md-4\">
                <div class=\"bg-white rounded p-3 my-3\">
                    <h4>Comentarios</h4>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comentarios"]) || array_key_exists("comentarios", $context) ? $context["comentarios"] : (function () { throw new RuntimeError('Variable "comentarios" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
            // line 31
            echo "                        <div class=\"bg-white my-2\">
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("VerPost", ["id" => twig_get_attribute($this->env, $this->source, $context["comentario"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comentario"], "titulo", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </div>
            </div>
        </div>
    </div>
    <div class=\"d-flex justify-content-center\">
        <div class=\"navigation\">
            ";
        // line 41
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 41, $this->source); })()));
        echo "
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 41,  158 => 35,  147 => 32,  144 => 31,  140 => 30,  134 => 26,  122 => 20,  115 => 16,  111 => 15,  107 => 14,  100 => 11,  96 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello DashboardController!{% endblock %}

{% block body %}
    {{ parent() }}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 cursor\">
                {% for post in pagination %}
                <div class=\"bg-white rounded p-3 my-3\"  onclick=\"window.location.href='{{ path('Ver-Post',{id:post.id}) }}'\">
                    <div class=\"d-flex bd-highlight\">
                        <div class=\"p-2 flex-grow-1 bd-highlight\">
                            <h3>{{post.titulo}}</h3>
                            <div class=\"my-3 bg-yellow\"> <i class=\"fa fa-user\"></i><strong> Creado por {{post.name}}</strong></div>
                            <div class=\" bg-green\"><i class=\"far fa-clock\"></i> <strong>Fecha de publicación: {{ post.fecha_publicacion | date }}</strong></div>
                        </div>
                        <div class=\"p-2 bd-highlight\">
                            <div class=\"align-self-center\">
                                <img class=\"rounded\" src=\"{{ asset('uploads/photos/'~post.foto) }}\" width=\"150px\">
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
</div>
            <div class=\"col-md-4\">
                <div class=\"bg-white rounded p-3 my-3\">
                    <h4>Comentarios</h4>
                    {% for comentario in comentarios %}
                        <div class=\"bg-white my-2\">
                            <a href=\"{{ path('VerPost',{id:comentario.id}) }}\">{{ comentario.titulo }}</a>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
    <div class=\"d-flex justify-content-center\">
        <div class=\"navigation\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </div>

{% endblock %}", "dashboard/index.html.twig", "C:\\xampp\\htdocs\\p_proyecto\\templates\\dashboard\\index.html.twig");
    }
}
