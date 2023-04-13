<?php
    function db_conn()
    {
        $host = "localhost";
        $user = "root";
        $pw = "root506";
        $charset = "utf8mb4";
        $db_name = "board";
        $dsn = "mysql:host=".$host.";dbname=".$db_name.";charset=".$charset;

        $pdo_option =
            array(
                PDO::ATTR_EMULATE_PREPARES      => false
                ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION
                ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC
            );
        
        $pdo = new PDO($dsn, $user, $pw, $pdo_option);

        return $pdo;
    }

    function select_board_info( &$param_no )
    {
        $sql =
        " SELECT "
        ."  board_no "
        ."  ,board_title "
        ."  ,board_write_date "
        ." FROM "
        ."  board_info "
        ." WHERE "
        ."  board_no = :board_no "
        ;

        $arr_prepare =
            array(
                ":board_no" => $param_no["board_no"]
            );

        $obj_conn = null;

        try
        {
            $obj_conn = db_conn();
            $stmt = $obj_conn->prepare( $sql );
            $stmt->execute( $arr_prepare );
            $result_info = $stmt->fetchAll();
            return $result_info;
        }
        catch (Exception $e)
        {
            return $e->getMessage();
        }
        finally
        {
            $obj_conn = null;
        }
    }
    // TO DO
    $arr =
        array(
            "board_no" => 1
        );
    $result = select_board_info( $arr );
    var_dump( $result );
    // TO DO
?>