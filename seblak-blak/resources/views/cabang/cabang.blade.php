@extends('layout.layout')

@section('main')
    <main class="md:ml-64 md:w-right 2xs:w-full pt-16 bg-backgroundColor h-screen">
        <div id="cabang_container" class="flex flex-col gap-2 px-8 pt-7">
            <div id="cabang_headline">
                <h1 class="text-4xl font-bold text-secondary"> Seblak-Blak Cabang </h1>
            </div>

            <div id="cabang_filter" class="flex justify-between pt-4">
                <form action="" id="filter_lokasi">
                    <label for="lokasi_cabang"> Lokasi: </label>
                    <select name="lokasi_cabang" id="" class="pl-2 pr-4 rounded shadow bg-white">
                        <option value=""> --- </option>
                        <option value="jakarta"> Jakarta </option>
                        <option value="tanggerang"> Tanggerang </option>
                        <option value="bekasi"> Bekasi </option>
                    </select>
                </form>

                <button class="duration-300 bg-secondary text-white px-3 py-1 rounded-lg hover:bg-white hover:text-secondary hover:shadow-xl hover:underline"> Apply Filters </button>
            </div>

            <table id="cabang_table" class="table-auto mt-6">
                <thead>
                    <tr>
                        <th class="border border-2 bg-lightBlue/70 border-secondary"> No. </th>
                        <th class="border border-2 bg-lightBlue/70 border-secondary"> Nama </th>
                        <th class="border border-2 bg-lightBlue/70 border-secondary"> Lokasi </th>
                        <th class="border border-2 bg-lightBlue/70 border-secondary"> Owner </th>
                        <th class="border border-2 bg-lightBlue/70 border-secondary"> Manager </th>
                        <th class="border border-2 bg-lightBlue/70 border-secondary"> Jam Operasional </th>
                        <th colspan="2" class="border border-2 bg-lightBlue/70 border-secondary"> Fitur </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($cabangs as $cabang) 
                        <tr class="h-10 text-center">
                            <td class="border border-2 border-secondary"> 1 </td>
                            <td class="border border-2 border-secondary"> {{$cabang->nama}} </td>
                            <td class="border border-2 border-secondary"> {{$cabang->lokasi}} </td>
                            <td class="border border-2 border-secondary"> {{$cabang->owner}} </td>
                            <td class="border border-2 border-secondary"> {{$cabang->manager}} </td>
                            <td class="border border-2 border-secondary"> {{$cabang->buka}} - {{$cabang->tutup}} </td>
                            <td class="border border-2 border-secondary w-1/12 bg-yellow">
                                <button class="text-secondary hover:underline"> Edit </button>
                            </td>
                            <td class="border border-2 border-secondary w-1/12 bg-primary">
                                <form action="/cabang-delete" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id_cabang" value={{$cabang->id}}>
                                    <button type="submit" class="text-white hover:underline"> Hapus </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div id="add_cabang" class="flex justify-end pt-12">
                <a href="/cabang/add-cabang">
                    <button class="flex items-center gap-2 text-lg duration-300 bg-secondary text-white px-3 py-1 rounded-lg hover:bg-white hover:text-secondary hover:shadow-xl hover:underline">
                        <x-ri-add-circle-line class="w-7 h-7"/> 
                        Tambahkan 
                    </button>
                </a>
            </div>
        </div>
    </main>
@endsection