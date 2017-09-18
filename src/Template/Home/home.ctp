<div id="todo">
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
                <input name="data[search]" class="form-control" id="campoBusca" type="text" placeholder="Pesquisar Livros">
                <span class="input-group-btn">
                    <button class="btn btn-primary" id="buttonBusca">
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
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th class="actions">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($books as $book): ?>
                        <tr>
                            <td><?= $book->id ?></td>
                            <td><?= $book->title ?></td>
                            <td><?= $book->author ?></td>
                            <td><?=
                                $this->Html->link(
                                        'Ver mais', 'books/view/' . $book->id . '', ['class' => 'btn btn-success btn-sm']
                                );
                                ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <script>
            $('#campoBusca').change(function () {
                var url = '<?= $this->Url->build("/home/searchBooks"); ?>/' + $('#campoBusca').val();
                $('#content').hide(500);
                $('#todo').load(url);
            });
        </script>
    </div><!-- /#list -->
</div>