<?php include("head.php"); ?>



<div class="page">


    <section class="boto">
        <button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button>
        <script type="text/javascript">
            function back() {
                history.back();
            }
        </script>
    </section>


    <br><br>
    <div id="historia">
        <section class="section section-sm section-first bg-default text-md-left">
            <div class="container">
                <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">

                    <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
                        <div class="box-width-lg-470">
                            <h3>Estadio el Dorado</h3>
                            <!-- Bootstrap tabs-->
                            <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                                <!-- Nav tabs-->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item" role="presentation"></li>
                                </ul>
                                <!-- Tab panes-->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabs-7-1">
                                        <p style="font-size: 18px;text-align: justify;">Es un estadio muy importante para los futbolistas profesionales que vienen a disputar partidos importantes en la provincia de Santa Elena,
                                            como campeonatos naciones de la segunda división entre otras, cuenta con iluminaria eléctrica para los partidos en la noche,
                                            cuenta con un buen ambiente y buena infraestructura, la capacidad máxima es de 1000 espectadores.</p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center wow fadeInUp"><a href="../PaginaComentarios.php?img=anconcito/imagenes/anconcito/0070_estadio_dorado1.jpg">
                            <img style="width: 590px; height: 385px;" src="imagenes/anconcito/0070_estadio_dorado1.jpg" id="estadio el dorado" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <br>


</div>

<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<?php include("footer.php");   ?>