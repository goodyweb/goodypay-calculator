<?php

class GoodyPayCalculator 
{

    public function compute($paymentMethod, $amount, $flatfee = null){
        if($paymentMethod == 'gcash'){
            $totalNetAmount = $this->computeGcash($amount);
            return $totalNetAmount;
        }elseif($paymentMethod == 'grabpay'){
            $totalNetAmount = $this->computeGrabPay($amount);
            return $totalNetAmount;
        }elseif($paymentMethod == 'paymaya'){
            $totalNetAmount = $this->computePaymaya($amount);
            return $totalNetAmount;
        }elseif($paymentMethod == 'card'){
            $totalNetAmount = $this->computeCard($amount, $flatfee);
            return $totalNetAmount;
        }elseif($paymentMethod == 'onlinebanking'){
            $totalNetAmount = $this->computeOnlineBanking($amount);
            return $totalNetAmount;
        }else
            return false;
        
    }
   
    //e-wallet compute 
    public function computeGcash($amount)
    {
        if ($amount >= 100) {
            $fee = $amount * 2.5 / 100;
            return $amount - $fee;
        } else {
            return false;
        }
    }
    public function computeGrabPay($amount)
    {
        if ($amount >= 100) {
            $fee = $amount * 2.2 / 100;
            return $amount - $fee;
        } else {
            return false;
        }
    }
    public function computePaymaya($amount)
    {
        if ($amount >= 100) {
            $fee = $amount * 2.0 / 100;
            return $amount - $fee;
        } else {
            return false;
        }
    }
    //Card
    public function computeCard($amount, $percentage, $flatfee)
    {
        if ($amount >= 100 && $flatfee == null) {
            $fee = $amount * 3.5 / 100 + 15;
            return $amount - $fee;
        }else {
            return false;
        }
    }

    //Online Banking
    public function computeOnlineBanking($amount)
    {
        if ($amount >= 100) {
            $feeValue = $amount * 0.8 / 100 ;
            if($feeValue <= 15){
                $fee = 15;
            }else{
                $fee = $feeValue;
            }
            return $amount - $fee;
        } else {
            return false;
        }
    }
}
