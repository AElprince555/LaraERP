<div>
    <x-modal
        name="nav-modal"
        :show="$errors->isNotEmpty()"
        :show="false"
        focusable
    >
        <div class="p-3 pt-5">
            <h2 class="font-extrabold">{{ config('app.name' , 'laravel') }} Navigator</h2>
            <div class="mt-3">
                <div class="grid grid-cols-3 ">
                    <div class="bg-gray-200 p-3">
                        <h3 class="font-bold">Modules</h3>
                        <ul class="mt-5  grid grid-cols-1">
                            @foreach($modules as $module)
                                <div>
                                    <button
                                        type="button"
                                        wire:click.prevent="selectModule({{$module->id}})"
                                        wire:key="{{$module->id}}"
                                    >
                                        <li
                                            class="text-left mt-2 capitalize text-blue-600 underline"
                                            title="{{$module->code}}"
                                        >{{\Illuminate\Support\Str::words($module->name,3)}}</li>
                                    </button>
                                    <a href="{{route($module->short)}}">
                                        <i class="fa-solid fa-link"></i>
                                    </a>
                                </div>
                            @endforeach
                        </ul>
                    </div>
                    <div class="bg-gray-300 p-3">
                        <h3 class="font-bold">Sub Modules</h3>
                        @if($subModules)
                            <span
                                class="text-blue-900 font-light text-sm capitalize"
                            >For: {{$selectedModule->name}}</span>
                            <ul class="mt-5  grid grid-cols-1">
                                @foreach($subModules as $subModule)
                                    <div>
                                        <button
                                            type="button"
                                            wire:key="{{$subModule->id}}"
                                            wire:click="selectSubModule({{$subModule->id}})"
                                        >
                                            <li
                                                class="text-left mt-2 capitalize text-blue-600 underline"

                                                title="{{$subModule->code}}"
                                            >{{\Illuminate\Support\Str::words($subModule->name,3)}}</li>
                                        </button>

                                        <a href="{{route($subModule->short)}}">
                                            <i class="fa-solid fa-link"></i>
                                        </a></div>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="bg-gray-400 p-3">
                        <h3 class="font-bold">Apps</h3>
                        @if($applications)
                            <span
                                class="text-blue-900 font-light text-sm capitalize"
                            >For: {{$selectedSubModule->name}}</span>
                            <ul class="mt-5  grid grid-cols-1">
                                @foreach($applications as $application)
                                    <div>
                                        <button
                                            type="button"
                                            wire:key="{{$application->id}}"
                                            wire:click="selectSubModule({{$application->id}})"
                                        >
                                            <li
                                                class="text-left mt-2 capitalize text-blue-600 underline"

                                                title="{{$application->code}}"
                                            >{{\Illuminate\Support\Str::words($application->name,3)}}</li>
                                        </button>
                                        <a href="{{route($application->short)}}">
                                            <i class="fa-solid fa-link"></i>
                                        </a></div>

                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </x-modal>
</div>
