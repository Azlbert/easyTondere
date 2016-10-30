<?php $extraCSS= array("form", "BMW", "Toyota"); ?>
<?php $extraJS= array("form"); ?>
<?php $titulo="Encuesta"; ?>
<?php include('../assets/InicioDocumento.php'); ?>
		<!-- multistep form -->
		<form id="msform">
			<!-- progressbar -->
			<ul id="progressbar">
				<li class="active">Categoría 1</li>
				<li>Categoría 2</li>
				<li>Categoría 3</li>
			</ul>
			<!-- fieldsets -->
			<fieldset>
				<h2 class="fs-title">CATEGORÍA 1</h2>
				<h3 class="fs-subtitle">Esta categoría se asocia con...</h3>
				<p class="fs-texto">Pregunta 1:</p>
				<input type="text" name="resp1" placeholder="" />
				<p class="fs-texto">Pregunta 2:</p>
				<input type="text" name="resp2" placeholder="" />
				<p class="fs-texto">Pregunta 3:</p>
				<input type="text" name="resp3" placeholder="" />
				<input type="button" name="next" class="next action-button" value="Siguiente" />
			</fieldset>
			<fieldset>
				<h2 class="fs-title">CATEGORÍA 2</h2>
				<h3 class="fs-subtitle">Esta categoría se asocia con...</h3>
				<p class="fs-texto">Pregunta 4:</p>
				<div> <input type="radio" name="radio" id="radio1" class="radio" checked/>
				<label for="radio1">Opción 1. </label> </div>
				<div> <input type="radio" name="radio" id="radio2" class="radio"/>
				<label for="radio2">Opción 2. </label> </div>
				<div><input type="radio" name="radio" id="radio3" class="radio"/>
				<label for="radio3">Opción 3. </label></div>
				<br><br>
				<p class="fs-texto">Pregunta 5:</p>
				<div> <input type="radio" name="radio1" id="radio4" class="radio" checked/>
				<label for="radio4">Opción 1. </label> </div>
				<div> <input type="radio" name="radio1" id="radio5" class="radio"/>
				<label for="radio5">Opción 2. </label> </div>
				<div><input type="radio" name="radio1" id="radio6" class="radio"/>
				<label for="radio6">Opción 3. </label></div>
				<br><br>
				<input type="button" name="previous" class="previous action-button" value="Anterior" />
				<input type="button" name="next" class="next action-button" value="Siguiente" />
			</fieldset>
			<fieldset>
				<h2 class="fs-title">CATEGORÍA 3</h2>
				<h3 class="fs-subtitle">Esta categoría se asocia con...</h3>
				<p class="fs-texto">Pregunta 6:</p>
				<div> <input type="radio" name="radio2" id="radio7" class="radio" checked/>
				<label class="lbvf" for="radio7">Verdadero </label> </div>
				<div> <input type="radio" name="radio2" id="radio8" class="radio"/>
				<label class="lbvf" for="radio8">Falso </label> </div>
				<br><br>
				<p class="fs-texto">Pregunta 7:</p>
				<div> <input type="radio" name="radio3" id="radio9" class="radio" checked/>
				<label class="lbvf" for="radio9">Verdadero </label> </div>
				<div> <input type="radio" name="radio3" id="radio10" class="radio"/>
				<label class="lbvf" for="radio10">Falso </label> </div>
				<br><br>
				<input type="button" name="previous" class="previous action-button" value="Anterior" />
				<input type="submit" name="submit" class="submit action-button" value="Terminar" />
			</fieldset>
			<br><br>
			<input type="submit" class="avance" value="Guardar Avance" />
		</form>
<?php include('../assets/FinDocumento.php'); ?>			