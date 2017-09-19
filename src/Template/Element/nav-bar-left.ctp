<ul class="nav navbar-nav">
	<?php if($this->request->session()->read('Auth.User')) { ?>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
				aria-haspopup="true" aria-expanded="false"> 
				<icon class="glyphicon glyphicon-book" > </icon> 
					&nbsp Livros 
				<span class="caret"></span>
			</a>
			  <ul class="dropdown-menu">
			    <li>

				    <a href="<?php echo $this->Url->build(
				    	["controller" => "books",
				        "action" => "add"]); ?>"><span class="glyphicon glyphicon-plus"></span> &nbsp Cadastrar Livro</a>
			    </li>
<!-- 			    <li class="divider"></li> -->
			    <li>

				    <a href="<?php echo $this->Url->build(
				    	["controller" => "home",
				        "action" => "display"]); ?>"><span class="glyphicon glyphicon-th-list"></span> &nbsp Consultar acervo</a>
			    </li>
			  </ul>
			</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
			aria-haspopup="true" aria-expanded="false"> 
				<icon class="glyphicon glyphicon-th" > </icon> 
					&nbsp Estante
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
			    
			    <li>
				    <a href="<?php echo $this->Url->build(
				    	["controller" => "books",
				        "action" => "add"]); ?>"><span class="glyphicon glyphicon-plus"></span> &nbsp Cadastrar estante</a>
			    </li>
<!-- 			    <li class="divider"></li> -->
			    <li>

				    <a href="<?php echo $this->Url->build(
				    	["controller" => "shelfs",
				        "action" => "view"]); ?>"><span class="glyphicon glyphicon-th-large"></span> &nbsp Minha estante</a>
			    </li>
			  </ul>

			</li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
			aria-haspopup="true" aria-expanded="false"> 
				<icon class="glyphicon glyphicon-align-justify" > </icon> 
					&nbsp Disciplinas
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<?php if($this->request->session()->read('Auth.User.role') == 'A') { ?>
			    <li>
				    <a href="<?php echo $this->Url->build(
				    	["controller" => "disciplines",
				        "action" => "add"]); ?>"><span class="glyphicon glyphicon-plus"></span> &nbsp Cadastrar disciplina</a>
			    </li>
			    <?php } ?>
<!-- 			    <li class="divider"></li> -->
			    <li>

				    <a href="<?php echo $this->Url->build(
				    	["controller" => "disciplines",
				        "action" => "index"]); ?>"><span class="glyphicon glyphicon-list"></span> &nbsp Listar disciplinas</a>
			    </li>
			  </ul>

			</li>
<!-- 			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
			aria-haspopup="true" aria-expanded="false"> 
				<icon class="glyphicon glyphicon-list-alt" > </icon> 
					&nbsp Relatórios
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
			    <li>

				    <a href="<?php echo $this->Url->build(
				    	["controller" => "home",
				        "action" => "display"]); ?>"><span class="glyphicon glyphicon-filter"></span> &nbsp Livros por disciplina</a>
			    </li>
			  </ul>

			</li> -->
	<?php } ?>
	</ul>
