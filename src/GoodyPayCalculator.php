<?php

class GoodyPayCalculator 
{

    public static function compute($paymentMethod, $amount, $foreign = null){
        if(strtolower($paymentMethod) == 'gcash'){
            $totalNetAmount = GoodyPayCalculator::computeGcash($amount);
            return $totalNetAmount;
        }elseif(strtolower($paymentMethod) == 'grabpay'){
            $totalNetAmount = GoodyPayCalculator::computeGrabPay($amount);
            return $totalNetAmount;
        }elseif(strtolower($paymentMethod) == 'paymaya'){
            $totalNetAmount = GoodyPayCalculator::computeMaya($amount);
            return $totalNetAmount;
        }elseif(strtolower($paymentMethod) == 'card'){
            $totalNetAmount = GoodyPayCalculator::computeCard($amount, $foreign);
            return $totalNetAmount;
        }elseif(strtolower($paymentMethod) == 'onlinebanking'){
            $totalNetAmount = GoodyPayCalculator::computeOnlineBanking($amount);
            return $totalNetAmount;
        }else
            return false;
        
    }
   
    //e-wallet compute 
    public static function computeGcash($amount)
    {
        if ($amount >= 100) {
            $fee = $amount * 2.5 / 100;
            return $amount - $fee;
        } else {
            return false;
        }
    }
    public static function computeGrabPay($amount)
    {
        if ($amount >= 100) {
            $fee = $amount * 2.2 / 100;
            return $amount - $fee;
        } else {
            return false;
        }
    }
    public static function computeMaya($amount)
    {
        if ($amount >= 100) {
            $fee = $amount * 2.0 / 100;
            return $amount - $fee;
        } else {
            return false;
        }
    }
    //Card
    public static function computeCard($amount, $foreign = null)
    {
        if ($amount >= 100 && $foreign == false) {
            $fee = $amount * 3.5 / 100 + 15;
            return $amount - $fee;
        }else if($amount >= 100 && $foreign == true) {
            $fee = $amount * 4.5 / 100 + 15;
            return $amount - $fee;
        }else{
            return false;
        }
    }
    

    //Online Banking
    public static function computeOnlineBanking($amount)
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
