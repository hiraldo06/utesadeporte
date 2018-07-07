<?php
/**
 * Created by PhpStorm.
 * User: HiraldoTran
 * Date: 15/8/18
 * Time: 11:46 AM
 */

namespace AppBundle\Controller\Evento;


use AppBundle\Services\Helpers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class EventoController extends Controller
{

    public function index(){
        $helpers=$this->get(Helpers::class);
        return $helpers->json("hola mundo");
    }
}