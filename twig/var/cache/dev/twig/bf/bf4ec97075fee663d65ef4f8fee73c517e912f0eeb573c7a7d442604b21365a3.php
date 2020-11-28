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

/* default/index.html.twig */
class __TwigTemplate_723317c6c12d3c3303b0c964cab7d51fe68c10a3ea8759f3a5e63fa2359427cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"sticky-top\">
    <div class=\"container-fluid\">
        <div class=\"row justify \" style=\"margin-right: -15px;margin-left: -15px;\">
          <article class=\"col-4\" style=\"margin-top: 3%;\">
            <nav role=\"navigation\" class=\"text-left\">
          <div id=\"menuToggle\" style=\"position: sticky;\">
            <input type=\"checkbox\" />
            <span></span>
            <span></span>
            <span></span>
            <ul id=\"menu\" style=\"padding-right:0;\">
              <div class=\"contenumenu\">
              <a href=\"#\"><li> <p class=\"titre1\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/home.png"), "html", null, true);
        echo "\" > &nbsp;HOME</p></li></a>
              <p class=\"soustexte\"> ";
        // line 17
        echo "Découvre les offres du moment de tes restos préférés";
        echo "</p>
              <a href=\"#\"><li><p class=\"titre1\" ><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/restos.png"), "html", null, true);
        echo "\"> &nbsp; RESTOS</p></li></a>
              <p class=\"soustexte\">";
        // line 19
        echo "Tous les restaurants sont ici";
        echo " </p>
              <a href=\"#\"><li><p class=\"titre1\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/menus.png"), "html", null, true);
        echo "\"> &nbsp; MENUS</p></li></a>
              <p class=\"soustexte\"> ";
        // line 21
        echo "Consulter la carte des menus du resto dans lequel tu te trouves";
        echo " </p>
              <a href=\"#\"><li><p class=\"titre1\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/livraisons.png"), "html", null, true);
        echo "\"> &nbsp;LIVRAISONS</p></li></a>
              <p class=\"soustexte\">";
        // line 23
        echo " Consulter les restos qui ont besoin de livreurs dans l'immédiat ";
        echo "</p>
              <a href=\"#\"><li><p class=\"titre1\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/scan.png"), "html", null, true);
        echo "\"> &nbsp; SCAN</p></li></a>
              <p class=\"soustexte\"> ";
        // line 25
        echo "Scan le QR code situé sur la table";
        echo " </p>
              <a href=\"#\"><li><p class=\"titre1\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/scan.png"), "html", null, true);
        echo "\"> &nbsp; SPEATS</p></li></a>
              <p class=\"soustexte\"> ";
        // line 27
        echo "Voir tous les Speats postés";
        echo " </p>
              <a href=\"#\"><li><p class=\"titre1\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/compte.png"), "html", null, true);
        echo "\"> &nbsp; MON COMPTE</p></li></a>
              <p class=\"soustexte\">";
        // line 29
        echo " Gestion de ton compte utilisateur";
        echo " </p>
            </div>
            </ul>
          </div>
        </nav>
          </article>
          <article class=\"col-4\">
            <a href=\"index.html\"><img class=img-responsive src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" width=\"100%\"></a>
          </article>
          <article class=\"col-4\">
              <button class=\"btn btn-lg btn-outline-primary btn float-right\" type=\"submit\" style=\"padding-top: 0%;padding-bottom: 0%;  margin-top: 1%;font-size: 18px;margin-bottom: 6%;\"><i class=\"fa fa-sign-in\"></i> Login</button>  
          </article>
          <div class=\"container-fluid banniere\">
            <div class=\"row\" style=\"justify-content: center;\">
              <article class=\"col-12\">
                <div class=\"titre\" style=\"  margin-bottom: 11%;\">
                  <p>OFFRES DU MOMENT</p>
                </div>
              </article>
              <article class=\"col-12 \" style=\"margin-top: -14%;\">
                  <form class=\"form-inline my-2 my-lg-0\" style=\"justify-content: center;\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Recherche\" aria-label=\"Search\" style=\"width: auto; height:25px;\">
      <button class=\"btn btn-outline-info my-2 my-sm-0\" type=\"submit\" style=\"border: solid white 1px;  padding-bottom: 0px;  margin-left: 2%;  padding-top: 0;\">Ok</button>
    </form>
              </article>
            </div>
          </div>
        </div>
      </div>
      </div>

