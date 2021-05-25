# Lenguaje-de-marcas
Repositorio para el trabajo final de lenguaje de marcas. Emulación de la web Rol20

Para poner en funcionamiento este proyecto necesitas tener instalado apache/nginx, mysql, PHP y el programa sendmail.

Copiar el contenido del git hub en la carpeta que utilice como referencia el programa apache/nginx. En mi caso utilizando Debian Buster está en el directorio /var/www/html

Es necesario cambiar dos trozos del código php de los ficheros mail.php y log.php. El fichero mail tiene lo necesario para enviar los correos y es necesario sustituir mi correo por el correo que se quiera poner. Y el fichero de log sirve para contactar con la base de datos e insertar datos, es necesario cambiar los datos para que correspondan con los de log in y contenido de las tablas de tu base de datos
