<?php 
    require_once 'header.php';
?>
<main>
    <div class="row">

        <div class="col s12 php-form">
            <div class="capa-gradient">
                <div class="details">
                    <div class="deta">
                        <?php 
                    $nome     = $_POST['nome'];
                    $endereco = $_POST['endereco'];
                    $cidade   = $_POST['cidade'];
                    $estado   = $_POST['estado'];
                    $celular  = $_POST['celular'];
                    $email    = $_POST['email']; 
                    $servico  = $_POST['servico'];
       
                    echo "<fieldset>";
                    echo "<h5>Serviços *|* Vet =^.^= Dog </h5><br>";
                    echo " <p>Nome: $nome .</p>";
                    echo " <p>Endereço: $endereco .</p>";
                    echo " <p>Cidade: $cidade .</p>";
                    echo " <p>Estado: $estado .</p>";
                    echo " <p>Seus dados para contato são:</p>";
                    echo " <p>E-mail: $email </p>";
                    echo " <p>Telefone: $celular</p>";
                    echo " <p>O serviço escolhido foi:<strong> $servico </strong>. </p>";
                         
                ?>
                        <p>Prezado Sr(a) <?php echo $nome;?>, entraremos em contanto em breve, via Whatsapp ou telefone, para agendarmos o seu serviço. Agradecemos a preferência.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>



<?php
    require_once 'footer.php';
?>
