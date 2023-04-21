<?php

class GoodyPayCalculator
{
    //e-wallet compute 
    public function computeGcash($amount)
    {
        if ($amount >= 100) {
            $fee = $amount * 2.5 / 100;
            return $amount - $fee;
        } else {
           // $fee = $amount * $this->percentageFee / 100 + $this->flatFee;
            return false;
        }
    }
    public function computeGrabPay($amount)
    {
        if ($amount >= 100) {
            $fee = $amount * 2.2 / 100;
            return $amount - $fee;
        } else {
           // $fee = $amount * $this->percentageFee / 100 + $this->flatFee;
            return false;
        }
    }
    public function computePaymaya($amount)
    {
        if ($amount >= 100) {
            $fee = $amount * 2.0 / 100;
            return $amount - $fee;
        } else {
           // $fee = $amount * $this->percentageFee / 100 + $this->flatFee;
            return false;
        }
    }

    //Card

    public function computeCard($amount)
    {
        if ($amount >= 100) {
            $fee = $amount * 3.5 / 100 + 15;
            return $amount - $fee;
        } else {
           // $fee = $amount * $this->percentageFee / 100 + $this->flatFee;
            return false;
        }
    }
    public function computeOnlineBanking($amount)
    {
        if ($amount >= 100) {
            $feeValue = $amount * 3.5 / 100 + 15;
            if($feeValue <=15){
                $fee = 15;
            }else{
                $fee = $feeValue;
            }

            return $amount - $fee;
        } else {
           // $fee = $amount * $this->percentageFee / 100 + $this->flatFee;
            return false;
        }
    }
}
