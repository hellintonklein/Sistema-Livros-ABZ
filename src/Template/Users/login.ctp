<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->input('username', ['label'=>'Usuário']) ?>
<?= $this->Form->input('password', ['label'=>'Senha']) ?>
<?= $this->Form->button(__(' Acessar'), ['class'=>'btn-md glyphicon glyphicon-log-in']) ?>
<?= $this->Form->end() ?>