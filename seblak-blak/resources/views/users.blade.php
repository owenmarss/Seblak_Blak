@extends('layout.layout')

@section('main')
    <main class="md:ml-64 md:w-right 2xs:w-full pt-16 bg-backgroundColor h-screen">
        <div id="users_container" class="flex flex-col gap-2 px-8 pt-7">
            <div id="users_headline">
                <h1 class="text-4xl font-bold text-secondary"> Users </h1>
            </div>

            <table id="users_table" class="table-auto mt-6">
                <thead>
                    <tr>
                        <th class="border border-2 bg-lightBlue/70 border-secondary"> No. </th>
                        <th class="border border-2 bg-lightBlue/70 border-secondary"> Nama </th>
                        <th class="border border-2 bg-lightBlue/70 border-secondary"> Email </th>
                        <th class="border border-2 bg-lightBlue/70 border-secondary"> Role </th>
                        <th class="border border-2 bg-lightBlue/70 border-secondary"> Password </th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="h-10 text-center">
                        <th class="border border-2 border-secondary"> Isi No. </th>
                        <th class="border border-2 border-secondary"> Isi Nama </th>
                        <th class="border border-2 border-secondary"> Isi Email </th>
                        <th class="border border-2 border-secondary"> Isi Role </th>
                        <th class="border border-2 border-secondary"> Isi Password </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
