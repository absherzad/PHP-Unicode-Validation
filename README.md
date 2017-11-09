# PHP Unicode Input Validation Snippets

These useful functions/snippets enable you to validate Unicode characters such as Digits, Person names, and Text mainly used in Afghanistan and Iran.

## Useful feature list:

 * Validate Person names commonly used in Afghanistan and Iran. Person names may be in Persian/Dari, Arabic, and English and similar languages;
 * Validate only Persian Text;
 * Validate only Pashtu Text;
 * Validate digit in Persian/Dari, Pashtu and Arabic format;
 * Validate digit in all common formats.


## Examples
Here are some examples for further clarificaiton:

### Validate Persian/Dari and Pashtu Digit

```php
 // include the file
 include_once('validation_helpers.php');
 if( valid_persian_digit("٤٠٥") ) { 
 	echo "Valid"; 
 } else { 
 	echo "invalid"; 
 }
```

```php
 // include the file
 include_once('validation_helpers.php');
 if( valid_persian_digit("۴۰۵") ) {
 	echo "Valid"; 
 } else { 
 	echo "invalid"; 
 }
```

### Validate Person names in Persian/Dari or Arabic format

```php
 // include the file
 include_once('validation_helpers.php');
 if( valid_persian_name("عبدالرحمن شیرزاد") ) {
 	echo "Valid"; 
 } else { 
 	echo "invalid"; 
 }
```

### Validate Person names in Persian/Dari, Arabic or English and similar languages

```php
 // include the file
 include_once('validation_helpers.php');
 if( valid_persian_name("عبدالرحمن شیرزاد") ) {
 	echo "Valid"; 
 } else { 
 	echo "invalid"; 
 }
```

```php
 // include the file
 include_once('validation_helpers.php');
 if( valid_persian_name("Abdul Rahman Sherzad") ) {
 	echo "Valid"; 
 } else { 
 	echo "invalid"; 
 }
```

### Validate text in Persian/Dari

```php
 // include the file
 include_once('validation_helpers.php');
 if( valid_persian_text("زگهواره تا گور دانش بجوی") ) { 
 	echo "Valid"; 
 } else { 
 	echo "invalid"; 
 }
```

### Validate text in Pashtu

```php
 // include the file
 include_once('validation_helpers.php');
 if( valid_pashtu_text("د ځانګو څخه تر ګوره د پوهی په لټه کی اوسه") ) {
 	echo "Valid"; 
 } else { 
 	echo "invalid"; 
 }
```

### Presentation on SlideShare

The presentation can be downloaded from [SlideShare](https://www.slideshare.net/absherzad/php-unicode-input-validation-snippets).
