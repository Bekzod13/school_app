<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>School app</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >
<!-- component -->
<div class="flex min-h-screen">
    <nav class="w-64 flex-shrink-0">
        <div class="flex-auto bg-gray-900 h-full">
            <div class="flex flex-col overflow-y-auto">
                <ul class="relative m-0 p-0 list-none h-full">
                    <li class="text-white text-2xl p-4 w-full flex relative shadow-sm justify-start bg-gray-800 border-b-2 border-gray-700">
                        School
                    </li>
                    <li class="p-4 w-full flex relative shadow-sm">
                        <div class="flex-auto my-1">
                            <span class="text-white font-medium">Develop</span>
                        </div>
                    </li>

                    <div class="text-blue-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                        <div class="mr-4 my-auto">
                            <svg class="fill-current h-5 w-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"></path></svg>
                        </div>
                        <div class="flex-auto my-1">
                            <span>Authentication</span>
                        </div>
                    </div>

                    <div class="text-gray-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                        <div class="mr-4 my-auto">
                            <svg class="fill-current h-5 w-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 13H5c-1.1 0-2 .9-2 2v4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-4c0-1.1-.9-2-2-2zM7 19c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zM19 3H5c-1.1 0-2 .9-2 2v4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM7 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"></path></svg>
                        </div>
                        <div class="flex-auto my-1">
                            <span>Realtime Database</span>
                        </div>
                    </div>

                    <div class="text-gray-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                        <div class="mr-4 my-auto">
                            <svg class="fill-current h-5 w-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 3H3C2 3 1 4 1 5v14c0 1.1.9 2 2 2h18c1 0 2-1 2-2V5c0-1-1-2-2-2zM5 17l3.5-4.5 2.5 3.01L14.5 11l4.5 6H5z"></path></svg>            </div>
                        <div class="flex-auto my-1">
                            <span>Storage</span>
                        </div>
                    </div>

                    <div class="text-gray-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                        <div class="mr-4 my-auto">
                            <svg class="fill-current h-5 w-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"></path></svg>            </div>
                        <div class="flex-auto my-1">
                            <span>Hosting</span>
                        </div>
                    </div>

                    <div class="text-gray-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                        <div class="mr-4 my-auto">
                            <svg class="fill-current h-5 w-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M7.77 6.76L6.23 5.48.82 12l5.41 6.52 1.54-1.28L3.42 12l4.35-5.24zM7 13h2v-2H7v2zm10-2h-2v2h2v-2zm-6 2h2v-2h-2v2zm6.77-7.52l-1.54 1.28L20.58 12l-4.35 5.24 1.54 1.28L23.18 12l-5.41-6.52z"></path></svg>
                        </div>
                        <div class="flex-auto my-1">
                            <span>Functions</span>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <div class="flex flex-col w-full">
        <header class="text-white bg-blue-400 sticky left-auto top-0 right-0">
            <div class="h-12 px-6 flex relative items-center justify-end">
                <p class="font-bold mr-4">username</p>

                <button class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                    <img class="h-full w-full object-cover" src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
                </button>
            </div>
        </header>

        <div class="text-white bg-blue-400 flex flex-shrink-0 flex-col">
            <div class="flex relative items-center p-4 h-12">
                <span class="text-2xl tracking-wide">Studentlar</span>
            </div>
        </div>
        {{--            main content--}}
        <div class="p-4">
            <!-- component -->
            <div class="bg-white p-8 rounded-md w-full">
                <div class=" flex items-center justify-between pb-6">
                    <div>
                        <h2 class="text-gray-600 font-semibold">Studentlar</h2>
                    </div>
                    <div class=" flex items-center justify-between" style="width: calc(100% - 300px)">
                        <form method="GET" class="w-full flex bg-gray-50 items-center p-2 rounded-md">
                            @method("GET")
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd" />
                            </svg>
                            <select name="group_id" style="background:inherit;" class="ml-2 border px-3 py-1 rounded">
                                <option value="">Hammasi</option>
                                @foreach($groups as $group)
                                    <option value="{{$group->id}}" >{{$group->number}} - {{$group->title}}</option>
                                @endforeach
                            </select>
                            <input name="search" value="{{request()->search}}" class="w-full bg-gray-50 outline-none ml-1 block " type="text" id="" placeholder="search...">
                        </form>
                        <div class="lg:ml-40 ml-10 space-x-8">
                            <button class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">Create</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Ism familiya
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Guruhi
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Eski maktabi
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Telefon raqami
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Yashash joyi
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                                <div class="ml-3">
                                                    <p class="font-bold text-gray-900 whitespace-no-wrap">
                                                        {{$user->firstname}} {{ $user->lastname }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{$user->group ? $user->group->number : '--'}} {{$user->group ? $user->group->title : '--'}}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{$user->old_school}}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                <a href="tel:{{$user->phones->first() ? $user->phones->first()->number: "--"}}">
                                                    {{$user->phones->first() ? $user->phones->first()->number: "--"}}
                                                </a>
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span style="display:flex; max-width: 300px;">
                                                {{$user->address}}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div
                                class="px-5 py-5 ">
                                {{$users->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--main content end--}}
    </div>
</div>
</body>
</html>