<div class=\"container-fluid onglet\">
        <div class=\"row produits\">
          <div class=\"col-6\">
              <div class=\"illustration\">
              <a href=\"composition.html\">  <img src=\"img/Menukebab.png \" style=\"width:150%;\" ></a>
              </div>
            </div>
              <div class=\"col-6\" style=\"text-align: center;\">
              <div class=\"details\">
                <img src=\"img/enK.png\" style=\"width:50%; margin-top:10%;\">
                <div class=\"details2\">
                <h1 class=\"titremenu\"> MENU BURGER + FRITES</h1>
                <div class=\"encadrevert \">
                  <p class=\"line\">
                    7.00€ </p>
                    <p class=\"reduction\">5.00€ </p>
                </div>
              </div>
            </div>
          </div>
</div>
         <div class=\"row geo\">
               <div class=\"col-4 boxverte\">
                  <p class=\"distance\"> à 300 M </p>
                </div>
                <div class=\"col-8\">
                   <p class=\"adresse\"> Adresse ... </p>
               </div>
           </div>
         </div>
<div class=\"container-fluid onglet \">
        <div class=\"row produits\">
          <div class=\"col-6\">
              <div class=\"illustration\">
                <img src=\"img/Menukebab.png \" style=\"width:150%;\" >
              </div>
            </div>
              <div class=\"col-6\" style=\"text-align: center;\">
              <div class=\"details\">
                <img src=\"img/enK.png\" style=\"width:50%; margin-top:10%;\">
                <div class=\"details2\">
                <h1 class=\"titremenu\"> MENU BURGER + FRITES</h1>
                <div class=\"encadrevert \">
                  <p class=\"line\">
                    7.00€ </p>
                    <p class=\"reduction\">5.00€ </p>
                </div>
              </div>
            </div>
          </div>
