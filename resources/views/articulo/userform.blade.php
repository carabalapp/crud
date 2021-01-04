@extends('layouts.base')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
            <div class="card">
                <form action="" method="POST">
                    <div class="card-header text-center">Agregar Usuarios</div>
                        <div class="card-body">
                            <div class="row form-group my-3">
                                <label for="" class="col-2">Nombre</label>
                                <input type="text" name="nombre" placeholder="Ingresar Nombre" class="form-control col-md-9" >
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-2">Email</label>
                                <input type="text" name="nombre" placeholder="Ingresar Email" class="form-control col-md-9" >
                            </div>

                            <div class="row form-group my-3 justify-content-center">
                                <button type="submit" class="btn btn-success col-md-9" >Guardar</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>