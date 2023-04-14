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

    function select_board_info()
    {
        $sql =
        " SELECT "
        ."  board_no "
        ."  ,board_title "
        ."  ,board_write_date "
        ." FROM "
        ."  board_info "
        ." WHERE "
        // ."  board_no = :board_no "
        ."  board_del_flg = '0'"
        ." ORDER BY board_no DESC "
        ." LIMIT :limit "
        ."  OFFSET :offset"
        ;

        $arr_prepare =
            array(
                ":limit"    => 5
                ,":offset"  => 0
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
    function select_all_board_info()
    {
        $sql =
        " SELECT "
        ."  board_no "
        ."  ,board_title "
        ."  ,board_write_date "
        ." FROM "
        ."  board_info "
        ." WHERE "
        ."  board_del_flg = '0'"
        ." ORDER BY board_no DESC "
        ;

        $obj_conn = null;

        try
        {
            $obj_conn = db_conn();
            $stmt = $obj_conn->query( $sql );
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

    function detail_board_info( &$param_no )
    {
        $sql =
            " SELECT "
            ."  board_no "
            ."  ,board_title "
            ."  ,board_write_date "
            ."  ,board_contents "
            ." FROM board_info "
            ." WHERE "
            ." board_no = :board_no ";
        
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

    function insert_board_info( &$param_arr )
    {
        $sql =
            " INSERT INTO board_info ( "
            ."  board_title "
            ."  ,board_contents "
            ."  ,board_write_date "
            ." ) "
            ." VALUES ( "
            ."  :board_title "
            ."  ,:board_contents "
            ."  ,NOW() "
            ." ) "
            ;

        $arr_prepare =
            array(
                ":board_title"      => $param_arr["board_title"]
                ,":board_contents"  => $param_arr["board_contents"]
            );

            $obj_conn = null;

            try
            {
                $obj_conn = db_conn();
                $stmt = $obj_conn->prepare( $sql );
                $obj_conn->beginTransaction();
                $stmt->execute( $arr_prepare );
                $obj_conn->commit();
            }
            catch (Exception $e)
            {
                $obj_conn->rollback();
                return $e->getMessage();
            }
            finally
            {
                $obj_conn = null;
            }
    }
    // function update_board_info( &$param_arr )
    // {
    //     $sql =
    //         " UPDATE board_info ( "
    //         ."  board_no "
    //         ."  ,board_title "
    //         ."  ,board_contents "
    //         ." VALUES ( "
    //         ."  board_no "
    //         ."  board_title     = :board_title "
    //         ."  board_contents  = :board_contents"
    //         ." WHERE "
    //         ." board_no = :board_no ";
    // }
    
    // function cnt_board_info()
    // {
    //     $sql =
    //         " SELECT COUNT(*) cnt "
    //         ." FROM board_info";

    //     $obj_conn = null;

    //     try
    //     {
    //         $obj_conn = db_conn();
    //         $stmt = $obj_conn->query( $sql );
    //         $cnt = $stmt->fetchAll();
    //         return $cnt[0]['cnt'];
    //     }
    //     catch (Exception $e)
    //     {
    //         return $e->getMessage();
    //     }
    //     finally
    //     {
    //         $obj_conn = null;
    //     }
    // }
    // TO DO
    // $arr =
    //     array(
    //         "board_no" => 1
    //     );
    // $result = select_board_info( $arr );
    // var_dump( $result );
    // TO DO

    // function cnt_board_info()
    // {
    //     $sql =
    //     " SELECT COUNT()"
    // }
    // $arr =
    //     array( "board_no" => 1 );
    // print_r(detail_board_info($arr));
//         $arr =
//             array(
//                 "board_title"       =>"dkdkdkdkdkdk"
//                 ,"board_contents"   =>"dkamkdaksmdkasd"
//             );
//         var_dump(insert_board_info( $arr ));
// ;
    // TO DO
?>