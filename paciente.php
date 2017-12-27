<?php 

	abstract class Patient 
	{
		private $weigth; 

		private $height;

		/**Constructor de la clase abstracta Paciente*/ 
		function __construct($p_peso,$p_altura)
	    {
	    	
	      $this->weigth=$p_peso;
	      $this->height=$p_altura;    
	    }

	    /**Peso del paciente */
		function getWeigth()
		{
	      return $this->weigth;
	    }

	    /**Altura del paciente*/
	    public function getHeigth()
	    {
	      return $this->height;
	    }

	    abstract protected function calculateIMC();
	}

	 public interface Clasificacion
	 {
		function classified($valor);
	 }


	class PesoNormal extends Patient implements Clasificacion
	{
		function __construct($peso,$altura)
		{
			parent::__construct($peso,$altura);
			print_r($this->getWeigth());
			echo "<br>";
			print_r($this->getHeigth());
			echo "<br>";
		}

		public function calculateIMC()
		{
			$altura=$this->getHeigth()/100; 
			$peso=$this->getWeigth(); 
			$totalImc= $peso/ pow( $altura, 2 );
      		return round( $totalImc, 2 ) ;
		}

		public function classified( $valor)
		{
		  $mensaje="no corresponde el peso";
		  
	      if( $valor >= 18.50 && $valor <= 24.99 ){
	        $mensaje="Felicidades estas dentro de tu peso ideal";
	      }
	      echo $mensaje;

		}

	echo "Hola";
	$Persona=new PesoNormal(55,172);
	$calculoIMC=$Persona->calculateIMC();
  	echo $calculoIMC;

 ?>

