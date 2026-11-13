
# Manual de Usuario y Administrador

## AuraSkin – Sitio web de cosmética

AuraSkin es un sitio web de cosmética desarrollado como parte del Proyecto Integrador de la materia Producción Digital II. Su objetivo es ofrecer un espacio digital donde los usuarios puedan conocer los productos de la marca, explorar sus características y acceder a diferentes funcionalidades de interacción. Para ello, el sitio cuenta con distintas secciones, entre ellas Sérums, Reseñas, Conócenos y Contacto, que permiten acceder a información sobre la marca, conocer sus productos y establecer una comunicación con ella. Además, incorpora un buscador de productos y formularios mediante los cuales los usuarios pueden compartir sus opiniones y enviar consultas.

El proyecto fue desarrollado utilizando HTML y CSS para la estructura y el diseño visual del sitio, PHP para el procesamiento de la información y MySQL para el almacenamiento y consulta de datos. La integración de estas tecnologías permite incorporar funcionalidades dinámicas y ofrecer una experiencia de navegación que combina la presentación de contenido con la interacción de los usuarios.

## Descripción técnica del proyecto

AuraSkin funciona mediante una arquitectura cliente-servidor, en la que los usuarios interactúan con las diferentes páginas del sitio desde su navegador, mientras que PHP se encarga de procesar las solicitudes y establecer la comunicación con la base de datos. Este funcionamiento permite que determinadas acciones, como la búsqueda de productos o el envío de formularios, se realicen a través de consultas y operaciones sobre la información almacenada en MySQL.

Para el desarrollo y funcionamiento del proyecto en un entorno local se utilizó XAMPP, una herramienta que permite ejecutar el servidor Apache y trabajar con MySQL mediante phpMyAdmin. A través de este entorno es posible visualizar el sitio web, comprobar el funcionamiento de sus funcionalidades y administrar la información registrada en la base de datos.

La base de datos, denominada auraskin, está compuesta por tres tablas principales: productos, reseñas y contactos. La tabla productos almacena la información de los artículos disponibles, incluyendo su nombre, categoría, precio e imagen, y es utilizada para realizar las búsquedas dentro del sitio. Por su parte, la tabla reseñas registra las opiniones enviadas por los usuarios, junto con sus nombres y puntuaciones, mientras que la tabla contactos almacena las consultas recibidas mediante el formulario correspondiente, incluyendo nombre, correo electrónico, asunto, mensaje y fecha de envío.

De esta manera, la integración entre PHP y MySQL permite consultar información y almacenar los datos ingresados por los usuarios, incorporando funcionalidades dinámicas que complementan la estructura visual del sitio web.

## Manual de Usuario

El sitio web AuraSkin está diseñado para ofrecer una navegación sencilla e intuitiva, permitiendo que los usuarios accedan a la información de los productos y utilicen las diferentes funcionalidades disponibles. A través de sus secciones, los visitantes pueden conocer la marca, realizar búsquedas, compartir sus experiencias y enviar consultas mediante formularios.

### Navegación por el sitio

Al ingresar a AuraSkin, el usuario accede a la página principal, donde se presenta la marca y su catálogo de productos de cosmética. En la parte superior se encuentra el encabezado, que incluye el logotipo de AuraSkin y un menú de navegación desde el cual es posible acceder a las distintas secciones del sitio. Además, al seleccionar el logotipo, el usuario puede regresar a la página principal desde otras secciones.

El menú está compuesto por cuatro secciones principales. Sérums presenta los productos disponibles de la marca, mientras que Reseñas ofrece un espacio donde los usuarios pueden compartir sus opiniones y experiencias. Por otro lado, Conócenos brinda información sobre AuraSkin y Contacto permite enviar consultas o mensajes a través de un formulario. Esta organización facilita el acceso a los diferentes contenidos y permite que cada usuario encuentre la información que necesita.

### Búsqueda de productos

AuraSkin incorpora un buscador que permite encontrar productos mediante palabras clave, facilitando la exploración del catálogo. Para utilizar esta funcionalidad, el usuario debe ingresar el nombre o la categoría del producto que desea encontrar en el campo de búsqueda ubicado en el encabezado del sitio y presionar el botón Buscar.

Una vez realizada la búsqueda, el sistema procesa la solicitud mediante PHP y consulta la tabla productos de la base de datos MySQL para identificar las coincidencias con el término ingresado. Posteriormente, se muestra una página de resultados que incluye la imagen, el nombre, la categoría y el precio de cada producto encontrado. En caso de que no existan coincidencias, el sitio informa al usuario que no se encontraron productos relacionados con su búsqueda.

### Envío de reseñas

La sección Reseñas permite que los usuarios compartan sus opiniones sobre los productos y su experiencia con AuraSkin, incorporando un espacio de participación dentro del sitio web. Para enviar una reseña, el usuario debe completar un formulario en el que se solicita su nombre, una puntuación y un comentario sobre su experiencia. Una vez ingresada la información, debe presionar el botón de envío para completar el proceso.

Los datos ingresados son procesados mediante PHP y almacenados en la tabla reseñas de la base de datos MySQL, permitiendo conservar un registro de las opiniones recibidas. Al finalizar el envío, el sitio presenta una página de agradecimiento que confirma la recepción de la reseña e incluye un botón para regresar a la sección correspondiente.

