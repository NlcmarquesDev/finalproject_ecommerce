<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $path = storage_path("app/public/products");
        /* schrijfbare posts directory */
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        } else {
            /* standaard maximum 10 posts in de directory  */
            $files = glob($path . "/*");
            if (count($files) > 9) {
                Storage::disk("public")->deleteDirectory("products");
            }
        }
        return [
            "file" => function () {
                $imageUrl =
                    "https://via.placeholder.com/360x360.png/00bbcc?text=animals+cats+vero";
                $imageData = file_get_contents($imageUrl);
                /* /posts/uniekenaam.png */
                $filename = "products/" . uniqid() . ".jpg";
                Storage::disk("public")->put($filename, $imageData);
                return $filename;
            },
        ];
    }
}
