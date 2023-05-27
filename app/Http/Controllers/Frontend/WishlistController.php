<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //

    public function addToWishlist(Request $request)
    {
        $userId = Auth::id();
        $wishlist = Wishlist::firstOrNew(['user_id' => $userId]);

        $productId = $request->input('id');
        $productName = $request->input('name');
        $productImage = $request->input('image');
        $productPrice = $request->input('price');

        $wishlist->expires_at = now()->addweek();

        $products = $wishlist->products ?? [];

        // Verificar se o produto já existe no carrinho
        $existingProduct = null;

        foreach ($products as $key => $product) {
            if ($product['id'] == $productId) {
                $existingProduct = $key;
                break;
            }
        }

        if ($existingProduct !== null) {
            // O produto já existe no carrinho, então incrementar a quantidade
            return redirect()->back()->with('success', 'Produto ja foi adicionado a sua wishlist com sucesso!');
        } else {
            // Adicionar um novo produto ao carrinho
            $newProduct = [
                'id' => $productId,
                'name' => $productName,
                'image' => $productImage,
                'price' => $productPrice,
            ];

            $products[] = $newProduct;
        }

        $wishlist->products = $products;
        $wishlist->save();


        return redirect()->back()->with('success', 'Produto adicionado a sua wishlist com sucesso!');
    }

    public function removeFromWishlist(Request $request, $productId)

    {
        // Recupere o objeto Cart correspondente ao usuário atual
        $userId = Auth::id();
        $wishlist = Wishlist::where('user_id', $userId)->first();

        // Verifique se o objeto Cart existe e se a coluna 'products' contém JSON válido
        if ($wishlist && $wishlist->products) {
            // Crie um novo array para armazenar os produtos atualizados
            $updatedProducts = [];

            // Percorra os produtos do carrinho e adicione apenas os produtos que não correspondem ao ID fornecido
            foreach ($wishlist->products as $wishproduct) {
                if ($wishproduct['id'] != $productId) {
                    $updatedProducts[] = $wishproduct;
                }
            }

            // Atribua o novo array de produtos atualizados à propriedade "products" do objeto "Cart"
            $wishlist->products = $updatedProducts;
            $wishlist->save();
        }
        return redirect()->back()->with('success', 'Produto removido ao Wishlist com sucesso!');
    }
}
