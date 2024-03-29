<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PPGES - Alunos</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
<?php
include("header.html");
?>
        <section class="clean-block clean-info dark" id="next-section" style="padding-bottom: 0px;background-color: transparent;">
            <div class="container">
                <div class="block-heading" style="padding-top: 25px;">
                    <h1 style="border-bottom: 1px solid rgba(0,0,0,.1);padding-bottom: 20px;">Alunos do Mestrado</h1>
                    
                    
                    <div class="table-responsive" style="margin-bottom: 30px;">
                        <h3 style="text-align: left; margin-top: 20px; cursor: pointer;" onclick="showTable('tabela1', 'primeirosemestre'), showBorder('primeirosemestre')">1º Semestre de 2019</h3>
                        <h6 id="primeirosemestre" class="text-left d-sm-flex bordering" style="font-size: 16px;color: rgba(33,37,41,0.66); cursor: pointer; padding-bottom: 20px" onclick="showTable('tabela1', 'primeirosemestre'), showBorder('primeirosemestre')" >Visualizar</h6>
                
                        <table id="tabela1" class="table-bordered" style="width: 100%; margin: auto; margin-top: 20px; display: none;">
                            <thead>
                                <tr>
                                    <th>
                                        Número
                                    </th>
                                    <th>
                                       Nome do Aluno
                                    </th>
                                    <th>
                                        Orientador
                                    </th>
                                    </thead>
                                    <tbody>
                                            <tr>
                                            <td>
                                            <p dir="ltr">1</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Miguel da Silva Ecar</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">João Pablo Silva da Silva</p>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                            <p dir="ltr">2</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Luciano Augusto Marchezan de Paula</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Elder de Macedo Rodrigues</p>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                            <p dir="ltr">3</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Rumenigue Hohemberger</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Marcelo Caggiani Luizelli</p>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                            <p dir="ltr">4</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Thiarles Soares Medeiros</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Arthur Francisco Lorenzon</p>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                            <p dir="ltr">5</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Guilherme Legramante Martins</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Maicon Bernardino da Silveira</p>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                            <p dir="ltr">6</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Giovane Davila Mendonça</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Gilleanes Thorwald Araujo Guedes</p>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                            <p dir="ltr">7</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Daniel Chaves Temp</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Rodrigo Brandão Mansilha</p>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                            <p dir="ltr">8</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Maurício Martinuzzi Fiorenza</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Diego Luis Kreutz</p>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                            <p dir="ltr">9</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Luiz Daniel Garay Trindade</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Fábio Paulo Basso</p>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                            <p dir="ltr">10</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Luis Guilherme Pires Moura</p>
                                            </td>
                                            <td>
                                            <p dir="ltr">Claudio Schepke</p>
                                            </td>
                                            </tr>
                                            </tbody>
                                </tr>
                               
                        </table>

                        
            </div>

            <div class="table-responsive" style="margin-bottom: 30px;">
                    <h3 style="text-align: left; margin-top: 20px; cursor: pointer;" onclick="showTable('tabela2', 'segundoosemestre'), showBorder('segundosemestre')">2º Semestre de 2019</h3>
                    <h6 id="segundosemestre" class="text-left d-sm-flex bordering" style="font-size: 16px;color: rgba(33,37,41,0.66); cursor: pointer; padding-bottom: 20px" onclick="showTable('tabela2', 'segundosemestre'), showBorder('segundosemestre')" >Visualizar</h6>
              
                    <table id = "tabela2" class="table-bordered" style="width: 100%; margin: auto; margin-top: 20px; display: none;">
                        <thead> 
                            <tr>
                                <th>
                                    Número
                                </th>
                                <th>
                                   Nome do Aluno
                                </th>
                                <th>
                                    Orientador
                                </th>
                                </tr>
                        </thead>
                                        <tbody>
                                                <tr>
                                                <td>
                                                <p dir="ltr">1</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Ana Claudia Ximenes de Lima</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Fábio Paulo Basso</p>
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                <p dir="ltr">2</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Angelo Geovanni Amaral Menezes</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Claudio Schepke</p>
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                <p dir="ltr">3</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Giulliano Lyra Paz</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Diego Luis Kreutz</p>
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                <p dir="ltr">4</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Gustavo Paim Berned</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Arthur Francisco Lorenzon</p>
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                <p dir="ltr">5</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Henrique Nattrodt Thomé</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Maicon Bernardino da Silveira</p>
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                <p dir="ltr">6</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">João Batista Pedroso Carbonell</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Elder de Macedo Rodrigues</p>
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                <p dir="ltr">7</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Murilo da Rosa Bianchin</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">João Pablo Silva da Silva</p>
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                <p dir="ltr">8</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Pablo Brauner Viegas</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Marcelo Caggiani Luizelli</p>
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                <p dir="ltr">9</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Rafael Duarte Beltran</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Rodrigo Brandão Mansilha</p>
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                <p dir="ltr">10</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Róger Augusto Dámbros Canabarro</p>
                                                </td>
                                                <td>
                                                <p dir="ltr">Gilleanes Thorwald Araujo Guedes</p>
                                                </td>
                                                </tr>
                                                </tbody>
                    </table>
        </div>
    
        </section>
        
    </main>
    <footer class="page-footer dark" style="padding-top: 0px;">
        <div class="footer-copyright">
            <p><br>© 2014 Universidade Federal do Pampa - UNIPAMPA<br><br></p>
        </div>
    </footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="myscript.js"></script>
    </body>

</html>