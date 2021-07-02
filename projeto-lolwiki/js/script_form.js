function formFunctionName(){
    document.getElementById("form-input-name").placeholder = "";
  }
  
  function formFunctionOutName(){
    document.getElementById("form-input-name").placeholder = "Nome de usuário";
  }
  
  function formFunctionPass(){
    document.getElementById("form-input-pass").placeholder = "";
  }
  
  function formFunctionOutPass(){
    document.getElementById("form-input-pass").placeholder = "Senha";
  }
  
  function formFunctionTel(){
    document.getElementById("form-input-tel").placeholder = "";
  }
  
  function formFunctionOutTel(){
    document.getElementById("form-input-tel").placeholder = "Telefone";
  }
  
  function formFunctionEmail(){
    document.getElementById("form-input-email").placeholder = "";
  }
  
  function formFunctionOutEmail(){
    document.getElementById("form-input-email").placeholder = "E-mail";
  }
  
  function formFunctionIdade(){
    document.getElementById("form-input-idade").placeholder = "";
  }
  
  function formFunctionOutIdade(){
    document.getElementById("form-input-idade").placeholder = "18";
  }
  
  
  $(document).ready(function(e){
    $('#add_cidades').hide();
  });
  
  $(document).ready(function(){
    $("#estados").change(function(){
        $('#add_cidades').show();
  
        var valor = $('#estados').val();
        $('#cidades').load('cidades.php?estado=' + valor);
    });
  });