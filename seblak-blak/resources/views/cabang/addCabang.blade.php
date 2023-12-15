@extends('layout.layout')

@section('main')
    <main class="md:ml-64 md:w-right 2xs:w-full pt-16 bg-backgroundColor h-screen">
        <div id="add_cabang_container" class="flex flex-col gap-2 px-8 pt-7">
            <div id="add_cabang_headline">
                <h1 class="text-4xl font-bold text-secondary"> Seblak-Blak Cabang </h1>
            </div>

            <form action="/cabang/add-cabang/add" method="post" id="add_cabang_input">
                @csrf
                <div>
                    <label for="add_nama_cabang"> Nama Cabang: </label>
                    <input type="text" name="addNamaCabang" id="add_nama_cabang">
                </div>

                <div>
                    <label for="add_lokasi_cabang"> Lokasi </label>
                    <select name="addLokasiCabang" id="add_lokasi_cabang">
                        <option value=""> --- </option>
                        <option value="Lokasi 1"> Lokasi 1 </option>
                        <option value=""> Lokasi 2 </option>
                        <option value=""> Lokasi 3 </option>
                    </select>
                </div>

                <div>
                    <label for="add_owner_cabang"> Owner </label>
                    <select name="addOwnerCabang" id="add_owner_cabang">
                        <option value=""> --- </option>
                        <option value="owner1"> Owner 1 </option>
                        <option value=""> Owner 2 </option>
                        <option value=""> Owner 3 </option>
                    </select>
                </div>
                
                <div>
                    <label for="add_manager_cabang"> Manager </label>
                    <select name="addManagerCabang" id="add_manager_cabang">
                        <option value=""> --- </option>
                        <option value="manager1"> Manager 1 </option>
                        <option value=""> Manager 2 </option>
                        <option value=""> Manager 3 </option>
                    </select>
                </div>

                <div id="add_cabang_submit" class="flex justify-end pt-12">
                    <button type="submit" class="flex items-center gap-2 text-lg duration-300 bg-secondary text-white px-3 py-1 rounded-lg hover:bg-white hover:text-secondary hover:shadow-xl hover:underline">
                        <x-ri-add-circle-line class="w-7 h-7"/> 
                        Tambahkan 
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection
