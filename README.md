# Universidad Tecnológica de Panamá

# Facultad de Ingeniería de Sistemas Computacionales

# Práctica de Programación Orientada a Objetos en PHP

## Fecha de Ejecución:

2 de Octubre de 2026

## Objetivos

• Aplicar los conceptos de la Programación Orientada a Objetos (POO) en PHP: clases, objetos, herencia y encapsulamiento.

• Comprender la diferencia entre `self::` y `static::` mediante Late Static Binding.

• Identificar el comportamiento de una clase `final` al intentar heredarla.

• Utilizar constantes matemáticas y formateo de números en cálculos con objetos.

• Implementar una jerarquía de clases (`Persona`, `Docente`, `Estudiante`) usando constructores, `parent::` y métodos de acceso (getters).

## Introducción

La Programación Orientada a Objetos permite organizar el código en clases que representan entidades del mundo real, agrupando datos (propiedades) y comportamientos (métodos). PHP soporta POO de forma nativa, con mecanismos como la herencia, los modificadores de visibilidad (`public`, `protected`, `private`) y las clases `final`.

En esta práctica se resolvieron cinco problemas que abarcan desde la herencia básica entre clases hasta una jerarquía con constructores encadenados, ejecutando cada programa y comprobando su salida.

## ⚙️ Requisitos Previos

### Tecnologías utilizadas

- 🐘 PHP 8.0 o superior (probado con PHP 8.3)
- 🌐 Servidor web: Apache
- 💻 Entorno de desarrollo local: WampServer
- 📝 Editor de código: Visual Studio Code
- 🔧 Git (para el repositorio)

### 🖥️ Sistema Operativo

- Windows 10 / 11

> No requiere base de datos, Composer ni Node.js.

## 📁 Estructura del Proyecto

```
Practica_POO/
├── practica_poo/
│   ├── problema1_Coche.php
│   ├── problema2_LateStaticBinding.php
│   ├── problema3_ClaseFinal.php
│   ├── problema4_Circulo.php
│   └── problema5/
│       ├── Persona.php
│       ├── Docente.php
│       └── Estudiante.php
└── README.md
```

## 🔧 Instalación y ejecución

### 1. Clonar el repositorio dentro de WAMP

```bash
cd C:\wamp64\www
git clone URL_DEL_REPOSITORIO Practica_POO
```

### 2. Iniciar WampServer

Verificar que los servicios estén en verde.

### 3. Ejecutar desde el navegador

```
http://localhost/Practica_POO/practica_poo/problema1_Coche.php
http://localhost/Practica_POO/practica_poo/problema2_LateStaticBinding.php
http://localhost/Practica_POO/practica_poo/problema3_ClaseFinal.php
http://localhost/Practica_POO/practica_poo/problema4_Circulo.php
http://localhost/Practica_POO/practica_poo/problema5/Docente.php
http://localhost/Practica_POO/practica_poo/problema5/Estudiante.php
```

### 4. (Opcional) Ejecutar desde la terminal

```bash
cd practica_poo
php problema1_Coche.php
```

## 🧩 Descripción de los problemas

### Problema 1: Herencia con `Coche` y `CocheDeLujo`

**Archivo:** `problema1_Coche.php`

La clase `Coche` tiene la propiedad `protected $color` con su `setColor()` y `getColor()`. La clase `CocheDeLujo` hereda de `Coche`, agrega la propiedad `$extras` y **sobrescribe** el método `printCaracteristicas()` para mostrar también los extras.

| Concepto | Aplicación |
|---|---|
| Herencia | `CocheDeLujo extends Coche` |
| Visibilidad `protected` | `$color` es accesible desde la clase hija |
| Sobrescritura de métodos | `printCaracteristicas()` redefinido en la clase hija |

**🖼️ Resultado:**

```
Color: negro
-----------------
Extras: TV
```

*(El separador `<hr/>` se muestra como una línea horizontal en el navegador.)*

---

### Problema 2: Late Static Binding (`self::` vs `static::`)

**Archivo:** `problema2_LateStaticBinding.php`

La clase `A` define `miFuncion()`, y dos métodos que la invocan: `otraFuncion()` usando `static::` y `otraFuncionSelf()` usando `self::`. La clase `B` hereda de `A` y sobrescribe `miFuncion()`. Se llama a ambos métodos desde `B`.

| Llamada | Resultado | Motivo |
|---|---|---|
| `B::otraFuncion()` (`static::`) | `B` | `static::` se resuelve en tiempo de ejecución según la clase desde la que se llama |
| `B::otraFuncionSelf()` (`self::`) | `A` | `self::` queda fijo a la clase donde se escribió el método |

**🖼️ Resultado:**

```
Con static:: -> B
Con self:: -> A
```

---

### Problema 3: Clase `final`

**Archivo:** `problema3_ClaseFinal.php`

Se declara `final class Coche` y luego se intenta heredar con `class cocheDeLujo extends Coche`. Una clase `final` **no puede ser extendida**, por lo que PHP detiene la ejecución con un error fatal. **Este error es el resultado esperado del ejercicio.**

