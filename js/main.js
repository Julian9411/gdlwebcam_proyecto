(function (){
    'use strict';

    let regalo = document.querySelector('#regalo');
    document.addEventListener('DOMContentLoaded', function(){

       //campos datos usuario
       let nombre = document.querySelector('#nombre'),
            apellido = document.querySelector('#apellido'),
            email = document.querySelector('#email');
       
        
        //campos pases
        
        let pase_dia = document.querySelector('#pase_dia'),
            pase_2_dias = document.querySelector('#pase_2_dias'),
            todos_los_dias = document.querySelector('#todos_los_dias');

        //botones y divs

        let calcular = document.querySelector('#calcular'),
            errorDiv = document.querySelector('#error'),
            botonRegistro = document.querySelector('#btnregistro'),
            listaProductos = document.querySelector('#lista_productos'),
            suma = document.querySelector('#suma_total');

        //extras

        let etiquetas = document.querySelector('#etiquetas'),
            camisas = document.querySelector('#camisa_evento');
        
        
        pase_dia.addEventListener ('blur', mostrarDias);
        pase_2_dias.addEventListener('blur', mostrarDias);
        todos_los_dias.addEventListener('blur', mostrarDias );
        calcular.addEventListener('click', calcularMontos);
        nombre.addEventListener('blur', error);
        email.addEventListener('blur', validarEmail)
        //Funciones anonimas se llaman automaticamente y no necesitan poner un nombre en la funcion
        apellido.addEventListener('blur', function(){
            if(this.value === '') {
                alert("Escribe tu apellido");
            }
        });
        email.addEventListener('blur', function(){
            if (this.value === '') {
                alert("Escribe tu E-mail");
            }
        })

        function validarEmail(event){
            event.preventDefault();
            if (this.value.indexOf("@") < -1){
                alert("Debe contener almenos un @")
            }
        }

        function error(event){
            event.preventDefault();
           
            if (nombre.value === ''){
                alert("Escribe tu nombre");
                nombre.style.border='1px solid red';
            } else {
                nombre.style.border='1px solid #cccccc';
            }
        }


        function calcularMontos(event){
            event.preventDefault();
            if (regalo.value === '') {
                alert("Debes elegir un regalo");
                regalo.focus();
            } else {
                let boletosDia = parseInt (pase_dia.value, 10) || 0,
                    boletos2Dias = parseInt (pase_2_dias.value, 10)|| 0,
                    boletoCompleto = parseInt (todos_los_dias.value, 10)|| 0,
                    cantCamisas = parseInt (camisas.value, 10)|| 0,
                    cantEtiquetas = parseInt (etiquetas.value, 10)|| 0;

                let totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletoCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

                let listadoProductos = [];

                if(boletosDia >= 1);{
                    listadoProductos.push (boletosDia + ' Pase por día');
                }
                if (boletos2Dias >= 1){
                    listadoProductos.push (boletos2Dias + ' Pase por dos días');
                }
                if (boletoCompleto >=1) {
                    listadoProductos.push (boletoCompleto + ' Pase completo');
                }
                if (cantCamisas >=1) {
                    listadoProductos.push (cantCamisas + ' Camisetas');
                }
                if (cantEtiquetas >=1) {
                    listadoProductos.push (cantEtiquetas + ' Etiquetas');
                }
                listaProductos.style.display="block";

                listaProductos.innerHTML = '';
                for (let i = 0; i < listadoProductos.length; i++){
                    listaProductos.innerHTML += listadoProductos[i] + '<br/>';
                }

                suma.innerHTML = `$  ${totalPagar.toFixed(2)}`;
            };
        }
        function mostrarDias(){
            let boletosDia = parseInt (pase_dia.value, 10) || 0,
                boletos2Dias = parseInt (pase_2_dias.value, 10)|| 0,
                boletoCompleto = parseInt (todos_los_dias.value, 10)|| 0;

            let diasElegidos = [];

            if (boletosDia >= 1) {
                diasElegidos.push('viernes');
                
            }
            
            if (boletos2Dias > 0){
                diasElegidos.push('viernes', 'sabado');
            }
            if (boletoCompleto > 0){
                diasElegidos.push('viernes', 'sabado', 'domingo');
            }
            for (let index = 0; index < diasElegidos.length; index++) {
                document.getElementById(diasElegidos[index]).style.display='block';   
            }
            
            
        }
    });
})();