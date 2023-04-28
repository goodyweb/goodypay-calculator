# Table of Contents
1. [Features](#Features)
2. [Installation](#Installation)
3. [Requirements](#Requirements)
4. [Guide](#Guide)
    1. [Using GoodyPayCalculator Class](#Class)
    2. [For direct use using the static method](#Method)


# PayMongo pricing calculator for PHP

## Features<a name="Features"></a>

```
Calculate the pricing of base on Paymongo specifically for **Card, E-Wallet and Online Banking**
```
## Installation<a name="Installation"></a>

Run

```
composer require goodypay/goodypay-calculator

composer install
```

## Requirements<a name="Requirements"></a>


```
Laravel version 9
PHP version 5.3.0

```

## Guide<a name="Guide"></a>


**1. Using GoodyPayCalculator Class**<a name="Class"></a>

- GoodyPay Calculator::Compute('paymentMethod', $amount, true)
- Accept payment method such as "Gcash", "Paymaya", "Grabpay", Card", "Online banking"
- Compute ("Gcash", 3000, true)
    - Gcash (Payment Method)
    - 3000 (Amount)
    - True (Foreign, specific for online banking)

**2. For direct use using the static method**<a name="Method"></a>

- GoodyPayCalculator::ComputeGcash ($amount)
- GoodyPayCalculator::ComputeCard ($amount, $foreign)
- GoodyPayCalculator::ComputeOnlineBanking ($amount)
- GoodyPayCalculator::ComputeGrabPay ($amount)
- GoodyPayCalculator::ComputePaymaya ($amount)


