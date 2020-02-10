# creditsafe-callreport
PHP client for accessing the [CreditSafe CallReport][1] API

Installation
------------

Install with [composer][2]:

`composer require paymentassist/creditsafe-callreport`

`src/CreditsafeMiddleware.php` handles authentication, ensure the following ENV variables are available:

```
export CREDITSAFE_COMPANY="your company"
export CREDITSAFE_USERNAME="your username"
export CREDITSAFE_PASSWORD="your password"
```

Usage
-----

See `example.php`.


[1]: https://www.creditsafe.com/gb/en.html
[2]: https://getcomposer.org/