### Envío de consultas

La sección Contacto ofrece un canal de comunicación para que los usuarios puedan realizar consultas relacionadas con la marca o sus productos. Para utilizar esta funcionalidad, deben completar un formulario con su nombre, correo electrónico, asunto y mensaje, proporcionando la información necesaria para registrar correctamente la consulta.

Una vez completados los campos, el usuario debe presionar el botón de envío. El sistema procesa la información mediante PHP y verifica que los campos estén completos y que el correo electrónico tenga un formato válido. Si los datos cumplen con estas condiciones, la consulta se almacena en la tabla contactos de MySQL, junto con la información proporcionada por el usuario y la fecha de registro. Finalmente, el sitio muestra una página de confirmación que agradece el mensaje recibido y ofrece la posibilidad de regresar a la sección Contacto.

## Manual de Administrador

La administración de AuraSkin se realiza desde el entorno de desarrollo local, utilizando XAMPP y phpMyAdmin para verificar el funcionamiento del sitio y gestionar la información almacenada en la base de datos. A través de estas herramientas, el administrador puede consultar los registros existentes, comprobar que los formularios guarden correctamente los datos y realizar modificaciones cuando sea necesario.

### Inicio del servidor local

Para ejecutar AuraSkin en un entorno local es necesario contar con XAMPP, una herramienta que permite utilizar Apache como servidor web y MySQL como sistema de gestión de bases de datos. Antes de acceder al sitio, el administrador debe verificar que los archivos del proyecto se encuentren dentro de la carpeta `htdocs`, correspondiente al directorio donde XAMPP almacena los proyectos web.

Una vez verificada la ubicación de los archivos, se debe abrir el panel de control de XAMPP e iniciar los servicios Apache y MySQL. Cuando ambos servicios se encuentren activos, el administrador podrá abrir un navegador e ingresar la dirección local correspondiente al proyecto. De esta manera, el sitio estará disponible para su navegación y será posible comprobar el funcionamiento de las páginas, el buscador y los formularios conectados a la base de datos.

### Acceso a la base de datos

La administración de la base de datos se realiza mediante phpMyAdmin, una herramienta que permite visualizar, consultar y modificar la información almacenada en MySQL. Para acceder, el administrador debe ingresar desde el navegador a la dirección `http://localhost/phpmyadmin` y seleccionar la base de datos denominada auraskin, donde se encuentran las tablas utilizadas por el proyecto.

Dentro de esta base de datos es posible acceder a las tablas productos, reseñas y contactos, consultar los registros almacenados y verificar que las operaciones realizadas desde el sitio web se reflejen correctamente. Además, phpMyAdmin permite administrar la estructura de las tablas y realizar modificaciones sobre los datos cuando sea necesario.

### Administración de productos

La tabla productos almacena toda la información relacionada con los artículos disponibles en AuraSkin y es utilizada principalmente para el funcionamiento del buscador del sitio. Cada registro contiene un identificador único, el nombre del producto, su categoría, precio y el nombre del archivo de imagen correspondiente.

A través de phpMyAdmin, el administrador puede consultar los productos registrados, verificar que la información sea correcta y realizar modificaciones cuando sea necesario. Esto permite mantener actualizados los datos utilizados por el sitio web y comprobar que los productos se encuentren correctamente registrados en la base de datos.

### Administración de reseñas

La tabla reseñas almacena las opiniones enviadas por los usuarios mediante el formulario disponible en el sitio web. Cada registro contiene un identificador, el nombre del usuario, la puntuación seleccionada y el comentario ingresado, permitiendo conservar la información correspondiente a las experiencias compartidas.

Desde phpMyAdmin, el administrador puede acceder a esta tabla para consultar las reseñas recibidas, revisar sus puntuaciones y verificar que los comentarios enviados desde el formulario se hayan almacenado correctamente. Esta información permite llevar un registro de las opiniones de los usuarios y comprobar el funcionamiento de la conexión entre el formulario y la base de datos.

### Administración de consultas

La tabla contactos almacena los mensajes enviados por los usuarios desde el formulario de contacto de AuraSkin. Cada registro incluye un identificador, el nombre del usuario, su correo electrónico, el asunto de la consulta, el contenido del mensaje y la fecha en la que fue registrado.

El administrador puede acceder a esta información mediante phpMyAdmin para visualizar las consultas recibidas y verificar que los datos enviados desde el sitio se hayan guardado correctamente. De esta manera, la base de datos funciona como un registro de los mensajes enviados por los usuarios y permite consultar su contenido desde el entorno de administración.

### Acceso y seguridad

En esta versión de AuraSkin no se implementó un sistema de registro e inicio de sesión mediante PHP, debido a que se trata de una funcionalidad opcional dentro del alcance del proyecto. Por este motivo, el sitio no dispone de una zona administrativa protegida mediante sesiones y las tareas de administración se realizan directamente desde el entorno local de desarrollo.

El acceso a la base de datos y a las herramientas de administración se efectúa mediante XAMPP y phpMyAdmin, por lo que su seguridad depende de la configuración del servidor local. Esta modalidad permite gestionar la información y comprobar el funcionamiento de las funcionalidades desarrolladas sin incorporar un sistema de autenticación propio dentro del sitio web.
