<?php
    require_once 'header.php';
?>
    <main>
        <div class="row">
           
            <div class="col s12">
                 <div class="separator"></div>
                 <div class="form-image"></div> 
                 <div class="separator"></div>              
            </div>
            

            <div class="container">
                <div class="col s12 text-form">
                    <h5 class="light">Serviços</h5>
                    <p>A Clínica Vet Dog oferece todos os serviços necessários à preservação da saúde de pequenos animais. Disponibilizamos desde a primeira consulta de orientações à "família de primeira viagem" sobre cuidados com o filhote, até internações de pacientes críticos e cirurgias complexas, com pós-operatório monitorado. <br><br> Preencha os dados e solicite os serviços desejados no formulário abaixo: </p>
                </div>
                <div class="col s12 form">
                    <fieldset>
                        <form action="action.php" method="post" name="servForm" onSubmit="return(validate())">
                            Nome:<input type="text" name="nome" id="nome">
                            <p>
                                Endereço: <input type="text" name="endereco" id="endereco">
                                <p>
                                    Cidade: <input type="text" name="cidade" id="cidade">
                                    <p>
                                        Estado: <input type="text" name="estado" id="estado">
                                        <p>
                                            Telefone (DDD)0000-0000 *|* Celular (DDD)00000-0000: <input type="text" name="celular" id="celular">
                                            <p>
                                                Email: <input type="text" name="email" id="email">
                                                <p>

                                                    <div class="input-field col s12">
                                                        <select name="servico">
                                              <option value="" disabled selected>Escolha o Serviço:</option>
                                              <option value="Banho e Tosa">Banho e Tosa</option>
                                              <option value="Vacinação">Vacinação</option>
                                              <option value="Atendimento de Urgência">Atendimento de Urgência</option>
                                              <option value="Hotelzinho">Hotelzinho</option>
                                            </select>
                                                        <label class="label">Serviços:</label>
                                                    </div>
                                                    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                                                      <i class="fas fa-arrow-alt-circle-right"></i>
                                                    </button>
                                                    <button class="btn waves-effect waves-light orange" type="reset" name="action">Limpar&nbsp;<i class="fas fa-trash"></i></button>


                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('select').formSelect();
            });

        </script>
    </main>
    <?php
    require_once 'footer.php';
?>