</div>
         <div class=\"row geo\">
               <div class=\"col-4  boxverte\">
                  <p class=\"distance\"> à 300 M </p>
                </div>
                <div class=\"col-8\">
                   <p class=\"adresse\"> Adresse ... </p>
               </div>
           </div>
         </div>
         <div class=\"container-fluid onglet  \">
                 <div class=\"row produits\">
                   <div class=\"col-6\">
                       <div class=\"illustration\">
                         <img src= \"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Menukebab.png"), "html", null, true);
        echo "\" style=\"width:150%;\" >
                       </div>
                     </div>
                       <div class=\"col-6\" style=\"text-align: center;\">
                       <div class=\"details\">
                         <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/enK.png"), "html", null, true);
        echo "\" style=\"width:50%; margin-top:10%;\">
                         <div class=\"details2\">
                         <h1 class=\"titremenu\"> MENU BURGER + FRITES</h1>
                         <div class=\"encadrevert \">
                           <p class=\"line\">
                             7.00€ </p>
                             <p class=\"reduction\">5.00€ </p>
                         </div>
                       </div>
                     </div>
                   </div>
         </div>
                  <div class=\"row geo\">
                        <div class=\"col-4  boxverte\">
                           <p class=\"distance\"> à 300 M </p>
                         </div>
                         <div class=\"col-8\">
                            <p class=\"adresse\"> Adresse ... </p>
                        </div>
                    </div>
                  </div>
    <div class=\"onglet \">
                         <div class=\"pub\" style=\"display: inline-block;\" >
                         <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/decat.png"), "html", null, true);
        echo "\" style=\"width:100%\" >
                       </div>
                       <div class=\"row \"style=\"background-color: #6FD6FF;\">
                             <div class=\"col-12\">
                         <p class=\"txtpub fondbleuclair\"> Pour nous soutenir il vous suffit d'aller voir cette publicité </p>
                       </div>
                     </div>
     </div>
     <div class=\"container-fluid onglet  \">
             <div class=\"row produits\">
               <div class=\"col-6\">
                   <div class=\"illustration\">
                     <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Menukebab.png"), "html", null, true);
        echo "\" style=\"width:150%;\" >
                   </div>
                 </div>
                   <div class=\"col-6\" style=\"text-align: center;\">
                   <div class=\"details\">
                     <img src=\"img/enK.png\" style=\"width:50%; margin-top:10%;\">
                     <div class=\"details2\">
                     <h1 class=\"titremenu\"> MENU BURGER + FRITES</h1>
                     <div class=\"encadrevert \">
                       <p class=\"line\">
                         7.00€ </p>
                         <p class=\"reduction\">5.00€ </p>
                     </div>
                   </div>
                 </div>
               </div>
     </div>
              <div class=\"row geo\">
                    <div class=\"col-4  boxverte\">
                       <p class=\"distance\"> à 300 M </p>
                     </div>
                     <div class=\"col-8\">
                        <p class=\"adresse\"> Adresse ... </p>
                    </div>
                </div>
              </div>
              <div class=\"container-fluid onglet  \">
                      <div class=\"row produits\">
                        <div class=\"col-6\">
                            <div class=\"illustration\">
                              <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Menukebab.png"), "html", null, true);
        echo "\" style=\"width:150%;\" >
                            </div>
                          </div>
                            <div class=\"col-6\" style=\"text-align: center;\">
                            <div class=\"details\">
                              <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/enK.png"), "html", null, true);
        echo "\"style=\"width:50%; margin-top:10%;\">
                              <div class=\"details2\">
                              <h1 class=\"titremenu\"> MENU BURGER + FRITES</h1>
                              <div class=\"encadrevert \">
                                <p class=\"line\">
                                  7.00€ </p>
                                  <p class=\"reduction\">5.00€ </p>
                              </div>
                            </div>
                          </div>
                        </div>
              </div>
                       <div class=\"row geo\">
                             <div class=\"col-4 boxverte\">
                                <p class=\"distance\"> à 300 M </p>
                              </div>
                              <div class=\"col-8\">
                                 <p class=\"adresse\"> Adresse ... </p>
                             </div>
                         </div>
                       </div>
                       <div class=\"container-fluid onglet  \">
                               <div class=\"row produits\">
                                 <div class=\"col-6\">
                                     <div class=\"illustration\">
                                       <img src=\"img/Menukebab.png \" style=\"width:150%;\" >
                                     </div>
                                   </div>
                                     <div class=\"col-6\" style=\"text-align: center;\">
                                     <div class=\"details\">
                                       <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/enK.png"), "html", null, true);
        echo "\"style=\"width:50%; margin-top:10%;\">
                                       <div class=\"details2\">
                                       <h1 class=\"titremenu\"> MENU BURGER + FRITES</h1>
                                       <div class=\"encadrevert \">
                                         <p class=\"line\">
                                           7.00€ </p>
                                           <p class=\"reduction\">5.00€ </p>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                       </div>
                                <div class=\"row geo\">
                                      <div class=\"col-4  boxverte\">
                                         <p class=\"distance\"> à 300 M </p>
                                       </div>
                                       <div class=\"col-8\">
                                          <p class=\"adresse\"> Adresse ... </p>
                                      </div>
                                  </div>
                                </div>
  ";
        // line 250
        $this->displayBlock('footer', $context, $blocks);
        // line 260
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 250
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 251
        echo "         <div class=\"container-fluid onglet\" style=\"
    text-align: center; \">
           <div class=\" row\" >
             <div class=\"col-12 pied \">
               <p class=\"pied2\">  <a href=\"#\"> Confidentialité </a>   <a href=\"#\"> - Mentions Légales </a>  <a href=\"#\"> - Cookies </a>   <a href=\"#\">- © EAS Technology </a> </p>
             </div>
            </div>
         </div>  
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 260
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 260,  407 => 251,  397 => 250,  386 => 260,  384 => 250,  360 => 229,  327 => 199,  319 => 194,  286 => 164,  271 => 152,  245 => 129,  237 => 124,  146 => 36,  136 => 29,  132 => 28,  128 => 27,  124 => 26,  120 => 25,  116 => 24,  112 => 23,  108 => 22,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  88 => 17,  84 => 16,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

 {% block body %}
    <div class=\"sticky-top\">
    <div class=\"container-fluid\">
        <div class=\"row justify \" style=\"margin-right: -15px;margin-left: -15px;\">
          <article class=\"col-4\" style=\"margin-top: 3%;\">
            <nav role=\"navigation\" class=\"text-left\">
          <div id=\"menuToggle\" style=\"position: sticky;\">
            <input type=\"checkbox\" />
            <span></span>
            <span></span>
            <span></span>
            <ul id=\"menu\" style=\"padding-right:0;\">
              <div class=\"contenumenu\">
              <a href=\"#\"><li> <p class=\"titre1\"><img src=\"{{ asset('img/home.png') }}\" > &nbsp;HOME</p></li></a>
              <p class=\"soustexte\"> {{ 'Découvre les offres du moment de tes restos préférés' }}</p>
              <a href=\"#\"><li><p class=\"titre1\" ><img src=\"{{ asset('img/restos.png') }}\"> &nbsp; RESTOS</p></li></a>
              <p class=\"soustexte\">{{'Tous les restaurants sont ici' }} </p>
              <a href=\"#\"><li><p class=\"titre1\"><img src=\"{{ asset('img/menus.png') }}\"> &nbsp; MENUS</p></li></a>
              <p class=\"soustexte\"> {{'Consulter la carte des menus du resto dans lequel tu te trouves'}} </p>
              <a href=\"#\"><li><p class=\"titre1\"><img src=\"{{ asset('img/livraisons.png') }}\"> &nbsp;LIVRAISONS</p></li></a>
              <p class=\"soustexte\">{{' Consulter les restos qui ont besoin de livreurs dans l\\'immédiat '}}</p>
              <a href=\"#\"><li><p class=\"titre1\"><img src=\"{{ asset('img/scan.png') }}\"> &nbsp; SCAN</p></li></a>
              <p class=\"soustexte\"> {{'Scan le QR code situé sur la table'}} </p>
              <a href=\"#\"><li><p class=\"titre1\"><img src=\"{{ asset('img/scan.png') }}\"> &nbsp; SPEATS</p></li></a>
              <p class=\"soustexte\"> {{'Voir tous les Speats postés'}} </p>
              <a href=\"#\"><li><p class=\"titre1\"><img src=\"{{ asset('img/compte.png') }}\"> &nbsp; MON COMPTE</p></li></a>
              <p class=\"soustexte\">{{' Gestion de ton compte utilisateur'}} </p>
            </div>
            </ul>
          </div>
        </nav>
          </article>
          <article class=\"col-4\">
            <a href=\"index.html\"><img class=img-responsive src=\"{{ asset('img/logo.png') }}\" width=\"100%\"></a>
          </article>
          <article class=\"col-4\">
              <button class=\"btn btn-lg btn-outline-primary btn float-right\" type=\"submit\" style=\"padding-top: 0%;padding-bottom: 0%;  margin-top: 1%;font-size: 18px;margin-bottom: 6%;\"><i class=\"fa fa-sign-in\"></i> Login</button>  
          </article>
          <div class=\"container-fluid banniere\">
            <div class=\"row\" style=\"justify-content: center;\">
              <article class=\"col-12\">
                <div class=\"titre\" style=\"  margin-bottom: 11%;\">
                  <p>OFFRES DU MOMENT</p>
                </div>
              </article>
              <article class=\"col-12 \" style=\"margin-top: -14%;\">
                  <form class=\"form-inline my-2 my-lg-0\" style=\"justify-content: center;\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Recherche\" aria-label=\"Search\" style=\"width: auto; height:25px;\">
      <button class=\"btn btn-outline-info my-2 my-sm-0\" type=\"submit\" style=\"border: solid white 1px;  padding-bottom: 0px;  margin-left: 2%;  padding-top: 0;\">Ok</button>
    </form>
              </article>
            </div>
          </div>
        </div>
      </div>
      </div>

