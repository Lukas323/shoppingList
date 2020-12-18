<?php namespace Hybridlab\ShoppingList\Actions;

use Hybridlab\ShoppingList\Models\ShoppingList;

class PATCH_list {

    public function handle($list_id) {
        ShoppingList::where('id', $list_id)->first()->update(post());
        return ShoppingList::with('items')->where('id', $list_id)->first();
    }
}
