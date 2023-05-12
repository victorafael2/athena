<?php
include 'header.php';
include 'navbar.php';

?>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<div class="content">

    <!-- Criar todo conteurdo depois da primeira linha -->

    <div class="container">
        <h2>Formulário</h2>
        <form>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="protocolo">Protocolo:</label>
                    <input type="number" class="form-control" id="protocolo" placeholder="Digite o número do protocolo">
                </div>

                <div class="form-group col-md-4">
                    <div class="form-group">
                        <label>Status:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="retido" value="retido">
                            <label class="form-check-label" for="retido">
                                Retido
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="nao-retido"
                                value="nao-retido">
                            <label class="form-check-label" for="nao-retido">
                                Não Retido
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Classificação:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="classificacao" id="detrator"
                            value="detrator">
                        <label class="form-check-label" for="detrator">
                            Detrator
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="classificacao" id="ouro" value="ouro">
                        <label class="form-check-label" for="ouro">
                            Ouro
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="classificacao" id="prata" value="prata">
                        <label class="form-check-label" for="prata">
                            Prata
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="classificacao" id="bronze" value="bronze">
                        <label class="form-check-label" for="bronze">
                            Bronze
                        </label>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <div class="form-group">
                        <label>Cliente Suspenso:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="c_suspenso" id="suspenso"
                                value="suspenso">
                            <label class="form-check-label" for="suspenso">
                                Sim
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="c_suspenso" id="nao-suspenso"
                                value="nao-suspenso">
                            <label class="form-check-label" for="nao-suspenso">
                                Não
                            </label>
                        </div>
                    </div>
                </div>


                <div class="form-group">
        <label for="select1">Select 1:</label>
        <select class="form-control" id="select1" onchange="updateSelect2Options()">
          <option value="">Selecione</option>
          <option value="Médico">Médico</option>
          <option value="Odonto">Odonto</option>
        </select>
      </div>
      <div class="form-group">
        <label for="select2">Select 2:</label>
        <select class="form-control" id="select2" onchange="updateSelect3Options()">
          <option value="">Selecione</option>
        </select>
      </div>
      <div class="form-group">
        <label for="select3">Select 3:</label>
        <select class="form-control" id="select3">
          <option value="">Selecione</option>
        </select>
      </div>


        </form>


    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

 <!-- Adicione os arquivos JavaScript do Bootstrap e o script personalizado -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
    var select2Options = {
      "Médico": ["Retido","Não Retido"],
      "Odonto": ["Retido","Não Retido"]
    };

    var select3Options = {
      "Não Retido": ["Opção 1.1.1", "Opção 1.1.2", "Opção 1.1.3"],
      "Retido": ["Opção 1.2.1", "Opção 1.2.2", "Opção 1.2.3"],
      "Opção 1.3": ["Opção 1.3.1", "Opção 1.3.2", "Opção 1.3.3"],
      "Opção 2.1": ["Opção 2.1.1", "Opção 2.1.2", "Opção 2.1.3"],
      "Opção 2.2": ["Opção 2.2.1", "Opção 2.2.2", "Opção 2.2.3"],
      "Opção 2.3": ["Opção 2.3.1", "Opção 2.3.2", "Opção 2.3.3"]
    };

    function updateSelect2Options() {
      var select1Value = document.getElementById('select1').value;
      var select2 = document.getElementById('select2');
      var select3 = document.getElementById('select3');

      // Limpar as opções anteriores do select2 e select3
      select2.innerHTML = '<option value="">Selecione</option>';
      select3.innerHTML = '<option value="">Selecione</option>';

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

      // Limpar as opções anteriores do select3
      select3.innerHTML = '<option value="">Selecione</option>';

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
  </script>



<?php include 'footer.php' ?>