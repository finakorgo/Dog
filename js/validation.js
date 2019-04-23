function validate(){
    //Variables to receive data from servForm.
    var nome     = servForm.nome.value;
    var endereco = servForm.endereco.value;
    var cidade   = servForm.cidade.value;
    var estado   = servForm.estado.value;
    var celular  = servForm.celular.value;
    var email    = servForm.email.value;
    var servico  = servForm.servico.value;
    
    //check the fill of the formdata servForm.
    if(nome == ""){
        alert('Por gentileza, preencha o campo nome.');
        servForm.nome.focus();
        return false;
    }
    
    if(endereco == ""){
        alert('Por gentileza, preencha o campo endereço.');
        servForm.endereco.focus();
        return false;
        
    }
    
    if(cidade == ""){
        alert('Por gentileza, preencha o campo cidade.');
        servForm.cidade.focus();
        return false;
    }
    
    if(estado == "" || estado.length != 2){
        alert('Por gentileza, preencha o campo estado somente com a sigla(2 letras)');
        servForm.estado.focus();
        return false;
    }
    
    if(celular == "" || celular.length > 14){
        alert('Por gentileza, preencha o campo telefone *|* celular com no máximo 14 caracteres');
        servForm.celular.focus();
        return false;
        
    }
    
    if(email == "" || email.indexOf('@') == -1){
        alert('Por gentileza, preencha o campo email sem esquecer do @ .');
        servForm.email.focus();
        return false;
    }
    
    if(servico == ""){
        alert('Por gentileza, selecione o serviço.');
        servForm.servico.focus();
        return false;        
    }else {
        alert(nome + ',  os seus dados foram preenchidos corretamente. \n O formulário será enviado!');
        return true;
    }
    
} 