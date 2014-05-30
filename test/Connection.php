<?php 

require '../vendor/autoload.php';

use Cagartner\SQLAnywhereClient AS PDO;

try {
	// $dns = "uid=digitalto;pwd=123sql;ENG=CDTESTE;commlinks=tcpip{host=192.168.1.159;port=9505}";
	$dns = "uid=teste-conexao;pwd=teste;ENG=teste-conexao;commlinks=tcpip{host=Carlos.bludata.local;port=2638}";
	$con = new PDO( $dns );

} catch (Exception $e) {
	echo $e->getMessage();
}