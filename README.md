

#  :de: Slug

Dises ist ein kleine Script um Slug zu machen.

## Installation.

Installation des Komponisten in der `composer.json` setzen ...

```
"require": {
        ....
        "didweb/slug": "2.*"
        ....
     }

```


In der `app/AppKernel.php` put setzen ...

```
$bundles = array(
    ...
    new Slug\SlugBundle\SlugSlugBundle(),
    ....
    );

```



In der Konfigurationsdatei:  `app/config/config.yml` ...

```
imports:
    - { resource: "@SlugSlugBundle/Resources/config/services.yml" }

```


### Beispiel Verwendung

Wenn Sie den Dienst im Controller Nutzung verwenden möchten es folgt ....

```
	  $text = 'Text Besipiel: Á è ñ P % --o Wç ü ö ä';
		$slug = $this->get('didweb_slug.accion');
    $res = $slug->clean($texto);

```

Der Standard-Code ist der Bindestrich `-` Separator. Sie können den Separator ändern, mit dem Sie, indem sie als Parameter in der `clean` Funktion wollen. Der Spacer ist ein optionaler Parameter so, wenn nicht spezifisch wird der Bindestrich `-` Standard.


Beispiel des Separators für eine Unterstreichungs modifizierende `_`:

```
	  $text = 'Text Besipiel: Á è ñ P % --o Wç ';
		$slug = $this->get('didweb_slug.accion');
    $res = $slug->clean($text,'_');

```

***

# :en: Slug

It is a small script to make Slugs.

## Installation

Installation using composer, put in `composer.json` file ...

```
"require": {
        ....
        "didweb/slug": "2.*"
        ....
     }

```
In the `app/AppKernel.php` file put put ...


```
$bundles = array(
    ...
    new Slug\SlugBundle\SlugSlugBundle(),
    ....
    );

```

In the configuration file: `app/config/config.yml` import the service like this:


```
imports:
    - { resource: "@SlugSlugBundle/Resources/config/services.yml" }

```

### Example of use

When you want to use the service inside the controller use it as follows ....

```
	  $text = 'Texto de ejemplo: Á è ñ P % --o Wç ';
		$slug = $this->get('didweb_slug.accion');
    $resultado = $slug->clean($text);

```

The default code has the `-` half-dash as a separator. You can change the separator you want by passing it as a parameter in the `cleaning` function. The separator is an optional parameter so if you do not specify it you will have the default `-` by default.

Example modifying the separator by a dash under `_`:


```
	  $texto = 'Texto de ejemplo: Á è ñ P % --o Wç ';
		$slug = $this->get('didweb_slug.accion');
    $resultado = $slug->clean($texto,'_');

```


***


# :es: Slug

Es un pequeño script para realizar Slugs.

## Instalación

Instalación mediante composer, poner en el archivo `composer.json` ...

```
"require": {
        ....
        "didweb/slug": "2.*"
        ....
     }

```


En el archivo `app/AppKernel.php` poner poner...

```
$bundles = array(
    ...
    new Slug\SlugBundle\SlugSlugBundle(),
    ....
    );

```



En el archivo de configuración: `app/config/config.yml` importar el servicio de esta manera:

```
imports:
    - { resource: "@SlugSlugBundle/Resources/config/services.yml" }

```


### Ejemplo de uso

Cuando quieras utilizar el servicio dentro del controlador utilízalo de la siguiente manera....

```
	  $text = 'Texto de ejemplo: Á è ñ P % --o Wç ';
		$slug = $this->get('didweb_slug.accion');
    $resultado = $slug->clean($text);

```

El código por defecto tiene el guión medio `-` como separador. Puedes cambiar el separador por el que tu quieras pasándolo como un parámetro en la función `clean`. El separador es un parámetro opcional así que si no lo especificas tendrá el guión medio `-` por defecto.


Ejemplo modificando el separador por un guión bajo `_`:

```
	  $texto = 'Texto de ejemplo: Á è ñ P % --o Wç ';
		$slug = $this->get('didweb_slug.accion');
    $resultado = $slug->clean($texto,'_');

```
