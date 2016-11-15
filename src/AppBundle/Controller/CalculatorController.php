<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\Calculator;

class CalculatorController extends Controller
{
    /**
     * @Route (" / ", name="app_calculator_index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render(':calculator:index.html.twig');
    }

    /**
     * @Route (path="/sum",name="app_calculator_sum")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function sumAction(){
        return $this->render(':calculator:form.html.twig',
            [
                'action'=> 'app_calculator_doSum'
            ]
        );
    }
    /**
     * @Route (path="/doSum", name="app_calculator_doSum")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public  function doSumAction(Request $request){
        $calculator= new Calculator($request->request->get('op1'),$request->request->get('op2'));
        $calculator->sum();
        $res=$calculator->getRes();

        return $this->render(':calculator:resultado.html.twig',
            [
                'resultado' => $res
            ]
        );
    }
    /**
     * @Route (path="/res",name="app_calculator_res")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function resAction(){
        return $this->render(':calculator:form.html.twig',
            [
                'action'=> 'app_calculator_doRes'
            ]
        );
    }
    /**
     * @Route (path="/doRes", name="app_calculator_doRes")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public  function doResAction(Request $request){
        $calculator= new Calculator($request->request->get('op1'),$request->request->get('op2'));
        $calculator->res();
        $res=$calculator->getRes();

        return $this->render(':calculator:resultado.html.twig',
            [
                'resultado' => $res
            ]
        );
    }
    /**
     * @Route (path="/mul",name="app_calculator_mul")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function mulAction(){
        return $this->render(':calculator:form.html.twig',
            [
                'action'=> 'app_calculator_doMul'
            ]
        );
    }
    /**
     * @Route (path="/doMul", name="app_calculator_doMul")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public  function doMulAction(Request $request){
        $calculator= new Calculator($request->request->get('op1'),$request->request->get('op2'));
        $calculator->mul();
        $res=$calculator->getRes();

        return $this->render(':calculator:resultado.html.twig',
            [
                'resultado' => $res
            ]
        );
    }
    /**
     * @Route (path="/div",name="app_calculator_div")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function divAction(){
        return $this->render(':calculator:form.html.twig',
            [
                'action'=> 'app_calculator_doDiv'
            ]
        );
    }
    /**
     * @Route (path="/doDiv", name="app_calculator_doDiv")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public  function doDivAction(Request $request){
        $calculator= new Calculator($request->request->get('op1'),$request->request->get('op2'));
        $calculator->div();
        $res=$calculator->getRes();

        return $this->render(':calculator:resultado.html.twig',
            [
                'resultado' => $res
            ]
        );
    }




}
