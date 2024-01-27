<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class Catalog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:catalog';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected string $body = 'Название|Активность|Сортировка|Дата изменения|ID раздела|Символьный код|Внешний код|Элементов|Подразделов|Кто изменил|Дата создания|Кто создал|Уровень***
Полудрагоценный камень|Да|50|07.10.2021 09:46:53|5|poludragotsennyy-kamen||20(20) [+]|0 [+]|[1] (admin) Музаффар Файзиев|07.02.2018 14:12:41|[1] (admin) Музаффар Файзиев|1***
Плитка из мрамора|Да|500|20.03.2020 11:51:53|20|plita-iz-mramora||8(8) [+]|0 [+]|[1] (admin) Музаффар Файзиев|20.03.2020 11:07:22|[1] (admin) Музаффар Файзиев|1***
Плитка из гранита|Да|500|20.03.2020 11:08:15|19|plitka-iz-mramora||0(0) [+]|0 [+]|[1] (admin) Музаффар Файзиев|20.03.2020 10:46:38|[1] (admin) Музаффар Файзиев|1***
Слэбы из травертин|Да|40|11.03.2019 18:08:19|4|sleby-iz-travertin||8(8) [+]|0 [+]|[1] (admin) Музаффар Файзиев|07.02.2018 14:12:41|[1] (admin) Музаффар Файзиев|1***
Химия для камня|Нет|60|28.09.2018 10:25:21|6|khimiya-dlya-kamnya||0(0) [+]|0 [+]|[1] (admin) Музаффар Файзиев|07.02.2018 14:12:41|[1] (admin) Музаффар Файзиев|1***
Слэбы из кварцита|Да|500|28.09.2018 10:24:21|18|sleby-iz-kvartsita||7(7) [+]|0 [+]|[1] (admin) Музаффар Файзиев|28.09.2018 10:24:21|[1] (admin) Музаффар Файзиев|1***
Слэбы из лабрадорита|Да|500|28.09.2018 10:22:26|17|sleby-iz-labradorita||1(1) [+]|0 [+]|[1] (admin) Музаффар Файзиев|28.09.2018 10:08:50|[1] (admin) Музаффар Файзиев|1***
Слэбы из мрамора|Да|20|22.05.2018 13:12:29|2|sleby-iz-mramora||99(99) [+]|0 [+]|[1] (admin) Музаффар Файзиев|07.02.2018 14:12:41|[1] (admin) Музаффар Файзиев|1***
Слэбы из гранита|Да|30|22.05.2018 13:10:14|3|sleby-iz-granita||22(22) [+]|0 [+]|[1] (admin) Музаффар Файзиев|07.02.2018 14:12:41|[1] (admin) Музаффар Файзиев|1***
Слэбы из оникса|Да|10|22.05.2018 13:06:41|1|sleby-iz-oniksa||38(38) [+]|0 [+]|[1] (admin) Музаффар Файзиев|07.02.2018 14:12:41|[1] (admin) Музаффар Файзиев|1***';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $arr = explode('***', $this->body);

        foreach ($arr as $key => $row) if($key > 0) {
            $catalogItem = explode('|', $row);
           $item = \App\Models\Catalog::updateOrCreate(
                ['original_id' => $catalogItem[4]],
                [
                    'slug' => Str::slug($catalogItem[5]),
                    'title' => $catalogItem[0],
                    'sort' => $catalogItem[2]
                ]
            );

           dump($item);
        }

    }


}
