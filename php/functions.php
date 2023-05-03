<?php

  /*---------- Funciones ----------*/

  /**
   * Chequear que los Strings recibidios sean apropiados.
   * Recibe un String y un String pre definido.
   * Si cumple con los parametros devuelve el mismo sin espacios.
   */
  function checkInputText(string $inputKey, string $regex = null) {
      
    // Verifico que este definida
    if (!isset($_POST[$inputKey])) {
      die ("Error: el campo " . $inputKey . " es requerido");
    }

    $input = $_POST[$inputKey];

    // Verifico el tipo de dato
    if (!is_string($input)) {
      die ("Error: el campo " . $inputKey . " no es del tipo válido");
    }

    // Pre formateo del valor
    $input = trim($input);

    // Comparo el texto con la expresión regular
    if (isset($regex) && !preg_match($regex, $input)) {
      die ("Error: el campo " . $inputKey . " no tiene un formato válido");
    }
    
    return ($input);
  }

  /**
   * Chequear que el Email recibido sea valido.
   * Recibe un String
   * Si cumple con los parametros devuelve el mismo convetido a Minusculas.
   */
  function checkInputEmail(string $inputKey) {

    $email = checkInputText($inputKey);
    $email = strtolower($email);

    // Verifico si el Mail brindado es apropiado
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
      die ("Error: el campo " . $inputKey . " no tiene un formato válido");

    return $email;
  }

  /**
   * Chequear que los <select> recibidios sean apropiados.
   * Recibe un String y un Array.
   * Si cumple con los parametros devuelve el mismo convetido a Mayusculas.
   */
  function checkInputSelect(string $inputKey, array $values = []) {
    // Verificar los datos utilizando una expresion regular y utilizar implode() para unirficar los valores seperados por "|"
    return checkInputText($inputKey, '/^('.implode('|', $values).')$/');
  }

  /**
   * Chequear que la fecha de nac. sea correcta.
   * Recibe un String.
   * Si cumple con los parametros devuelve la misma.
   */
  function checkInputDate(string $inputKey) {
    $date = checkInputText($inputKey, '/^\d{4}-\d{2}-\d{2}$/');
    $dateArray = explode('-', $date);
    if (!checkdate($dateArray[1], $dateArray[2], $dateArray[0])) {
      die ("Error: el campo " . $inputKey . " no contiene una fecha válida");
    }

    return $date;
  }

  /**
   * Verificar los CheckBox.
   * Recibe un String y un Array.
   * Si cumple con los parametros devuelve el Array mismo.
   */
  function checkInputCheckbox(string $inputKey, array $values = []) {

    // Verifico que este definida
    if (!isset($_POST[$inputKey])) {
      die ("Error: el campo " . $inputKey . " es requerido");
    }

    $input = $_POST[$inputKey];

    // Verifico el tipo de dato
    if (!is_array($input)) {
      die ("Error: el campo " . $inputKey . " no es del tipo válido");
    }
    
    // Verificamos que el contenido sea unico
    $input = array_unique($input);

    // Verifico de a uno los valores ingresados que pertenezcan a la lista de valores permitidos
    // Si uno de los valores no está, lanza error
    foreach ($input as $item) {
      if (!in_array($item, $values)) {
        die ("Error: el campo " . $inputKey . " contiene uno o más valores no válidos");
      }
    }

    return $input;
  }

?>