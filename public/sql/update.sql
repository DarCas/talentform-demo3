# UPDATE [nome_tabella]
# SET
#   ELENCO CAMPO = VALORE SEPARATO DA VIRGOLA
# WHERE
# 	CAMPO IDENTIFICATIVO = VALORE;

UPDATE `users`
SET `nickname` = 'darcas',
	`usernm`   = 'darcas@example.com',
	`passwd`   = SHA1('darcas')
WHERE `id` = 2;
