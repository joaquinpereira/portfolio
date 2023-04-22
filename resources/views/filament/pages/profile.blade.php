<x-filament::page>
    <div class="container mx-auto dark:text-gray-300">
        <div class="grid grid-cols-1 sm:grid-cols-3">
            <div class="border-8 border-gray-200 rounded-lg">
                <div class="bg-gray-800 shadow-gray-200 shadow-xl rounded-lg py-3">
                    <div class="photo-wrapper p-2">
                        <img class="w-32 h-32 rounded-lg mx-auto" src="{{ Storage::url($this->model->avatar) }}" alt="Avatar">
                    </div>
                    <div class="p-2">
                        <h3 class="text-center text-lg mt-2 hover:text-gray-300 font-semibold text leading-8">{{ $this->model->name}}</h3>
                        <div class="text-center text-gray-400 text-xs font-semibold">
                            <p>{{$this->model->profession}}</p>
                        </div>
                        <table class="text-sm  my-3">
                            <tbody><tr>
                                <td class="px-2 py-2 text-gray-500 font-semibold">Address</td>
                                <td class="pl-2 py-2">{{$this->model->address}}</td>
                            </tr>
                            <tr>
                                <td class="px-2 py-2 text-gray-500 font-semibold">Phone</td>
                                <td class="pl-2 py-2">{{$this->model->telf}}</td>
                            </tr>
                            <tr>
                                <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                                <td class="pl-2 py-2">{{$this->model->email}}</td>
                            </tr>
                            <tr>
                                <td class="px-2 py-2 text-gray-500 font-semibold">Zip code</td>
                                <td class="pl-2 py-2">{{$this->model->zip_code}}</td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
            </div>
            <div class="ml-2 sm:col-span-2">
                <div class="border-8 border-gray-200 rounded-lg">
                    <div class="bg-gray-800 shadow-gray-200 shadow-xl rounded-lg py-3">
                        <table class="text-sm  my-3">
                            <tbody>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">About</td>
                                    <td class="pl-2 py-2">{{$this->model->about_short}}</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">About long</td>
                                    <td class="pl-2 py-2"> {!! html_entity_decode($this->model->about_long) !!} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-filament::page>
