<div class="main-wrapper">


    <!-- end: MAIN CONTAINER -->
    <!-- start: FOOTER -->

    <!-- end: FOOTER -->
    <!-- start: SUBVIEW SAMPLE CONTENTS -->
    <!-- *** NEW NOTE *** -->
    <div id="newNote">
   
        <div class="noteWrap col-md-8 col-md-offset-2">
            <h3>Adicionar Novo Departamento</h3>

            <form class="" method="POST" action="Validacao/register_department.php">
                <div class="row">
                    <div class="col-md-12">
                        <div class="errorHandler alert alert-danger no-display">
                            <i class="fa fa-times-sign"></i> Existe algum erro. Por Favor verifique seus dados.
                        </div>
                        <div class="successHandler alert alert-success no-display">
                            <i class="fa fa-ok"></i> Validação Concluida!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="contributor-id hide" type="text">
                            <label class="control-label">
                                Departamento: <span class="symbol required"></span>
                            </label>
                            <input type="text" placeholder="Departamento ou Gabinet" class="form-control contributor-firstname" name="name" maxlength="28" required>
                        </div>
                    </div>

                </div>
                <div class="pull-center">
                    <div class="btn-group">
                        <a href="#" class="btn btn-danger close-subview-button">
                            Cancelar
                        </a>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-green  save-contributor" type="submit">
                            Salvar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- *** READ NOTE *** -->
    <div id="readNote">
        <div class="barTopSubview">
            <a href="#newNote" class="new-note button-sv"><i class="fa fa-plus"></i> Add new note</a>
        </div>
        <div class="noteWrap col-md-8 col-md-offset-2">
            <div class="panel panel-note">
                <div class="e-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="panel-heading">
                            <h3>This is a Note</h3>
                        </div>
                        <div class="panel-body">
                            <div class="note-short-content">
                                Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
                            </div>
                            <div class="note-content">
                                Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.
                                Quis aute iure reprehenderit in <strong>voluptate velit</strong> esse cillum dolore eu fugiat nulla pariatur.
                                <br>
                                Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <br>
                                Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                                <br>
                                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                                <br>
                                Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                <br>
                                At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                                <br>
                                Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
                                <br>
                                Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                            </div>
                            <div class="note-options pull-right">
                                <a href="#readNote" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="avatar-note"><img src="assets/images/avatar-2-small.jpg" alt="">
                            </div>
                            <span class="author-note">Nicole Bell</span>
                            <time class="timestamp" title="2014-02-18T00:00:00-05:00">
                                2014-02-18T00:00:00-05:00
                            </time>
                        </div>
                    </div>
                    <div class="item">
                        <div class="panel-heading">
                            <h3>This is the second Note</h3>
                        </div>
                        <div class="panel-body">
                            <div class="note-short-content">
                                Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nemo enim ipsam voluptatem, quia voluptas sit...
                            </div>
                            <div class="note-content">
                                Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <br>
                                Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                                <br>
                                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                                <br>
                                Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                <br>
                                Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
                                <br>
                                Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                            </div>
                            <div class="note-options pull-right">
                                <a href="#" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="avatar-note"><img src="assets/images/avatar-3-small.jpg" alt="">
                            </div>
                            <span class="author-note">Steven Thompson</span>
                            <time class="timestamp" title="2014-02-18T00:00:00-05:00">
                                2014-02-18T00:00:00-05:00
                            </time>
                        </div>
                    </div>
                    <div class="item">
                        <div class="panel-heading">
                            <h3>This is yet another Note</h3>
                        </div>
                        <div class="panel-body">
                            <div class="note-short-content">
                                At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores...
                            </div>
                            <div class="note-content">
                                At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                                <br>
                                Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <br>
                                Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                                <br>
                                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                            </div>
                            <div class="note-options pull-right">
                                <a href="#" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="avatar-note"><img src="assets/images/avatar-4-small.jpg" alt="">
                            </div>
                            <span class="author-note">Ella Patterson</span>
                            <time class="timestamp" title="2014-02-18T00:00:00-05:00">
                                2014-02-18T00:00:00-05:00
                            </time>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *** SHOW CALENDAR *** -->
    <div id="showCalendar" class="col-md-10 col-md-offset-1">
        <div class="barTopSubview">
            <a href="#newEvent" class="new-event button-sv" data-subviews-options='{"onShow": "editEvent()"}'><i class="fa fa-plus"></i> Add new event</a>
        </div>
        <div id="calendar"></div>
    </div>
    <!-- *** NEW EVENT *** -->
    <div id="newEvent">
        <div class="noteWrap col-md-8 col-md-offset-2">
            <h3>Adicionar Nova Função ou Cargo</h3>

            <form class="" method="POST" action="Validacao/register_function.php">
                <div class="row">
                    <div class="col-md-12">
                        <div class="errorHandler alert alert-danger no-display">
                            <i class="fa fa-times-sign"></i> Existe algum erro. Por Favor verifique seus dados.
                        </div>
                        <div class="successHandler alert alert-success no-display">
                            <i class="fa fa-ok"></i> Validação Concluida!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="contributor-id hide" type="text">
                            <label class="control-label">
                                Função ou Cargo: <span class="symbol required"></span>
                            </label>
                            <input type="text" placeholder="Adicionar Função ou cargo" class="form-control contributor-firstname" name="name" maxlength="28" required>
                        </div>
                    </div>

                </div>
                <div class="pull-center">
                    <div class="btn-group">
                        <a href="#" class="btn btn-danger close-subview-button">
                            Cancelar
                        </a>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-green  save-contributor" type="submit">
                            Salvar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- *** READ EVENT *** -->
    <div id="readEvent">
        <div class="noteWrap col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="event-title">Event Title</h2>
                    <div class="btn-group options-toggle pull-right">
                        <button class="btn dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                            <span class="caret"></span>
                        </button>
                        <ul role="menu" class="dropdown-menu dropdown-light pull-right">
                            <li>
                                <a href="#newEvent" class="edit-event">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                            </li>
                            <li>
                                <a href="#" class="delete-event">
                                    <i class="fa fa-times"></i> Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <span class="event-category event-cancelled">Cancelled</span>
                    <span class="event-allday"><i class='fa fa-check'></i> All-Day</span>
                </div>
                <div class="col-md-12">
                    <div class="event-start">
                        <div class="event-day"></div>
                        <div class="event-date"></div>
                        <div class="event-time"></div>
                    </div>
                    <div class="event-end"></div>
                </div>
                <div class="col-md-12">
                    <div class="event-content"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- *** NEW CONTRIBUTOR *** -->
  

    <div id="newContributor">
        <div class="noteWrap col-md-8 col-md-offset-2">
            <h3>Adicionar Novo Funcionário</h3>

            <form role="form" class="" method="POST" action="Validacao/register_employee.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="errorHandler alert alert-danger no-display">
                            <i class="fa fa-times-sign"></i> Existe algum erro. Por Favor verifique seus dados.
                        </div>
                        <div class="successHandler alert alert-success no-display">
                            <i class="fa fa-ok"></i> Validação Concluida!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="contributor-id hide" type="text">
                            <label class="control-label">
                                Primeiro Nome <span class="symbol required"></span>
                            </label>
                            <input type="text" placeholder="Seu Primeiro Nome" class="form-control contributor-firstname" name="first_name" maxlength="10" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                Sobrenome <span class="symbol required"></span>
                            </label>
                            <input type="text" placeholder="Seu Sobrenome" class="form-control contributor-lastname" name="last_name" maxlength="15" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                Email <span class="symbol required"></span>
                            </label>
                            <input type="email" placeholder="Exemplo@zee.co.ao" class="form-control contributor-email" name="email" requiredrequired>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                Password <span class="symbol required"></span>
                            </label>
                            <input type="password" class="form-control contributor-email" name="password" required>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="id_departamento" id="" required>
                                <option>Departamento</option>

                                <?php
                                $result_ies = "SELECT * FROM  departamento ORDER BY id";
                                $resultado_ies = mysqli_query($conecta, $result_ies);
                                while ($row_cat = mysqli_fetch_assoc($resultado_ies)) {
                                    echo '<option value="' . $row_cat['id'] . '">' . $row_cat['name'] . '</option>';
                                }
                                ?>

                            </select>


                        </div>
                        <div class="form-group">
                            <span class="input-icon">

                                <select class="form-control" name="id_funcao" required>
                                    <option>Função</option>
                                    <?php
                                    $busca = "SELECT * FROM  funcao ORDER BY id";
                                    $resultado = mysqli_query($conecta, $busca);
                                    while ($row_cat = mysqli_fetch_assoc($resultado)) {
                                        echo '<option value="' . $row_cat['id'] . '">' . $row_cat['name'] . '</option>';
                                 

                                    }

                                 
                                    ?>

                                    
                                </select>

                                <!-- <i class="fa fa-level-up"></i> -->
                            </span>

                        </div>
                        <div class="form-group">
                            <select class="form-control" name="Nivel_Acesso" id="" required>
                                <option>Nivel de Acesso</option>

                                <option>Administrador</option>

                                <option>Usuário</option>

                            </select>

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">
                                Genéro <span class="symbol required"></span>
                            </label>
                            <div>
                                <label class="radio-inline">
                                    <input type="radio" class="grey contributor-gender" value="F" name="genre" required>
                                    Femenino
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" class="grey contributor-gender" value="M" name="genre" required>
                                    Masculino
                                </label>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="fileupload fileupload-new contributor-avatar" data-provides="fileupload">
                                <div class="fileupload-new thumbnail"><img src="assets/images/anonymous.jpg" alt="" width="50" height="50" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                <div class="contributor-avatar-options">
                                    <span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Selecionar imagem</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Mudar</span>
                                        <input type="file" name="img[]" required>
                                    </span>
                                    <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                        <i class="fa fa-times"></i> Remover
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="pull-center">
                    <div class="btn-group">
                        <a href="#" class="btn btn-danger close-subview-button">
                            Cancelar
                        </a>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-green  save-contributor" name="btnGuardar" type="submit">
                            Salvar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

  
    <!-- *** SHOW CONTRIBUTORS *** -->
    <!-- <div id="showContributors">
        <div class="barTopSubview">
            <a href="#newContributor" class="new-contributor button-sv"><i class="fa fa-plus"></i> Add new contributor</a>
        </div>
        <div class="noteWrap col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="contributors">
                        <div class="options-contributors hide">
                            <div class="btn-group">
                                <button class="btn dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                    <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu dropdown-light pull-right">
                                    <li>
                                        <a href="#newContributor" class="show-subviews edit-contributor">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="delete-contributor">
                                            <i class="fa fa-times"></i> Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- end: SUBVIEW SAMPLE CONTENTS -->
</div>