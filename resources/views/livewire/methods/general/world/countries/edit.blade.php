@props(['id'])
<span
    class="w-full"
    x-data=""
{{--    x-on:click.prevent="$dispatch('open-modal' , 'country-form-modal{{"-$id"}}')"--}}
    wire:click="edit_request"
>
    Edit
</span>
