# Parking
## _Proyecto BackEnd FullStack_
### Casos de Uso

- Registra entrada
- Registra salida
- Da de alta vehículo oficial
- Da de alta vehículo de residente
- Comienza mes

Clone o descargue el proyecto, luego siga las siguientes indicaciones.
- Ingrese al proyecto e instale las dependencias: 
```sh
cd ProyectoBack_FullStack
composer install
```
- Asegurese de tener instalado WAMPSERVER o XAMPP 
- Levante los servicios de Apache y MySql desde el programa escogido
- Ingrese a PhpMyAdmin, genere la BD `proyecto_back`
- Levante el proyecto Back
```sh
php artisan serve
```
- Ingrese a la URL
```sh
http://127.0.0.1:8000
```
## EndPoints
Funcionamiento breve de cada pagina

| Metodo | EndPoint | Objetivo |
| ------ | ------ | ------ |
| GET | [/estacionamiento] | Obtener todos los registros de estacionamiento |
| GET | [/estacionamiento/{placa}] | Obtener el ultimo estacionamiento de la placa pasada al EndPoint |
| POST | [/estacionamiento/updateResidente] | Actualiza los campos de tiempo e importe en el estacionamiento de los vehiculos Residentes  |
| POST | [/estacionamiento] | Ingresar un nuevo estacionamiento |
| PUT | [/estacionamiento/{id}] | Actualizar un registro de estacionamiento |
| DELETE | [/estacionamiento/{id}] | Eliminar un estacionamiento |
| DELETE | [/estacionamiento/deleteOficial] | Eliminar un los registros de estacionamiento para los vehiculos oficiales |

## Estructura de objetos
### Vehiculo
```sh
{
    placa:              string;
    tipo_vehiculo_id: TipoVehiculoID;
}

enum TipoVehiculoID {
    Oficial =      "1",
    Residente =    "2",
    No_Residente = "3"
}
```
### Estacionamiento
```sh
{
    id?:               string;
    hora_entrada:     Date;
    hora_salida:      Date;
    importe:          string;
    total_tiempo:     string;
    vehiculo_placa:   string;
}
```
## Licencia

MIT
**Free Software, Hell Yeah!**

