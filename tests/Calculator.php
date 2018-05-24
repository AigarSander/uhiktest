<?php
/**
 * Created by PhpStorm.
 * User: B50-50
 * Date: 23.04.2018
 * Time: 14:22
 */

class Calculator
{
    public function instantiate($a) {
        $result = '';

        $result .= '1. Ümbermõõdu leidmine.<br>';
        $result .= 'P = 4a = a + a + a + a<br><br>';
        $p = $this->umbermoot($a);

        $result .= '1. Pindala leidmine.<br>';
        $result .= 'S = a<sup>2</sup><br><br>';
        $s = $this->pindala($a);

        $dataa = $this->output($a, $p, $s, $result);

        return $dataa;
    }

    public function umbermoot($a) {
        if($a<=0){
            $some='';
        }else{
            $some=$a * 4;
        }

        return $some;
    }

    public function pindala($a) {
        if($a<=0){
            $some='';
        }else{
            $some=pow($a, 2);
        }


        return $some;
    }

    public function output($a, $p, $s, $result)  {
        $data = array(
            'a' => 0,
            'umbermoot' => 0,
            'pindala' => 0,
            'result' => ''
        );

        $data['a'] = number_format($a, 2);
        $data['umbermoot'] = number_format($p, 2);
        $data['pindala'] = number_format($s, 2);
        $data['result'] = $result;
        return $data;
    }
}