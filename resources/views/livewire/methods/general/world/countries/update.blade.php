@props(['id'])
<span
    class="w-full"
    x-data=""
    x-on:click.prevent="$dispatch('open-modal' , '{{$application->code}}-form-modal')"
    wire:click="edit_request"
>
    Edit
</span>


