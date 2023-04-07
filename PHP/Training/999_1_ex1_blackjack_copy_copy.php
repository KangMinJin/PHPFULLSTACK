<?php
    class BlackJack
    {
        private $arr_num;
        private $arr_embl;
        private $arr_deck;
        private $cnt;
        private $u_card;
        private $d_card;
        private $sum;
        private $u_sum;
        private $d_sum;

        public function __construct()
        {
            $this->arr_deck = [];
            $this->arr_num = array("A",2,3,4,5,6,7,8,9,10,"J","Q","K");
            $this->arr_embl = array( "♠", "♣", "◆", "♥" );
            $this->cnt = (count($this->arr_num) * count($this->arr_embl)) -1;
            foreach ($this->arr_embl as $emblem => $value) {
                foreach ($this->arr_num as $key => $num) {
                    array_push( $this->arr_deck, "$value$num");
                }
            }
            shuffle($this->arr_deck);
        }

        public function give_u_card()
        {
            $this->u_card[] = $this->arr_deck[ $this->cnt ];
            $this->cnt--;
        }
        public function give_d_card()
        {
            $this->d_card[] = $this->arr_deck[ $this->cnt ];
            $this->cnt--;
        }

        public function card_sum( &$param_card )
        {
            $this->sum = 0;
            foreach ($param_card as $key => $val)
            {
                $this->sum += intval(mb_substr( $val, 1 )); // 카드의 문양을 제거하고 합을 구한다
                if( strpos($val, "K")!== false || strpos($val, "Q")!== false || strpos($val, "J")!== false) // 문양 제거 후 K,Q,J 이면 10을 더해준다
                {
                    $this->sum += 10;
                }
                // if( strpos($val, "K")!== false || strpos($val, "Q")!== false || strpos($val, "J")!== false)
                // {
                //     $this->sum += 10;
                // }
                else if (strpos($val, "A")!== false) // 문양 제거 후 A 일때 합이 10 미만이면 11을 더해주고, 10이상이면 1을 더해준다
                {
                    // $param_card[] = 0;

                    if( $this->sum < 11 )
                    {
                        $this->sum += 11;
                    }
                    else
                    {
                        $this->sum += 1;
                    }
                }
            }
            return $this->sum;
        }

        public function u_card_sum()
        {
            $this->card_sum( $this->u_card );
            $this->u_sum = $this->sum;
        }
        public function d_card_sum()
        {
            $this->card_sum( $this->d_card );
            $this->d_sum = $this->sum;
        }
        public function d_one_more_card()
        {
            if ( $this->d_card_sum() < 17 ) {
                $this->d_card[] = $this->arr_deck[ $this->cnt ];
                $this->cnt--;
            }
        }

        public function vs()
        {
            echo "당신의 카드 : ".implode(",", $this->u_card)." = ".$this->u_sum."\n";
            echo "딜러의 카드 : ".implode(",", $this->d_card)." = ".$this->d_sum."\n";
            if ( $this->u_sum > 21 && $this->d_sum > 21 )
            {
                echo "\n비겼습니다!\n";
            }
            else if ( $this->u_sum > 21 )
            {
                echo "\nUser Bust! 딜러가 승리했습니다!\n";
            }
            else if( $this->d_sum > 21 )
            {
                echo "\nDealer Bust! 당신이 승리했습니다!\n";
            }
            else
            {
                if( $this->u_sum === 21 )
                {
                    echo "\nUser Blackjack! 당신이 승리했습니다!\n";
                }
                else if ( $this->u_sum > $this->d_sum)
                {
                    echo "\n당신이 승리했습니다!\n";
                }
                else if ( $this->d_sum === 21 )
                {
                    echo "\nDealer Blackjack! 딜러가 승리했습니다!\n";
                }
                else if ( $this->u_sum < $this->d_sum)
                {
                    echo "\n딜러가 승리했습니다!\n";
                }
                else
                {
                    echo "\n비겼습니다. 다시 한 번!\n";
                }
            }
        }

        public function u_card_print()
        {
            echo "당신의 카드 : ".implode(",", $this->u_card)."\n";
        }
        public function d_card_print()
        {
            echo "딜러의 카드 : ".implode(",", $this->d_card)."\n";
        }
        

        public function deck_print()
        {
            var_dump( $this->u_card );
            var_dump( $this->d_card );
            var_dump( $this->u_sum );
        }
        // 배열에서 무작위로 2장 뽑아서 배열에서 키값으로 제거해야할듯? 근데 이게 되나...??? 무작위로 키값 뽑기?
    }
    $obj_bj = new BlackJack();
    $obj_bj->give_u_card();
    $obj_bj->give_u_card();
    $obj_bj->give_d_card();
    $obj_bj->give_d_card();
    echo "\n---------------***GAME START***---------------\n";
    echo "\n0 : 게임 종료\n1 : HIT\n2 : STAND\n3 : RESULT\n";
    print "\n";
    $obj_bj->u_card_print();
    while(true)
    {
        echo "\n";
        fscanf(STDIN, "%d\n", $input);       
        if( $input === 0 )
        {
            echo "\n----------------***GAME END***----------------\n";
            break;
        }
        else if( $input === 1 )
        {
            echo "\n----------------------------------------------\n";
            $obj_bj->give_u_card();
            $obj_bj->u_card_print();
            echo "----------------------------------------------\n";
            // $obj_bj->u_card_sum();
            // $obj_bj->d_card_sum();
            // $obj_bj->d_card_sum();
            // $obj_bj->d_one_more_card();
            // if( $obj_bj->d_card_sum() || $obj_bj->u_card_sum() )
            // {
            //     $obj_bj->vs();
            //     break;
            // }
            
        }
        else if( $input === 2 )
        {
            $obj_bj->d_one_more_card();
            $obj_bj->d_card_sum();
            $obj_bj->u_card_sum();
            echo "\n--------------***GAME RESULT***--------------\n";
            $obj_bj->vs();
            $input = 3;
        }
        
        else if( $input === 3 ){
            // $obj_bj->d_card_sum();
            // $obj_bj->u_card_sum();
            // echo "\n--------------***GAME RESULT***--------------\n";
            // $obj_bj->vs();
            // echo "\n----------------------------------------------\n";
            $obj_bj = new BlackJack();
            $obj_bj->give_u_card();
            $obj_bj->give_u_card();
            $obj_bj->give_d_card();
            $obj_bj->give_d_card();
            echo "\n--------------***GAME RESTART***--------------\n";
            echo "\n0 : 게임 종료\n1 : HIT\n2 : STAND\n3 : RESULT\n";
            print "\n";
            $obj_bj->u_card_print();
            // $obj_bj->d_card_print();
            continue;
        }

        echo $input;
        print "\n";
    }
    echo "끝!\n";
    ?>