**🖼️ Resultado:**

```
Fatal error: Class cocheDeLujo cannot extend final class Coche in ... on line 11
```

Para poder heredar la clase bastaría con quitar la palabra `final`.

---

### Problema 4: Cálculos con la clase `Circulo`

**Archivo:** `problema4_Circulo.php`

La clase `Circulo` recibe un radio (`private float $radio`) en el constructor y calcula el área (`π · r²`) y el perímetro (`2 · π · r`) usando la constante `M_PI` de PHP. Los resultados se muestran con `number_format()` con 2 decimales. Se probó con un radio de 4.

| Cálculo | Fórmula | Resultado |
|---|---|---|
| Área | π · 4² | 50.27 |
| Perímetro | 2 · π · 4 | 25.13 |

**🖼️ Resultado:**

```
Área del círculo: 	50.27 Perímetro del círculo: 	 25.13
```

---

### Problema 5: Jerarquía `Persona`, `Docente` y `Estudiante`

**Carpeta:** `problema5/`

`Persona` es la clase base con `nombre`, `apellido` y `fechaNacimiento` (propiedades `protected` y sus getters). `Docente` y `Estudiante` heredan de `Persona`, llaman a `parent::__construct()` y agregan sus propios atributos.

| Clase | Atributos propios |
|---|---|
| `Persona` | nombre, apellido, fechaNacimiento |
| `Docente` | codigoDocente, departamento, categoria, maximoTitulo, tipoContratacion |
| `Estudiante` | indiceAcademico, cohorte, estadoAcademico, modalidadEstudio |

Las propiedades están tipadas (`string`, `float`, `int`) y los getters declaran su tipo de retorno. En `Estudiante`, `estadoAcademico` y `modalidadEstudio` se guardan como códigos numéricos (1 = activo, 2 = presencial).

**🖼️ Resultado `Docente.php`:**

```
El nombre del docente es: María
El apellido del docente es: Gómez
La fecha de nacimiento del docente es: 1985-03-20
El código del docente es: D-001
El departamento del docente es: Computación y Sistemas
La categoría del docente es: Titular
El máximo título académico del docente es: Magíster
El tipo de contratación del docente es: Tiempo Completo
```

**🖼️ Resultado `Estudiante.php`:**

```
El nombre del estudiante es: Juan
El apellido del estudiante es: Pérez
La fecha de nacimiento del estudiante es: 2000-05-15
El índice académico del estudiante es: 3.5
El cohorte del estudiante es: 2023
El estado académico del estudiante es: 1
La modalidad de estudio del estudiante es: 2
```

## ⚠️ Dificultades y Soluciones

Durante la ejecución y revisión de los programas se encontraron los siguientes puntos:

### Error esperado: "cannot extend final class"

En el problema 3, PHP muestra un error fatal al intentar heredar una clase `final`.

**Solución:** No es un fallo del programa, es el comportamiento que demuestra el ejercicio. Para poder heredar, se debe quitar `final` de la clase `Coche`.

### Salida de un solo renglón en el navegador (problema 4)

Los saltos de línea `\n` y tabulaciones `\t` no se ven en el navegador porque HTML los ignora, y el resultado aparece todo en una línea.

**Solución:** Ejecutar desde la terminal con `php problema4_Circulo.php`, o usar `<br>` / una etiqueta `<pre>` para mostrarlos en el navegador.

### Conflicto al cargar `Docente.php` y `Estudiante.php` juntos (problema 5)

Ambos archivos hacen `include("Persona.php")`. Si se cargan en el mismo script, PHP muestra `Cannot declare class Persona, because the name is already in use`.

**Solución:** Ejecutar cada archivo por separado, o usar `include_once` / `require_once`, que evitan cargar un archivo dos veces.

### Falta de paréntesis en `getColor` (problema 1)

En la clase base `Coche`, el método `printCaracteristicas()` usa `$this->getColor` sin paréntesis. Esto no afecta la salida del programa, porque `CocheDeLujo` lo sobrescribe, pero si se llamara desde un objeto `Coche` mostraría `Warning: Undefined property: Coche::$getColor`.

**Solución:** Escribir `$this->getColor()` para invocar el método.

## 📚 Referencias

PHP. (s. f.). *Classes and Objects*. https://www.php.net/manual/en/language.oop5.php

PHP. (s. f.). *Late Static Bindings*. https://www.php.net/manual/en/language.oop5.late-static-bindings.php

PHP. (s. f.). *The final keyword*. https://www.php.net/manual/en/language.oop5.final.php

PHP. (s. f.). *Math Constants (M_PI)*. https://www.php.net/manual/en/math.constants.php

PHP. (s. f.). *number_format*. https://www.php.net/manual/en/function.number-format.php

## 👤 Información del Estudiante

Este laboratorio ha sido desarrollado por el estudiante de la Universidad Tecnológica de Panamá:

Nombre: Marcos Navarro

Correo: marcos.navarro@utp.ac.pa

Curso: Desarrollo Web

Instructor: Ing. Irina Fong
