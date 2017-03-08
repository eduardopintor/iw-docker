# iw-docker
Docker para o Ambiente IW

## Instalação
1. Faça o clone deste repositório
2. Copie o código do IW no diretório /IW/www
3. Copie o arquivo global.php no diretório /IW/www
4. Conecte no banco de dados pelo IP do Docker* (user:root pass:root) e faça um dumping do banco do IW
5. Mude o apontamento do dominio ieme.claro para o IP do Docker* no arquivo hosts
6. Acesse o IW no navegador pelo endereço http://iemen.claro

*No Windows o IP = 192.168.99.100*
