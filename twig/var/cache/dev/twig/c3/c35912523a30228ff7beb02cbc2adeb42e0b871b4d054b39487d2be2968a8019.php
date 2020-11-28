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

/* default/paiement.html.twig */
class __TwigTemplate_5bff95ecbcb79c873980c1bd1b8f3314c9810a503fedc81974f30fab5645845a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/paiement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/paiement.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "    </head>

    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "        <!-- Required meta tags -->
        <meta charset=\"UTF-8\" />

        <!-- Bootstrap CSS and CSS FILE -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"css/paiement.css\" />

        <!-- TITLE -->
        <title>SPEAT</title>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "        <!-- Header -->
        <header class=\"page-header\">
            ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "        </header>

        <!-- Code à améliorer -->
        <section>
            ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "        </section>

        <!-- Footer -->
        <footer class=\"static-bar\">
            ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 78
        echo "        </footer>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "            <div class=\"trigger-menu-wrapper\">
                <a href=\"panier.html\">
                    <img src=\"img/arrow.png\" id=\"arrow\" alt=\"back png\" />
                </a>
                <img class=\"logo\" src=\"img/logoS.png\" id=\"lS\" alt=\"logo speat\" />
            </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "            <div class=\"static-content\">
                <img class=\"logo\" src=\"img/logoR.png\" id=\"lR\" alt=\"snack logo\" />
                <img class=\"logo\" src=\"img/logoC.png\" id=\"lC\" alt=\"command logo\" />
                <p align=\"center\" id=\"com\">MA COMMANDE</p>
                <img src=\"img/line.png\" id=\"l1\" alt=\"lign\" />
            </div>

            <div class=\"no-static-content\">
                <p id=\"t1\">TACOS</p>
                <p id=\"ing1\">* Oignons x2, Tomates, Mayonnaise</p>
                <p id=\"ing2\">x2</p>
                <img src=\"img/close.png\" id=\"del1\" alt=\"close button\" />
                <img src=\"img/tacos.png\" id=\"tacos\" alt=\"tacos png\" />
                <p id=\"pr1\" align=\"center\">4,65€</p>
                <p id=\"sp1\" align=\"center\">Total suppléments : 0,10€</p>
                <img src=\"img/line.png\" id=\"l2\" alt=\"lign\" />
                <p id=\"t2\">CHEESEBURGER</p>
                <img src=\"img/close.png\" id=\"del2\" alt=\"close button\" />
                <img src=\"img/burger.png\" id=\"chsbrgr\" alt=\"cheeseburger png\" />
                <p id=\"pr2\" align=\"center\">3,35€</p>
                <p id=\"sp2\" align=\"center\">Total suppléments : 0,00€</p>
                <img src=\"img/line.png\" id=\"l3\" alt=\"line\" />
                <p id=\"total\">Total de la commande : <span id=\"tpr\">8,00€</span></p>
            </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 64
        echo "            <img src=\"img/bigline.png\" id=\"l4\" alt=\"lign\" />
            <p id=\"paymt_m\">MODE DE PAIEMENT</p>
            <a href=\"#\">
                <div class=\"money-bar\">
                    <img class=\"logo\" src=\"img/money.png\" id=\"money\" alt=\"money png\" />
                </div>
            </a>

            <a href=\"#\">
                <div class=\"bc-bar\">
                    <img class=\"logo\" src=\"img/bc.png\" id=\"bc\" alt=\"bank card\" />
                </div>
            </a>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/paiement.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  226 => 64,  216 => 63,  182 => 34,  172 => 33,  156 => 22,  146 => 21,  135 => 78,  133 => 63,  127 => 59,  125 => 33,  119 => 29,  117 => 21,  113 => 19,  103 => 18,  84 => 5,  74 => 4,  62 => 80,  60 => 18,  55 => 15,  53 => 4,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        {% block head %}
        <!-- Required meta tags -->
        <meta charset=\"UTF-8\" />

        <!-- Bootstrap CSS and CSS FILE -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"css/paiement.css\" />

        <!-- TITLE -->
        <title>SPEAT</title>
        {% endblock head %}
    </head>

    <body>
        {% block body %}
        <!-- Header -->
        <header class=\"page-header\">
            {% block header %}
            <div class=\"trigger-menu-wrapper\">
                <a href=\"panier.html\">
                    <img src=\"img/arrow.png\" id=\"arrow\" alt=\"back png\" />
                </a>
                <img class=\"logo\" src=\"img/logoS.png\" id=\"lS\" alt=\"logo speat\" />
            </div>
            {% endblock header %}
        </header>

        <!-- Code à améliorer -->
        <section>
            {% block content %}
            <div class=\"static-content\">
                <img class=\"logo\" src=\"img/logoR.png\" id=\"lR\" alt=\"snack logo\" />
                <img class=\"logo\" src=\"img/logoC.png\" id=\"lC\" alt=\"command logo\" />
                <p align=\"center\" id=\"com\">MA COMMANDE</p>
                <img src=\"img/line.png\" id=\"l1\" alt=\"lign\" />
            </div>

            <div class=\"no-static-content\">
                <p id=\"t1\">TACOS</p>
                <p id=\"ing1\">* Oignons x2, Tomates, Mayonnaise</p>
                <p id=\"ing2\">x2</p>
                <img src=\"img/close.png\" id=\"del1\" alt=\"close button\" />
                <img src=\"img/tacos.png\" id=\"tacos\" alt=\"tacos png\" />
                <p id=\"pr1\" align=\"center\">4,65€</p>
                <p id=\"sp1\" align=\"center\">Total suppléments : 0,10€</p>
                <img src=\"img/line.png\" id=\"l2\" alt=\"lign\" />
                <p id=\"t2\">CHEESEBURGER</p>
                <img src=\"img/close.png\" id=\"del2\" alt=\"close button\" />
                <img src=\"img/burger.png\" id=\"chsbrgr\" alt=\"cheeseburger png\" />
                <p id=\"pr2\" align=\"center\">3,35€</p>
                <p id=\"sp2\" align=\"center\">Total suppléments : 0,00€</p>
                <img src=\"img/line.png\" id=\"l3\" alt=\"line\" />
                <p id=\"total\">Total de la commande : <span id=\"tpr\">8,00€</span></p>
            </div>
            {% endblock content %}
        </section>

        <!-- Footer -->
        <footer class=\"static-bar\">
            {% block footer %}
            <img src=\"img/bigline.png\" id=\"l4\" alt=\"lign\" />
            <p id=\"paymt_m\">MODE DE PAIEMENT</p>
            <a href=\"#\">
                <div class=\"money-bar\">
                    <img class=\"logo\" src=\"img/money.png\" id=\"money\" alt=\"money png\" />
                </div>
            </a>

            <a href=\"#\">
                <div class=\"bc-bar\">
                    <img class=\"logo\" src=\"img/bc.png\" id=\"bc\" alt=\"bank card\" />
                </div>
            </a>
            {% endblock footer %}
        </footer>
        {% endblock body %}
    </body>
</html>
", "default/paiement.html.twig", "/home/rilong/speat2/templates/default/paiement.html.twig");
    }
}
