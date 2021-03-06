@component('mail::message')
# Shop Activation Request

Please activate shop. Here are shop details.

Shop Name : {{$shop->name}} <br>
Shop Description : {{$shop->description}} <br>
Shop Owner : {{$shop->owner->name}}

@component('mail::button', ['url' => url('/admin/shops')])
Manage Shops
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
