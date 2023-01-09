# PHP AES Encrypt Decrypt

Encrypt/Decrypt a string in PHP with AES.

## Deployment

To deploy this project run

```bash
  git clone https://github.com/priv4cy/php-aes-encrypt-decrypt.git
```
## Usage/Examples

```php
include('class.php');
$aes = new AES('Secret key', 'Secret iv');

$encrypted_string = $aes->encrypt('Hey!');
echo $encrypted_string;

$decrypted_string = $aes->decrypt($encrypted_string);
echo $decrypted_string;
```


## License

[MIT](https://choosealicense.com/licenses/mit/)

