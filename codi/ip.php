<html>
<head>
	<title>EXECUCIÓ DE LA SUMA DE 2 OPERANDS</title>
</head>
	<body>
		<p><u>RESULTAT DE L'OPERACIÓ SUMA DEL 2 OPERANDS INTRODUITS AL FORMULARI</u></p>		
		<?php
			#Obtenció del primer operand
            require_once(__DIR__ . '/vendor/autoload.php');
			if ($_GET["op1"] =="") {
				$operand1 = 0;
			}
			else{
				$operand1 = $_GET["op1"];
			}
			#
			#Obtenció del segon operand
			if ($_GET["op2"] =="") {
				$operand2 = 0;
			}
			else{
				$operand2 = $_GET["op2"];
			}
			#
            $sub = new IPv4\SubnetCalculator($operand1, $operand2);

            #Adreça de subxarxa
            $ipAddress = $sub->getIPAddress();        // 192.168.112.203
            echo "L'adreça IP és $ipAddress/".$operand2."<br><br>";

            #Network
			$network = $sub->getNetworkPortion();
            echo "Network: $network/".$operand2."<br><br>";

            #Broadcast
			$broadcastAddress = $sub->getBroadcastAddress();
			echo "El broadcast és $broadcastAddress<br><br>";
			
            #Rango de IP
            $addressableHostRange  = $sub->getAddressableHostRange();
			echo "Els rangs són ".$addressableHostRange[0]."/".$operand2." fins a ".$addressableHostRange[1]."/".$operand2."<br><br>";

		
		?>
		<a href="ip.html">Torna a la pàgina anterior</a>
	</body>
</html>