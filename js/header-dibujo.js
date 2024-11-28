

     var arrayimg=["libro1.jpg","unfvdibujo2_.jpg","unfv2.jpg","bibliotecavirtual.jpg"]
	 var imgactual=0;
	 
	 document.getElementById("anterior").addEventListener("click",cambiarImagen);
	 document.getElementById("siguiente").addEventListener("click",cambiarImagen); 
	 
	 function cambiarImagen(){
	 var boton=this.id;
	 
	 if(boton='anterior'){
	    imgactual--;
		if(imgactual<0){
		   imgactual=arrayimg.length-1;
		}
	}else{
		 imgactual++;  
		 if(imgactual==arrayimg.length){
		   imgactual=0;
		  }
		 }
		 
	 var imgMostrar= arrayimg[imgactual];
     
     document.getElementById('imagen').src= '../imagenes/'+imgMostrar; 
	  }