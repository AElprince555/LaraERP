<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(strtoupper($module->name)) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    <div class="min-h-screen flex-col items-start justify-center mt-6">
                        <div class="max-w-7xl mx-auto w-3/4 bg-gray-100 p-6 rounded-lg shadow-md mb-3">
                            <h3 class="text-lg leading-6 font-medium text-black mb-4">Sub Modules</h3>
                            <div class="grid grid-cols-4 gap-4">
                                @foreach($module->subModules as $sub)
                                    <a href="{{route($sub->short)}}">
                                        <div
                                            class="border border-gray-300 bg-white p-4 rounded-lg flex items-center
                                        space-x-2 shadow-sm text-gray-700 text-sm hover:text-white hover:bg-gray-700"
                                        >
                                            <h2 >{{strtoupper($sub->name)}}</h2>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="max-w-7xl  w-3/4 mx-auto bg-gray-100 p-6 rounded-lg shadow-md">
                            <h3 class="text-lg leading-6 font-medium text-black mb-4">Applications</h3>
                            <div class="grid grid-cols-4 gap-4">
                                @foreach($module->applications as $app)
                                    <a href="{{route($app->short)}}">
                                        <div
                                            class="border border-gray-300 bg-white p-4 rounded-lg flex items-center
                                        space-x-2 text-gray-700 text-sm shadow-sm hover:text-white hover:bg-gray-700"
                                        >
                                            <h2 >{{strtoupper($app->name)}}</h2>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
