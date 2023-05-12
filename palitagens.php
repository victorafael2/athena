<?php
include 'header.php';
include 'navbar.php';

?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<div class="content">

    <!-- Criar todo conteurdo depois da primeira linha -->

    <div class="container">
        <h2>Formulário</h2>
        <form id="form">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="protocolo">Protocolo:</label>
                    <input type="number" class="form-control" id="protocolo" name="protocolo" placeholder="Digite o número do protocolo">
                </div>


<hr>
                <div class="form-group">
                    <label>Classificação:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="classificacao" id="detrator"
                            value="detrator">
                        <label class="form-check-label" for="detrator">Detrator</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="classificacao" id="ouro" value="ouro">
                        <label class="form-check-label" for="ouro">Ouro</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="classificacao" id="prata" value="prata">
                        <label class="form-check-label" for="prata">Prata</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="classificacao" id="bronze" value="bronze">
                        <label class="form-check-label" for="bronze">Bronze</label>
                    </div>
                </div>
<hr>
                <div class="form-group">
                    <label>Cliente Suspenso:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="c_suspenso" id="suspenso" value="suspenso">
                        <label class="form-check-label" for="suspenso">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="c_suspenso" id="nao-suspenso"
                            value="nao-suspenso">
                        <label class="form-check-label" for="nao-suspenso">Não</label>
                    </div>
                </div>

<hr>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="select1">Select 1:</label>
                            <select class="form-control" id="select1" name="select1" onchange="updateSelect2Options()">
                                <option value="">Selecione</option>
                                <option value="Médico">Médico</option>
                                <option value="Odonto">Odonto</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="select2">Select 2:</label>
                            <select class="form-control" id="select2" name="select2" onchange="updateSelect3Options()">
                                <option value="">Selecione</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="select3">Select 3:</label>
                            <select class="form-control" id="select3" name="select3">
                                <option value="">Selecione</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="select4">Select 4:</label>
                            <select class="form-control" id="select4" name="select4">
                                <option value="">Selecione</option>
                            </select>
                        </div>
                    </div>
                </div>







    </div>
    <button type="submit" class="btn btn-primary" id="enviar">Enviar</button>

    </form>
</div>



<!-- Adicione os arquivos JavaScript do Bootstrap e o script personalizado -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
var select2Options = {
    "Médico": ["Retido", "Não Retido"],
    "Odonto": ["Retido", "Não Retido"]
};

var select3Options = {
    "Não Retido": ["Obito",
        "Desempregado",
        "Dificuldade Financeira",
        "Insatisfação com Agendas Médicas",
        "Insatisfação com Autorização",
        "Insatisfação com o Preço",
        "Motivos Pessoais",
        "Mudança de Estado ou País",
        "Não Quis Ouvir a Oferta",
        "Não Utiliza o Plano",
        "Sem Interesse na Oferta",
        "Troca de Plano na Operadora",
        "Cliente Detrator - Sem oferta"
    ],
    "Retido": ["Adimplente", "Inadimplente", "Downgrade de Plano", "Argumentação", "Motivos Diversos"],

};

var select4Options = {
    "Obito": ["Obito"],
    "Desempregado": ["Desempregado"],
    "Dificuldade Financeira": ["Dificuldade Financeira"],
    "Insatisfação com Agendas Médicas": ["Insatisfaçao com Agendas Médicas"],
    "Insatisfação com Autorização": ["Insatisfação com Autorização"],
    "Insatisfação com o Preço": ["Insatisfação com o Preço"],
    "Motivos Pessoais": ["Motivos Pessoais"],
    "Mudança de Estado ou País": ["Mudança de Estado ou País"],
    "Não Quis Ouvir a Oferta": ["Não Quis Ouvir a Oferta"],
    "Não Utiliza o Plano": ["Não Utiliza o Plano"],
    "Sem Interesse na Oferta": ["Sem Interesse na Oferta"],
    "Troca de Plano na Operadora": ["Troca de Plano na Operadora"],
    "Cliente Detrator - Sem oferta": ["Cliente Detrator - Sem oferta"],
    "Adimplente": ["Desconto 10%", "Desconto 15%", "Desconto 20%", "Desconto 30%", "Desconto 50%", "Com Utilização",
        "Sem Ultilização"
    ],
    "Inadimplente": ["Desconto 15%", "Desconto 20%", "Desconto 25%", "Desconto 30%", "Desconto 40%", "Desconto 50%",
        "com 1 parcela", "com 3 parcelas ou mais"
    ],
    "Downgrade de Plano": ["Downgrade de Plano"],
    "Argumentação": ["Argumentação"],
    "Motivos Diversos": ["Motivos Diversos"],







};