<div class=\"container-fluid onglet\">
        <div class=\"row produits\">
          <div class=\"col-6\">
              <div class=\"illustration\">
              <a href=\"composition.html\">  <img src=\"img/Menukebab.png \" style=\"width:150%;\" ></a>
              </div>
            </div>
              <div class=\"col-6\" style=\"text-align: center;\">
              <div class=\"details\">
                <img src=\"img/enK.png\" style=\"width:50%; margin-top:10%;\">
                <div class=\"details2\">
                <h1 class=\"titremenu\"> MENU BURGER + FRITES</h1>
                <div class=\"encadrevert \">
                  <p class=\"line\">
                    7.00€ </p>
                    <p class=\"reduction\">5.00€ </p>
                </div>
              </div>
            </div>
          </div>
</div>
         <div class=\"row geo\">
               <div class=\"col-4 boxverte\">
                  <p class=\"distance\"> à 300 M </p>
                </div>
                <div class=\"col-8\">
                   <p class=\"adresse\"> Adresse ... </p>
               </div>
           </div>
         </div>
<div class=\"container-fluid onglet \">
        <div class=\"row produits\">
          <div class=\"col-6\">
              <div class=\"illustration\">
                <img src=\"img/Menukebab.png \" style=\"width:150%;\" >
              </div>
            </div>
              <div class=\"col-6\" style=\"text-align: center;\">
              <div class=\"details\">
                <img src=\"img/enK.png\" style=\"width:50%; margin-top:10%;\">
                <div class=\"details2\">
                <h1 class=\"titremenu\"> MENU BURGER + FRITES</h1>
                <div class=\"encadrevert \">
                  <p class=\"line\">
                    7.00€ </p>
                    <p class=\"reduction\">5.00€ </p>
                </div>
              </div>
            </div>
          </div>
