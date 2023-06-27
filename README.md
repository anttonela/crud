## Sobre
Crud simples no PHP com conexão ao PostgreSQL. Tendo como adicionar, deletar, selecionar e alterar dados da tabela que for escolhida.

##
### Para realizar crud:
- Entrar em _`library/crud/inserirDados.php`_, ir no método que deseja, irei citar o select, colocar o nome da table em **$table** e algum dado ou coluna específica (exemplo: "WHERE" => "senha = '123'",)
- Para especificar qual função do crud deseja realizar (no caso select), ir em _`library/crud/salvarDados.php`_ e determinar na linha 10
```
linha 10 | $salvar->select(); // inserir, deletar, select ou update
```
- ir no terminal e rodar dois comandos para imprimir o resultado:
```
1 | cd library/crud

2 | php salvarDados.php
```
##
