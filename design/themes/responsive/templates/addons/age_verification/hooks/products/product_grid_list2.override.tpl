{if !$smarty.session.auth.age && $product.need_age_verification == "Y"}
{assign var="obj_id" value="`$obj_prefix``$product.product_id`"}
<table>
<tr>
    <td class="ty-valign-top">
        <a href="{"products.view?product_id=`$product.product_id`"|fn_url}" class="product-title">{$product.product nofilter}</a>
        
        {if $product.product_code || !$no_ids}
        <p class="ty-sku{if !$product.product_code} hidden{/if}" {if !$no_ids}id="sku_{$obj_id}"{/if}>{__("sku")}: {if !$no_ids}<span id="product_code_{$obj_id}">{/if}{$product.product_code}{if !$no_ids}</span>{/if}</p>
        {/if}
        <div class="box ty-mt-s">
            {__("product_need_age_verification")}
            <div class="buttons-container">
                {include file="buttons/button.tpl" but_text=__("verify") but_href="products.view?product_id=`$product.product_id`" but_role="text"}
            </div>
        </div>
    </td>
</tr>
</table>
{/if}