</div>
         <div class=\"row geo\">
               <div class=\"col-4  boxverte\">
                  <p class=\"distance\"> à 300 M </p>
                </div>
                <div class=\"col-8\">
                   <p class=\"adresse\"> Adresse ... </p>
               </div>
           </div>
         </div>
         <div class=\"container-fluid onglet  \">
                 <div class=\"row produits\">
                   <div class=\"col-6\">
                       <div class=\"illustration\">
                         <img src= \"{{ asset('img/Menukebab.png') }}\" style=\"width:150%;\" >
                       </div>
                     </div>
                       <div class=\"col-6\" style=\"text-align: center;\">
                       <div class=\"details\">
                         <img src=\"{{ asset('img/enK.png') }}\" style=\"width:50%; margin-top:10%;\">
                         <div class=\"details2\">
                         <h1 class=\"titremenu\"> MENU BURGER + FRITES</h1>
                         <div class=\"encadrevert \">
                           <p class=\"line\">
                             7.00€ </p>
                             <p class=\"reduction\">5.00€ </p>
                         </div>
                       </div>
                     </div>
                   </div>
         </div>
                  <div class=\"row geo\">
                        <div class=\"col-4  boxverte\">
                           <p class=\"distance\"> à 300 M </p>
                         </div>
                         <div class=\"col-8\">
                            <p class=\"adresse\"> Adresse ... </p>
                        </div>
                    </div>
                  </div>
    <div class=\"onglet \">
                         <div class=\"pub\" style=\"display: inline-block;\" >
                         <img src=\"{{ asset('img/decat.png') }}\" style=\"width:100%\" >
                       </div>
                       <div class=\"row \"style=\"background-color: #6FD6FF;\">
                             <div class=\"col-12\">
                         <p class=\"txtpub fondbleuclair\"> Pour nous soutenir il vous suffit d'aller voir cette publicité </p>
                       </div>
                     </div>
     </div>
     <div class=\"container-fluid onglet  \">
             <div class=\"row produits\">
               <div class=\"col-6\">
                   <div class=\"illustration\">
                     <img src=\"{{ asset('img/Menukebab.png') }}\" style=\"width:150%;\" >
                   </div>
                 </div>
                   <div class=\"col-6\" style=\"text-align: center;\">
                   <div class=\"details\">
                     <img src=\"img/enK.png\" style=\"width:50%; margin-top:10%;\">
                     <div class=\"details2\">
                     <h1 class=\"titremenu\"> MENU BURGER + FRITES</h1>
                     <div class=\"encadrevert \">
                       <p class=\"line\">
                         7.00€ </p>
                         <p class=\"reduction\">5.00€ </p>
                     </div>
                   </div>
                 </div>
               </div>
     </div>
              <div class=\"row geo\">
                    <div class=\"col-4  boxverte\">
                       <p class=\"distance\"> à 300 M </p>
                     </div>
                     <div class=\"col-8\">
                        <p class=\"adresse\"> Adresse ... </p>
                    </div>
                </div>
              </div>
              <div class=\"container-fluid onglet  \">
                      <div class=\"row produits\">
                        <div class=\"col-6\">
                            <div class=\"illustration\">
                              <img src=\"{{ asset('img/Menukebab.png') }}\" style=\"width:150%;\" >
                            </div>
                          </div>
                            <div class=\"col-6\" style=\"text-align: center;\">
                            <div class=\"details\">
                              <img src=\"{{ asset('img/enK.png') }}\"style=\"width:50%; margin-top:10%;\">
                              <div class=\"details2\">
                              <h1 class=\"titremenu\"> MENU BURGER + FRITES</h1>
                              <div class=\"encadrevert \">
                                <p class=\"line\">
                                  7.00€ </p>
                                  <p class=\"reduction\">5.00€ </p>
                              </div>
                            </div>
                          </div>
                        </div>
              </div>
                       <div class=\"row geo\">
                             <div class=\"col-4 boxverte\">
                                <p class=\"distance\"> à 300 M </p>
                              </div>
                              <div class=\"col-8\">
                                 <p class=\"adresse\"> Adresse ... </p>
                             </div>
                         </div>
                       </div>
                       <div class=\"container-fluid onglet  \">
                               <div class=\"row produits\">
                                 <div class=\"col-6\">
                                     <div class=\"illustration\">
                                       <img src=\"img/Menukebab.png \" style=\"width:150%;\" >
                                     </div>
                                   </div>
                                     <div class=\"col-6\" style=\"text-align: center;\">
                                     <div class=\"details\">
                                       <img src=\"{{ asset('img/enK.png') }}\"style=\"width:50%; margin-top:10%;\">
                                       <div class=\"details2\">
                                       <h1 class=\"titremenu\"> MENU BURGER + FRITES</h1>
                                       <div class=\"encadrevert \">
                                         <p class=\"line\">
                                           7.00€ </p>
                                           <p class=\"reduction\">5.00€ </p>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                       </div>
                                <div class=\"row geo\">
                                      <div class=\"col-4  boxverte\">
                                         <p class=\"distance\"> à 300 M </p>
                                       </div>
                                       <div class=\"col-8\">
                                          <p class=\"adresse\"> Adresse ... </p>
                                      </div>
                                  </div>
                                </div>
  {% block footer %}
         <div class=\"container-fluid onglet\" style=\"
    text-align: center; \">
           <div class=\" row\" >
             <div class=\"col-12 pied \">
               <p class=\"pied2\">  <a href=\"#\"> Confidentialité </a>   <a href=\"#\"> - Mentions Légales </a>  <a href=\"#\"> - Cookies </a>   <a href=\"#\">- © EAS Technology </a> </p>
             </div>
            </div>
         </div>  
  {% endblock %}
    {% block javascripts %}{% endblock %}
{% endblock %}

", "default/index.html.twig", "/home/rilong/speat2/templates/default/index.html.twig");
    }
}
