<?php
/**
 * Este script contiene una clase con dos métodos para manejo de archivos
 * @author Manuel Lapi García
 * @version 2.0
 */

/**
 * Clase para manejo de archivos
 *
 * @since 1.0
 */
class ManejadorArchivos {
  
  /**
   * Método para leer el contenido de un archivo
   *
   * @access public
   * @param string $ruta Ruta del archivo a leer
   * @return string Contenido del archivo leído
   * @since 1.0
   */
  public function leerArchivo($ruta) {
    $archivo = fopen($ruta, "r");
    $contenido = fread($archivo, filesize($ruta));
    fclose($archivo);
    return $contenido;
  }
  
  /**
   * Método para escribir en un archivo
   *
   * @access public
   * @param string $ruta Ruta del archivo donde escribir
   * @param string $contenido Contenido a escribir en el archivo
   * @return bool true si se escribió correctamente, false en caso contrario
   * @since 1.0
   */
  public function escribirArchivo($ruta, $contenido) {
    $archivo = fopen($ruta, "w");
    $resultado = fwrite($archivo, $contenido);
    fclose($archivo);
    return $resultado !== false;
  }

}
?>
