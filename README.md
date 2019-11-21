# ApiRotas
A Api rotas foi feita para calcular melhores trajetos, através de valores fornecidos, valores como o ponto inicial, o final, a autonomia do veículo e o valor do litro. 
Os possíveis valores aceitáveis para a origem e destino são: 
<ul>
<li>A B 10</li>
<li>B D 15</li>
<li>A C 20</li>
<li>C D 30</li>
<li>B E 50</li>
<li>D E 30</li>
</ul>
O ponto inicial, final e a distância em KM entre os pontos.
A utilização da api pode ser feita através de programas como por exemplo o postman, a API utilizará somente o Get do protocolo HTTP, com o retorno do valor do custo e o melhor trajeto.
Exemplo de url para executar o programa: http://www.localhost:8000/api/rotas/?A&D&10&2
Foi escrito em linguagem PHP.
