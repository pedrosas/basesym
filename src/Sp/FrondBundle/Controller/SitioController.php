<?php
namespace Sp\FrondBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class SitioController extends Controller
{
    public function estaticaAction($pagina)
    {
        return $this->render('FrondBundle:Sitio:'.$pagina.'.html.twig');
    }
}