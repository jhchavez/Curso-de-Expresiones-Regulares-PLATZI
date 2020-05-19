\w - caracteres de palabras
\d - digitos
\s - espacios/invisibles en blanco
[0-9] ~ \d
[0-9a-zA-Z] ~ \w
* greedy - todo
+ uno o mas
? cero o uno
\d*[a-z]?s\d*
{4,10} cantidad de caracteres a buscar, es decir logitud Minimo y maxima
\d{2,2}[\-\.]? numeros telefonicos con diferentes formatos
.+?[,\n]{1,1} El ? indica al patrón que encuentre las coincidencias de manera rápida (o greedy)
[^0-5a-c ] ^negacion de la clase o de la busqueda
\d{2,2}[^a-zA-Z] reto escoger caracteres que no esten separados por letras
^\d{3,25}$ inicicio y final de linea
^\[LOG.*\[LOG\].*user:@\w+7\].*$ buscar en Logs 
^\+?\d{2,3}[^\da-z]? telefonos 
https?:\/\/[\w\-\.]+\.\w{2,5}\/?\S* urls