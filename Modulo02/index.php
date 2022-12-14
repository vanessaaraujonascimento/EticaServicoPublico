<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Apresentacao';
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>

        <div class="main-content container-fluid" id="#Apresentacao">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">


                        <h2 class="Titulo">Apresentação</h2>
                        <hr>

                        <div class="text-center">
                            <img class="img-fluid wow fadeInLeft" src="imagens/banner.png" alt="Alt da imagem fica aqui">
                        </div>

                        <br>

                        <p>A ética vem ganhando cada vez mais proeminência no discurso atual sobre governança, ao passo que também se tem uma percepção de que o padrão de vida pública tem sofrido um declínio. O Brasil, como muitos outros países, tem examinado e repensado o papel do Estado e todo seu aparelho. De modo que quando se fala em ética no governo, a referência que se faz é ao padrão moral no serviço público.</p>

                        <br>
                        <h2 class="Titulo">Objetivos</h2>
                        <hr>

                        <ul class="none">
                            <li><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Apresentar as questões éticas ao servidor público;</li>
                            <li><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Discutir a ética profissional no serviço público.</li>
                        </ul>

                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });

                            $(function() {
                                $('[data-toggle="tooltip"]').tooltip()
                            });

                            $(function() {
                                $('.example-popover').popover({
                                    container: 'body'
                                })
                            });
                        </script>

                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <br>
            <br>

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>