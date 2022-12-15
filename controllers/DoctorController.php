<?php
    namespace Controller;

    
    use Router\Router;
    use Model\Medico;
    use Model\Especialidades;
    use Model\Cita;
    use Model\Horario;
    use Model\Paciente;

    class DoctorController {
        
        public static function index(Router $router) {

            $sesion = $_SESSION['id'];

            $medico = Medico::findLogin($sesion);
            $citas=Cita::findCitaMedico($medico->id);

            foreach ($citas as $row) {

                $paciente=Paciente::find($row->ID_Paciente);
                $row->NombrePaciente = $paciente->Nombre . " " . $paciente->Ape_Paterno;
                $row->DNIPaciente = $paciente->Nr_Doc;
                $row->Edad = $paciente->Edad;

                $row->NombreMedico = $medico->Nombre . " " . $medico->Ape_Paterno;
    
                $horario = Horario::find($row->ID_Horario);
                $row->Fecha_Cita = $horario->Fecha;
                $row->Hora_Cita = $horario->Hora;
            }
            
            $router->render('doctores/index', 'layout-medico', [

                'medico' => $medico,
                'citas' => $citas,

            ]);
        }

        public static function entrarcita(Router $router) {

            $citas=Cita::find($_POST['id']);
            $sesion = $_SESSION['id'];
            $medico = Medico::findLogin($sesion);

            $paciente=Paciente::find($citas->ID_Paciente);
            $citas->NombrePaciente = $paciente->Nombre . " " . $paciente->Ape_Paterno;
            $citas->DNIPaciente = $paciente->Nr_Doc;
            $citas->Edad = $paciente->Edad;

            $citas->NombreMedico = $medico->Nombre . " " . $medico->Ape_Paterno;

            $horario = Horario::find($citas->ID_Horario);
            $citas->Fecha_Cita = $horario->Fecha;
            $citas->Hora_Cita = $horario->Hora;

            $router->render('doctores/Cita', 'layout-medico', [

                'citas' => $citas,

            ]);
        }

    }