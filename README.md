# horspool
algoritm match string horspool


## install
```composer
composer require rinaldi/horspool
```

## Example
```php
require 'vendor/autoload.php';
use Rinaldi\Horspool\Horspool;
use Rinaldi\Horspool\ShiftTable;

$string = "Hello Word";
$patterm = "ello";

$shitfTabel = ShiftTable::shifting($patterm);

$result = Horspool::search($patterm,$shitfTabel,$string);

if($result >0){
    echo "Pola ditemukan";
}else{
    echo 'Pola tidak ditemukan';
}
```