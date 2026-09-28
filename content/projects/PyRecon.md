+++
title = 'PyRecon'
description="An automated nmap python script"
date = '2026-09-14'
draft = false
repo = "https://github.com/Joelin43/PyRecon"
featured = false
icon='devicon-python-plain'
+++

> A small Python networking project created to explore network reconnaissance, automation and command-line tooling.

## Sobre el proyecto

**PyReacon** es uno de mis proyectos personales en Python, creado como una forma de aprender y experimentar con conceptos relacionados con **redes, reconocimiento y automatización**.

## ¿Por qué lo hice?

Al estar empezando en ciberseguridad me di cuenta que al probar maquinas o laboratorios, al final la herramienta que mas utilizaba era **NMAP**. Vi que era un proceso muy repetitivo para acabar siempre haciendo lo mismo.

Entonces decidí crear este script para la tarea que siempre hacia tenerla automatizada y no perder tanto tiempo.

El proyecto me permite juntar varias cosas que estoy aprendiendo:

- Python y programación por línea de comandos.

- Ejecución e interacción con herramientas externas.

- Procesamiento de la salida de comandos.

- Expresiones regulares.

- Manejo de errores.

- Automatización.

- Diseño de pequeñas herramientas para Linux.

## La idea

La idea detrás de PyReacon es sencilla:

**introducir un objetivo → realizar comprobaciones → obtener información → presentar los resultados de una forma clara.**

Aunque pueda parecer una idea bastante simple, durante el desarrollo aparecen muchos pequeños problemas interesantes.

Por ejemplo, la información que devuelve una herramienta externa no siempre tiene exactamente el formato que esperamos. Esto hace necesario procesarla, comprobar errores y decidir qué información merece la pena mostrar.

Es precisamente esta parte la que me parece más interesante del proyecto.

## Qué he aprendido

### Python

PyReacon me ha servido para practicar Python fuera de ejercicios típicos de cursos.

He trabajado especialmente con:

- Argumentos de línea de comandos.

- Funciones y organización del código.

- Expresiones regulares.

- Procesos externos.

- Comprobación de errores.

- Control del flujo de ejecución.

- Salida dinámica en la terminal.

Una de las cosas que más me ha ayudado ha sido encontrar problemas que no había previsto inicialmente y tener que investigar cómo solucionarlos.

### NMAP



### Automatización

Otra parte importante del proyecto es utilizar Python como una capa de automatización sobre herramientas que ya existen.

En lugar de intentar reinventar herramientas completas desde cero, PyReacon puede apoyarse en herramientas del sistema y encargarse de coordinar el proceso y presentar la información.

Esta idea me parece especialmente interesante para futuros proyectos más grandes.

## Decisiones técnicas

Una de las cosas que quiero destacar de PyReacon no es únicamente **qué hace**, sino algunas decisiones que fui tomando durante su desarrollo.

Por ejemplo, decidí utilizar expresiones regulares para extraer determinados datos de la salida de comandos.

## Retos durante el desarrollo

Uno de los principales retos fue conseguir que el programa no dependiera de que todo funcionara perfectamente.

Por ejemplo:

- ¿Qué ocurre si el usuario no proporciona un objetivo?

- ¿Qué ocurre si una herramienta necesaria no está instalada?

- ¿Qué ocurre si el objetivo no responde?

- ¿Qué ocurre si la salida de un comando no tiene el formato esperado?

- ¿Qué ocurre si el usuario introduce un valor incorrecto?

## Lo que cambiaría

PyReacon sigue siendo un proyecto de aprendizaje y precisamente por eso todavía tiene bastante margen de mejora.

Algunas ideas que me gustaría explorar en el futuro:

- Mejorar la estructura interna del proyecto.

- Añadir más comprobaciones de red.

- Mejorar la gestión de errores.

- Crear una salida más clara para la terminal.

- Añadir diferentes modos de ejecución.

- Mejorar la documentación interna.

- No depender de NMAP a la hora de hacer el scanner

## Qué representa este proyecto

PyReacon probablemente no es un proyecto grande, pero lo veía un buen proyecto para empezar.

Prefiero empezar con algo pequeño, intentar hacerlo funcionar y después ir ampliándolo a medida que aparecen nuevas cosas que quiero aprender.

Al final mi objetivo con este proyecto era aprender nuevas funciones a la hora de programar, y tener mi propia herramienta para ahorrarme algo de tiempo.

## Tecnologías

**Lenguaje**

- Python

**Entorno**

- Linux
- Terminal

**Conceptos**

- Networking
- Reconocimiento
- Automatización
- Procesamiento de texto