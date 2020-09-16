<?php

require_once "conexion.php";


/* =============================================
      MOSTRAR CONSULTA DE LA PAGINA DE CONSULTA.PHP
      ============================================= */
class ModeloRegistro
{
    static public function mdlMostrarConsulta($tabla, $item, $item1, $valor1, $item2, $valor2, $item3, $valor3, $item4, $valor4)
    {
        //CAPTURAR DATOS PARA EL EDIT EN EL FORMULARIO
        if ($item != null) {
        } else {

            $stmt = Conexion::conectar()->prepare("SELECT LPAD(cop,5,'0') as cop,
            datos_completos,colegio_regional,
            estado,post_grado FROM $tabla WHERE $item1=:$item1 OR $item2=:$item2 OR $item3=:$item3 OR $item4=:$item4");

            $stmt->bindParam(":" . $item1, $valor1, PDO::PARAM_INT);
            $stmt->bindParam(":" . $item2, $valor2, PDO::PARAM_STR);
            $stmt->bindParam(":" . $item3, $valor3, PDO::PARAM_STR);
            $stmt->bindParam(":" . $item4, $valor4, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetchAll();
        }

        $stmt->close();

        $stmt = null;
    }
    static public function mdlMostrarConsultaDescrip($tabla, $item, $item1, $valor1)
    {
        //CAPTURAR DATOS PARA EL EDIT EN EL FORMULARIO
        if ($item != null) {
        } else {

            $stmt = Conexion::conectar()->prepare("SELECT LPAD(cop,5,'0') as cop,
            datos_completos,colegio_regional,
            estado,post_grado FROM $tabla WHERE $item1 like ':$item1%'");

            $stmt->bindParam(":" . $item1, $valor1, PDO::PARAM_STR);


            $stmt->execute();

            return $stmt->fetchAll();
        }

        $stmt->close();

        $stmt = null;
    }

    /* =============================================
      MOSTRAR RANGOS DE FECHA
      ============================================= */

    static public function mdlRangoFechasRegistro($tabla, $fechaInicial, $fechaFinal)
    {

        if ($fechaInicial == null) {

            $stmt = Conexion::conectar()->prepare("SELECT Tap_RegistroVisita.id as id,
            (SELECT tipo_documento FROM Tap_TipoDocumento WHERE id=Tap_Funcionario.idtipo_documento) as TipoDocF,    
            Tap_Funcionario.num_documento as num_documento,
            Tap_Funcionario.nombre as nombre,
            Tap_Funcionario.cargo as cargo,
            (SELECT entidad FROM Tap_Entidad WHERE id=Tap_Funcionario.identidad) as ent_funcionario,
            Tap_RegistroVisita.motivo as motivo,
            Tap_RegistroVisita.servidor_publico as servidor_publico,
            Tap_RegistroVisita.area_oficina_sp as area_oficina_sp,
            Tap_RegistroVisita.cargo as cargo,
            FORMAT(CONVERT(date,Tap_RegistroVisita.fecha_ingreso),'dd/MM/yyyy') as fecha_ingreso,
			CONVERT(varchar(25), CAST(Tap_RegistroVisita.hora_ingreso as TIME),100) as hora_ingreso,
            FORMAT(Tap_RegistroVisita.fecha_salida,'dd/MM/yyyy') as fecha_salida,
            Tap_RegistroVisita.hora_salida as hora_salida,
            Tap_RegistroVisita.usuario as usuario  
            FROM $tabla left join Tap_Funcionario  on 
            Tap_RegistroVisita.idfuncionario=Tap_Funcionario.id 
            ORDER BY Tap_RegistroVisita.id DESC");

            $stmt->execute();

            return $stmt->fetchAll();
        } else if ($fechaInicial == $fechaFinal) {

            $stmt = Conexion::conectar()->prepare("SELECT Tap_RegistroVisita.id as id,
            (SELECT tipo_documento FROM Tap_TipoDocumento WHERE id=Tap_Funcionario.idtipo_documento) as TipoDocF,    
            Tap_Funcionario.num_documento as num_documento,
            Tap_Funcionario.nombre as nombre,
            Tap_Funcionario.cargo as cargo,
            (SELECT entidad FROM Tap_Entidad WHERE id=Tap_Funcionario.identidad) as ent_funcionario,
            Tap_RegistroVisita.motivo as motivo,
            Tap_RegistroVisita.servidor_publico as servidor_publico,
            Tap_RegistroVisita.area_oficina_sp as area_oficina_sp,
            Tap_RegistroVisita.cargo as cargo,
            FORMAT(CONVERT(date,Tap_RegistroVisita.fecha_ingreso),'dd/MM/yyyy') as fecha_ingreso,
			CONVERT(varchar(25), CAST(Tap_RegistroVisita.hora_ingreso as TIME),100) as hora_ingreso,
            FORMAT(Tap_RegistroVisita.fecha_salida,'dd/MM/yyyy') as fecha_salida,
            Tap_RegistroVisita.hora_salida as hora_salida,
            Tap_RegistroVisita.usuario as usuario  
            FROM $tabla left join Tap_Funcionario  on 
            Tap_RegistroVisita.idfuncionario=Tap_Funcionario.id 
            WHERE FORMAT(CONVERT(date,Tap_RegistroVisita.fecha_ingreso),'dd/MM/yyyy')
            like '%$fechaInicial%' ORDER BY Tap_RegistroVisita.id DESC");

            /* $stmt->bindParam(":", $fechaInicial, PDO::PARAM_STR); */

            $stmt->execute();

            return $stmt->fetchAll();
        } else {

            $stmt = Conexion::conectar()->prepare("SELECT Tap_RegistroVisita.id as id,
                (SELECT tipo_documento FROM Tap_TipoDocumento WHERE id=Tap_Funcionario.idtipo_documento) as TipoDocF,    
                Tap_Funcionario.num_documento as num_documento,
                Tap_Funcionario.nombre as nombre,
                Tap_Funcionario.cargo as cargo,
                (SELECT entidad FROM Tap_Entidad WHERE id=Tap_Funcionario.identidad) as ent_funcionario,
                Tap_RegistroVisita.motivo as motivo,
                Tap_RegistroVisita.servidor_publico as servidor_publico,
                Tap_RegistroVisita.area_oficina_sp as area_oficina_sp,
                Tap_RegistroVisita.cargo as cargo,
                FORMAT(CONVERT(date,Tap_RegistroVisita.fecha_ingreso),'dd/MM/yyyy') as fecha_ingreso,
                CONVERT(varchar(25), CAST(Tap_RegistroVisita.hora_ingreso as TIME),100) as hora_ingreso,
                FORMAT(Tap_RegistroVisita.fecha_salida,'dd/MM/yyyy') as fecha_salida,
                Tap_RegistroVisita.hora_salida as hora_salida,
                Tap_RegistroVisita.usuario as usuario  
                FROM $tabla left join Tap_Funcionario  on 
                Tap_RegistroVisita.idfuncionario=Tap_Funcionario.id 
                WHERE FORMAT(CONVERT(date,Tap_RegistroVisita.fecha_ingreso),'dd/MM/yyyy')
                BETWEEN '$fechaInicial' AND '$fechaFinal' ORDER BY Tap_RegistroVisita.id DESC");

            $stmt->execute();

            return $stmt->fetchAll();
        }
    }

    /* =============================================
      MOSTRAR REGISTRO
      ============================================= */

    static public function mdlMostrarRegistro($tabla, $item, $valor)
    {
        //CAPTURAR DATOS PARA EL EDIT EN EL FORMULARIO
        if ($item != null) {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY cop DESC");

            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_INT);

            $stmt->execute();

            return $stmt->fetch();
        } else {

            $stmt = Conexion::conectar()->prepare("SELECT cop,apellido_paterno,apellido_materno,
            nombre,datos_completos,colegio_regional,estado,
            post_grado,imagen,fecha,usuario FROM $tabla
            ORDER BY cop DESC");

            $stmt->execute();

            return $stmt->fetchAll();
        }

        $stmt->close();

        $stmt = null;
    }

    /* =============================================
      REGISTRO DE TICKET
      ============================================= */

    static public function mdlIngresarRegistro($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(apellido_paterno,
		apellido_materno,nombre,
		datos_completos,colegio_regional,
		estado,post_grado,imagen,fecha,usuario)
        VALUES (:apellido_paterno,
		:apellido_materno,:nombre,
		:datos_completos,:colegio_regional,
		:estado,:post_grado,:imagen,:fecha,:usuario)");

        $stmt->bindParam(":apellido_paterno", $datos["apellido_paterno"], PDO::PARAM_STR);
        $stmt->bindParam(":apellido_materno", $datos["apellido_materno"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":datos_completos", $datos["datos_completos"], PDO::PARAM_STR);
        $stmt->bindParam(":colegio_regional", $datos["colegio_regional"], PDO::PARAM_STR);
        $stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
        $stmt->bindParam(":post_grado", $datos["post_grado"], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
        $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);



        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();
        $stmt = null;
    }

    /* =============================================
      EDITAR TICKET
      ============================================= */

    static public function mdlEditarRegistro($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET apellido_paterno=:apellido_paterno,
		apellido_materno=:apellido_materno,nombre=:nombre,
		datos_completos=:datos_completos,colegio_regional=:colegio_regional,
		estado=:estado,post_grado=:post_grado,imagen=:imagen WHERE cop = :cop");

        $stmt->bindParam(":cop", $datos["cop"], PDO::PARAM_INT);
        $stmt->bindParam(":apellido_paterno", $datos["apellido_paterno"], PDO::PARAM_STR);
        $stmt->bindParam(":apellido_materno", $datos["apellido_materno"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":datos_completos", $datos["datos_completos"], PDO::PARAM_STR);
        $stmt->bindParam(":colegio_regional", $datos["colegio_regional"], PDO::PARAM_STR);
        $stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
        $stmt->bindParam(":post_grado", $datos["post_grado"], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();
        $stmt = null;
    }

    /* =============================================
      BORRAR TICKET
      ============================================= */

    static public function mdlEliminarRegistro($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE cop = :cop");

        $stmt->bindParam(":cop", $datos, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    /* =============================================
      ACTUALIZAR TICKET
      ============================================= */

    static public function mdlActualizarRegistro($tabla, $item1, $valor1, $valor)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE id = :id");

        $stmt->bindParam(":" . $item1, $valor1, PDO::PARAM_STR);
        $stmt->bindParam(":id", $valor, PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    static public function mdlCantidadRegistros($tabla, $item, $valor)
    {
        //CAPTURAR DATOS PARA EL EDIT EN EL FORMULARIO
        if ($item != null) {
        } else {

            $stmt = Conexion::conectar()->prepare("SELECT count(*) AS CANTIDAD FROM $tabla");

            $stmt->execute();

            return $stmt->fetchAll();
        }

        $stmt->close();

        $stmt = null;
    }
}
