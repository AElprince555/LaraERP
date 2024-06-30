<span
    class="w-full h-full"
    wire:click="add_request"
    x-data=""
    x-on:click.prevent="$dispatch('open-modal' , '{{$application->code}}-form-modal')"
>
    New Country
</span>
