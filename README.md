# iw-docker
Docker para o Ambiente IW

## Instalação

### IW
1. Copie os arquivos:
	* código do IW no diretório /IW/www
	* global.php no diretório /IW/www

2. Gere o *build* do Docker
```
docker-compose build
```
3. Iniciar o Docker
```
docker-compose up -s
```
4. Conecte no banco de dados pelo IP do Docker *(user:root pass:root)* e faça o dumping do banco do IW
5. Mude o apontamento do dominio iemen.claro para o IP do Docker no arquivo hosts
6. Acesse o IW no navegador pelo endereço http://iemen.claro

*No Windows o IP = 192.168.99.100*
