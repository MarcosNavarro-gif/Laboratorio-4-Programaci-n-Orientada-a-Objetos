<?php
include("Persona.php");
class Docente extends Persona
{
    protected string $codigoDocente;
    protected string $departamento;
    protected string $categoria;
    protected string $maximoTitulo;
    protected string $tipoContratacion;

    public function __construct(
        string $codigoDocente,
        string $departamento,
        string $categoria,
        string $maximoTitulo,
        string $tipoContratacion,
        string $nombre,
        string $apellido,
        string $fechaNacimiento)
    {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->codigoDocente = $codigoDocente;
        $this->departamento = $departamento;
        $this->categoria = $categoria;
        $this->maximoTitulo = $maximoTitulo;
        $this->tipoContratacion = $tipoContratacion;
    }

    public function getCodigoDocente(): string
    {
        return $this->codigoDocente;
    }

    public function getDepartamento(): string
    {
        return $this->departamento;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    public function getMaximoTitulo(): string
    {
        return $this->maximoTitulo;
    }

    public function getTipoContratacion(): string
    {
        return $this->tipoContratacion;
    }
}//fin de la clase Docente

$miDocente  = new Docente(
    "D-001", // código de docente
    "Computación y Sistemas", // departamento o facultad
    "Titular", // categoría (Titular, Adjunto, Especial, Interino)
    "Magíster", // máximo título académico
    "Tiempo Completo", // tipo de contratación
    "María", // nombre
    "Gómez", // apellido
    "1985-03-20" // fecha de nacimiento
);

echo "El nombre del docente es: " . $miDocente->getNombre() . "<br>";
echo "El apellido del docente es: " . $miDocente->getApellido() . "<br>";
echo "La fecha de nacimiento del docente es: " . $miDocente->getFechaNacimiento() . "<br>";
echo "El código del docente es: " . $miDocente->getCodigoDocente() . "<br>";
echo "El departamento del docente es: " . $miDocente->getDepartamento() . "<br>";
echo "La categoría del docente es: " . $miDocente->getCategoria() . "<br>";
echo "El máximo título académico del docente es: " . $miDocente->getMaximoTitulo() . "<br>";
echo "El tipo de contratación del docente es: " . $miDocente->getTipoContratacion() . "<br>";
?>
