<?php

namespace App\Services\Debugger;

use App\Exceptions\TypeException;

class IPsLogger extends BasicDebugger
{
    /* Проверить текущую запись в файле
     * Если запись есть
     * Получить эту запись и каунтер
     * Увеличить каунтер на 1
     * Сохранить изменения
     *
     * Если записи нету
     * Вставить запись в конец файла, и поставить каунтер в 1
     *
     */
    public function read($find) : bool|string
    {
        $file = fread($this->f, 100000);
        foreach (explode('*', $file) as $item)
        {
            if (key_exists($find, (array) json_decode($item)))
            {
                $array = (array) json_decode($item);
                $arrayNew = [$find => $array[$find] + 1];
                break;
            }
        }
        if (!isset($arrayNew)) return false;
        if (preg_match("/$find/", $file))
        {
            $old = substr($file, strpos($file, $find) - 2, strpos($file, "*") + 1);
            $new = json_encode($arrayNew) . "*";
        }
        $newfile = str_replace($old, $new, $file);
        return $newfile;
    }

    public function save($data)
    {
        if ($new_data = $this->read($data)){
            $this->close();
            $this->f = fopen($this->path, 'w+');
            parent::save($new_data);
        } else {
            $data = json_encode([$data => 1]) . "*";
            parent::save($data);
        }
    }

}