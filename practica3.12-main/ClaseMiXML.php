<?php
class miXML
{
    //creamos dos propiedades para el nombre del archivo
    // y apara el objeto que contendrá el documento DOMDocument
    private $xml_nombre_archivo;
    private $dom;

    //método constructor
    public function __construct(string $nombreArchivo)
    {
        // inicializamos el nombre del archivo
        $this->xml_nombre_archivo = $nombreArchivo;
        // creamos el Documento DOM
        $this->dom = new DOMDocument('1.0', 'UTF-8');
        // establecemos Formatos de salida muy bien con sangría y espacio extra.
        $this->dom->formatOutput = true;
    }

    //método para insertar registros a XML
    public function insertPelicula(int $id, string $titulo, int $año, string $genero, string $clasificacion)
    {
        //Cargamos los datos que contenga el archivo XML
        // para poder insertar despues
        $this->dom->load($this->xml_nombre_archivo);

        //luego obtenemos el nodo RAIZ llamado Películas
        $Peliculas = $this->dom->getElementsByTagName('peliculas')->item(0);

        //creamos el nodo-registro Pelicula.
        $nodo_registro_peli = $this->dom->createElement('pelicula');

        //definimos el atributo ID para el nodo-registro película
        $attr_peli_id = new DOMAttr('peli_id', $id);
        //establecemos dicho atributo
        $nodo_registro_peli->setAttributeNode($attr_peli_id);

        //creamos los nodos-campos: titulo, año, genero, clasificacion
        $nodo_campo_title = $this->dom->createElement('titulo', $titulo);
        $nodo_campo_año = $this->dom->createElement('año', $año);
        $nodo_campo_genero = $this->dom->createElement('genero', $genero);
        $nodo_campo_clasif = $this->dom->createElement('clasificacion', $clasificacion);

        //agregamos los nodos-campos al registro pelicula
        $nodo_registro_peli->appendChild($nodo_campo_title);
        $nodo_registro_peli->appendChild($nodo_campo_año);
        $nodo_registro_peli->appendChild($nodo_campo_genero); $nodo_registro_peli->appendChild($nodo_campo_clasif);

        //ahora agregamos el nodo-registro al nodo raiz: peliculas
        $Peliculas->appendChild($nodo_registro_peli);
        //guardamos/actualizamos el archivo XML
        $this->dom->save($this->xml_nombre_archivo);
    }

    //método para verificar si existen registros en el archivo xml y cuantos hay
    public function existenValores(): int
    {
        //cargamos el xml en $x
        $x = simplexml_load_file($this->xml_nombre_archivo);

        //si no se puedo cargar entonces mandamos -1
        if ($x === false) return -1;
        //de otra manera mandamos el numero de registros
        else {
            return $x->count();
        }
    }

    //método para crear el archivo XML
    //este método crea una estructura muy básica
    //para poder empezar a insertar/agregar registros
    public function crearXMLFile()
    {
        //creamos el nodo raíz Películas
        $raiz = $this->dom->createElement('peliculas');
        //agregamos el nodo raíz al documento XML
        $this->dom->appendChild($raiz);
        //guardamos el documento XML en el archivo
        $this->dom->save($this->xml_nombre_archivo);
    }

    //creamos método para leer datos de la películas
    public function obtenerPeliculas()
    {
        //cargamos el archivo XML
        $datos = simplexml_load_file($this->xml_nombre_archivo)
            or die("Error: No se puede generar el objeto SimpleXMLElement");
        //mandamos en una lista los nodos-pelicula
        return $datos->pelicula;
    }
}
