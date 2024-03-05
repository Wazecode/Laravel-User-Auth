use Illumintate/Support/Facades/DB;
<style>
    .text-4xl {
        font-size: 2.25rem; /* 36px */
        line-height: 2.5rem; /* 40px */
    }
    
    .text-slate{
        --tw-text-opacity: 1;
        color: rgb(248 250 252/ var(--tw-text-opacity))
    }

    .text-dark{
        --tw-text-opacity: 1;
        color: rgb(17 24 39/ var(--tw-text-opacity))
    }

    .bg-gray {
        --tw-bg-opacity: 1;
        background-color: rgb(203 204 206 / var(--tw-bg-opacity))
    }

</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-slate-50 dark:text-gray-100">
                    @php
                        $users = DB::select('select * from users');
                    @endphp
                    <table class="text-slate hover:border-collapse sm:rounded-lg">
                        <tr>
                            <th class="p-2 bg-gray text-dark">Username</th>
                            <th class="p-2 bg-gray text-dark">Email</th>
                        </tr>
                        @foreach ($users as $user)
                        <tr>
                            <td class="border border-slate-600 p-2">{{  $user->name  }}</td>
                            <td class="border border-slate-600 p-2">{{  $user->email  }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
