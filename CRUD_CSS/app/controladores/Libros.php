<?php
/**
 * Libros
 */
class Libros extends Controlador
{
  private $modelo;
  /*define un objeto para acceder a los métodos definidos 
	en class LibrosModelo() */
  function __construct()
  {
    $this->modelo=$this->modelo("LibrosModelo");
  }
	/*retorna de la tabla libros un arreglo de todos los recordSet 
	y renderiza éstos en el dashBoard*/
  public function index()
  {
    $data=$this->modelo->getLibros();
    /*renderiza en el dashBoard los datos del recordSet*/
    $this->vista("LibrosVista",$data);
  }

	/* se realiza una petición de envio de un arreglo de  
	datos, generada por un <submit> vía POST.
	verifica que variables están pasadas por el método POST
		determina si la variable está definida y la asigna, 
		si no asigna un campo vacío.
	*/
  public function modificar($id="")
  {
    if ($_SERVER['REQUEST_METHOD']=="POST")
		{
		/*recolecta atributos de un registro $id*/
		  $id = isset($_POST["id"])?$_POST["id"]:"";
		  $titulo = isset($_POST["titulo"])?$_POST["titulo"]:"";
		  $autor = isset($_POST["autor"])?$_POST["autor"]:"";
		  $editorial = isset($_POST["editorial"])?$_POST["editorial"]:"";
		/* asigna y actualiza los atributos de un registro id seleccionado*/
		  $this->modelo->modificarLibros($id, $titulo, $autor, $editorial);
		} 
	else 
		{
			$data = $this->modelo->getLibro($id);
			$datos = [
				"id" => $id,
				"titulo" => $data[0]["titulo"],
				"autor" => $data[0]["autor"],
				"editorial" => $data[0]["editorial"]
				];
			$this->vista("LibrosModificar",$datos);
    }
  }
	/*retorna y muestra recorSet seleccionado. 
	elimina un registro de la base de datos
	cuando se presiona el boton sumit <Enviar>*/
  public function borrar($id="")
  {
   if ($_SERVER['REQUEST_METHOD']=="POST")
   { 
	/*verifica la existencia de un identificador*/
      $id = isset($_POST["id"])?$_POST["id"]:"";
	/*invoca la ejecución de eliminar un registro*/
      $this->modelo->borrarLibro($id);
    }
		/*retorna y muestra recordSet seleccionado*/
	else 
	{
		//print("muestra");
		/*retorna recorSet seleccionado por id*/
      $data=$this->modelo->getLibro($id);
		/*indexa en cero, elimina recorSet seleccionado*/
      $datos=[
        "id"=>$id,
        "titulo"=>$data[0]["titulo"],
        "autor"=>$data[0]["autor"],
        "editorial"=>$data[0]["editorial"]
      ];
	  /*actualiza vista y muestra dashboard*/
      $this->vista("LibrosBorrar",$datos);
    }
  }

  public function alta()
  {
    if ($_SERVER['REQUEST_METHOD']=="POST")
	{
      $titulo = isset($_POST["titulo"])?$_POST["titulo"]:"";
      $autor = isset($_POST["autor"])?$_POST["autor"]:"";
      $editorial = isset($_POST["editorial"])?$_POST["editorial"]:"";

      $this->modelo->insertarLibros($titulo, $autor, $editorial);

    } else {
      $this->vista("LibrosAlta");
    }
  }
  public function info()
  {
  $this->vista("infoVistas");
    }
    public function sobremi()
    {
    $this->vista("sobremi");
      }
  
}
?>