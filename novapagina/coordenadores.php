<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PPGES - Coordenação</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
<?php
include("header.html");
?>
        <section class="clean-block clean-info dark" id="next-section"
            style="padding-bottom: 0px;background-color: transparent;">
            <div class="container">
                <div class="block-heading" style="padding-top: 25px;">
                    <h1 style="border-bottom: 1px solid rgba(0,0,0,.1);padding-bottom: 20px;">Coordenação
                    </h1>

                </div>

                <div style="border-bottom: 1px solid rgba(0,0,0,.09); padding-bottom: 20px;">
                <h3 class="text-left text-dark" style="padding-top: 20px">Coordenador:</h3>
                <h6 class="text-left text-dark">Prof. Dr. Elder de Macedo Rodrigues</h6>
                <h6 class="text-left text-dark">Contato: elderrodrigues@unipampa.edu.br</h6>

                </div>

                <div style="border-bottom: 1px solid rgba(0,0,0,.09); padding-bottom: 20px;">
                <h3 class="text-left text-dark" style="padding-top: 20px">Coordenador Substituto:</h3>
                <h6 class="text-left text-dark">Prof. Dr. Fábio Paulo Basso</h6>
                <h6 class="text-left text-dark">Contato: fabiobasso@unipampa.edu.br</h6>
                </div>

                <div style="border-bottom: 1px solid rgba(0,0,0,.09); padding-bottom: 20px;">
                <h3 class="text-left text-dark" style="padding-top: 20px">Comissão de Pós-Graduação:</h3>
                <div class="table-responsive" style="margin-bottom: 30px;">
                        <h5 style="text-align: left; margin-top: 20px; cursor: pointer;" onclick="showTable('titulares', 'tit'), showBorder('tit')">Membros Titulares:</h5>
                        <h6 id="tit" class="text-left d-sm-flex bordering" style="font-size: 16px;color: rgba(33,37,41,0.66); cursor: pointer; padding-bottom: 20px" onclick="showTable('titulares', 'tit'), showBorder('tit')" >Visualizar</h6>
                
                        <table id="titulares" class="table-bordered" style="width: 100%; margin: auto; margin-top: 20px; display: none; text-align: center;">
                            <thead>
                                <tr>
                                    <th>
                                        Membro
                                    </th>
                                    <th>
                                        Contato
                                    </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Prof. Dr. Rodrigo Brandão Mansilha
                                            </td>
                                            <td>rodrigomansilha@unipampa.edu.br</td>
                                        </tr>
                                        <tr>
                                            <td>Prof. Dr. João Pablo Silva da Silva</td>
                                            <td>joaosilva@unipampa.edu.br</td>
                                        </tr>
                                        <tr>
                                            <td>Prof. Dr. Arthur Francisco Lorenzon</td>
                                            <td>arthurlorenzon@unipampa.edu.br</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Prof. Dr. Gilleanes Thorwald Araujo Guedes
                                            </td>
                                            <td>gilleanesguedes@unipampa.edu.br</td>
                                        </tr>
                                    </tbody>
                                </tr>
                               
                        </table>

                        
            </div>
            <div class="table-responsive" style="margin-bottom: 30px;">
                    <h5 style="text-align: left; cursor: pointer;" onclick="showTable('suplentes', 'sup'), showBorder('sup')">Membros Suplentes:</h5>
                    <h6 id="sup" class="text-left d-sm-flex bordering" style="font-size: 16px;color: rgba(33,37,41,0.66); cursor: pointer; padding-bottom: 20px" onclick="showTable('suplentes', 'sup'), showBorder('sup')" >Visualizar</h6>
            
                    <table id="suplentes" class="table-bordered" style="width: 100%; margin: auto; margin-top: 20px; display: none; text-align: center;">
                        <thead>
                            <tr>
                                <th>
                                    Membro
                                </th>
                                <th>
                                    Contato
                                </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Prof. Mr. Diego Luis Kreutz
                                        </td>
                                        <td>diego.kreutz@unipampa.edu.br</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Dr. Maicon Bernardino da Silveira</td>
                                        <td>bernardino@unipampa.edu.br</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Dr. Marcelo Caggiani Luizelli</td>
                                        <td>mcluizelli@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>
                                        Prof. Dr. Claudio Schepke
                                        </td>
                                        <td>claudioschepke@unipampa.edu.br</td>
                                    </tr>
                                </tbody>
                            </tr>
                           
                        </table>      
        </div>
        
        <table id="bolsas" class="table-bordered" style="width: 100%; margin: auto; margin-top: 20px; text-align: center;">
                <thead>
                    <tr>
                        <th>
                                Comissão de Bolsas
                        </th>
                        <th>
                                Comissão Acompanhamento da Produção Docente
                        </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Elder de Macedo Rodrigues
                                </td>
                                <td>Fábio Paulo Basso</td>
                            </tr>
                            <tr>
                                <td>Gilleanes Thorwald Araujo Guedes</td>
                                <td>João Pablo Silva da Silva</td>
                            </tr>
                            <tr>
                                <td>Maicon Bernardino da Silveira</td>
                                <td>Rodrigo Brandão Mansilha</td>
                            </tr>
                            <tr>
                                <td>
                                        Marcelo Caggiani Luizelli
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </tr>
                   
            </table>
                </div>
            
                <h3 style="text-align: left; padding-top: 20px">Secretário Acadêmico:</h3>
                <h6 class="text-left text-dark">Thiago Gomes</h6>
                <h6 class="text-left text-dark"  style="border-bottom: 1px solid rgba(0,0,0,.1);padding-bottom: 20px;">Contato: thiagogomes@unipampa.edu.br</h6>

                



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