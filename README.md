# Slug

Es un pequeño script para realizar Slugs.

## Instalación

En el archivo de configuración: `app/config/config.yml` importar el servicio de esta manera:

```
imports:
    - { resource: "@SlugSlugBundle/Resources/config/services.yml" }

```


### Ejemplo de uso

Cuando quieras utilizar el servicio dentro del controlador utilizalo de la siguiente manera....

```
	    $texto = 'Texto de ejemplo: Á è ñ P % --o Wç ';
		$slug = $this->get('didweb_slug.acciones');
        $resultado = $slug->limpiando($texto);

```

El código por defecto tiene el guión medio `-` como seprador. Puedes cambiar el separador por el que tu quieras pasandolo como un parámetro en la funcion `limpiando`. El separador es un parámetro opcional así que si no lo especificas tendrá el guión medio `-` por defecto. 


Ejemplo modificando el separador por un guión bajo `_`:

```
	    $texto = 'Texto de ejemplo: Á è ñ P % --o Wç ';
		$slug = $this->get('didweb_slug.acciones');
        $resultado = $slug->limpiando($texto,'_');

```
