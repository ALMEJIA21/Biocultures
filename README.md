# Biocultures - Sistema de Gestión de Ensayos Biológicos

## Integrantes
- **Mejía** - Desarrollador Backend / Base de Datos
- [Nombre de Integrante 2] - Desarrollador Frontend
- [Nombre de Integrante 3] - Documentación y Pruebas

---

## Descripción del Problema
En los laboratorios biológicos, el registro manual del comportamiento de microorganismos en medios de cultivo suele generar inconsistencias y errores en la evaluación de viabilidad. Este proyecto automatiza el almacenamiento y análisis condicional de variables críticas como temperatura e incubación.

---

## Funcionalidades Implementadas
- **Registro de Ensayos:** Formulario interactivo para la captura de microorganismos, medios de cultivo, temperatura e incubación.
- **Cálculo Automático de Viabilidad:** Evaluación en tiempo real del estado del ensayo mediante reglas de negocio.
- **Persistencia en MySQL:** Almacenamiento seguro en la base de datos `bioculture_db` utilizando PDO.
- **Retroalimentación Visual:** Mensajes dinámicos de éxito y error en la interfaz.

---

## Clases Creadas y Responsabilidades
- **`Database` (`config/Database.php`):** Encargada de gestionar la conexión PDO a MySQL en el puerto alternativo `3307` e implementar manejo de excepciones.
- **`Ensayo` (`models/Ensayo.php`):** Modelo que encapsula las propiedades del ensayo, ejecuta la regla de negocio para calcular el crecimiento y realiza la inserción de datos mediante Prepared Statements.

---

## Regla de Negocio / Cálculo Principal
Evaluación del estado del ensayo mediante el método `calcularResultado()`:
- **Crecimiento Óptimo:** Temperatura entre 35°C y 38°C con $\ge 24$ horas de incubación.
- **Crecimiento Lento:** Temperatura $< 35^\circ\text{C}$ con $\ge 48$ horas de incubación.
- **Sin Crecimiento / Inviable:** Cualquier combinación fuera de los rangos establecidos.

---

## Framework CSS Utilizado
- **Bootstrap 5.3** (Integrado mediante CDN para el maquetado responsivo, componentes `card`, grillas y alertas dinámicas).

---

## Instrucciones para Ejecutar el Proyecto
1. Clonar el repositorio en la carpeta de XAMPP:
   ```bash
   git clone [https://github.com/tu-usuario/Biocultures.git](https://github.com/tu-usuario/Biocultures.git) C:\xampp\htdocs\Biocultures
