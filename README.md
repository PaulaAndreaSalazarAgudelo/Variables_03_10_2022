# GLOSARIO PHP

**camelCase:** Es una práctica de escritura que consiste en la unión de dos o más palabras sin espacios entre ellas, pero las diferencian una letra mayúscula inicial a partir de la segunda palabra;Este nombre está dado porque forman con las letras mayúsculas iniciales la estructura de un camello que sube cuando hay un inicio de palabra y baja durante su definición.

**Estructura básica de los lenguajes de programación:** los ordenadores leen las instrucciones que hay en un programa mediante diagramas de flujo, para definir que flujo tendrá el programa se pueden combinar diferentes estructuras de programación:

- <u>Estructura secuencial</u>: es la estructura básica de todos los programas, las instrucciones se ejecutan una tras otra, siguiendo el orden en el que se han escrito.
- <u>Estructura de repetición "Bucle repeat":</u>son repeticiones de una o varias instrucciones, se usa para no tener que escribir el mismo código varias veces;Las estructuras que repiten una secuencia de instrucciones un número determinado de veces se denominan bucles y se denomina iteración a la ejecución de cada repetición.

**Que es un pseudo-Lenguaje programación / un lenguaje de programación**: es una forma de expresar los distintos pasos que va a realizar un programa, de la forma más parecida a un lenguaje de programación. Su principal función es la de representar por pasos la solución a un problema o algoritmo, de la forma más detallada posible, utilizando un lenguaje cercano al de programación;El pseudocódigo es una forma de escribir los pasos que va a realizar un programa de la forma más cercana al lenguaje de programación que vamos a utilizar posteriormente.

**Código limpio**: es una filosofía de desarrollo de software que consiste en aplicar técnicas simples que facilitan la escritura y lectura de un código, volviéndolo más fácil de entender.

Un código con muchos ajustes durante mucho tiempo, se vuelve imposible de mantener, por lo que es mejor crear un código nuevo y no continuar con una versión problemática. Un código limpio evita gastos desnecesarios y prepara al software para las actualizaciones y mejoras.

**Código sucio**:Un código sucio es un código que es difícil entender, que al final genera problemas porque se va a estar mucho tiempo leyendo líneas de código e intentando entenderlas.

Además, cualquier modificación que se quiera realizar el día de mañana, va a ser más compleja y probablemente se acabe cometiendo errores.

**Variables** :Una variable es donde se almacenan y se recuperan los datos de un programa. Así de simple. En programación, la utilizamos para guardar datos y estados, asignar ciertos valores de variables a otras, representar valores de expresiones matemáticas y mostrar valores por pantallas. 

**Maneras de escribir las variables en PHP**: en PHP las variables se representan con un signo de dólar seguido por el nombre de la variable. El nombre de la variable es sensible a minúsculas y mayúsculas.

Los nombres de variables siguen las mismas reglas que otras etiquetas en PHP. Un nombre de variable válido tiene que empezar con una letra o un carácter de subrayado (underscore), seguido de cualquier número de letras, números y caracteres de subrayado. Como expresión regular se podría expresar como: '`[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*`'

También se pueden asignar variables por referencia, simplemente se antepone un signo ampersand (&) al comienzo de la variable cuyo valor se está asignando (la variable fuente). Por ejemplo, el siguiente segmento de código produce la salida '`Mi nombre es Bob`' dos veces.

**7 tipos de datos primitivos en PHP**:

PHP admite diez tipos primitivos.

Cuatro tipos escalares:

- boolean:es en computación aquel que puede representar valores de lógica binaria, esto es 2 valores, que normalmente representan falso o verdadero
- integer: (int)  permite representar números enteros.
- float (número de punto flotante, también conocido como double): permite representar números reales.
- string: es una secuencia de caracteres usado para representar el texto.

Cuatro tipos compuestos:

