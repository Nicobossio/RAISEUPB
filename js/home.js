
/* hacer que el input muestre como VALOR  el grupo seleccionado y si no selecciona nada no dejar que publique como grupo*/


function getSelectValue(){
    var selectedValue = document.getElementById('grupo').value;
    document.getElementById('input-lider').value = "-lider de grupo ";
    document.getElementById('input-grupo').value = selectedValue;
}


function abrir(){
    if (document.getElementById('grupal').checked){
        document.getElementById('input-lider').classList.add('show');
        document.getElementById('input-grupo').classList.add('show');
        document.getElementById('modal-container').classList.add('show');
        document.getElementById('textarea').placeholder ='Publica las iniciativas tecnologicas de tu grupo';
        



    }
}

function cerrar(){
    var grupo = document.getElementById('grupo');
    if(grupo.value =="no" || grupo.value ==""){
        alert("seleccione un grupo si no es dueno de uno no puede publicar iniciativas");
        document.getElementById('modal-container').classList.remove('show');
        document.getElementById('personal').checked = true;
        document.getElementById('textarea').placeholder ='Comparte tus ideas';
        
        document.getElementById('input-lider').classList.remove('show');
        document.getElementById('input-grupo').classList.remove('show');
        grupo.focus();
        
    }else
    alert("grupo seleccionado")

    grupo.focus()
    if(document.getElementById('entendido').click){

        document.getElementById('modal-container').classList.remove('show');
    }
}

function checkPersonal(){
    if(document.getElementById('cancelar').click){
        document.getElementById('modal-container').classList.remove('show');
        document.getElementById('personal').checked = true;
        document.getElementById('textarea').placeholder ='Comparte tus ideas';
        
        document.getElementById('input-lider').classList.remove('show');
        document.getElementById('input-grupo').classList.remove('show');

    }
}


function personal(){
    if (document.getElementById('personal').checked){
        document.getElementById('textarea').placeholder ='Comparte tus ideas';
        
        document.getElementById('input-lider').classList.remove('show');
        document.getElementById('input-grupo').classList.remove('show');

    }
}

