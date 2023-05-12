<?php include 'database/databaseconnect.php' ?>

<?php
// Verifica se os dados foram enviados via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta ao banco de dados


    // Verifica se a conexão foi estabelecida com sucesso
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Obtém os dados do formulário
    $protocolo = $_POST["protocolo"];
    $classificacao = $_POST["classificacao"];
    $clienteSuspenso = $_POST["c_suspenso"];
    $select1 = $_POST["select1"];
    $select2 = $_POST["select2"];
    $select3 = $_POST["select3"];
    $select4 = $_POST["select4"];

    // Insere os dados no banco de dados
    $sql = "INSERT INTO formulario (protocolo, classificacao, cliente_suspenso, select1, select2, select3, select4) VALUES ('$protocolo', '$classificacao', '$clienteSuspenso', '$select1', '$select2', '$select3', '$select4')";

    if (mysqli_query($conn, $sql)) {
        echo "Data saved successfully";
        // header('Location: ../');

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

