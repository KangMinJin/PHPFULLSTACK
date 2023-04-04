<?php

    include_once("./12_2_ex2_fnc_db_conn.php");

    // try-catch문 : 에러처리를 하기 위한 문법
    // 에러가 나도 시스템이 정지하지 않고 실행되게 만드는 try-catch
    try // 우리가 실행하고 싶은 소스코드를 작성
    {
        $obj_conn = null;
        my_db_conn( $obj_conn );

        $sql =
            " SELECT "
            ."  * "
            ." FROM "
            ."  employees "
            ." WHERE "
            ."  emp_no = 1000100 "; // 쿼리 결과가 0건이어도 에러는 아니다

        $stmt = $obj_conn->query( $sql );
        $result = $stmt->fetchAll();

        if( count($result) === 0 ) // 쿼리 결과가 0건일때 에러로 보내는 if문. 하지만 결과가 0건인 게 옳은 경우도 있으니 남발하지 말 것.
        {
            // throw Exception : 에러를 강제로 일으키는 구문
            throw new Exception( "E99" );
        }

        var_dump( $result );
        echo "Try\n";
    }
    catch ( Exception $e ) // 에러가 발생했을 때 실행되는 소스코드
    {
        echo "----에러 발생----\n"; // 에러 메세지 대신 이게 출력된다
        if( $e->getMessage() === "E99" )
        {
            echo "데이터 0건";
        }
        else
        {
            echo $e->getMessage();
        }
        echo "\n----에러 발생----\n"; // fatal error일땐 오류메세지 출력, 데이터 0건일땐 데이터 0건 출력
    }
    finally // 정상처리 또는 에러처시 시에 무조건 실행되는 소스코드 작성
    {
        echo "Finally\n";
        $obj_conn = null;
    }

    echo "종료";
?>