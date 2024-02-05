<?php

namespace App\Console\Commands;

use App\Models\BxIElement;
use App\Models\BxIElementProperty;
use App\Models\Meta;
use App\Models\News;
use App\Models\Product;
use App\Models\SimilarProduct;
use Illuminate\Console\Command;

class Import extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import';

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
//        $bx = BxIProperty::where('IBLOCK_ID',1)->where('ENTITY_ID', 5)->get()->toArray();
//        dump($bx);
//        $this->product();
//        $this->element();
//        $this->elementProperty(4);
        $this->news();
    }

    public function product()
    {
        Product::all()->each(function (Product $product) {
            $meta = Meta::updateOrCreate(
                ['parent_id' => $product->id, 'model' => \App\Models\Product::class],
                [
                    'title' => $product->title,
                    'metatitle' => $this->getProperty($product->original_id, 'ELEMENT_META_TITLE', 1, 'E'),
//                    'tags' => $this->getProperty($item->original_id,'SECTION_META_TITLE'),
                    'keywords' => $this->getProperty($product->original_id, 'ELEMENT_META_KEYWORDS', 1, 'E'),
                    'description' => $this->getProperty($product->original_id, 'ELEMENT_META_DESCRIPTION', 1, 'E'),
                ]
            );
            dump($meta->id);
        });
    }

    public function catalog()
    {
        \App\Models\Catalog::all()->each(function (\App\Models\Catalog $item) {
//            $bx = BxIProperty::where('IBLOCK_ID', 1)->where('ENTITY_ID', $item->original_id)->get()->toArray();
            $meta = Meta::updateOrCreate(
                ['parent_id' => $item->id, 'model' => \App\Models\Catalog::class],
                [
                    'title' => $item->title,
                    'metatitle' => $this->getProperty($item->original_id, 'SECTION_META_TITLE', 1, 'S'),
//                    'tags' => $this->getProperty($item->original_id,'SECTION_META_TITLE'),
                    'keywords' => $this->getProperty($item->original_id, 'SECTION_META_KEYWORDS', 1, 'S'),
                    'description' => $this->getProperty($item->original_id, 'SECTION_META_DESCRIPTION', 1, 'S'),
                ]
            );
            dump($meta);
        });
    }

    public function element()
    {
        Product::all()->each(function (Product $product) {
            $element = BxIElement::where('ID', $product->original_id)->first();

            $product->description = $element->getAttribute('PREVIEW_TEXT');
            $product->text = $element->getAttribute('DETAIL_TEXT');
            $upd = $product->update();
            dump($upd);
        });
    }


    public function getElement()
    {
        return;
    }


    public function getProperty($ENTITY_ID, $CODE, $IBLOCK_ID, $ENTITY_TYPE)
    {
        return BxIElement::where('IBLOCK_ID', $IBLOCK_ID)
            ->where('ENTITY_ID', $ENTITY_ID)
            ->where('CODE', $CODE)
            ->where('ENTITY_TYPE', $ENTITY_TYPE)
            ->first()?->getAttribute('TEMPLATE');
    }

    public function elementProperty($propertyId)
    {
//        $product = Product::skip(1)->take(20)->get();
        Product::each(function (Product $product) use ($propertyId) {
            $res = BxIElementProperty::where('IBLOCK_PROPERTY_ID', $propertyId)->where('IBLOCK_ELEMENT_ID', $product->original_id)->get();

            if ($res->count() > 0)
                $res->each(function (BxIElementProperty $bxIElementProperty) use ($product) {
                    if ($needle = Product::where('original_id', $bxIElementProperty->VALUE)->first())
                        SimilarProduct::updateOrCreate(
                            [
                                'product_id' => $product->id,
                                'similar_product_id' => $needle->id,
                            ]
                        );
                });

        });


    }

    public function news() {
        BxIElement::where('IBLOCK_ID',4)->each(function (BxIElement $element) {
            News::updateOrCreate(
                [
                    'slug' => $element->CODE,
                    'title' => $element->NAME,
                    'description' => $element->PREVIEW_TEXT,
                    'text' => $element->DETAIL_TEXT,
                ]
            );

        });
        dump('END');
    }





}
