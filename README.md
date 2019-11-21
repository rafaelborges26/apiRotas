# ApiRotas
A Api rotas foi feita para através de valores fornecidos, valores como o ponto inicial, o final, a autonomia do veículo e o valor do litro, calcular a melhor rota. 
Os possíveis valores aceitáveis para a origem e destino são: 
A B 10
B D 15
A C 20
C D 30
B E 50
D E 30
O ponto inicial, final e a distância em KM entre os pontos.
A utilização da api pode ser feita através de programas como por exemplo o postman, a API utilizará somente o Get do protocolo HTTP, com o retorno do valor do custo e o melhor trajeto.
Exemplo de url para executar o programa: http://www.localhost:8000/api/rotas/?A&D&10&2
Foi escrito em linguagem PHP.
