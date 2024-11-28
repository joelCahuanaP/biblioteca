       
	   function capturar(){
            //console.log("capturado");
            function Reserva(biblioteca,codigo,tipo,recogo,devolver,estado){
                this.biblioteca = biblioteca;
                this.codigo = codigo;
				this.tipo = tipo;
				this.recogo = recogo;
				this.devolver = devolver;
				this.estado = estado;
            }
			
            var biblioCapturar = document.getElementById("biblioteca").value;
            //console.log(biblioCapturar);
            var codCapturar = document.getElementById("codigo").value;
            //console.log(codCapturar);
			var tipoCapturar = document.getElementById("tipo").value;
			var recogoCapturar = document.getElementById("recogo").value;
			var devolverCapturar = document.getElementById("devolver").value;
			var estadoCapturar = document.getElementById("estado").value;
			
            nuevoSujeto = new Reserva(biblioCapturar,codCapturar,tipoCapturar,recogoCapturar,devolverCapturar,estadoCapturar);
           // console.log(nuevoSujeto);
            agregar();
        }
		
		
        var baseDatos = [];
        function agregar(){
            baseDatos.push(nuevoSujeto);
            //console.log(baseDatos);
            document.getElementById("tabla").innerHTML += '<tbody><td>'+ nuevoSujeto.biblioteca+'</td><td>'+ nuevoSujeto.codigo+'</td><td>'+ nuevoSujeto.tipo+'</td><td>'+ nuevoSujeto.recogo+'</td><td>'+ nuevoSujeto.devolver+'</td><td>'+ nuevoSujeto.estado+'</td></tbody>';
        };