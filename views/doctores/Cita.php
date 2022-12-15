<div class="container-fluid contenedor-principal">

            <div class="card m-auto" style="width: 70rem;" >
            <div class="card-body">
                <h5 class="card-title text-center">Cita</h5>
                <div class="row">
                    <div class="col-6">
                        <h6 class="card-subtitle mb-2 ">DIA: <?php echo $citas->Fecha_Cita ?></h6>
                    </div>
                    <div class="col-6 text-end">
                        <form action="" method="post" >
                            <button type="submit" class="btn btn-danger btn-sm">ver historial medico</button>
                        </form>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6 ">
                        <h6 class="card-subtitle mb-2 ">NOMBRE: <?php echo $citas->NombrePaciente ?></h6>
                    </div>
                    <div class="col-6">
                        <h6 class="card-subtitle mb-2 ">EDAD: <?php echo $citas->Edad ?></h6>
                    </div>
                </div>
                <h6 class="card-subtitle mb-2 ">DESCRIPCION: </h6>
                <h6 class="card-subtitle mb-2 "><b>DIAGNÓSTICO:</b> </h6>
                <p class="card-text"><b>RECETA</b> </p>
                <h5 class="card-title">Receta Medica:</h5>
                <table class="table align-middle text-center">
                        <thead>
                        <tr>
                            <th class="col-4">Anotacion</th>
                            <th class="col-8" >Descripcion</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                </table>    
            </div>
            <div class="card-footer text-center">
                <a href="/doctor" class="btn btn-primary ">Volver</a>
            </div>
            </div>
    
</div>