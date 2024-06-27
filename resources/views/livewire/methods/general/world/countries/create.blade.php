{{--<div>
    <x-primary-button
        type="button"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal' , 'country-form-modal')"
    >New Country
    </x-primary-button>
    <livewire:methods.general.world.countries.form-modal  />
</div>--}}
<span
    class="w-full h-full"
    wire:click="add_request"
    x-data=""
    x-on:click.prevent="$dispatch('open-modal' , '{{$application->code}}-form-modal')"
>
    New Country
</span>
