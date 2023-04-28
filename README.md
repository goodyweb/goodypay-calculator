# PayMongo pricing calculator for PHP

## Features
------------
```
Calculate the pricing of base on Paymongo specifically for **Card, E-Wallet and Online Banking**
```
## Installation
------------
Run

```
composer require goodypay/goodypay-calculator

composer install
```

## Requirements
------------

```
Laravel version 9
PHP version 5.3.0

```
### Using GoodyPayCalculator Class
- GoodyPay Calculator::Compute('paymentMethod', $amount, true)
- Accept payment method such as "Gcash", "Paymaya", "Grabpay", Card", "Online banking"
- Compute ("Gcash", 3000, true)
    - Gcash (Payment Method)
    - 3000 (Amount)
    - True (Foreign, specific for online banking)

### For direct use using the static method

- GoodyPayCalculator::ComputeGcash ($amount)
- GoodyPayCalculator::ComputeCard ($amount, $foreign)
- GoodyPayCalculator::ComputeOnlineBanking ($amount)
- GoodyPayCalculator::ComputeGrabPay ($amount)
- GoodyPayCalculator::ComputePaymaya ($amount)


