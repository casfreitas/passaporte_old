
<html lang="pt-BR">
<!-- VERSÃO 02 -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulário</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>


</head>

<body class="text-center">
<nav class="navbar navbar-inverse">

    <div class="container-fluid">
        <p class="topo">Passaporte Bahiana Covid-19</p>
    </div>
</nav>



<div>
        <!-- VERSÃO 02 -->

    <div class="alert alert-danger" id="error" style="visibility: hidden">
        <strong>Seu CPF não foi encontrado em nossa base</strong>
    </div>




    <form method="POST" action="https://passaporte.bahiana.edu.br/check" accept-charset="UTF-8" class="form-signin" id="meio"><input name="_token" type="hidden" value="HjSQJdx00YNSyQ8vRZm4vPujfvkrkjmBMEZy2WvM">

    <img class="mb-4" src="img/logo.png" alt="Logo Bahiana" >

    <label for="perfil" class="sr-only">Perfil</label>
    <select id="sel_perfil" name="sel_perfil" class="custom-select" required>
        <option value="" selected>Selecione seu Perfil</option>
        <option value="1">Colaborador(a) / Professor(a)</option>
        <option value="2">Aluno(a)</option>
        <option value="3">Profissional PJ</option>
        <option value="4">Terceirizado</option>
        <option value="5">Pesquisador Visitante</option>
        <option value="6">Discente Visitante</option>
        <option value="7">NEOJIBA (todos)</option>
        <option value="8">Colaborador(a) HHCL</option>

    </select>

    <label for="cpf" class="sr-only">CPF</label>

    <input type="text" id="frmCpf" class="form-control" name="frmCpf" placeholder="Informe o CPF" required/>

    <div class="checkbox mb-3">

        <div class="form-group">
          <a href="./termo/politica_privacidade.pdf">Política de privacidade</a>

          <!--  MENSAGEM: Seu CPF não foi encontrado em nossa base --> 

          <!--
          <textarea class="form-control" id="Textarea1" rows="5" >
          O presente Termo de Aceite é um acordo vinculativo entre o usuário e este site, que abrange todo o seu acesso e uso, o que inclui todas as informações, dados, ferramentas, produtos, serviços e outros
          conteúdos disponíveis por meio deste. Ao utilizar este site, o usuário confirma que compreende e concorda com as seguintes regras dispostas:
          1. Respeito às Leis:
          1.1. O usuário deverá acessar o site www.coronavirus.pr.gov.br apenas para finalidade lícitas;
          1.2. O usuário concorda em utilizar o site apenas para os devidos fins e em conformidade com o presente Termo e limitações legais, bem como quaisquer políticas aplicáveis no Brasil;
          1.3. A Alteração não autorizada dos conteúdos desse site é “expressamente” proibida.
          2. Responsabilidade pelo conteúdo:
          2.1. O usuário concorda que é o único responsável pela sua própria conduta e pela veracidade das
          informações fornecidas enquanto utilizar o serviço e que é responsável pelas consequências que
          resultem do fornecimento intencional de dados incorretos;
        </textarea>
      -->
        </div>
        <label>

            <input type="checkbox" name="habi" id="habi" onClick="HabiDsabi()"> Li e concordo  </input> 
        </label>
    </div>

    <button class="btn btn-success" type="submit" name="entrar" id="entrar" value="entrar" disabled> ENTRAR</button>

</form>




<script type="text/javascript">

    $(function(){
        $("#frmCpf").inputmask({
            mask: "999.999.999-99"
        });

        $("#frmNumero").inputmask();
    });


    function HabiDsabi(){

        if(document.getElementById('habi').checked == true){    document.getElementById('entrar').disabled = ""  }
        if(document.getElementById('habi').checked == false){    document.getElementById('entrar').disabled = "disabled"  }
    }
    HabiDsabi();


    function findGetParameter(parameterName) {
        var result = null,
                tmp = [];
        location.search
                .substr(1)
                .split("&")
                .forEach(function (item) {
                    tmp = item.split("=");
                    if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
                });
        return result;
    }
   if(findGetParameter('msg')==1){
       document.getElementById('error').style = "visibility: visible";
   }


</script>

    </div>


<footer class="page-footer font-small blue fixed-bottom">

    <div class="footer-copyright text-center py-3">Escola Bahiana de Medicina e Saúde Pública.</div>

</footer>


</body>
</html>





