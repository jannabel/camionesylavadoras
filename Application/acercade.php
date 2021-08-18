<?php include("functions/bd.php") ;?>
<?php include("includes/head.php") ;?>
<?php include("includes/navbar.php") ;?>
<?php if (!isset($_SESSION['correo'])){
            $_SESSION['titulo']= 'QUE MAL!';
            $_SESSION['mensaje']= 'No se puede entrar a la pagina sin iniciar sesion primero';
            $_SESSION['color'] = 'danger';
echo '<meta http-equiv = "refresh" content = " 0; url = login.php"/>';
}

    ?>
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">
                    <!-- Card stats -->
                    <div class="row">
                        <div class="col">
                            <div class="card shadow">
                                <div class="card-header bg-transparent">
                                    <h1 class="mb-0">Acerca de Mi!</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

        <main>
                <br> <span></span>

                    <div class="row">
                        <div class="col">

                                <br>
                            <section>

                                <div class="profile profile-default">
                                    <div class="profile__image"><img src="https://static.wixstatic.com/media/6df2f1_4e1bd6a783e84a5e9037c5425b83b27f~mv2.jpg/v1/fill/w_180,h_180,al_c,q_80,usm_0.66_1.00_0.01/escarllet.webp" alt="Doggo"></div>
                                    <div class="profile__info">
                                    <h3>Escarllet Suriel</h3>
                                    <p class="profile__info__extra">Naci en Santo Domingo hace 19 años</p>
                                    </div>
                                    <div class="profile__stats">
                                    <p class="profile__stats__title">Sexo/Genero</p>
                                    <h5 class="profile__stats__info">Mujer</h5>
                                    </div>
                                    <div class="profile__stats">
                                    <p class="profile__stats__title">Matricula</p>
                                    <h5>2019-8535</h5>
                                    </div>
                                    <div class="profile__stats">
                                    <p class="profile__stats__title">Anime/Serie Favorito</p>
                                    <h5 class="profile__stats__info">La lisla es larga...</h5>
                                    </div>

                                    <div class="profile__cta"><a class="button"data-toggle="modal" data-target="#escarllet">Mas info/ Opciones</a></div>

                                </div>
                            </section>
                        </div>
                    </div>
                            <!-- Modal -->
                                <div class="modal fade" id="escarllet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"> Escarllet Suriel</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                       <p><strong>Nombre Completo:</strong> Escarllet Suriel</p>
                                       <p><strong>Matricula: </strong> 2019-8535</p>
                                       <p><strong>Fecha de Nacimiento:</strong> 19/11/2001 </p>
                                       <p><strong>Sexo/Genero: </strong> Mujer</p>
                                       <p><strong>Anime/Serie Favorito: </strong> Yōjo Senki,Fairy Tail,Shingeki no Kyojin...</p>
                                       <p><strong>Raza: </strong> Humana</p>
                                       <p><strong>Estado: </strong> Viva </p>
                                        <p><strong>Poder/Habilidad: </strong> Dibujar y cantar</p>
                                        <p><strong>Nacionalidad: </strong> Dominicana </p>
                                        <p><strong>Ocupacion: </strong> Programadora junior </p>
                                        <p><strong>Biografia:</strong>  Naci en Santo Domingo hace 19 años... La tarea fue entretenida </p>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-lg btn-block"data-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                                </div>



            </main>


        </div>

        <?php include("includes/footer.php") ;?>

   </div>
</body>

</html>