<?php
/**
 * Arquivo de configuracao das variaveis de ambiente do IW
 */

$arrConfigIW = array(
	'title'	=> 'InfoWeb - Portal de Informacoes',
	'domain'	=> 'localhost',
	'param'	=> array(
		'signOn' => false,
	),
	'accessDirectWhitelist' => array(
		'10.18.50.236',
		'10.18.50.238',
		'10.18.50.240',
		'10.18.51.10',
		'10.18.51.11',
		'10.18.51.44',
		'10.18.52.71',
		'10.18.52.72'
	),
	'AD' => array(
		'autenticar' => false,
		'consolidarPerfil' => false,
		'whitelist' => array(
			'select' => array(
				'127.0.0.1',
				'10.18.49.31'
			),
			'update' => array(
				'127.0.0.1',
			),
		),
		'connections' => array(
			'default' => array(
				'bases' => array(
					'default' => 'OU=Claro,DC=claroweb-homolog,DC=com,DC=br',
					'cpc' => 'OU=CPC,OU=Users,OU=Claro,DC=claroweb,DC=com,DC=br',
					//'dealers_groups' => 'OU=Groups,OU=WEB,OU=Applications,OU=Claro,DC=claroweb-homolog,DC=com,DC=br',
					//'dealers' => 'OU=DEALERS,OU=Claro,DC=claroweb-homolog,DC=com,DC=br'
				),
				'hosts' => array(
					'bocaina'
				),
				'use_ssl' => false,
				'use_tls' => false,
				'user' => 'iw_aa',
				'pass' => '50@blue@50',
				'account_suffix' => '@claroweb-homolog.com.br'
			),
			'iwdevel' => array(
				'bases' => array(
					'default' => 'OU=CPC,OU=Users,OU=Claro,DC=clarowebdev01,DC=com,DC=br'
				),
				'hosts' => array(
					'guanabara06:389'
				),
				'use_ssl' => false,
				'use_tls' => false,
				'user' => '',
				'pass' => '',
				'account_suffix' => '@claroweb.com.br'
			)
		)

	),

	'encryption' => array(
		'key'         => 'P1nd@m0nh@ng@b@h',
		'mode'        => MCRYPT_MODE_NOFB,
		'cipher'     => MCRYPT_BLOWFISH,
	),

	'tabela_particionada' => array('' => 1),
	'versao_cache' => array('' => 1),
	'ambiente' => array(
		'host' 		=> $_SERVER['SERVER_NAME'],
		'producao'	=> false, // true no iemen/dobrada/igarapava/catigua
		'mysql'		=> array(
			'connection'	=> array(
				'host'		=> '192.168.99.100',
				'user'		=> 'root',
				'pass'		=> '',
				//'host'		=> 'iwteste01.claro.com.br',
				//'user'		=> 'synapsystem',
				//'pass'		=> '#Pim3nta#',
				'database'	=> 'iwprd_vnd',
				'type'		=> 'mysqli', // mysqli
				'port'		=> false, // false
				'socket'		=> false, // false
			),
			'benchmark'		=> true, // true
			'persistent'	=> false, // false
			'character_set'=> 'utf8', // utf8
			'table_prefix'	=> '',
			'object'			=> true, // true
			'cache'			=> false, // false
		),
		'hml01'		=> array(
			'connection'	=> array(
				'host'		=> '172.25.33.97',
				'user'		=> 'iwdevel',
				'pass'		=> 'BCPS@',
				//'host'		=> 'iwteste01.claro.com.br',
				//'user'		=> 'synapsystem',
				//'pass'		=> '#Pim3nta#',
				'database'	=> 'iwprd_vnd',
				'type'		=> 'mysqli', // mysqli
				'port'		=> false, // false
				'socket'		=> false, // false
			),
			'benchmark'		=> true, // true
			'persistent'	=> false, // false
			'character_set'=> 'utf8', // utf8
			'table_prefix'	=> '',
			'object'			=> true, // true
			'cache'			=> false, // false
		),
		'oracle_oms'     => array(
			'connection'        => array(
				'host'              => 'BRUX0234.claro.com.br',
				'user'              => 'CPC6OMS',
				'pass'              => 'CPC6OMS',
				'database'          => 'D01OMS',
				'type'              => 'oracle',
				'port'              => 1521,
				'sid'               => 'D01OMS',
				'socket'            => false,
			),
			'benchmark'         => true,
			'persistent'        => false,
			'character_set'     => 'utf8',
			'table_prefix'      => '',
			'object'            => true,
			'cache'             => false,
		),
		'oracle_crm'     => array(
			'connection'        => array(
				'host'              => 'brux0234',
				'user'              => 'SA',
				'pass'              => 'SA',
				'database'          => 'D06CRM',
				'type'              => 'oracle',
				'port'              => 1521,
				'sid'               => 'D06CRM',
				'socket'            => false,
			),
			'benchmark'         => true,
			'persistent'        => false,
			'character_set'     => 'utf8',
			'table_prefix'      => '',
			'object'            => true,
			'cache'             => false,
		),
		'oracle_mobile' => array(
				'connection' => array(
						/*'host'       => 'brux0206',
						'user'       => 'INFOWEB',
						'pass'       => 'esS1RaT0zf3!ra',
						'database'   => 'taol1',
						'type'       => 'oracle',
						'port'       => 1531,
						'sid'        => 'taol1',
						'socket'     => false,*/
						'host'		=> 'localhost',
						'user'		=> 'root',
						'pass'		=> 'root',
						//'host'		=> 'iwteste01.claro.com.br',
						//'user'		=> 'synapsystem',
						//'pass'		=> '#Pim3nta#',
						'database'	=> 'iwtmp_cor',
						'type'		=> 'mysqli', // mysqli
						'port'		=> false, // false
						'socket'		=> false, // false
				),
				'benchmark' => true,
				'persistent'=> false,
				'character_set' => 'utf8',
				'table_prefix' => '',
				'object' => true,
				'cache' => false,
		),
		'oracle_sgd'     => array(
			'connection'        => array(
				'host'              => 'brux0092',
				'user'              => 'U92025370',
				'pass'              => 'claro#123',
				'database'          => '',
				'type'              => 'oracle',
				'port'              => 1521,
				'sid'               => 'LG',
				'socket'            => false,
			),
			'benchmark'         => true,
			'persistent'        => false,
			'character_set'     => 'utf8',
			'table_prefix'      => '',
			'object'            => true,
			'cache'             => false,
		),
		'oracle'     => array(
			'connection'        => array(
				'host'              => 'tadwd2',
				'user'              => 'u92030897',
				'pass'              => 'claro123',
				'database'          => 'D00DW1',
				'type'              => 'oracle',
				'port'              => 1521,
				'sid'               => 'D00DW1',
				'socket'            => false,
			),
			'benchmark'         => true,
			'persistent'        => false,
			'character_set'     => 'utf8',
			'table_prefix'      => '',
			'object'            => true,
			'cache'             => false,
		),

		'path' => array(
			'lego_report' => array('bd' => '/var/www/BD.xml'),
			'root' => '/var/www/iemen/', // raiz do site
			'database' => array(
				'uploadmerchan' => array (
					'path' => '/var/www/iemen/',
				),
				'root' => '/var/www/iemen/database/', // raiz da pasta database
				'logAjax' => '/var/www/iemen/database/logajax/', // diretorio dos arquivos de log AJAX
				'tmp' => '/var/www/iemen/database/tmp/',
				'charts' => array(
					'path' => '/var/www/iemen/database/charts/',
					'uri' => 'database/charts/'
				),
				
				'csv' => array(
					'path' => '/var/www/iemen/database/csv/',
					'uri' => '/database/csv/'
				),
				
				'cor' => array(
					'arquivos' => array(
						'path' => '/var/www/iemen/database/modulos/cor/arquivos/',
						'uri' => '/database/modulos/cor/arquivos/'
					),
					'sgd' => array(
						'pme' => array(
							'path' => '/home/iwgsm/iemen/database/modulos/cor/sgd/pme'
						),
						'ge' => array(
							'path' => '/home/iwgsm/iemen/database/modulos/cor/sgd/ge'
						)
					)
				),
				'wfw' => array(
					'arquivos' => array(
						'path' => '/var/www/iemen/database/modulos/wfw/arquivos/',
						'uri' => '/database/modulos/wfw/arquivos/'
								),
					'templates' => array(
						'path' => '/var/www/iemen/database/modulos/wfw/arquivos/',
						'uri' => '/database/modulos/wfw/arquivos/'
								)
				),
				 'mysqlExport' => array(
			     	'app' =>  '/var/www/iemen/database/tmp/',
			     	'mysql' =>  '/var/www/iemen/database/tmp/',
			    )
				
			),
			'v1' => array(
				'classes' => '/var/www/iemen/v1/lib/objetos/', // caminho ate v1/lib/objetos/
				'root' => '/var/www/iemen/', // raiz do site
			),
			'fluxoUra' => array(
				'arquivos' => '/var/www/iemen/database/modulos/gen/ura'
						),
		),
		
		// MODULOS DO IW e ESQUEMAS DAS BASES DE DADOS (em ordem alfabetica)
		'modules' => array(
			'modulos/ags', // Agendamento de Salas
			'modulos/asx', // Administracao SOX - Igarapava
			'modulos/atd', // Atendimento
			'modulos/cad', // IW Cadastro
			'modulos/cem', // Carteira e Meta
			'modulos/cmc', // Branding
			'modulos/cne', // Embratel Combo Multi
			'modulos/com', // Comunicacao
			'modulos/cor', // Corporativo
			'modulos/cpj', // Familia PF / PJ
			'modulos/crn', // Datamart Churn
			'modulos/crm', // Datamart CPC
			'modulos/dim', // DIMENSIONAL
			'modulos/eng', // Engenharia
			'modulos/fin', // Financeiro
			'modulos/fsv', // File Sistem
			'modulos/gda', // SMS Varejo
			'modulos/geo', // Geo Marketing
			'modulos/gen', // Generico
			'modulos/gda', // 
			'modulos/gdn', // WorkFlow GD 2.0
			'modulos/hem', // Hierarquia e Meta
			'modulos/itv', // IW TV
			'modulos/ltv', // Lifetime Value
			'modulos/me',  // Midia Eletronica
			'modulos/ool',	// hotsite Ofertas Online
			'modulos/prc', // Portal Relacionamento Cliente
			'modulos/prd', // PRD v2
			'modulos/pta', // Portabilidade
			'modulos/rhu', // Recursos Humanos
			'modulos/sys', // Administracao
			'modulos/tst', // Testes
			'modulos/vnd', // Dashboard
			'modulos/wgd', // WorkFlow GD - Igarapava
			'modulos/wkf', // WorkFlow V2
			'modulos/wkw', // WorkFlow V3
			'modulos/wvd', // PRD
			'modulos/ent', // Engenharia NET

			'schemas/ags', // Agendamento de salas
			'schemas/all', // Sistema
			'schemas/atd', // Atendimento
			'schemas/cad', // IW Cadastro
			'schemas/cem', // Carteira e Meta
			'schemas/cmc', // Branding
			'schemas/cne', // Embratel Combo Multi
			'schemas/com', // Comunicacao
			'schemas/cor', // Corporativo
			'schemas/cpj', // Familia PF / PJ
			'schemas/crn', // Datamart Churn
			'schemas/crm', // Datamart CPC
			'schemas/dim', // Dimensoes do DW
			'schemas/eng', // Dimensoes do DW
			'schemas/fin', // Financeiro
			'schemas/fsv', // Fileserver
			'schemas/gen', // Generico
			'schemas/gda', // 
			'schemas/geo', // GeoMarketing
			'schemas/gdn', // WorkFlow GD 2.0
			'schemas/hem', // Hierarquia e Meta
			'schemas/itv', // IW-TV
			'schemas/ltv', // Lifetime Value
			'schemas/me',  // Midia Eletronica
			'schemas/ool',	// Hotsite Ofertas Online
			'schemas/prc', // Portal Relacionamento Cliente
			'schemas/prd', // PRD v2
			'schemas/pta', // Portabilidade
			'schemas/rec', // Receita
			'schemas/rh',  // Recursos Humanos
			'schemas/sys', // Sistema
			'schemas/vnd', // Vendas
			'schemas/wfw', // Workflow
			'schemas/wkf', // Workflow v2
			'schemas/wkw', // Workflow v3
			'schemas/wvd', // PRD
			'schemas/ent', // Engenharia NET
		),
		'treinamento' => false
	),
	'email' => array(
		'admin' 		=> 'iw@claro.com.br',
		'suporte'	=> 'iw@claro.com.br',
		'devel'		=> array(
			'mateus.miranda@claro.com.br',
		),
		'smtp' => array(
			'hostname'	=>	'10.11.51.146',
			'username'	=>	'iw@claro.com.br',
			'password'	=>	'', // abacat2.
			'port'		=>	'25',
		),
	),
	'webservices' => array(
		'log' => true,
		'api' => array(
			'WSCountries' => array(
			    'wsdl' => 'http://api.radioreference.com/soap2/?wsdl&v=latest',
			    'location' => 'http://api.radioreference.com/soap2/?v=latest',
			    'description' => '',
			    'location' => false
			),
			'users' => array(
				'default' => array(
					'username' => '',
					'password' => ''
				),
		   	) 
		),
		'iw' => array(
			'COR_WSValidarCotacaoVendaCorporativa' => array(
				'wsdl' => 'http://iwteste:80/v2/webservices/COR_WSValidarCotacaoVendaCorporativa?wsdl',
				'location' => 'http://iwteset:80/v2/webservices/COR_WSValidarCotacaoVendaCorporativa',
				'description' => '',
				'location' => false
			),

			'WSCORPlanilha' => array(
				'wsdl' => 'http://iwdesenvolvimento.com.br/v2/webservices/WSCORPlanilha?wsdl',
				'location' => 'http://iwdesenvolvimento.com.br/v2/webservices/WSCORPlanilha',
				'description' => '',
				'location' => false
			),

			// lista de usuarios para autenticacao no servico
			'users' => array(
				'default' => array(
					'username' => '',
					'password' => ''
				),
			)
		),
		// grupo
		'esbsoa2' => array(

			'GerarAtendimentov1' => array(
				'wsdl' => 'http://central:9200/esb/services/GerarAtendimentov1?wsdl',
				'location' => 'http://central:9200/esb/services/GerarAtendimentov1',
				'description' => '',
				'location' => false
			),
			'ConsultarAtendimentov1' => array(
				'wsdl' => 'http://central:9200/esb/services/ConsultarAtendimentov1?wsdl',
				'location' => 'http://central:9200/esb/services/ConsultarAtendimentov1',
				'description' => '',
				'location' => false
			),

			// servico
			'CadastrarAgenteVendav1' => array(
				'wsdl' => 'http://esbsoa2.claro.com.br:80/esb/services/CadastrarAgenteVendav1?wsdl',
				'location' => 'http://esbsoa2.claro.com.br:80/esb/services/CadastrarAgenteVendav1',
				'description' => ''
			),
			'ConsultarUltimoAssinantev1' => array(
							'wsdl' => 'http://esbsoa2.claro.com.br:80/esb/services/ConsultarUltimoAssinantev1?wsdl',
							'location' => 'http://esbsoa2.claro.com.br:80/esb/services/ConsultarUltimoAssinantev1',
							'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | 5
			),
			'AtualizarAgenteVendav1' => array(
				'wsdl' => 'http://esbsoa2.claro.com.br:80/esb/services/AtualizarAgenteVendav1?wsdl',
				'location' => 'http://esbsoa2.claro.com.br:80/esb/services/AtualizarAgenteVendav1',
			),			
			'ConsultarClientev2' => array(
					'wsdl' => 'http://esbsoa2.claro.com.br/esb/services/ConsultarClientev2?wsdl',
					'location' => 'http://esbsoa2.claro.com.br/esb/services/ConsultarClientev2',
			),

			// lista de usuarios para autenticacao no servico
			'users' => array(
				'default' => array(
					'username' => 'soaIW',
					'password' => '32$hope@45'
				),
				'GerarAtendimentov1' => array(
									'username' => 'soaIW',
									'password' => '32$hope@45'
				),
				'sp1' => array(
					'username' => '',
					'password' => ''
				)
			)
		),


		'cristais' => array(
			'CreditTalkVersion4' => array(
				// 'wsdl' => 'http://cristais.claro.com.br/ws/CreditTalkVersion4.asmx?wsdl',
				// 'location' => 'http://cristais.claro.com.br/ws/CreditTalkVersion4.asmx',
				'wsdl' => 'http://cristais.claro.com.br/ws/CreditTalkVersion4.asmx?wsdl',
				'location' => 'http://cristais.claro.com.br/ws/CreditTalkVersion4.asmx',
				'description' => 'Serviços relacionados ao crivo.',
				'username' => 'sUser',
				'password' => 'sPassword',
				'location' => false
			),

			'users' => array(
				'default' => array(
					'username' => '',
					'password' => ''
				)
			)
		),

		'crm' => array(
			'COR_WSCarregaCliente' => array(
				'wsdl' => 'http://iwteste.claro.com.br:80/v2/webservices/COR_WSCarregaCliente?wsdl',
				'location' => 'http://iwteste.claro.com.br:80/v2/webservices/COR_WSCarregaCliente',
				'description' => ''
			),
			'CLARO_ConsultarClienteFSACrm' => array(
				'wsdl' => 'http://tejupa.claro.com.br:8002/FachadaSoaACrm/services/ConsultarClienteFSACrmv2?wsdl',
				'location' => 'http://tejupa.claro.com.br:8002/FachadaSoaACrm/services/ConsultarClienteFSACrmv2',
				'description' => ''
			),

			// lista de usuarios para autenticacao no servico
			'users' => array(
				'default' => array(
					'username' => '',
					'password' => ''
				),
				'CLARO_ConsultarClienteFSACrm' => array(
					'username' => 'soaCrm',
					'password' => 'claro#123'
				)
			)
		),

		'cpc' => array(
			'COR_NotificarValidacaoCotacaoVendaCorporativa' => array(
				'wsdl' => 'http://iwteste.claro.com.br:80/v2/webservices/COR_NotificarValidacaoCotacaoVendaCorporativa?wsdl',
				'location' => 'http://iwteste.claro.com.br:80/v2/webservices/COR_NotificarValidacaoCotacaoVendaCorporativa',
				'description' => ''
			),
			'CLARO_NotificarValidacaoCotacaoVendaCorporativa' => array(
				'wsdl' => 'http://brux0243:9200/esb/services/NotificarValidacaoCotacaoVendaCorporativav1?wsdl',
				'location' => 'http://brux0243:9200/esb/services/NotificarValidacaoCotacaoVendaCorporativav1',
				'description' => ''
			),

			// lista de usuarios para autenticacao no servico
			'users' => array(
				'default' => array(
					'username' => '',
					'password' => ''
				),
				'CLARO_NotificarValidacaoCotacaoVendaCorporativa' => array(
					'username' => '',
					'password' => ''
				),
			)
		),
	),
	'servidores' => array(
		'prd' => array(
			'iw',
			'iw.claro.com.br',
			'igarapava',
			'igarapava.claro.com.br',
			'brux0166',
			'brux0166.claro.com.br',
		),
		'hom' => array(
			'dobrada',
			'dobrada.claro.com.br',
			'catigua',
			'catigua.claro.com.br',
		),
		'dev' => array(
			'iwdevel',
			'iwdevel.claro.com.br',
			'iwteste',
			'iwteste.claro.com.br',
			'localhost',
		),
		'altair' => array(
			'host'	=> 'localhost',
			'mysql'	=> array(
				'connection' 	=> array(
					'host'		=> 'localhost',
					'user'		=> 'root',
					'pass'		=> 'root',
					'database'	=> 'iwprd_sys',
					'type'		=> 'mysqli', // mysqli
					'port'		=> false, // false
					'socket'		=> false, // false
				),
				'benchmark'		=> true, // true
				'persistent'	=> false, // false
				'character_set'=> 'utf8', // utf8
				'table_prefix'	=> '',
				'object'			=> true, // true
				'cache'			=> false, // false
			),
			'whitelist' => array(
				'172.30.0.14',		// iemen
				'10.18.49.81',		// igarapava
				'10.11.16.53',		// dobrada
				'10.11.17.12',		// catigua
				'10.11.51.133',	// iwdevel
				'127.0.0.1',		// localhost
			),
		),
		'igarapava'		=> $_SERVER['HTTP_HOST'],
		'iemen'			=> $_SERVER['HTTP_HOST'],
		'prc'				=> 'prc.localhost',
		'ofertasonline' => 'ofertasonline.localhost',
		'javabridge'	=> 'iwdevel.claro.com.br',
		'licitacoes'	=> 'licitacoes.claro.com.br',
		'connectra'		=> '10.1.9.254',
		'sqlplus_mobile' => '/opt/oracle/server/bin/sqlplus',
		'clientes' => array(
			'comunidade_pfpj' => 'localhost_',
			'mysql' => array (
				'connection' => array (
					'host' => 'localhost',
					'user' => 'root',
					'pass' => '',
					'database' => 'iwprd_sys',
					'type' => 'mysqli', // mysqli
					'port' => false, // false
					'socket' => false, // false
				),
				'benchmark' => true, // true
				'persistent' => false, // false
				'character_set' => 'utf8', // utf8
				'table_prefix' => '',
				'object' => true, // true
				'cache' => false, // false
			),
		),
		'iw' => array(
			'host' => 'iw.claro.com.br',
			'mysql' => array (
			'connection'	=> array (
				'host'		=> '10.18.52.174', // brux0395.claro.com.br
				'user'		=> 'root',
				//'pass'	=> 'El3kTr0n1sch33D3utAch_Ubersetzung',
				'pass'		=> 'Pr0vid3r.',
				'database'	=> 'iwprd_sys',
				'type'		=> 'mysqli', // mysqli
				'port'		=> false, // false
				'socket'		=> false, // false
			),
			'benchmark'		=> true, // true
			'persistent'	=> false, // false
			'character_set' => 'utf8', // utf8
			'table_prefix'  => '',
			'object'        => true, // true
			'cache'         => false, // false
			),
		),
		'etl' => array(
			'host' => 'localhost',//'brux0176.claro.com.br',
			'mysql' => array (
				'connection' => array (
				'host' => 'localhost', // brux0395.claro.com.br
				'user' => 'root',// infoweb
				//'pass' => 'El3kTr0n1sch33D3utAch_Ubersetzung',
				'pass' => 'root', //esS1RaT0zf3!ra
				'database' => 'iwprd_sys',
				'type' => 'mysqli', // mysqli
				'port' => false, // false
				'socket' => false, // false
				),
				'benchmark' => true, // true
				'persistent' => false, // false
				'character_set' => 'utf8', // utf8
				'table_prefix' => '',
				'object' => true, // true
				'cache' => false, // false
				),
		),
		'hml01' => array(
			'host' => 'localhost',
			'mysql' => array(
				'connection' => array(
					'host' => 'localhost',
					'user' => 'root',
					'pass' => '',
					'database' => 'iwprd_wfw',
					'type' => 'mysqli', // mysqli
					'port' => false, // false
					'socket' => false, // false
				),
				'benchmark' => true, // true
				'persistent' => false, // false
				'character_set' => 'utf8', // utf8
				'table_prefix' => '',
				'object' => true, // true
				'cache' => false, // false
			),
		),
		'sms' => array(
			'host'		=> 'retail.mds.claro.com.br',
			'port'		=> '443',
			'path'		=> '/MSE/api',
			'use_ssl'	=> true,
			'data_ini'	=> array(
				'profile=SMS_TXT_MELKIH_BRK1',
				'pwd=aaaccc4',
				'mode=assync-delivery',
				'ANUM=27009',
			),
		),
	),
);
?>