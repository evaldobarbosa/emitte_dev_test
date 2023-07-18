# APIs

## Server
Endereço: fake.geradornf.test

## Endpoints:

### POST /nfs/{tipo}

Body:
	- cnpj
	- numero
	- valor
	- itens (array)
		- produto
		- quantidade
		- valor

### POST /nfs/agrupadas

Body
	- notas_fiscais (array)
		- cnpj
		- numero
		- data_processamento