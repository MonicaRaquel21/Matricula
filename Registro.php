<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de registro </title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="root">
        <form action="" class="form-register">
            <div class="form-register__header">
                <ul class="progressbar">
                    <li class="progressbar__option active">paso 1</li>
                    <li class="progressbar__option">paso 2</li>
                    <li class="progressbar__option">paso 3</li>
                </ul>
                <h1 class="form-register__title">FICHA DE REGISTRO DEL ESTUDIANTE</h1>
            </div>
            <div class="form-register__body">
                <div class="step active" id="step-1">
                    <div class="step__header">
                        <h2 class="step__title">Información del Estudiante<small></small></h2>
                    </div>
                    <div class="step__body">
                        <input type="text" placeholder="Nombres" class="step__input">
                        <input type="text" placeholder="Primer Apellido" class="step__input">
                        <input type="text" placeholder="Segundo Apellido" class="step__input">
                        
                        <p>Registre fecha de Nacimiento</p>
                        <input id="date" type="date"  class="step__input"> 
                        <input type="number" placeholder="Edad" class="step__number">
                        <p>Año en el que estudio el grado anterior</p>
                        <input type="number" placeholder="Año" class="step__number">

                        <select name="select"  class="step__option">
                        <option value="value1"selected>Seleccione Sexo</option> 
                        <option value="value2" >Femenino</option>
                        <option value="value3">Masculino</option>
                         </select>


                         <div class="radio-group">
                         <p>¿Estudio Parvularia?</p>
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                          </div>

                           <div class="radio-group1">
                         <p>¿Repite Grado?</p>
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                          </div>

                          <div class="radio-group2">
                         <p>Estado Familiar del Estudiante</p>
                         <label class="radio">
                             <input type="radio" value="soltero" name="gender">SOLTERO/a
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">CASADO/a
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">ACOMPAÑADO/a
                             <span></span>
                         </label>
                          </div>

                          <div class="radio-group">
                         <p>¿Tiene Hijos?</p>
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                          </div>
                          <p>Si selecciono SI en la casilla ¿Tiene hijos?ingrese cantidad de Hijos</p>
                          <input type="number" placeholder="0" class="step__number">
                          <input type="text" placeholder="Teléfono Movil de Estudiante" class="step__input">
                          <input type="text" placeholder="Teléfono de Casa" class="step__input">
                          <input type="email" placeholder="Correo Electronico" class="step__input">
                          <p> Ingrese el N° de DUI o Carnet de Menoridad del Estudiante</p>
                          <input type="text" placeholder="Dui o Carnet" class="step__input">
                          <input type="text" placeholder="Nacionalidad" class="step__input">
                          <textarea id="w3review" name="w3review" rows="4" cols="50"class="step__textarea" placeholder="Ingrese la dirección de residencia actual"></textarea>
                          <select name="select"  class="step__option">
                           <option value="value1" selected>Departamento</option> 
                            <option value="value2" >San Salvador</option>
                            <option value="value3">Cuscatlan</option>
                            <option value="value3">La Libertad</option>
                            </select>

                            
                         <select name="select"  class="step__option">
                        <option value="value1"selected>Municipio</option> 
                        <option value="value2" >Soyapango</option>
                        <option value="value3">Apopa</option>
                        <option value="value3">San Martin</option>
                         </select>

                         <div class="radio-group1">
                         <p>Zona en la que reside el estudiante</p>
                         <label class="radio">
                             <input type="radio" value="si" name="gender">Rural
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">Urbana
                             <span></span>
                         </label>
                          </div>

                          <div class="radio-group2">
                         <p>El estudiante vive con</p>
                         <label class="radio">
                             <input type="radio" value="si" name="gender">Madre y Padre
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">Madre
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">Padre
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">Solo
                             <span></span>
                         </label>
                          </div>
                          <p>Número de miembros familiares que viven en la casa</p>
                          <input type="number" placeholder="0" class="step__number">
                          <div class="radio-group">
                         <p>¿De quien depende ecónomicamente el estudiante?</p>
                         <label class="radio">
                             <input type="radio" value="si" name="gender">Madre y Padre
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">Madre
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">Padre
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">Otro
                             <span></span>
                         </label>
                          </div>
                          <p>Especifique</p>
                          <input type="text" placeholder="" class="step__input">
                          <div class="radio-group1">
                         <p>¿Trabaja el estudiante?</p>
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                          </div>
                        


                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--next" data-to_step="2" data-step="1">Siguiente</button>
                    </div>
                </div>
                <div class="step" id="step-2">
                    <div class="step__header">
                        <h2 class="step__title">Información del Padre de Familia y Encargado<small></small></h2>
                    </div>
                    <div class="step__body">
                        <h3>Información del Padre de Familia</h3>
                        <p>Ingrese los datos requeridos del padre</p>
                        <input type="text" placeholder="Nombre del Padre" class="step__input">
                        <input type="text" placeholder="DUI" class="step__input">
                        <input type="text" placeholder="NIT" class="step__input">
                        <input type="text" placeholder="Profesion/oficio" class="step__input">
                        <p>Ingrese su lugar de trabajo/profesión</p>
                        <input type="text" placeholder="Lugar de Trabajo" class="step__input">
                        <input type="text" placeholder="Celular" class="step__input">
                        <input type="text" placeholder="Teléfono del trabajo" class="step__input">
                        <input type="email" placeholder="Correo Electronico" class="step__input">
                         <hr>
                        <p>Ingrese los datos requeridos de la Madre de Familia</p>
                        <input type="text" placeholder="Nombre de la Madre" class="step__input">
                        <input type="text" placeholder="DUI" class="step__input">
                        <input type="text" placeholder="NIT" class="step__input">
                        <input type="text" placeholder="Profesion/oficio" class="step__input">
                        <p>Ingrese su lugar de trabajo/profesión</p>
                        <input type="text" placeholder="Lugar de Trabajo" class="step__input">
                        <input type="text" placeholder="Celular" class="step__input">
                        <input type="text" placeholder="Teléfono del trabajo" class="step__input">
                        <input type="email" placeholder="Correo Electronico" class="step__input">

                        <h3>Información del Encargado Legal</h3> 
                        <p>Ingrese los datos requeridos acontinuación:</p>
                        <input type="text" placeholder="Nombre de la Madre o Padre y otra persona" class="step__input">
                        <input type="text" placeholder="DUI" class="step__input">
                        <input type="text" placeholder="NIT" class="step__input">
                        <input type="text" placeholder="Profesion/oficio" class="step__input">
                        <p>Ingrese su lugar de trabajo/profesión</p>
                        <input type="text" placeholder="Lugar de Trabajo" class="step__input">
                        <input type="text" placeholder="Celular" class="step__input">
                        <input type="text" placeholder="Teléfono del trabajo" class="step__input">
                        <input type="email" placeholder="Correo Electronico" class="step__input">
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="1" data-step="2">Regresar</button>
                        <button type="button" class="step__button step__button--next" data-to_step="3" data-step="2">Siguiente</button>
                    </div>
                </div>
                <div class="step" id="step-3">
                    <div class="step__header">
                        <h2 class="step__title">Información Medica del Estudiante<small></small></h2>
                    </div>
                    <div class="step__body">
                    <h3>Información Médica</h3> 
                    <select name="select"  class="step__option">
                        <option value="value1"selected>Tipo de Sangre</option> 
                        <option value="value2" >Tipo A</option>
                        <option value="value3">Tipo B</option>
                        <option value="value3">Tipo AB</option>
                        <option value="value3">Tipo O</option>
                         </select>

                        <p>Ingrese los datos requeridos acontinuación:</p>
                        <p>¿Presenta una necesidad especial?</p>
                    <div class="radio-group">
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                         <P>En caso de seleccionar la opción SI.Especifique</P>
                         <textarea id="w3review" name="w3review" rows="4" cols="50"class="step__textarea" placeholder=""></textarea>
                         
                          </div>
                          
                          

                          <div class="radio-group">
                         <p>¿Padece alguna enfermedad?</p>
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                         <P> En caso de seleccionar la opción SI.Especifique</P>
                         <textarea id="w3review" name="w3review" rows="4" cols="50"class="step__textarea" placeholder=""></textarea>
                          </div>

                          <div class="radio-group">
                         <p>¿Padece alguna alergia?</p>
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                         <P> En caso de seleccionar la opción SI.Especifique</P>
                         <textarea id="w3review" name="w3review" rows="4" cols="50"class="step__textarea" placeholder=""></textarea>
                          </div>
                           
                          <p>¿Toma medicamentos?</p>
                          <div class="radio-group">
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                         <P> En caso de seleccionar la opción SI.Especifique</P>
                         <textarea id="w3review" name="w3review" rows="4" cols="50"class="step__textarea" placeholder=""></textarea>
                          </div>


                          <p>¿Es alergico algun tipo de medicamento?</p>
                          <div class="radio-group">
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                         <P> En caso de seleccionar la opción SI.Especifique</P>
                         <textarea id="w3review" name="w3review" rows="4" cols="50"class="step__textarea" placeholder=""></textarea>
                          </div>

                          <div class="radio-group">
                          <p>¿Posee diagnostico certificado por un médico?</p>
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                          </div>

                          <hr>



                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="2" data-step="3">Regresar</button>
                        <button type="submit" class="step__button">Finalizar Proceso</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="js/app.js"></script>
</body>
</html>
