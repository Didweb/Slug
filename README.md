# Slug

Es un pequeño script para realizar Slugs.

## Instalación

En el archivo de configuración: `app/config/config.yml` importar el servicio de esta manera:

```
imports:
    - { resource: "@SlugSlugBundle/Resources/config/services.yml" }

```


### Ejemplo de uso

Cuando se quiera utilizar el servicio dentro de tu controlador utiliza lo de la siguiente manera....

```
	    $texto = 'Texto de ejemplo: Á è ñ P % --o Wç ';
		$slug = $this->get('didweb_slug.acciones');
        $resultado = $slug->limpiando($texto);

```

El código por defecto tiene el guión medio `-` como seprador puedes cambiar este por el que tu quieras pasandolo como un parametro en la funcion `limpiando`.


Ejemplo modificando el separador pro guión bajo:

```
	    $texto = 'Texto de ejemplo: Á è ñ P % --o Wç ';
		$slug = $this->get('didweb_slug.acciones');
        $resultado = $slug->limpiando($texto,'_');

```
