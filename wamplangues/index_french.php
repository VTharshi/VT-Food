<?php
// 3.2.0 - txtProjects
// 3.2.1 - defaultDBMS - HelpMySQLMariaDB
// 3.2.5 - documentation-of ajouté pour les langues le nécessitant
// pour le Français est identique à documentation
// 3.2.6 - txtNoHosts
// 3.2.8 - phpNotExists - txtProjectsLink - phpExtensions - phpVersionsUse
// 3.3.0 - txtPathNoSlash
// 3.3.2 - txtSlashEnd
// 3.3.7 - apacheLoadedModules

$langues = array(
	'langue' => 'Français',
	'locale' => 'french',
	'titreHtml' => 'Accueil WAMPSERVER',
	'titreConf' => 'Configuration Serveur',
	'versa' => 'Version Apache :',
	'doca2.2' => 'httpd.apache.org/docs/2.2/fr/',
	'doca2.4' => 'httpd.apache.org/docs/2.4/fr/',
	'versp' => 'Version de PHP :',
	'server' => 'Server Software :',
	'documentation' => 'Documentation',
	'documentation-of' => 'Documentation',
	'docp' => 'www.php.net/manual/fr/',
	'versm' => 'Version de MySQL :',
	'docm' => 'dev.mysql.com/doc/index.html',
	'versmaria' => 'Version de MariaDB :',
	'docmaria' => 'mariadb.com/kb/fr/documentation-de-mariadb',
	'phpExt' => 'Extensions&nbsp;Chargées&nbsp;:',
	'titrePage' => 'Outils',
	'txtProjet' => 'Vos Projets',
	'txtServerName' => 'Le ServerName %s comporte des erreurs de syntaxe dans le fichier %s',
	'txtDocRoot' => 'Le ServerName %s utilise le DocumentRoot %s réservé à localhost',
	'txtTLDdev' => 'Le ServerName %s utilise le TLD %s qui est accaparé par les navigateurs internet. Utilisez un autre TLD (.test par exemple)',
	'txtNoHosts' => 'Le ServerName %s n\'est pas déclaré dans le fichier hosts.',
	'txtServerNameIp' => 'L\'IP %s du Servername %s n\'est pas valide dans le fichier %s',
	'txtVhostNotClean' => 'Le fichier %s n\'a pas été nettoyé. Il reste des exemples de VirtualHost comme : dummy-host.example.com',
	'txtNoProjet' => 'Aucun projet.<br /> Pour en ajouter un nouveau, créez simplement un répertoire dans \'www\'.',
	'txtProjectsLink' =>'Cependant, vous pouvez utiliser Clic-Droit, Paramètres Wamp, Attention: risqué..., Autoriser Liens sur les projets...',
	'txtProjects' => 'Ce sont vos dossiers dans %s<br />Pour les utiliser comme lien http, il faut les déclarer en tant que VirtualHost',
	'txtAlias' => 'Vos Alias',
	'txtNoAlias' => 'Aucun alias.<br /> Pour en ajouter un nouveau, utilisez le menu de WAMPSERVER.',
	'txtVhost' => 'Vos VirtualHost',
	'txtNoVhost' => 'Aucun VirtualHost. Ajouter-en un par projet dans le fichier : wamp/bin/apache/apache%s/conf/extra/httpd-vhosts.conf',
	'txtNoIncVhost' => 'Décommentez ou ajouter <i>Include conf/extra/httpd-vhosts.conf</i> dans le fichier wamp/bin/apache/apache%s/conf/httpd.conf',
	'txtNoVhostFile' => 'Le fichier : %s n\'existe pas',
	'txtNoPath' => 'Le chemin %s pour %s n\'existe pas (Fichier %s)',
	'txtSlashEnd' => 'Le chemin %s pour %s est terminé par un slash (Fichier %s)',
	'txtPathNoSlash' => 'Le chemin %s pour %s n\'est pas terminé par un slash /',
	'txtNotWritable' => 'Le fichier : %s est en lecture seule',
	'txtNbNotEqual' => 'Le nombre %s ne correspond pas au nombre de %s dans le fichier %s',
	'txtAddVhost' => 'Ajouter un Virtual Host',
	'txtCorrected' => 'Certaines erreurs VirtualHosts pourront être corrigées.',
	'txtPortNumber' => 'Le numéro de port pour %s n\'est pas correct ou ne sont pas identiques dans le fichier %s',
	'forum' => 'Forum Wampserver',
	'forumLink' => 'http://forum.wampserver.com/list.php?1',
	'portUsed' => 'Port défini pour Apache : ',
	'mysqlportUsed' => 'Port défini pour MySQL : ',
	'mariaportUsed' => 'Port défini pour MariaDB : ',
	'defaultDBMS' => 'SGBD par défaut',
	'phpNotExists' => 'La version de PHP n\'existe pas',
	'HelpMySQLMariaDB' => 'Comment utiliser MySQL et/ou MariaDB ?<br>Qu\'est-ce qu\'un SGBD par défaut ?<br>Comment changer de SGDB par défaut ?<br>Aller voir l\'aide afférente : Clic-Droit icône Wampmanager -> Aide -> MariaDB - MySQL',
	'nolocalhost' => 'C\'est une mauvaise idée d\'ajouter localhost dans les url de lancement des projets. Il est préférable de définir des VirtualHost dans le fichier<br />wamp/bin/apache/apache%s/conf/extra/httpd-vhosts.conf<br />et de ne pas ajouter localhost dans les url.',
	'phpExtensions' => 'Extensions PHP chargées',
	'phpVersionsUse' => 'Utilisation versions PHP',
	'apacheLoadedModules' => 'Modules Apache chargés',
	);
?>