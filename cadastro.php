<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>

    <script src="jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#cep").blur(function() {

                $.post("funcao.php", "cep=" + $("#cep").val(), function(data) {

                    if (data != "") {
                        var obj = jQuery.parseJSON(data);
                        $("#cidade").val(obj.localidade);
                        $("#bairro").val(obj.bairro);

                    }

                })

            });
        });
    </script>

</head>

<body>
    <h1>Cadastro de clientes</h1>

    <form action="" method="post">

        CEP: <input type="text" name="cep" id="cep">

        <br>

        CIDADE: <input type="text" name="cidade" id="cidade">

        <br>

        BAIRRO: <input type="text" name="bairro" id="bairro">

        <br>

        <input type="submit" value="Cadastrar">

    </form>

</body>

</html>