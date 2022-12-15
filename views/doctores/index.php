<!-- INICIO DEL CONTENIDO PRINCIPAL-->
<div class="container-fluid contenedor-principal">
            <!-- Page Heading -->
            <div
            class="d-sm-flex align-items-center justify-content-between mb-4"
          >
            <h1 class="h3 mb-0 text-gray-800">CITAS:</h1>
            <input type="date" name="" id="">
            <button class="btn btn-primary"> FILTRAR</button>
          </div>
          <!--Fin Page Heading -->

          <div style="padding: 10px; width: 70rem;" class="container table-responsive">
            <table class="table">
                <thead>
                  <tr>
                    <th >DNI</th>
                    <th >NOMBRE PACIENTE</th>
                    <th >EDAD</th>
                    <th >HORA</th>
                    <th >ACCIONES</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($citas as $row) { ?>
                  <tr>
                    <td><?php echo $row->DNIPaciente ?></td>
                    <td><?php echo $row->NombrePaciente ?></td>
                    <td><?php echo $row->Edad?></td>
                    <td><?php echo $row->Hora_Cita ?></td>
                    <td>
                      <form action="/doctor/entrarcita" method="post">
                        <input type="text" name="id" value="<?php echo $row->id ?>" hidden>
                      <button type="submit" class="btn btn-success">Entrar a cita</button>
                      </form>
                       
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>

          </div>
          
        </div>
        <style>
            .contenedor-principal{
                padding: 65px;
            }
        </style>


     <!-- -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
