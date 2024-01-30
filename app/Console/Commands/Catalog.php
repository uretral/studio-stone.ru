<?php

namespace App\Console\Commands;

use App\Models\Color;
use App\Models\Country;
use App\Models\Image;
use App\Models\Material;
use App\Models\Product;
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


    /**
     * Execute the console command.
     */
    public function handle()
    {
        $body = file_get_contents(public_path('iblock_element.csv'));

        $arr = explode(PHP_EOL, $body);

        foreach ($arr as $key => $row) if ($key > 0) { // $key > 0 && !empty($row)
            $catalogItem = explode('|', $row);
//            dump($this->country($catalogItem));


//            $this->storeImage($catalogItem[16]);


            $product = Product::updateOrCreate(
                ['original_id' => (int)$catalogItem[4]],
                [
                    'parent_id' => $this->catalog($catalogItem),
                    'slug' => Str::slug($catalogItem[0]),
                    'title' => $catalogItem[0],
                    'description' => $catalogItem[17],
                    'text' => $catalogItem[19],
                    'color_id' => $this->color($catalogItem),
                    'material_id' => $this->material($catalogItem),
                    'country_id' => $this->country($catalogItem),
                    'price' => (int)$catalogItem[25],
                    'views' => (int)$catalogItem[14]
                ]
            );


            $this->parseImages($catalogItem['16'], Product::class, $product->id, 'products', 'preview'); // "Картинка для анонса"
            $this->parseImages($catalogItem['18'], Product::class, $product->id, 'products', 'detail'); // "Детальная картинка"
            $this->parseImages($catalogItem['21'], Product::class, $product->id, 'products', 'gallery'); // "Галерея"
        }

        dump('READY');

    }

    public function catalog($catalogItem)
    {
        return $catalogItem[2] ? \App\Models\Catalog::where('original_id', $catalogItem[2])->first()->getAttribute('id') ?? null : null;
    }

    public function color($catalogItem)
    {
        return $catalogItem[20] ? Color::where('title', $catalogItem[20])->first()?->getAttribute('id') ?? null : null;
    }

    public function country($catalogItem)
    {
        return $catalogItem[24] ? Country::where('title', $catalogItem[24])->first()?->getAttribute('id') ?? null : null;
    }

    public function material($catalogItem)
    {
        return $catalogItem[22] ? Material::where('title', $catalogItem[22])->first()?->getAttribute('id') ?? null : null;
    }


    public function createMaterial($catalogItem)
    {
        Material::updateOrCreate(
            ['title' => $catalogItem[22]],
            [
                'slug' => Str::slug($catalogItem[22]),
            ]
        );
    }

    public function parseImages($str, $class, $parentId, $filePath, $type)
    {
        if($str) {
            $separator = "https";
            $arrPath = explode($separator, $str);
            foreach ($arrPath as $key => $path) if ($key > 0) {
                $this->storeImage($separator . $path, $class, $parentId, $filePath, $type);
            }
        }
    }

    public function storeImage($imageUrl, $class, $parentId, $filePath, $type)
    {
        $path = $filePath . '/' . pathinfo($imageUrl)['basename'];
        $stored = \Storage::disk('public')->put($path, file_get_contents($imageUrl));
        if ($stored) {
            Image::updateOrCreate(
                ['path' => $path],
                [
                    'model' => $class,
                    'parent_id' => $parentId,
                    'type' => $type,
                    'path' => $path,
                    'alt' => 'alt',
                ]
            );
        }
    }


}
