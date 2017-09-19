<?php
if (!$this->request->session()->read('Auth.User')){ ?> 
    <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo $this->Url->build([
        "controller" => "Users",
        "action" => "add"]); ?>"><span class="glyphicon glyphicon-user"></span> &nbsp Cadastre-se</a></li>
        <li><a href="<?php echo $this->Url->build([
        "controller" => "Users",
        "action" => "login"]); ?>"><span class="glyphicon glyphicon-log-in"></span> &nbsp Acessar</a></li>
    </ul>
<?php } else { ?>
    <ul class="nav navbar-nav navbar-right">
<!--          <li><a href="<?php echo $this->Url->build([
        "controller" => "shelfs",
        "action" => "view"]); ?>"><span class="glyphicon glyphicon glyphicon-briefcase"></span> &nbsp My Shelf</a></li> -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                aria-haspopup="true" aria-expanded="false"> 
                <icon class="glyphicon glyphicon-user" > </icon> 
                    &nbsp <?= $this->request->session()->read('Auth.User.name') ?> 
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo $this->Url->build([
                    "controller" => "Users",
                    "action" => "logout"]); ?>"><span class="glyphicon glyphicon-log-out"></span> &nbsp Logout</a>
                </li>
            </ul>
        </li>      
       
    </ul>
<?php } ?>
