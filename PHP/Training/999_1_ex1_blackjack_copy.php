<?php
//블랙잭 게임
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
//2. 카드 합이 21을 초과하면 패배
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
//4. 카드의 계산은 아래의 규칙을 따른다.
// 4-1.카드 2~9는 그 숫자대로 점수
// 4-2. K·Q·J,10은 10점
// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산
//5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리
// 5-2. 카드수가 같을경우 비긴다.
//6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.
//7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
//8. 한번 사용한 카드는 다시 쓸 수 없다.

class BlackJack
{
    private $arr_num;
    private $arr_embl;
    private $arr_deck;
    private $arr_u_card;
    private $arr_d_card;
    private $cnt;
    private $u_key;
    private $d_key;
    private $u_sum;
    private $d_sum;

    public function __construct()
    {
        $this->arr_num = array("A","2","3","4","5","6","7","8","9","10","J","Q","K");
        $this->arr_embl = array( "♠", "♣", "◆", "♥" );
        
        foreach ($this->arr_embl as $emblem => $value) {
            foreach ($this->arr_num as $key => $num) {
                $this->arr_deck[] = array( "number" => $num, "emblem" => $value);
            }
        }
        $this->cnt = count( $this->arr_deck )-1;
        shuffle( $this->arr_deck );
    }

    
    public function give_u_card()
    {
        $this->arr_u_card[] = $this->arr_deck[$this->cnt];
        $this->cnt--;
    }
    public function give_d_card()
    {
        $this->arr_d_card[] = $this->arr_deck[$this->cnt];
        $this->cnt--;
    }
    // public function sum( $param_arr )
    // {
    //     foreach ($param_arr as $key => $value) {
    //         switch ($param_arr) {
    //             case in_array( "K", $param_arr ):
    //                 $param_arr[array_search( "K", $param_arr )] = 10;
    //                 break;
    //             case in_array( "Q", $param_arr ):
    //                 $param_arr[array_search( "Q", $param_arr )] = 10;
    //                 break;
    //             case in_array( "J", $param_arr ):
    //                 $param_arr[array_search( "J", $param_arr )] = 10;
    //                 break;
    //             case in_array( "A", $param_arr ):
    //                 if( array_sum($param_arr) === 10 )
    //                     {
    //                         $param_arr[array_search( "A", $param_arr )] = 11;
    //                     }
    //                     else
    //                     {
    //                         $param_arr[array_search( "A", $param_arr )] = 1;
    //                     }
    //                 break;
    //                 default:
    //                     break;
    //                 }
    //             }
    //     }
    // public function u_sum()
    // {
    //     $this->u_key = array_column( $this->arr_u_card, "number" );
    //     $this->sum( $this->u_key );
    //     $this->u_sum = array_sum($this->u_key);
        
    // }
    // public function d_sum()
    // {
    //     $this->d_key = array_column( $this->arr_d_card, "number" );
    //     $this->sum( $this->d_key );
    //     $this->d_sum = array_sum($this->d_key);
    // }
    public function u_card_sum()
    {
        $this->u_key = array_column( $this->arr_u_card, "number" );
        
    foreach ($this->u_key as $key => $value) {
        switch ($this->u_key) {
            case in_array( "K", $this->u_key ):
                $this->u_key[array_search( "K", $this->u_key )] = 10;
                break;
            case in_array( "Q", $this->u_key ):
                $this->u_key[array_search( "Q", $this->u_key )] = 10;
                break;
            case in_array( "J", $this->u_key ):
                $this->u_key[array_search( "J", $this->u_key )] = 10;
                break;
            case in_array( "A", $this->u_key ):
                if( array_sum($this->u_key) === 10 )
                    {
                        $this->u_key[array_search( "A", $this->u_key )] = 11;
                    }
                    else
                    {
                        $this->u_key[array_search( "A", $this->u_key )] = 1;
                    }
                break;
                default:
                    break;
                }
            }
            $this->u_sum = array_sum($this->u_key);
        }

    

    public function d_card_sum()
    {
        $this->d_key = array_column( $this->arr_d_card, "number" );

        foreach ($this->d_key as $key => $value) {
            switch ($this->d_key) {
                case in_array( "K", $this->d_key ):
                    $this->d_key[array_search( "K", $this->d_key )] = 10;
                    break;
                case in_array( "Q", $this->d_key ):
                    $this->d_key[array_search( "Q", $this->d_key )] = 10;
                    break;
                case in_array( "J", $this->d_key ):
                    $this->d_key[array_search( "J", $this->d_key )] = 10;
                    break;
                case in_array( "A", $this->d_key ):
                    if( array_sum($this->d_key) <= 10 )
                    {
                        $this->d_key[array_search( "A", $this->d_key )] = 11;
                    }
                    else
                    {
                        $this->d_key[array_search( "A", $this->d_key )] = 1;
                    }
                    break;
                default:
                    break;}
        }
        $this->d_sum = array_sum($this->d_key);
    }
    
    public function vs()
    {
        echo "유저 : ".$this->u_sum."\n";
        echo "딜러 : ".$this->d_sum."\n";
        if ( $this->u_sum > $this->d_sum)
        {
            echo "당신이 승리했습니다!\n";
        }
        else if ( $this->u_sum < $this->d_sum)
        {
            echo "딜러가 승리했습니다!\n";
        }
        else
        {
            echo "비겼습니다. 다시 한 번!\n";
        }
    }

    public function deck_print()
    {
        // var_dump( $this->arr_deck );
        print_r( $this->arr_u_card );
        // echo "\n".$this->u_sum."\n";
        // print_r($this->u_key);
        print_r( $this->arr_d_card );
        // print_r($this->d_key);
        // var_dump( $this->u_rand_keys );
        // var_dump( $this->d_rand_keys );
    }
}
$obj_bj = new BlackJack();
$obj_bj->give_u_card();
$obj_bj->give_u_card();
$obj_bj->give_d_card();
$obj_bj->give_d_card();

$obj_bj->u_card_sum();
$obj_bj->d_card_sum();
// $obj_bj->u_sum();
// $obj_bj->d_sum();
$obj_bj->vs();

$obj_bj->deck_print();
// echo '시작';
// while(true) {
//     print "\n";
//     fscanf(STDIN, "%d\n", $input);        
//     if($input === 0) {
//         break;
//     }
//     echo $input;
//     print "\n";
//     }
//     echo "끝!\n";