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

    /**
     * Obtiene la edad a partir de la fecha de Nac. si es menor devuelve FALSE.
     * Recibe fecha de Nac.
     * Retorna TRUE si es mayor de edad
     */
    function checkAge(string $inputKey, int $age) {

        $nacimiento = new DateTime($inputKey);
        $ahora = new DateTime(date("Y-m-d"));
        $diferencia = $ahora->diff($nacimiento);

        if ($diferencia->format("%y") < $age)
            return false;

        return true;
    }

    /**
     * Devuelve la edad a partir de la fecha de Nac. si es menor devuelve FALSE.
     * Recibe fecha de Nac.
     */
    function getAge(string $inputKey) {

        $nacimiento = new DateTime($inputKey);
        $ahora = new DateTime(date("Y-m-d"));
        $diferencia = $ahora->diff($nacimiento);

        return intval($diferencia->format("%y"));
    }

    /**
     * Verifica la existencia de los archivos de guardado y en caso de que no esten los crea.
     * Devuelve true si los pudo crear.
     */
    function createFile(string $inputKey) {
    
            $file = fopen($inputKey,'a+');
            if (!$file) {
                die ("no puedo abrir archivo");
            }
            fclose($file);

            $fileAux = fopen($inputKey . '.tmp','a+');
            if (!$fileAux) {
                die ("no puedo abrir archivo");
            }
            fclose($fileAux);

        return true;

    }

    /**
     * Crea la cabecera de la base de datos en base al Array de datos.
     * Recibe un Array.
     * Retorna un Array con los valores de la cabecera.
     * Ejemplo: // name|surname|email|sex|birthday|profile|chat[]|date[]|social[].
     */
    function getHeader(array $data) {
        
        $header = []; 

        foreach ($data as $key => $item) {
            $header[] = $key . (is_int($item) ? '*' : '');
        }

        return implode('|', $header);

    }

    /**
     * Llama Escribir Linea en Archivo.
     * Recibe un Array.
     */
    function saveInDB(array $data) {

        writeLineInFile(implode('|', $data));

    }

    /**
     * Graba dentro del archivo.
     * Recibe la ruta del archivo y la informacion a grabar Array.
     * Devuelve TRUE si pudo grabar el archivo.
     */
    function writeLineInFile(string $line) {

        return (bool) file_put_contents(NAME_FILE, $line . "\n", FILE_APPEND);

    }

    /**
     * Obtiene la cabecera del archivo de Base de Datos.
     * Recibe un String que es el contenido del archivo.
     * Devuelve la misma como un String.
     */
    function getHeaderFromDB(string $fileContent) {
        return substr($fileContent, 0, strpos($fileContent, "\n"));
    }

    /**
     * Compara la cabecera obtenida del mapa de datos con la obtenida de la base de datos.
     * Recibe 2 String.
     * Si son iguales devuelve true.
     */
    function compareHeaders(string $header, string $headerTwo) {
        if (strcmp($header, $headerTwo) !== 0)
            die ("Error de integridad de base de datos");

        return true;
    }

    /**
     * Funciones de encriptado
     * Reciben un String y devuelven un String Encriptado
     */
    function cripto_1($len) {
      
        if ($len > 0 && $len <= 36) {
      
          return substr(str_shuffle(PERMITTED_CHARS), 0, $len);
      
        } else {
      
          return substr(str_shuffle(PERMITTED_CHARS), 0, 8);
      
        }
    }
      
    function cripto_2($len) {
    
        if ($len > 0 && $len <= 62) {
        
            return substr(str_shuffle(PERMITTED_CHARS_TWO), 0, $len);
        
        } else {
        
            return substr(str_shuffle(PERMITTED_CHARS_TWO), 0, 8);
        
        }
    
    }
       
    function cripto_3($len) {
    
        $input_length = strlen(PERMITTED_CHARS_TWO);
        $random_string = '';
        
        for($i = 0; $i < $len; $i++) {
        
                $random_character = substr(str_shuffle(PERMITTED_CHARS_TWO), 0, 1);
                $random_string .= $random_character;
        
        }
        
        return $random_string;
    
    }
      
    function cripto_4($len) {
        return bin2hex(random_bytes($len));
    }
    
    function cripto_5($len) {
        return substr(md5(time()), 0, $len);
    }
    
    function cripto_6($len) {
        return substr(sha1(time()), 0, $len);
    }
      
?>