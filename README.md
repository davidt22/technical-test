PRUEBA TECNICA - ENUNCIADO
==========================

1. Fizz Buzz
Write a function that outputs the string representation of numbers from 1 to n. But
for multiples of three it should output “Fizz” instead of the number and for the
multiples of five output “Buzz”. For numbers which are multiples of both three and
five output “FizzBuzz”.
Example:
Input: n = 15
Output:
[
"1",
"2",
"Fizz",
"4",
"Buzz",
"Fizz",
"7",
"8",
"Fizz",
"Buzz",
"11",
"Fizz",
"13",
"14",
"FizzBuzz"
]


2. Top K Frequent Elements
   Given a non-empty array of integers, return the k most frequent elements.
   Example 1:
   Input: nums = [1,1,1,2,2,3], k = 1
   Output: [1]
   Example 2:
   Input: nums = [1,1,1,2,2,3], k = 2
   Output: [1,2]
   Note:
   You may assume k is always valid, 1 ≤ k ≤ number of unique elements.
   Your algorithm's time complexity must be better than O(n log n), where n is the
   array's size.


3. Longest Consecutive Sequence
   Given an unsorted array of integers, find the length of the longest consecutive
   elements sequence.
   Your algorithm should run in O(n) complexity.
   Example:
   Input: [100, 4, 200, 1, 3, 2]
   Output: 4
   Explanation: The longest consecutive elements sequence is [1, 2, 3, 4]. Therefore its
   length is 4.

PRUEBA TECNICA - CONSIDERACIONES
================================

He usado el skeleton de Symfony en su version 6 con PHP 8.1 para llevar a 
cabo la prueba técnica usando comandos de Sf para ver la 
salida por pantalla de cada ejercicio.

Para cada ejercicio he añadido una batería de tests
para comprobar que la salida y la lógica es la esperada
en cada uno de ellos.

Dado que hace años que estudie como calcular la complejidad
algorítmica, he intentado que los algoritmos sean lo mas eficientes
a nivel de ejecución y de memória pero sin realizar el calculo
de su coeficiente, por lo que no estoy seguro de que todos cumplan
con el requisito mencionado.

Ej1:
Para correr el comando por consola hay que ejecutar:

$ php bin/console app:test1 15

Ej2:
Para correr el comando por consola hay que ejecutar:

$ php bin/console app:test2 1,1,1,2,2,3 1
$ php bin/console app:test2 1,1,1,2,2,3 2

Ej3:
Para correr el comando por consola hay que ejecutar:

$ php bin/console app:test3 100,4,200,1,3,2
$ php bin/console app:test3 100,4,200,1,3,2,201,204,203,202

Tests:
======
Para correr la suite de tests:

$ php bin/phpunit



