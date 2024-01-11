<x-filament-panels::page>

    <x-filament::card>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Page title</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
            <link rel="stylesheet" href="{{ asset('css/tailwind.min2.css') }}">

            <link rel="icon" type="image/png" sizes="32x32" href="shuffle-for-tailwind.png">
            <script src="js/main.js"></script>
        </head>

        <div class="">

            <div>

                <div class="">

                    <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                        <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0"><section class="py-3"><div class="container px-4 mx-auto">
                                    <div class="p-6 bg-gray-500 rounded-xl">
                                        <div class="flex flex-wrap py-1 px-4 items-center justify-between bg-gray-600 rounded-md">
                                            <div class="w-auto p-2">
                                                <div class="flex flex-wrap items-center -m-1.5">
                                                    <div class="w-auto p-1.5">
                                                        <div class="flex self-start w-10 h-10 items-center justify-center rounded-md bg-gray-700">
                                                            <img class="rounded-md" src="{{asset('tin-600w.jpg')}}" alt=""><path d="M17 0H3C2.20435 0 1.44129 0.316071 0.87868 0.87868C0.316071 1.44129 0 2.20435 0 3V13C0 13.7956 0.316071 14.5587 0.87868 15.1213C1.44129 15.6839 2.20435 16 3 16H17C17.7956 16 18.5587 15.6839 19.1213 15.1213C19.6839 14.5587 20 13.7956 20 13V3C20 2.20435 19.6839 1.44129 19.1213 0.87868C18.5587 0.316071 17.7956 0 17 0ZM3 14C2.73478 14 2.48043 13.8946 2.29289 13.7071C2.10536 13.5196 2 13.2652 2 13V10.58L5.3 7.29C5.48693 7.10677 5.73825 7.00414 6 7.00414C6.26175 7.00414 6.51307 7.10677 6.7 7.29L13.41 14H3ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14H16.23L12.42 10.17L13.3 9.29C13.4869 9.10677 13.7382 9.00414 14 9.00414C14.2618 9.00414 14.5131 9.10677 14.7 9.29L18 12.58V13ZM18 9.76L16.12 7.89C15.5501 7.34243 14.7904 7.03663 14 7.03663C13.2096 7.03663 12.4499 7.34243 11.88 7.89L11 8.77L8.12 5.89C7.55006 5.34243 6.79036 5.03663 6 5.03663C5.20964 5.03663 4.44994 5.34243 3.88 5.89L2 7.76V3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2H17C17.2652 2 17.5196 2.10536 17.7071 2.29289C17.8946 2.48043 18 2.73478 18 3V9.76Z" fill="#FACC15"></path></div>
                                                    </div>
                                                    <div class="w-auto p-1.5">
                                                        <h5 class="text-sm leading-none font-semibold text-gray-100">{{ $catch->user->name }}</h5>
                                                        <span class="text-xs leading-none text-gray-300 font-medium">{{$catch->user->fishcatches()->count() }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-auto p-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0"><section class="py-3"><div class="container px-4 mx-auto">
                                    <div class="p-6 bg-gray-500 rounded-xl">
                                        <div class="flex flex-wrap py-1 px-4 items-center justify-between bg-gray-600 rounded-md">
                                            <div class="w-auto p-2">
                                                <div class="flex flex-wrap items-center -m-1.5">
                                                    <div class="w-auto p-1.5">
                                                        <div class="flex self-start w-10 h-10 items-center justify-center rounded-md bg-gray-700">
                                                            <img class="rounded-md" src="{{asset('tin2.jpg')}}" alt=""><path d="M17 0H3C2.20435 0 1.44129 0.316071 0.87868 0.87868C0.316071 1.44129 0 2.20435 0 3V13C0 13.7956 0.316071 14.5587 0.87868 15.1213C1.44129 15.6839 2.20435 16 3 16H17C17.7956 16 18.5587 15.6839 19.1213 15.1213C19.6839 14.5587 20 13.7956 20 13V3C20 2.20435 19.6839 1.44129 19.1213 0.87868C18.5587 0.316071 17.7956 0 17 0ZM3 14C2.73478 14 2.48043 13.8946 2.29289 13.7071C2.10536 13.5196 2 13.2652 2 13V10.58L5.3 7.29C5.48693 7.10677 5.73825 7.00414 6 7.00414C6.26175 7.00414 6.51307 7.10677 6.7 7.29L13.41 14H3ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14H16.23L12.42 10.17L13.3 9.29C13.4869 9.10677 13.7382 9.00414 14 9.00414C14.2618 9.00414 14.5131 9.10677 14.7 9.29L18 12.58V13ZM18 9.76L16.12 7.89C15.5501 7.34243 14.7904 7.03663 14 7.03663C13.2096 7.03663 12.4499 7.34243 11.88 7.89L11 8.77L8.12 5.89C7.55006 5.34243 6.79036 5.03663 6 5.03663C5.20964 5.03663 4.44994 5.34243 3.88 5.89L2 7.76V3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2H17C17.2652 2 17.5196 2.10536 17.7071 2.29289C17.8946 2.48043 18 2.73478 18 3V9.76Z" fill="#FACC15"></path></div>
                                                    </div>
                                                    <div class="w-auto p-1.5">
                                                        <h5 class="text-sm leading-none font-semibold text-gray-100">Heaviest catch</h5>
                                                        <span class="text-xs leading-none text-gray-300 font-medium">{{ $catch->user->getHeaviestCatch() }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-auto p-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0"><section class="py-3"><div class="container px-4 mx-auto">
                                    <div class="p-6 bg-gray-500 rounded-xl">
                                        <div class="flex flex-wrap py-1 px-4 items-center justify-between bg-gray-600 rounded-md">
                                            <div class="w-auto p-2">
                                                <div class="flex flex-wrap items-center -m-1.5">
                                                    <div class="w-auto p-1.5">

                                                    </div>
                                                    <div class="w-auto p-1.5">
                                                        <h5 class="text-sm leading-none font-semibold text-gray-100">Favorite fishing style</h5>
                                                        <span class="text-xs leading-none text-gray-300 font-medium">DJIGING</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-auto p-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <a href="{{ \App\Filament\Pages\ExpandedCatch::getUrl() }}">
                        <div class="container mx-auto">
                            <section class="py-5 bs-section-dragged">
                                <div class="container px-4 mx-auto">
                                    <div class="flex flex-wrap items-center -mx-4 mb-16">
                                        <div class="w-full lg:w-2/5 px-4">
                                            <div class="text-left">
                                                <span class="inline-block mb-3 text-xs px-2 py-1 bg-blue-50 rounded uppercase text-blue-400 font-semibold">{{$catch->weight}}</span>
                                                <h3 class="text-3xl mb-2 leading-tight font-semibold font-heading">{{$catch->fish->name}}</h3>
                                                <span class="inline-block mb-6 text-xs text-gray-500">{{$catch->created_at}}</span>
                                                <p class="text-xl text-gray-500">Found mainly in the Mediterranean Sea, dorade is a medium-small fish with silver skin and white flesh that imparts a rich, meaty flavor when grilled, baked, or braised. While dorade hails from the Mediterranean and the Atlantic Ocean, overfishing has caused a short supply of wild fish, so now there are various farms around the world that raise it.</p>
                                                <h3 class="text-3xl mb-2 leading-tight font-semibold font-heading">Info</h3>
                                                <p class="mb-2 text-base">Species : Gilthead bream (Sparus aurata)</p>
                                                <p class="mb-2 text-base"> Lure : {{$catch->lure}}</p>
                                                <p class="mb-2 text-base">{{$catch->weight}}</p>
                                                <p class="mb-2 text-base">Location : {{ $catch->latitude }} . {{$catch->longitude}}</p>
                                                <span class="inline-block mb-3 text-xs px-2 py-1 bg-blue-50 rounded uppercase text-blue-400 font-semibold">Team Mokosica</span>
                                            </div>
                                        </div>
                                        <div class="order-first lg:order-last w-full lg:w-3/5 px-4 mb-8 lg:mb-0">
                                            <div class="h-full">
                                                <img class="w-full h-full object-cover rounded-lg" src="{{asset('tin-600w.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center"></div>
                                </div>
                            </section>
                        </div>
                    </a>
                </div>




            </div>
        </div>

        </html>

    </x-filament::card>
</x-filament-panels::page>
