<ul class="nav navbar-nav navbar-right">
    <li><a href="<?php echo $this->Url->build([
    "controller" => "Users",
    "action" => "add"]); ?>"><span class="glyphicon glyphicon-user"></span> &nbsp Cadastre-se</a></li>
    <li><a href="<?php echo $this->Url->build([
    "controller" => "Users",
    "action" => "login"]); ?>"><span class="glyphicon glyphicon-log-in"></span> &nbsp Acessar</a></li>
  </ul>