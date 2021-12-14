
<script>


    $(document).ready(function(){
        //CREATE
        $("#salvar_cadastro").on('click',function(){

            $.ajax({
                url: 'database.php',
                type: 'POST',
                data:{
                    name:$("#name_client").val(),
                    email:$("#email_client").val(),
                    password:$("#password_client").val()
                },
                beforeSend: function(){
                    $("#mensagens").html("Carregando...");
                },
                success:function(data){
                    $("#mensagens").html(data);
                },
                error:function(data){
                    $("#mensagens").html("Não conseguimos encontrar a página database!");
                }
            });
        });

    });



</script>