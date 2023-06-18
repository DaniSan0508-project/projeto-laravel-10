
    function handleDeleteProduct(produtoId, route) {
        if (confirm('Deseja realmente excluir este item?')) {
            $.ajax({
                url:route,
                method: 'DELETE',
                headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                data: {
                    id:produtoId,
                },
                success: function(response) {
                    alert('Produto excluído com sucesso');
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    alert('Ocorreu um erro ao excluir o produto');
                    console.log(xhr.responseText);
                }
            });
        }
    }

    $(document).ready(function() {
        $('#valor').mask('#.##0,00', {reverse:true})
    });

    $(document).ready(function() {
        $('#cep').inputmask('99999-999');
    });

    $("#cep").blur(function () {
        var cep = $(this).val().replace(/\D/g, '');
        if (cep != "") {
            var validacep = /^[0-9]{8}$/;
            if (validacep.test(cep)) {
                $("#logradouro").val("buscando endereço ...");
                $("#bairro").val("buscando endereço ...");
                $("#endereco").val("buscando endereço ...");
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {
                    if (!("erro" in dados)) {
                        $("#logradouro").val(dados.logradouro.toUpperCase());
                        $("#bairro").val(dados.bairro.toUpperCase());
                        $("#endereco").val(dados.localidade.toUpperCase());
                    }
                    else {
                        alert("CEP não encontrado.");
                    }
                });
            }
        }
    });