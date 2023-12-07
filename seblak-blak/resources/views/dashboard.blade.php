@extends('layout.layout')

@section('main')
    <main class="md:ml-64 md:w-right 2xs:w-full pt-16 bg-backgroundColor h-screen">
        <div id="info_box"
            class="grid
            4xs:grid-cols-1 4xs:gap-y-12 
            md:grid-cols-2 md:gap-y-12 md:gap-x-24 
            lg:grid-cols-3 lg:gap-x-20 
            xl:grid-cols-4 
            px-8 pt-7">
            <div id="total_pendapatan" class="bg-white shadow-md hover:shadow-xl duration-700 pt-6 pb-12 rounded-md flex flex-col items-center">
                <x-healthicons-f-money-bag class="w-8 h-8" />
                <h1>
                    Total Pendapatan:
                </h1>
                <h1 class="font-semibold text-lg"> $Value </h1>
            </div>

            <div id="total_pengeluaran" class="bg-white shadow-md hover:shadow-xl duration-700 pt-6 pb-12 rounded-md flex flex-col items-center">
                <x-ri-coins-line class="w-8 h-8" />
                <h1>
                    Total Pengeluaran:
                </h1>
                <h1 class="font-semibold text-lg"> $Value </h1>
            </div>

            <div id="total_cabang" class="bg-white shadow-md hover:shadow-xl duration-700 pt-6 pb-12 rounded-md flex flex-col items-center">
                <x-ri-store-3-line class="w-8 h-8" />
                <h1>
                    Total Cabang:
                </h1>
                <h1 class="font-semibold text-lg"> Jumlah Cabang </h1>
            </div>

            <div id="total_karyawan" class="bg-white shadow-md hover:shadow-xl duration-700 pt-6 pb-12 rounded-md flex flex-col items-center">
                <x-healthicons-f-security-worker class="w-8 h-8" />
                <h1>
                    Total Karyawan:
                </h1>
                <h1 class="font-semibold text-lg"> Jumlah Karyawan </h1>
            </div>
        </div>
    </main>
@endsection
