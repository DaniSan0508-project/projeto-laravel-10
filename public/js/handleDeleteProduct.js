
    function handleDeleteProduct(produtoId, route) {
        if (confirm('Deseja realmente excluir este produto?')) {
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