function updateSelect2Options() {
    var select1Value = document.getElementById('select1').value;
    var select2 = document.getElementById('select2');
    var select3 = document.getElementById('select3');
    var select4 = document.getElementById('select4');

    // Limpar as opções anteriores do select2, select3 e select4
    select2.innerHTML = '<option value="">Selecione</option>';
    select3.innerHTML = '<option value="">Selecione</option>';
    select4.innerHTML = '<option value="">Selecione</option>';

    // Verificar se a escolha do select1 é válida
    if (select1Value && select2Options[select1Value]) {
        var options = select2Options[select1Value];

        // Adicionar as opções ao select2
        for (var i = 0; i < options.length; i++) {
            var option = document.createElement('option');
            option.value = options[i];
            option.text = options[i];
            select2.appendChild(option);
        }
    }
}

function updateSelect3Options() {
    var select2Value = document.getElementById('select2').value;
    var select3 = document.getElementById('select3');
    var select4 = document.getElementById('select4');

    // Limpar as opções anteriores do select3 e select4
    select3.innerHTML = '<option value="">Selecione</option>';
    select4.innerHTML = '<option value="">Selecione</option>';

    // Verificar se a escolha do select2 é válida
    if (select2Value && select3Options[select2Value]) {
        var options = select3Options[select2Value];

        // Adicionar as opções ao select3
        for (var i = 0; i < options.length; i++) {
            var option = document.createElement('option');
            option.value = options[i];
            option.text = options[i];
            select3.appendChild(option);
        }
    }
}

function updateSelect4Options() {
    var select3Value = document.getElementById('select3').value;
    var select4 = document.getElementById('select4');

    // Limpar as opções anteriores do select4
    select4.innerHTML = '<option value="">Selecione</option>';

    // Verificar se a escolha do select3 é válida
    if (select3Value && select4Options[select3Value]) {
        var options = select4Options[select3Value];

        // Adicionar as opções ao select4
        for (var i = 0; i < options.length; i++) {
            var option = document.createElement('option');
            option.value = options[i];
            option.text = options[i];
            select4.appendChild(option);
        }
    }
}

// Chamar a função updateSelect4Options() quando o select3 for alterado
document.getElementById('select3').addEventListener('change', updateSelect4Options);
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
$(document).ready(function() {
  $("#form").submit(function(e) {
    e.preventDefault(); // Impede que o formulário seja enviado normalmente
    var formData = $(this).serialize(); // Serializa os dados do formulário

    $.ajax({
      type: "POST",
      url: "salvar_palitagens.php",
      data: formData,
      success: function(response) {
        if (response == "success") {
          Swal.fire({
            title: 'Erro',
            text: 'Ocorreu um erro ao salvar os dados!',
            icon: 'error',
            confirmButtonText: 'OK'
          });
        } else {
          Swal.fire({
            title: 'Parabéns',
            text: 'Palitagem realizada com sucesso!',
            icon: 'success',
            confirmButtonText: 'OK'
          }).then((result) => {
            if (result.isConfirmed) {
              location.href = 'palitagens.php';
            }
          });
        }
      }
    });
  });
});
</script>


<?php include 'footer.php' ?>