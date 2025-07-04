# INSERT INTO [nome_tabella]
# (
#   ELENCO CAMPI SEPARATI DA VIRGOLA
# )
# VALUES
# (
#   ELENCO DEI VALORI SEPARATI DA VIRGOLA
# );

INSERT INTO `users`
	(
	 `nickname`,
	 `usernm`,
	 `passwd`
	)
VALUES
	(
	 'andrea',
	 'andrea@example.com',
	 SHA1('andrea')
	),
	(
		'roberto',
		'roberto@example.com',
		SHA1('roberto')
	),
	(
		'chiara',
		'chiara@example.com',
		SHA1('alexsandra')
	);
