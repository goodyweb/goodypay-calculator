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

- <code>GoodyPayCalculator::Compute('paymentMethod', $amount, true)</code>
- Accept payment method such as <code>"Gcash"</code>, <code>"Paymaya"</code>, <code>"Grabpay"</code>, <code>"Card"</code>, <code>"Online banking"</code>
- Compute <code>("Gcash", 3000, true)</code>
    - *<code>Gcash</code> (Payment Method)*
    - *<code>3000</code> (Amount)*
    - *<code>True</code> (Foreign, specific for online banking)*

**2. For direct use using the static method**<a name="Method"></a>

- <code>GoodyPayCalculator::ComputeGcash ($amount)</code>
- <code>GoodyPayCalculator::ComputeCard ($amount, $foreign)</code>
- <code>GoodyPayCalculator::ComputeOnlineBanking ($amount)</code>
- <code>GoodyPayCalculator::ComputeGrabPay ($amount)</code>
- <code>GoodyPayCalculator::ComputePaymaya ($amount)</code>


