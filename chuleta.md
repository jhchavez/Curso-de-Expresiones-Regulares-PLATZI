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
^\[LOG.*\[LOG\].*user:@\w+7\].*$ buscar Logs 
^\+?\d{2,3}[^\da-z]? telefonos 
https?:\/\/[\w\-\.]+\.\w{2,5}\/?\S* urls
[\w\._]{5,30}\+?[\w]{0,10}@[\w\.\-]{3,}\.\w{2,5} mails
[\w\._]{5,30}\+?[\w]{0,10}@[^\d][\w\.\-]{3,}\.\w{2,5}
\-?\d{1,3}\.\d{1,6},\-?\d{1,3}\.\d{1,6},.*$ coordenadas
^[A-Z][a-z]{3,}\s?[A-Z]?[a-z]{0,}.* nombres
^\d+::([\w\s:,\(\)'\.\-&!\/]+)\s\(\d\d\d\d\)::.*$ movies
[\?$](\w+)=([^&\n]+).* descomponer queries
--   $1 => $2
