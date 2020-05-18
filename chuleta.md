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