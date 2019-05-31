<html>
<head>
	<title></title>
	<script type="text/javascript">
		var intervalo = window.setInterval('funcao()',1000);
		var contador = 0;
		var Turno = 0;

		function funcao()
		{ 

			while (contador <= 60)
			{   
				if (contador == 60)
				{
					contador = 0;
					Turno = Turno + 1;
					break;
				}
				elementosHTML = document.getElementsByClassName('contador');
				elementosHTML[0].innerHTML = '   ' + ' ' +contador;

				turnosHTML = document.getElementsByClassName('Turnos');
				turnosHTML[0].innerHTML = ' ' +Turno + '';

				contador++;

				break;
			}
		}   </script>
	</script>
</head>

<body> <center>
	<?php    
	echo "Minutos: <div class='Turnos'></div>";	
	echo "Segundos: <div class='contador'></div>";
	?>
</center>
</body>
</html>