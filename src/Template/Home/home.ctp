<div id="main" class="container-fluid">
    <div id="top" class="row">
    </div> <!-- /#top -->
    <hr />
    <div id="list" class="row">
    </div> <!-- /#list -->
    <div id="bottom" class="row">
    </div> <!-- /#bottom -->
</div>  <!-- /#main -->

<div id="top" class="row">
    <div class="col-md-3">
        <h2>Buscar livros</h2>
    </div>
    <div class="col-md-6">
        <div class="input-group h2">
            <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Livros">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </div>
    <!--     <div class="col-md-3">
            <a href="add.html" class="btn btn-primary pull-right h2">Novo Item</a>
        </div> -->
</div> <!-- /#top -->
<div id="list" class="row">


    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>Capa</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th class="actions">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book):?>
                    <tr>
                        <td><?= $book->id?></td>
                        <td><?= $book->title?></td>
                        <td><?= $book->author?></td>
                        <td><?=
                        $this->Html->link(
                            'Ver mais',
                            'books/view/'.$book->id.'',
                             ['class' => 'btn btn-success btn-sm']
                        );
                        ?></td>

                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <!--
 Esse script abaixo é responsavel por fazer um ajax para a pagina update
 passando o respectivo id que chamou a função. Feito isso, os dados do
 registro a ser vizualizado são carregados para a pagina x, em seguida, o html é
 injetado nesta pagina, atraves da função $("#update").html(res).
 Como o html vindo é um modal, basta exibi-lo com as informações carregadas
 com a função $('#modalUpdate').modal('show').-->
    <script>
        $('a.linkmodal').click(function () {

            $.ajax({

                url: 'showBookInformation.ctp',
                data: {id: $(this).attr('id')},
                success: function (res) {
                    alert('clicou!');
                    $("#showbookinformation").html(res);
                    $('#modalbookinformation').modal('show');
                }
            })
        });
    </script>
    <div id="showbookinformation">

    </div>
</div> <!-- /#list -->