<?php
	session_start();

	define('IMC', true);

	require_once('lib/smarty/Smarty.class.php');
	
	require_once('Person.php');

//------------------------------CLASE CALCIMC----------------------------
	class IMC 
	{
		function __construct(){
			$this->crearSmarty();
		}

		private  function crearSmarty()
		{
			$this->smarty = new Smarty();
			$this->smarty->setTemplateDir('templates/');
			$this->smarty->setCompileDir('templates_c/');
			$this->smarty->setConfigDir('configs/');
			$this->smarty->setCacheDir('cache/');
		}


		public function calcula($peso,$altura,$sistema)
		{
			try 
			{
				$persona= Person::create( $peso, $altura ); 	
			} catch (Exception $e) {
				$this->smarty->assign('msjnum',"Inserta datos numericos");
				$this->smarty->display("index.html");
				die();
			}
			
			if ($peso == 0 || $altura == 0) 
					$this->smarty->display("index.html");
				else
				{
					if ($sistema === "internacional") 
						$System = new International( $persona );
					else
						$System = new Ingles( $persona );

					$resultado = $System->calculate();

					
					if($resultado < 10.00 || $resultado > 60)//NUEVO
						{
							$mensaje = "Los datos sobrepasan lo esperado, favor de revisarlos";
							$this->smarty->assign('msj',$mensaje);
							$this->smarty->display("index.html");
						}

						//If en el cuál se define la clasificación de pesos NUEVO
						if ($resultado<16.00)
						{
							$clasificación = "DS";//Delgadez Severa
						}//FIN IF1
						else
						{
							if ($resultado >= 16.00 && $resultado <=16.99)
							{
								$clasificación = "DM"; // Delgadez Moderada
							}//FIN IF2
							else{
								if($resultado >= 17.00 && $resultado <= 18.49){
									$clasificación = "DL";//Delgadez Leve
								}//FIN IF3
								else{
									if($resultado >= 18.50 && $resultado <= 24.99){
										$clasificación = "N";//Normal
									}//FIN IF 4
									else{
										if($resultado >= 25.00 && $resultado <= 29.99){
											$clasificación = "PO";//PreObeso
										}//FIN IF 5
										else{
											if($resultado >= 30.00 && $resultado <= 34.99){
												$clasificación = "OL";//Obesidad Leve
											}//FIN IF 6
											else{
												if($resultado >= 35.00 && $resultado <= 39.99){
													$clasificación = "OM";//Obesidad Media
												}//FIN IF7
												else{
													$clasificación = "OMo"; //Obesidad Morbida
												}//FIN ELSE 7
											}//FIN ELSE 6
										}//FIN ELSE 5
									}//FIN ELSE 4
								}//FIN ELSE 3
							}//FIN ELSE 2
						}//FIN ELSE 1


						//switch con los diferentes tipos de imc tomando en cuenta los rangos
						switch ($clasificación) 
						{//NUEVO
							case 'DS':
								$mensaje = "Podría ser que puedas subir de peso un poco más, te recomendamos evitar la comida chatarra, esto podría perjudicarte más, lo mejor que puedes hacer es AGREGAR CALORIAS SALUDABLEs e incorporar snacks, así mismo revisar nuestras dietas" ;
								break;
							case 'DM':
								$mensaje = "Estás un poco bajo de peso pero con una comida rica en calorias saludables, comidas pequeñas en distintos lapsos del día y snacks saludables si tienes hambre y no te es posible tomar un descanso del trabajo y comer.";
								break;
							case 'DL':
								$mensaje = "Casi excelente, estas a poco de lograr tu peso ideal, pero aún hay que trabajar, podrías incluir en tu dieta diaria el elegir alimentos ricos en nutrientes, calorias y fortalecer los musculos.";
								break;
							case 'N':
								$mensaje = "Felicidades estas dentro de tu peso ideal, te recomendamos seguir así, haciendo ejercicio, comiendo sano, y evitar los alimentos con demasiada grasa, así como respetar tus horas de comida.";
								break;
							case 'PO':
								$mensaje = "Cuidado estas un poco arriba de tu peso ideal, si sigues así podrias llegar a tener un sobre peso o peor, un plan alimentario ideal para actuar contra el sobrepeso siempre ha de ser normocalórico o con una mínima restricción de calorías.";
								break;
							case 'OL':
								$mensaje = "Cuidado estas un poco por encima de el peso recomendado para tu estatura, debes de elegir alimentos con poca grasa, reducir su consumo de azucar y alimentos chatarra.";
								break;
							case 'OM':
								$mensaje = "Mucho cuidado estas cerca de llegar a una obesidad morbida, te recomendamos repartir tu alimentación en 5 comidasd al dia con alimentos de poca grasa y con nutrientes, así como no saltar ninguna comida y realizar un poco de ejercicio aumentando moderadamente.";
								break;
							case 'OMo':
								$mensaje = "Debes de cuidar mucho tu alimentación, estas en un grado de sobre peso sonde tu salud peligra, acude a un medico para que puedas hacerte examenes pronto y te de la mejor recomendación para poder perder peso, puede que con una dieta normal no puedas llegar a tu peso ideal, te recomendamos tener mucha paciencia y responsabilidad para cuidar tu salud.";
								break;

							default:
								$mensaje = "Recomendacion";
								break;
						} // Swutch

						//$mensaje="El índice de masa corporal (IMC) es una medida de asociación entre la masa y la talla de un individuo ideada por el estadístico belga Adolphe Quetelet, por lo que también se conoce como índice de Quetelet. Hay que destacar que, no se pueden aplicar los mismos valores de IMC en niños y adolescentes debido a su constante crecimiento de estatura y desarrollo corporal, por lo que se obtiene un IMC respecto a su edad y sexo. Por lo que primero deberá primero contar con la fecha de nacimiento y de medición para obtener la edad calculada y así ser más precisos al categorizar a éste grupo de edad.";
						$this->smarty->assign('resultado',$resultado);
						$this->smarty->assign('msj',$mensaje);
						$this->smarty->display("index.html");
				}//Else

			} //metodo
	} // Clase 

	$web=new IMC;
	$smarty=$web->smarty;