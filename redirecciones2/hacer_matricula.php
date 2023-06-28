<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/8ed440f220.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../estilos/estilos_matricula.css">
        <link rel="shortcut icon" href="../logo/favicon.ico" type="image/x-icon">
        <title>Centro de Formación Meta: Matriculación</title>
    </head>
    <body>
        <div class="container">
            <header>Matricula Centro de Formación Meta</header>
            <form name="form_matricula" action="guardar_matricula.php" method="post">
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Datos Personales</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>Primer Apellido</label>
                                <input type="text" name="apellido1" id="primer_apellido" placeholder="Ingrese primer apellido" required>
                            </div>
                            <div class="input-field">
                                <label>Segundo Apellido</label>
                                <input type="text" name="apellido2" id="segundo_apellido" placeholder="Ingrese segundo apellido" required>
                            </div>
                            <div class="input-field">
                                <label>Nombre</label>
                                <input type="text" name="nombre" id="nombre" placeholder="Ingrese nombre" required>
                            </div>
                            <div class="input-field">
                                <label>D.N.I/N.I.E.</label>
                                <input type="text" name="dni" id="dni_nie" placeholder="Ingrese D.N.I o N.I.E" required>
                            </div>
                            <div class="input-field">
                                <label>Genero</label>
                                <select name="genero" id="genero" required>
                                    <option value="genero0">-</option>
                                    <option value="Mujer">Mujer</option>
                                    <option value="Hombre">Hombre</option>
                                    <option value="Prefiero no especificar">Prefiero no especificar</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>Fecha de nacimiento</label>
                                <input type="date" name="nacimiento" id="fecha_nacimiento" required>
                            </div>
                            <div class="input-field">
                                <label>Email</label>
                                <input type="email" name="email" id="correo_electronico" placeholder="Ingrese email" required>
                            </div>
                            <div class="input-field">
                                <label>Teléfono</label>
                                <input type="number" name="telefono" id="telefono" placeholder="Ingrese teléfono" required>
                            </div>
                            <div class="input-field">
                                <label>Estudios</label>
                                <select name="estudios" id="estudios" required>
                                    <option value="estudios0">-</option>
                                    <option value="E.S.O">Educación Secundaria Obligatoria (E.S.O)</option>
                                    <option value="Bachillerato">Bachillerato</option>
                                    <option value="F.P">Formación Profesional (F.P)</option>
                                    <option value="Enseñanzas Universitarias">Enseñanzas Universitarias</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="details address">
                        <span class="title">Dirección</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>Domicilio: calle/avda</label>
                                <input type="text" name="domicilio" id="domicilio" placeholder="Ingrese domicilio" required>
                            </div>
                            <div class="input-field">
                                <label>Número y piso</label>
                                <input type="text" name="piso" id="numero_piso" placeholder="Ingrese numero y piso" required>
                            </div>
                            <div class="input-field">
                                <label>Nacionalidad</label>
                                <input type="text" name="nacionalidad" id="nacionalidad" placeholder="Ingrese nacionalidad" required>
                            </div>
                            <div class="input-field">
                                <label>Provincia</label>
                                <select name="provincia" id="prov" required onchange="cambia()">
                                    <option value="0">-</option>
                                    <option value="Álava">Álava - País Vasco (Euskadi)</option>
                                    <option value="Albacete">Albacete - Castilla-La Mancha</option>
                                    <option value="Alicante">Alicante - Comunidad Valenciana</option>
                                    <option value="Almería">Almería - Andalucía</option>
                                    <option value="Asturias">Asturias - Principado de Asturias</option>
                                    <option value="Ávila">Ávila - Castilla y León</option>
                                    <option value="Badajoz">Badajoz - Extremadura</option>
                                    <option value="Barcelona">Barcelona - Cataluña (Catalunya)</option>
                                    <option value="Burgos">Burgos - Castilla y León</option>
                                    <option value="Cáceres">Cáceres - Extremadura</option>
                                    <option value="Cádiz">Cádiz - Andalucía</option>
                                    <option value="Cantabria">Cantabria - Cantabria</option>
                                    <option value="Castellón">Castellón (Castelló) - Comunidad Valenciana (Comunitat Valenciana)</option>
                                    <option value="CiudadReal">Ciudad Real - Castilla-La Mancha</option>
                                    <option value="Córdoba">Córdoba - Andalucía</option>
                                    <option value="Cuenca">Cuenca - Castilla-La Mancha</option>
                                    <option value="Girona">Girona (Gerona) - Cataluña (Catalunya)</option>
                                    <option value="Granada">Granada - Andalucía</option>
                                    <option value="Guadalajara">Guadalajara - Castilla-La Mancha</option>
                                    <option value="Guipúzcoa">Guipúzcoa (Gipuzkoa) - País Vasco (Euskadi)</option>
                                    <option value="Huelva">Huelva - Andalucía</option>
                                    <option value="Huesca ">Huesca - Aragón</option>
                                    <option value="IslasBaleares">Islas Baleares (Illes Balears) - Islas Baleares (Illes Balears)</option>
                                    <option value="Jaén">Jaén - Andalucía</option>
                                    <option value="LaCoruña">La Coruña (A Coruña) - Galicia</option>
                                    <option value="LaRioja">La Rioja - La Rioja</option>
                                    <option value="LasPalmas">Las Palmas - Canarias</option>
                                    <option value="León">León - Castilla y León</option>
                                    <option value="Lérida">Lérida (Lleida) - Cataluña (Catalunya)</option>
                                    <option value="Lugo">Lugo - Galicia</option>
                                    <option value="Madrid">Madrid - Comunidad de Madrid</option>
                                    <option value="Málaga">Málaga - Andalucía</option>
                                    <option value="Murcia">Murcia - Región de Murcia</option>
                                    <option value="Navarra">Navarra (Nafarroa) - Comunidad Foral de Navarra (Nafarroako Foru Komunitate)</option>
                                    <option value="Ourense">Ourense (Orense) - Galicia</option>
                                    <option value="Palencia">Palencia - Castilla y León</option>
                                    <option value="Pontevedra">Pontevedra - Galicia</option>
                                    <option value="Salamanca">Salamanca - Castilla y León</option>
                                    <option value="SantaCruzdeTenerife">Santa Cruz de Tenerife - Canarias</option>
                                    <option value="Segovia">Segovia - Castilla y León</option>
                                    <option value="Sevilla">Sevilla - Andalucía</option>
                                    <option value="Soria">Soria - Castilla y León</option>
                                    <option value="Tarragona">Tarragona - Cataluña (Catalunya)</option>
                                    <option value="Teruel">Teruel - Aragón</option>
                                    <option value="Toledo">Toledo - Castilla-La Mancha</option>
                                    <option value="Valencia">Valencia - Comunidad Valenciana (Comunitat Valenciana)</option>
                                    <option value="Valladolid">Valladolid - Castilla y León</option>
                                    <option value="Vizcaya">Vizcaya (Bizkaia) - País Vasco (Euskadi)</option>
                                    <option value="Zamora">Zamora - Castilla y León</option>
                                    <option value="Zaragoza">Zaragoza - Aragón</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>Localidad</label>
                                <select name="localidad" id="locali" required>
                                    <option value="-">-
                                </select>
                            </div>
                            <div class="input-field">
                                <label>Código Postal</label>
                                <input type="text" name="codigop" id="codigo_postal" placeholder="Ingrese código postal" required>
                            </div>
                        </div>
                    </div>
                    <div class="details curso">
                        <span class="title">Categoría y Curso</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>Categoría</label>
                                <select name="categoria" id="cate" required onchange="cambia2()">
                                    <option value="00">-</option>
                                    <option value="Actividades">Actividades Físicas y Deportivas</option>
                                    <option value="Energía">Energía y Agua</option>
                                    <option value="Informática">Informática y Comunicaciones</option>
                                    <option value="Administración">Administración y Gestión</option>
                                    <option value="Electricidad">Electricidad y Electrónica</option>
                                    <option value="Comercio">Comercio y Marketing</option>
                                    <option value="Sanidad">Sanidad</option>
                                    <option value="Química">Química</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>Curso</label>
                                <select name="curso" id="curs" required>
                                    <option value="-">-
                                </select>
                            </div>
                            <div class="input-field">
                                <label>Turno</label>
                                <select name="turno" id="turno" required>
                                    <option value="000">-</option>
                                    <option value="Mañanas">Mañanas</option>
                                    <option value="Tardes">Tardes</option>
                                </select>
                            </div>
                            <span class="title"><a href="terminos.html" target="_blank">Leer Términos y Condiciones</a></span>
                        </div>
                    </div>
                    <div class="buttons">
                        <button type="submit" name="btn_matricula">
                            <span class="btnText">Matricularse</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <script type="text/javascript">
            // Select dinámico provincia / localidad 
			//1) Definir Las Variables Correspondintes
			var opt_Álava= new Array ("-", "Amurrio", "Añana", "Aramayona");
			var opt_Albacete = new Array ("-", "Albacete", "Hellín", "La Roda");
			var opt_Alicante = new Array ("-", "Alicante", "Benidorm", "Alcoy");
			var opt_Almería = new Array ("-", "Almería", "Roquetas de Mar", "El Ejido");
            var opt_Asturias = new Array ("-", "Oviedo", "Gijón", "Aviles");
            var opt_Ávila = new Array ("-", "Ávila", "Adanero", "La Adrada");
            var opt_Badajoz = new Array ("-", "Badajoz", "Acedera", "Aceuchal");
            var opt_Barcelona = new Array ("-", "Barcelona", "Manresa", "Mataró");
            var opt_Burgos = new Array ("-", "Burgos", "La Ribera", "Los Montes de Oca");
            var opt_Cáceres = new Array ("-", "Cáceres", "Trujillo", "Navalmoral de la Mata");
            var opt_Cádiz = new Array ("-", "Cádiz", "Algeciras", "Jerez");
            var opt_Cantabria = new Array ("-", "Campoo Los Valles", "Liébana", "Saja-Nansa");
            var opt_Castellón = new Array ("-", "Castellón de la Plana", "Benicasim", "Oropesa del Mar");
            var opt_CiudadReal = new Array ("-", "Ciudad Real", "Puertollano", "Daimiel");
            var opt_Córdoba = new Array ("-", "Córdoba", "Valle de los Pedroches", "Campiña Sur");
            var opt_Cuenca = new Array ("-", "Cuenca", "Alaecón", "El Acebrón");
            var opt_Girona = new Array ("-", "Girona", "Cornellá del Terri", "Crespía");
            var opt_Granada = new Array ("-", "Granada", "Agrón", "Alamedilla");
            var opt_Guadalajara = new Array ("-", "Guadalajara", "Azuqueca de Henares", "Alovera");
            var opt_Guipúzcoa = new Array ("-", "Guipúzcoa", "Aduna", "Amezketa");
            var opt_Huelva = new Array ("-", "Huelva", "Las Chinas", "Las Veredas");
            var opt_Huesca = new Array ("-", "Huesca", "Abiego", "Adahuesca");
            var opt_IslasBaleares = new Array ("-", "Mallorca", "Ibiza", "Formentera");
            var opt_Jaén = new Array ("-", "Jaén", "Alcalá la Real", "Alcaudete");
            var opt_LaCoruña = new Array ("-", "La Coruña", "Zapateira", "O Portiño");
            var opt_LaRioja = new Array ("-", "La Rioja", "El Redal", "El Río");
            var opt_LasPalmas = new Array ("-", "Las Palmas", "Albercón", "Aldea Blanca");
            var opt_León = new Array ("-", "León", "Algadefe", "Almanza");
            var opt_Lérida = new Array ("-", "Lérida", "Abella de la Conca", "Adrall");
            var opt_Lugo = new Array ("-", "Lugo", "Viveiro", "Abadín");
            var opt_Madrid = new Array ("-", "Madrid", "Móstoles", "Majadahonda");
            var opt_Málaga = new Array ("-", "Málaga", "Fuengirola", "Torremolinos");
            var opt_Murcia = new Array ("-", "Murcia", "Abanilla", "Aledo");
            var opt_Navarra = new Array ("-", "Pamplona", "Estella", "Tudela");
            var opt_Ourense = new Array ("-", "Ourense", "Vilaza", "Aceredo");
            var opt_Palencia = new Array ("-", "Palencia", "Corvio", "Aguilar de Campo");
            var opt_Pontevedra = new Array ("-", "Pontevedra", "Caldas de Reyes", "Covelo");
            var opt_Salamanca = new Array ("-", "Salamanca", "Abusejo", "La Alamedilla");
            var opt_SantaCruzdeTenerife = new Array ("-", "Santa Cruz de Tenerife", "Acantilado de los Gigantes", "Bajamar");
            var opt_Segovia = new Array ("-", "Segovia", "Abades", "Adrados");
            var opt_Sevilla = new Array ("-", "Sevilla", "Écija", "Utrera");
            var opt_Soria = new Array ("-", "Soria", "Abejar", "Aliud");
            var opt_Tarragona = new Array ("-", "Tarragona", "Xerta", "Vilaplana");
            var opt_Teruel = new Array ("-", "Teruel", "Tronchón", "Abejuela");
            var opt_Toledo = new Array ("-", "Toledo", "Ajofrín", "Alameda de la Sagra");
            var opt_Valencia = new Array ("-", "Valencia", "Mislata", "Alfafar");
            var opt_Valladolid = new Array ("-", "Valladolid", "Olivares de Duero", "Olmos de Esgueva");
            var opt_Vizcaya = new Array ("-", "Amoroto", "Aracaldo", "Valle de Achondo");
            var opt_Zamora = new Array ("-", "Zamora", "Abejera", "Calabor");
            var opt_Zaragoza = new Array ("-", "Zaragoza", "Abanto", "La Almolda");
			// 2) crear una funcion que permita ejecutar el cambio dinamico
			function cambia(){
				var prov;
				//Se toma el vamor de la "cosa seleccionada"
				prov = document.form_matricula.prov[document.form_matricula.prov.selectedIndex].value;
				//se chequea si la "cosa" esta definida
				if(prov!=0){
					//selecionamos las cosas Correctas
					mis_opts=eval("opt_" + prov);
					//se calcula el numero de cosas
					num_opts=mis_opts.length;
					//marco el numero de opt en el select
					document.form_matricula.locali.length = num_opts;
					//para cada opt del array, la pongo en el select
					for(i=0; i<num_opts; i++){
						document.form_matricula.locali.options[i].value=mis_opts[i];
						document.form_matricula.locali.options[i].text=mis_opts[i];
					}
					}else{
						//si no habia ninguna opt seleccionada, elimino las cosas del select
						document.form_matricula.locali.length = 1;
						//ponemos un guion en la unica opt que he dejado
						document.form_matricula.locali.options[0].value="-";
						document.form_matricula.locali.options[0].text="-";
					}
					//hacer un reset de las opts
					document.form_matricula.locali.options[0].selected = true;
				}

            // Select dinámico categoria / curso
            //1) Definir Las Variables Correspondintes
			var opt_Actividades = new Array ("-", "Acondicionamiento Físico", "Enseñanza y Animación Sociodeportiva");
			var opt_Energía = new Array ("-", "Eficiencia Energética y Energía Solar Térmica", "Energías Renovables", "Gestión del Agua");
			var opt_Informática = new Array ("-", "Administración de Sistemas Informáticos en Red", "Desarrollo de Aplicaciones Multiplataforma", "Desarrollo de Aplicaciones Web");
			var opt_Administración = new Array ("-", "Administración y Finanzas", "Asistencia a la Dirección");
            var opt_Electricidad = new Array ("-", "Automatización y Robótica Industrial", "Electromedicina Clínica", "Mantenimiento Electrónico", "Sistemas Electrotécnicos y Automatizados","Sistemas de Telecomunicaciones e Informáticos");
            var opt_Comercio = new Array ("-", "Comercio Internacional", "Gestión de Ventas y Espacios Comerciales", "Marketing y Publicidad", "Transporte y Logística");
            var opt_Sanidad = new Array ("-", "Anatomía Patológica y Citodiagnóstico", "Audiología Protésica", "Dietética", "");
            var opt_Química = new Array ("-", "Fabricación de Productos Farmacéuticos, Biotecnológicos y Afines", "Laboratorio de Análisis y Control de Calidad", "Química Industrial");
			// 2) crear una funcion que permita ejecutar el cambio dinamico
			function cambia2(){
				var cate;
				//Se toma el vamor de la "cosa seleccionada"
				cate = document.form_matricula.cate[document.form_matricula.cate.selectedIndex].value;
				//se chequea si la "cosa" esta definida
				if(cate!=0){
					//selecionamos las cosas Correctas
					mis_opts=eval("opt_" + cate);
					//se calcula el numero de cosas
					num_opts=mis_opts.length;
					//marco el numero de opt en el select
					document.form_matricula.curs.length = num_opts;
					//para cada opt del array, la pongo en el select
					for(i=0; i<num_opts; i++){
						document.form_matricula.curs.options[i].value=mis_opts[i];
						document.form_matricula.curs.options[i].text=mis_opts[i];
					}
					}else{
						//si no habia ninguna opt seleccionada, elimino las cosas del select
						document.form_matricula.curs.length = 1;
						//ponemos un guion en la unica opt que he dejado
						document.form_matricula.curs.options[0].value="-";
						document.form_matricula.curs.options[0].text="-";
					}
					//hacer un reset de las opts
					document.form_matricula.curs.options[0].selected = true;
				}
		</script>
    </body>
</html>