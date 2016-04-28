# php-fhir-generated
Pre-generated classes from dcarbone/php-fhir

# VERSION: DSTU1

- Homepage: http://hl7.org/fhir/DSTU1/index.html
- Resources: http://hl7.org/fhir/DSTU1/resourcelist.html

## Usage

This lib can either be used with [Composer](https://getcomposer.org) or on it's own.


### Inclusion with Composer

composer.json require entry:

```json
{
   "dcarbone/php-fhir-generated": "dev-DSTU1"
}
```

If you choose to then use the autoloader files generated by Composer, pass in `false` when creating an instance of
[PHPFHIRResponseParser](./src/PHPFHIRGenerated/PHPFHIRResponseParser.php) so that it does not attempt to register
the included autoloader.

```php
$parser = new PHPFHIRGenerated\PHPFHIRResponseParser(false);
```

### Standalone Usage

Something like this:

```php
require 'src/PHPFHIRGenerated/PHPFHIRResponseParser.php'
$parser = new PHPFHIRGenerated\PHPFHIRResponseParser();
```