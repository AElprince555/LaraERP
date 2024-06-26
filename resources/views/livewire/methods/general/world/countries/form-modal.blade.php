@props(['id'=>null ])
<div {{$attributes}}>
    <x-modal
        name='country-form-modal{{($id) ? "-$id" : ""}}'
        :show="$errors->isNotEmpty()"
        :show="$show"
        focusable
    >
        <div class="p-3 pt-5">
            <h2 class="font-extrabold">{{$id ?"Update Country $id" : "Create New Country" }}</h2>
        </div>

        <div class="p-3 mt-3">
            <form
                wire:submit.prevent="save"
                class="flex flex-col space-y-4"
            >
                <div class="flex flex-col  mb-2">
                    <x-input-label
                        for="name"
                    >Country Name <span
                            title="required"
                            class="text-sm text-red-900"
                        >*</span>
                    </x-input-label>
                    <x-text-input
                        id="name"
                        wire:model="form.name"
                    >
                    </x-text-input>
                    <x-input-error
                        class="mt-2"
                        :messages="$errors->get('form.name')"
                    />
                </div>
                <div class="flex flex-col mb-2">
                    <div>
                        <x-input-label
                            for="code"
                        >Code <span
                                title="required"
                                class="text-sm text-red-900"
                            >*</span>
                        </x-input-label>
                        <span class="text-sm text-yellow-800">please  noted that the code will be prefix with
                            ({{\App\Models\Application::find(\App\Models\General\World\Country::application())
                            ->code}})</span>
                    </div>
                    <x-text-input
                        id="code"
                        wire:model="form.code"
                    >
                    </x-text-input>
                    <x-input-error
                        class="mt-2"
                        :messages="$errors->get('form.code')"
                    />
                </div>
                <div class="flex flex-col mb-2">
                    <x-input-label
                        for="iso"
                    >iso_code <span
                            title="required"
                            class="text-sm text-red-900"
                        >*</span>
                    </x-input-label>
                    <x-text-input
                        id="iso"
                        wire:model="form.iso_code"
                    >
                    </x-text-input>
                    <x-input-error
                        class="mt-2"
                        :messages="$errors->get('form.iso_code')"
                    />
                </div>
                <div class="flex flex-col mb-2">
                    <x-input-label
                        for="short"
                    >short
                    </x-input-label>
                    <x-text-input
                        id="short"
                        wire:model="form.short"
                    >
                    </x-text-input>
                    <x-input-error
                        class="mt-2"
                        :messages="$errors->get('form.short')"
                    />
                </div>
                <div class="flex flex-col mb-2">
                    <x-input-label
                        for="flag"
                    >Flag URl
                    </x-input-label>
                    <input
                        type="url"
                        id="flag"
                        class="'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500
                     rounded-md shadow-sm'"
                        wire:model="form.flag"
                    >
                    <x-input-error
                        class="mt-2"
                        :messages="$errors->get('form.flag')"
                    />
                </div>
            </form>
            <div class="mt-5">
                <x-primary-button
                    class="mr-2"
                    wire:click="{{($id) ? 'edit' : 'save'}}"
                    type="submit"
                >
                    {{$id ? 'Update' :'Save'}}
                </x-primary-button>
                <x-danger-button
                    type="button"
                    @record-created.window="$dispatch('close' , $event.detail.modal)"
                    x-on:click="$dispatch('close' , 'country-form-modal{{($id) ? '-$id' : ''}}')"
                >
                    Cancel
                </x-danger-button>
            </div>
        </div>
    </x-modal>
</div>
