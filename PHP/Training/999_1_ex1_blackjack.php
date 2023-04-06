<?php
    class BlackJack
    {
        private $arr_num;
        private $arr_embl;
        private $arr_deck;
        private $cnt;
        private $u_card;
        private $d_card;
        private $u_sum;
        private $d_sum;

        public function __construct()
        {
            $this->arr_num = array("A",2,3,4,5,6,7,8,9,10,"J","Q","K");
            $this->arr_embl = array( "♠", "♣", "◆", "♥" );
            $this->cnt = (count($this->arr_num) * count($this->arr_embl)) -1;
            $this->arr_deck = array();
            $this->$u_sum=array();
            $this->$d_sum=array();

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

        public function u_sum()
        {
            foreach ($this->u_card as $key => $val)
            {
                $this->u_sum[] = mb_substr( $this->u_card[$key], 1);
            }
            foreach ($this->u_sum as $key => $value)
            {
                if( $this->u_sum[ $key ] === "K" || $this->u_sum[ $key ] === "Q" || $this->u_sum[ $key ] === "J")
                {
                    $this->u_sum[ $key ] = 10;
                }
                else if( $this->u_sum[ $key ] === "A" )
                {
                    if( array_sum( $this->u_sum ) > 10 )
                    {
                        $this->u_sum[ $key ] = 1;
                    }
                    else
                    {
                        $this->u_sum[ $key ] = 11;
                    }
                }
            }
            return $this->u_sum;
            $this->u_sum = array_sum( $this->u_sum );
        }
        public function d_sum()
        {
            foreach ($this->d_card as $key => $val)
            {
                $this->d_sum[] = mb_substr( $this->d_card[$key], 1);
            }
            foreach ($this->d_sum as $key => $value)
            {
                if( $this->d_sum[ $key ] === "K" || $this->d_sum[ $key ] === "Q" || $this->d_sum[ $key ] === "J")
                {
                    $this->d_sum[ $key ] = 10;
                }
                else if( $this->d_sum[ $key ] === "A" )
                {
                    if( array_sum( $this->d_sum ) > 10 )
                    {
                        $this->d_sum[ $key ] = 1;
                    }
                    else
                    {
                        $this->d_sum[ $key ] = 11;
                    }
                }
            }
            return $this->d_sum;
            $this->d_sum = array_sum( $this->d_sum );
        }

        public function vs()
        {
            echo "당신의 카드 : ".implode(",", $this->u_card)." = ".$this->u_sum."\n";
            echo "딜러의 카드 : ".implode(",", $this->d_card)." = ".$this->d_sum."\n";
            if ( $this->u_sum > 21 ) {
                echo "딜러가 승리했습니다!\n";
            }
            else
            {
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
        }

        public function u_card_print()
        {
            echo "당신의 카드 : ".implode(",", $this->u_card)."\n";
        }
        

        public function deck_print()
        {
            // var_dump( $this->arr_deck );
            // var_dump( $this->u_card );
            // var_dump( $this->u_sum );
            // var_dump( $this->d_card );
            // var_dump( $this->d_sum );
            // var_dump( $this->u_rand_keys );
            // var_dump( $this->d_rand_keys );
        }
        // 배열에서 무작위로 2장 뽑아서 배열에서 키값으로 제거해야할듯? 근데 이게 되나...??? 무작위로 키값 뽑기?
    }
    // $obj_bj = new BlackJack();
    // $obj_bj->give_u_card();
    // $obj_bj->give_u_card();
    // $obj_bj->give_d_card();
    // $obj_bj->give_d_card();

    // $obj_bj->u_card_print();
    // $obj_bj->u_sum();
    // $obj_bj->d_sum();
    // $obj_bj->vs();

    // $obj_bj->deck_print();

    $obj_bj = new BlackJack();
    $obj_bj->give_u_card();
    $obj_bj->give_u_card();
    $obj_bj->give_d_card();
    $obj_bj->give_d_card();
    $obj_bj->u_card_print();
    $obj_bj->u_sum();
    $obj_bj->d_sum();
    echo '시작';
    while(true)
    {
        print "\n";
        fscanf(STDIN, "%d\n", $input);       
        if( $input === 0 )
        {
            break;
        }
        else if( $input === 1 )
        {
            $obj_bj->give_u_card();
            $obj_bj->u_card_print();
            if ( $obj_bj->d_sum() < 17 ) {
                $obj_bj->d_card_print();
            }
            continue;
        }
        else if( $input === 2 ){
            $obj_bj->u_sum();
            $obj_bj->d_sum();
            $obj_bj->vs();
            break;
        }

        echo $input;
        print "\n";
    }
    echo "끝!\n";
    ?>