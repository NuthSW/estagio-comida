$(document).ready(function(){

//------ Start busca pelo CEP ------//
    $('#cep').change(function(event) {
        event.preventDefault();
        var cep = $('#cep').val().replace(/\D/g, '');
        
        if (cep.length !== 8) {
          alert('O CEP deve conter 8 dígitos!');
          return;
        }

        $.ajax({
          url: 'https://viacep.com.br/ws/' + cep + '/json/',
          type: 'GET',
          dataType: 'json',
          success: function(data) {
            if (!data.erro) {
              $('#endereco').val(data.logradouro);
              $('#comp1').val(data.complemento);
              $('#bairro').val(data.bairro);
              $('#cidade').val(data.localidade);
              $('#estado').val(data.uf);
            } else {
              alert('Endereço não encontrado!');
            }
          },
          error: function() {
            alert('Ocorreu um erro ao consultar o endereço!');
          }
        });
    });
//------ End busca pelo CEP ------//

//------ Start Insert ------//
    let nome = $('#nome').val();
    let cpf = $('#cpf').val();
    let fone = $('#fone').val();
    let email = $('#email').val();
    let senha = $('#senha').val();
    let cep = $('#cep').val();
    let estado = $('#estado').val();
    let cidade = $('#cidade').val();
    let endereco = $('#endereco').val();
    let numero = $('#numero').val();
    let bairro = $('#bairro').val();
    let comp1 = $('#comp1').val();
    let comp2 = $('#comp2').val();
//------ End Insert ------//
})