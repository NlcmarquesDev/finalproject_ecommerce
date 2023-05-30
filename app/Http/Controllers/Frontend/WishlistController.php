<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //

    public function addToWishlist(Request $request)
    {
        // Obtenha os detalhes do produto do request...
        $productId = $request->input('id');
        $productName = $request->input('name');
        $productImage = $request->input('image');
        $productPrice = $request->input('price');


        // Recupere o carrinho da sessão ou crie um novo objeto Wishlist se ainda não existir
        $wishlist = session()->get('wishlist') ?? new Wishlist();

        // Verifique se o $wishlist é um objeto Wishlist
        if (!$wishlist instanceof Wishlist) {
            $wishlist = new Wishlist();
        }

        // Adicione o produto ao carrinho usando o método addProduct()
        $wishlist->addToWishlist($productId, $productName, $productImage, $productPrice);

        // Armazene o objeto Wishlist atualizado na sessão
        session()->put('wishlist', $wishlist);

        return redirect()->back()->with('success', 'Produto adicionado a sua wishlist com sucesso!');
    }

    public function removeFromWishlist(Request $request, $productId)

    {
        // Recupere o objeto Wishlist correspondente ao usuário atual
        $userId = Auth::id();
        $wishlist = Wishlist::where('user_id', $userId)->first();

        // Verifique se o objeto Wishlist existe e se a coluna 'products' contém JSON válido
        if ($wishlist && $wishlist->products) {
            // Crie um novo array para armazenar os produtos atualizados
            $updatedProducts = [];

            // Percorra os produtos do carrinho e adicione apenas os produtos que não correspondem ao ID fornecido
            foreach ($wishlist->products as $wishproduct) {
                if ($wishproduct['id'] != $productId) {
                    $updatedProducts[] = $wishproduct;
                }
            }

            // Atribua o novo array de produtos atualizados à propriedade "products" do objeto "Wishlist"
            $wishlist->products = $updatedProducts;
            $wishlist->save();
        }
        return redirect()->back()->with('success', 'Produto removido ao Wishlist com sucesso!');
    }
}
