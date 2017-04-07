$(document).ready(function() {

$(function() {
	$(document).on("click", "#pacientes", function(){inicial(this); });
	$(document).on("click", "#pagina", function(){inicial(this); });
	$(document).on("click", "#novo", function(){novo(this); });
  $(document).on("click", "#salvar-criar", function(){criar(this); });
  $(document).on("click", "#salvar-editar", function(){editar(this); });

});

    function inicial(){
       $.ajax({
    	url: 'view/contatos.php',
    	type: 'GET',
    	success: function(data){
    		$("#conteudo").html(data);
    	}
    });
}

    function novo(){
       $.ajax({
    	url: 'view/criar.php',
    	type: 'GET',
    	success: function(data){
    		$("#conteudo").html(data);
    	}
    });
}
    function criar() {
       var nome = $('#nome').val();
       var mae = $('#mae').val();
       var nasc = $('#nasc').val();
       var sexo = $('#sexo').val();
       var cpf = $('#cpf').val();
       var rg = $('#rg').val();
       var titulo = $('#titulo').val();
       var sus = $('#sus').val();
       var rua = $('#rua').val();
       var quadra = $('#quadra').val();
       var numero = $('#numero').val();
       var bairro = $('#bairro').val();
       var cep = $('#cep').val();
       var telefone = $('#telefone').val();
       var celular = $('#celular').val();
       var email = $('#email').val();
       var assunto = $('#assunto').val();

        $.ajax({
        url: 'model/criar.php',
        type: 'POST',
        data: {nome: nome, mae: mae, nasc: nasc, sexo: sexo, cpf: cpf, rg: rg, titulo: titulo, sus: sus, rua: rua, quadra: quadra, numero: numero, bairro: bairro, cep: cep, telefone: telefone, celular: celular, email: email, assunto: assunto},
        success: function(data){
                   $.ajax({
                        url: 'view/contatos.php',
                        type: 'GET',
                        success: function(data){
                        $("#conteudo").html(data);
                        }
                    });
            }
        });
}

    function editar() {
       var id = $('#id').val();
       var nome = $('#nome').val();
       var mae = $('#mae').val();
       var nasc = $('#nasc').val();
       var sexo = $('#sexo').val();
       var cpf = $('#cpf').val();
       var rg = $('#rg').val();
       var titulo = $('#titulo').val();
       var sus = $('#sus').val();
       var rua = $('#rua').val();
       var quadra = $('#quadra').val();
       var numero = $('#numero').val();
       var bairro = $('#bairro').val();
       var cep = $('#cep').val();
       var telefone = $('#telefone').val();
       var celular = $('#celular').val();
       var email = $('#email').val();
       var assunto = $('#assunto').val();

        $.ajax({
        url: 'model/atualizar.php',
        type: 'POST',
        data: {id: id, nome: nome, mae: mae, nasc: nasc, sexo: sexo, cpf: cpf, rg: rg, titulo: titulo, sus: sus, rua: rua, quadra: quadra, numero: numero, bairro: bairro, cep: cep, telefone: telefone, celular: celular, email: email, assunto: assunto},
        success: function(data){
                      $.ajax({
                        url: 'view/contatos.php',
                        type: 'GET',
                        success: function(data){
                        $("#conteudo").html(data);
                        }
                    });
            }
        });
}


});