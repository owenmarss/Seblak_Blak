@extends('layout.layout')

@section('main')
    <main class="md:ml-64 md:w-right 2xs:w-full pt-16 bg-backgroundColor h-screen">
        <div id="sop_directory_container" class="px-8 pt-7">
            <div id="sop_directory_headline" class="pb-5">
                <h1 class="text-4xl font-bold text-sidebarColor"> Seblak-Blak SOP </h1>
            </div>

            <div id="sop_directory_list">
                <ol class="list-disc pl-10">
                    <li>
                        <a href="" class="text-lightBlue hover:underline">
                            Looping menggunakan database
                        </a>
                    </li>
                </ol>
            </div>

            <div id="sop_directory_buttons" class="flex justify-between pt-20">
                <div id="delete_sop">
                    <a href="">
                        <button class="flex items-center gap-2 text-lg border-2 border-sidebarColor bg-white px-3 py-1 rounded-lg hover:bg-backgroundColor shadow-md">
                            <x-ri-delete-bin-line class="w-7 h-7"/>
                            Delete
                        </button>
                    </a>
                </div>

                <div id="add_sop">
                    <a href="">
                        <button class="flex items-center gap-2 text-lg border-2 border-sidebarColor bg-white px-3 py-1 rounded-lg hover:bg-backgroundColor shadow-md">
                            <x-ri-add-circle-line class="w-7 h-7"/> 
                            Tambahkan 
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </main>
@endsection
