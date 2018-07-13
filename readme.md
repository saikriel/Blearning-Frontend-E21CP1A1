<section>
<a href="http://desafiolatam.com"><img src="http://blog.desafiolatam.com/wp-content/uploads/2015/03/logo_latam_mini.png" width="100" style="float:right"></a>

# Actividad Presencial 1 de Wordpress

<https://github.com/DesafioLatam/Blearning-Frontend-E21CP1A1>

## Ejercicio - Trabajando con plantilla

- Instalar AMP en computador
- Descargar Wordpress desde <https://www.wordpress.org/>. Instalar en Local.
- Cargar plantilla Layeria Lite <https://wordpress.org/themes/lawyeriax-lite/>
- Instalar y Activar plugins recomendados por plantilla *Apariencia>Instalar Plugins*
- Toma una captura de pantalla de la página de inicio. Guarda el archivo para después.
- Modificar el contenido de la Página de Inicio
	> Hint: La Plantilla Layerlite usa para la página de inicio la 	función  `<?php get_theme_mod( $name, $default ); ?>` que permite 	personalizar el contenido desde la sección *Apariencia > 	Personalizar*  
	> Para más información revisar  
	<https://codex.wordpress.org/Function_Reference/get_theme_mod>
	
- Agregar estilo custom.css en una carpeta */css* dentro de la plantilla. Insertar estilo dentro de la plantilla utilizando la función `wp_enqueue_style()`.
-  Cambiar la tipografía de todo el sitio a <a href="https://fonts.google.com/specimen/Lato" target="_blank">Lato</a> cargando el código con la función `wp_enqueue_style()` y llamando la tipografía en el archivo *custom.css*

> HINT: la url del css de la tipografía es: `https://fonts.googleapis.com/css?family=Lato`

- Modificar copywrite del sitio en el archivo *footer.php*  por la frase "Sitio desarrollado para Bootcamp de Desafío Latam"
- Crea una página llamada Noticias utilizando el page template Blog

> HINT: Al crear la página tendrás la posibilidad de seleccionar el template en los *Atributos de la página* o *Page Attributes*

- Crea un nuevo menú en *Apariencia > Menús* que contenga la página Noticias e Inicio. Agrégalo a la cabecera 
- Borra las entradas y páginas por defecto. Agrega 2 post más con imagen destacada y categoría *Deportes*. Una de ellas debe incluir una galería de Wordpress.

> HINT: Para crear una galería busca *Añadir Objeto* o *Añadir multimedia* en el costado izquierdo encontrarás *Crear Galería*

- Modifica el Loop de la plantilla Blog en el archivo *page-blog.php*
	- Agrega el link del post a la imagen destacada.
	- Quita la información de autor y comentarios del loop. 
	- Al botón *Leer Más* agregar la clase .boton-rojo además de .read-	  more
- Toma una captura de pantalla de la página de inicio. Guarda el archivo para después.
- Vamos a agregar <https://github.com/zurb/twentytwenty>. Si revisas la documentación, para que funcione en el sitio hay que agregar archivos CSS, JS e inicializar. Para facilitar esta tarea vamos a incluir el archivo *script.php* (se encuentra en el repositorio de la actividad carpeta Ejercicio) al final del archivo *page.php*. Si revisan el archivo *script.php* se darán cuenta que incluye todos los elementos necesarios para que funcione.

	> HINT: Debes subir los archivos .php, .js y .css en las carpetas correspondientes según el archivo script.php.
	
	>AVANZADO: Se puede realizar la misma tarea agregando los CSS y JS utilizando las funciones de Wordpress. Luego inicializando solamente en el archivo *script.php*.
	
- Crea una página nueva llamada "Antes y después", en la pestaña HTML del editor copia el siguiente código. Modifica las imágenes por las capturas de pantalla tomadas usando *Añadir Objeto*.

```html
<div id="container1">
 <!-- The before image is first -->
 <img src="http://tu-imagen" />
 <!-- The after image is last -->
 <img src="http://tu-imagen-2" />
</div>
```


## ¿Tienes tiempo todavía?  
- Agregar un Custom Post Type llamado "Noticias"
- Crea un template single-news.php donde el contenido sea Fullwidth, es decir, eliminar el Sidebar
