<?php

  /**@autor: Martinez Sierra Daniel
  * Modelo que calcula el IMC*/
  class IMC
  {
    /**Define el peso*/
    var $peso;

    /**Define la altura */
    var $altura;


    function __construct($p_peso,$p_altura)
    {
      $this->peso=$p_peso;
      $this->altura=$p_altura;
      echo "Objeto IMC creado con exito ";
      echo "<br>";
    }

    function getPeso()
    {
      return $this->peso;
    }

    public function getAltura()
    {
      return $this->altura/100;
    }

  } // Fin de la clase

/**Interface que contiene el metodo calcular */
  interface Calcular
  {
    function calcula(IMC $imc);
  }



  class CalculoIMC implements Calcular
  {
    /**Metodo para clacuar el imc*/
    function calcula (IMC $imc)
    {
      $resultado=$imc->getPeso() / pow( $imc->getAltura(), 2 );
      return round( $resultado, 2 ) ;
    }
  }


  interface Clasificacion
  {
    function classified($valor);
  }


  class PesoNormal implements Clasificacion
  {
    /**Metodo para clacuar el imc*/
    function classified ($valor)
    {
      $mensaje="no corresponde el peso";
      if($valor >= 18.50 && $valor <= 24.99)
      {
        $mensaje="Felicidades estas dentro de tu peso ideal";
      }
      echo $mensaje;
    }
  }


  $modeloIMC=new IMC(55,172);

  $Operacion=new CalculoIMC();
  $calculoIMC=$Operacion->calcula($modeloIMC);
  echo $calculoIMC;
  $Normal=new PesoNormal();
  $Normal->classified($calculoIMC);










?>