- array: son variables estructuradas, donde cada elemento se almacena de forma consecutiva en memoria.
- object: ente abstracto usado en programación que permite separar los diferentes componentes de un programa, simplificando así su elaboración, depuración y posteriores mejoras.
- [callable](https://www.php.net/manual/es/language.types.callable.php): permite devolver valores después de que se haya completado su ejecución.
- [iterable](https://www.php.net/manual/es/language.types.iterable.php):  Un iterador es un [puntero](http://www.ecured.cu/index.php?title=Puntero_(C%2B%2B)&action=edit&redlink=1) que es utilizado por un [algoritmo](http://www.ecured.cu/Algoritmo) para recorrer los elementos almacenados en un contenedor.

**Declarar de Variable / Inicialización de Variable**: una variable se puede declarar con el ';' al final o sin él. La diferencia es que con el ';', la variable no es mostrada en el terminal. Si queremos darle un nuevo valor a una variable solo hay que declarar el nuevo valor que va a tener la variable como se ha hecho anteriormente.

Una variable se declara para indicarle al programa a partir de qué lugar empieza a existir, qué nombre tendrá y qué tipo de datos almacenará. La asignación de un valor inicial se llama inicialización. Para declarar una variable usaremos una instrucción compuesta del nombre del tipo de datos de la variable, el nombre de la variable y opcionalmente un operador de asignación y un valor inicial.

**Para que sirve el Punto y coma en programación (secuencia)**:  establece el fin de una sentencia o de una instrucción. Nos ayuda a entender mejor el código, dado que podemos saber en qué momento comienza y termina una instrucción.

**Palabras reservadas del sistema**: las palabras reservadas en programación, o palabras clave, tienen un significado especial para el compilador de cualquier lenguaje de programación.

Estas palabras pueden identificar los tipos de datos que se pueden usar, además de la diferentes rutinas de programación que permite cada lenguaje.

**Que son los operadores (operador de asignación):** los operadores son símbolos que indican cómo se deben manipular los operandos. Los operadores junto con los operandos forman una expresión, que es una fórmula que define el cálculo de un valor. Los operandos pueden ser constantes, variables o llamadas a funciones, siempre que éstas devuelvan algún valor. El compilador evalúa los operadores, algunos de izquierda a derecha, otros de derecha a izquierda, siguiendo un orden de precedencia. Este orden se puede alterar utilizando paréntesis para forzar al compilador a evaluar primero las partes que se deseen

**Ítems en las colecciones de datos PHP**

Una solución es encapsular el array en algún tipo de objeto Collection, que se encargue de asegurar que solo incorporamos objetos válidos y que pueda realizar ciertas operaciones con ellos, garantizándonos la coherencia de los datos en todo momento.

Existen diversas librerías que aportan colecciones en PHP, a Google pronto:

https://github.com/morrisonlevi/Ardent
https://github.com/allebb/collection
https://github.com/emonkak/php-collection
https://dusankasan.github.io/Knapsack/
http://jmsyst.com/libs/php-collection

Incluso parece que tendremos una implementación canónica en un futuro

http://php.net/manual/en/class.ds-collection.php

**Imprimir en pantalla en PHP**

- **echo**: Muestra todos los parámetros. No se pospone ninguna nueva línea adicional; no es realmente una función (es una construcción del lenguaje), por lo que no se requiere el uso de paréntesis con él. `echo` (a diferencia de otras construcciones del lenguaje) no se comporta como una función, es decir no siempre se puede usar en el contexto de una función. Además, si se quiere pasar más de un parámetro a `echo`, éstos no deben estar entre paréntesis.

  `echo` también posee una sintaxis abreviada, donde se puede poner el símbolo igual justo después de la etiqueta de apertura de PHP. Antes de PHP 5.4.0, este tipo de sintaxis abreviada únicamente funciona con la opción de configuración [short_open_tag](https://www.php.net/manual/es/ini.core.php#ini.short-open-tag) activada.

-  **var_dump**: Esta función muestra información estructurada sobre una o más expresiones incluyendo su tipo y valor. Las matrices y los objetos son explorados recursivamente con valores sangrados para mostrar su estructura.

- **print_r** : Imprime información legible para humanos sobre una variable